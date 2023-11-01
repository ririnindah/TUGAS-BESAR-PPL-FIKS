<?php

namespace App\Http\Controllers;

use App\Models\operator;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\LazyCollection;
use App\Http\Requests\StoreoperatorRequest;
use App\Http\Requests\UpdateoperatorRequest;
use Illuminate\Http\Request;


class OperatorController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attribute=Auth::guard('opt')->user();
        // dd($attribute);
        return view('operator/dashboard_opt',['attribute'=>$attribute]);
    }
    public function generate()
    {
        return view('operator.generate');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // ddd($request);
        // return $request->file('file')->store('ImportData');

        $validateData = $request->validate([
            'file' => 'required|mimes:csv|max:2048',
        ]);

        ddd($validateData);

        if ($request->hasFile('file')) {
            $validateData['file'] = $request->file('file')->store('ImportDataMhs');
        }

        $attribute=Auth::guard('opt')->user();
        return redirect()->route('generate');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }

    public function importCSV(){

        DB::disableQueryLog();

        LazyCollection::make(function(Request $request){
            $handle = fopen(public_path('storage/ImportData/'.$request), 'r');
            while(($line = fgetcsv($handle, 4096)) !== false){
                $dataString = implode('; ', $line);
                $row =  explode(';', $dataString);
                yield $row;
            }

            fclose($handle);
        })
        ->skip(1)
        ->chunk(1000)
        ->each(function(LazyCollection $chunk){
            $records = $chunk->map(function($row){
                return [
                    'email'=>$row[1],
                    'password'=>$row[2],
                    'role'=>$row[3],
                    'nim'=>$row[4],
                    'nama'=>$row[5],
                    'status'=>$row[6],
                    'departemen'=>$row[7],
                    'fakultas'=>$row[8],
                    'angkatan'=>$row[9],
                    'jalur_masuk'=>$row[10],
                    'provinsi'=>$row[11],
                    'kabupaten'=>$row[12],
                    'alamat'=>$row[13],
                    'foto'=>$row[14],
                    'dsn_id'=>$row[15],
                ];
            })->toArray();

            DB::table('mahasiswas')->insert($records);
        });
    }
}
