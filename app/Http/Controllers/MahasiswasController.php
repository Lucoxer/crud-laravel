<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahdata()
    {
        return view('mahasiswa.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambahmhs(Request $request)
    {
        // dd($request->all()); -> Bukti kalau berhasil input
        $mahasiswa = Mahasiswa::create([
            'NIM' => $request->NIM,
            'nama_lengkap' => $request->nama_lengkap,
            'kota_asal' => $request->kota_asal,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_ortu' => $request->nama_ortu,
            'alamat_ortu' => $request->alamat_ortu,
            'kode_pos' => $request->kode_pos,
            'no_telp' => $request->no_telp,
            'status_mhs' => $request->status_mhs,
        ]);
        return view ('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */

    // Detail tidak dipakai
    public function show(Mahasiswa $mahasiswa)
    {
        #return $mahasiswa;
        return view('mahasiswa.detail', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     * 
     */

    //EDIT = TAMPILKAN FORM EDIT DATA
    public function edit(Mahasiswa $mahasiswa, $NIM)
    {
        $mahasiswa = Mahasiswa::find($NIM);
        //dd($mahasiswa);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */

     //UPDATE = PROCCESS EDIT DATA
    public function update(Request $request, Mahasiswa $mahasiswa, $NIM)
    {
        $mahasiswa = Mahasiswa::find($NIM);
        $mahasiswa->update($request->all());
        // dd($request->all());
        return view('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */

    //DESTROY KURNAG TERLALU PAHAM PEMAKAIAN
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }

    public function delete($NIM)
    {
        $mahasiswa = Mahasiswa::find($NIM);
        $mahasiswa->delete();
        return redirect()->to('/mahasiswa')->with('success','Data berhasil ke hapus');}
}
