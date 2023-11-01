<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attribute=Auth::guard('mhs')->user();
        // dd($attribute);
        return view('mahasiswa/dashboard_mhs',['attribute'=>$attribute]);
    }

    public function irs()
    {
        $attribute=Auth::guard('mhs')->user();
        // dd($attribute);
        // return view('mahasiswa/irs_mhs',['attribute'=>$attribute]);
        
    }

    // public function update_mhs()
    // {
    //     $attribute=Auth::guard('mhs')->user();
    //     // dd($attribute);
    //     return view('mahasiswa/update_mhs', ['attribute'=>$attribute]);
    // }

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mahasiswa $mahasiswa)
    {
        $attribute=Auth::guard('mhs')->user();
        // dd($attribute);
        return view('mahasiswa/update_mhs', [
            'mahsiswa' => $mahasiswa,
            'attribute'=>$attribute
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mahasiswa $mahasiswa)
{
    $validateData = $request->validate([
        'foto' => 'image|max:1024', // Hilangkan 'file', karena 'image' sudah termasuk 'file'
        'nama' => 'required',
        'email' => 'required',
        'provinsi' => 'required',
        'kabupaten' => 'required',
        'status' => 'required',
        'fakultas' => 'required',
        'departemen' => 'required',
        'jalur_masuk' => 'required',
        'alamat' => 'required'
    ]);

    // dd($data);

    if ($request->hasFile('foto')) {
        $validateData['foto'] = $request->file('foto')->store('updateImages');
    }

    $attribute=Auth::guard('mhs')->user();
    mahasiswa::where('id', $attribute->id)->update($validateData);

    return redirect()->route('dashboard_mhs');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        //
    }
}
