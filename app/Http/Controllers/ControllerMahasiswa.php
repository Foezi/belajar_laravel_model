<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class ControllerMahasiswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('Mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mahasiswa.formTambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //cek validasi form
        $request->validate([
            'nim' => 'required|size:10',
            'nama_mhs' => 'required'
        ]);

        //insert dengan cara pertama

        // $mhs = new Mahasiswa;
        // $mhs->nim = $request->nim;
        // $mhs->nama_mhs = $request->nama_mhs;
        // $mhs->ipk = $request->ipk;
        // $mhs->alamat = $request->alamat;
        // $mhs->save();

        // insert denganc cara kedua

        // Mahasiswa::create([
        //     'nim' => $request->nim,
        //     'nama_mhs' => $request->nama_mhs,
        //     'ipk' => $request->ipk,
        //     'alamat' => $request->alamat
        // ]);

        //insert dengan cara ketiga
        Mahasiswa::create($request->all());

        return redirect('/')->with('status','Data ditambahakan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('Mahasiswa.detail' , compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        return $mahasiswa;
    }
}
