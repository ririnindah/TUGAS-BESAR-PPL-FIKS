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
        return view('mahasiswa/update_mhs', ['attribute'=>$attribute]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        //
    }
}
