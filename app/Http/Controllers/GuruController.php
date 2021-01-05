<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use RealRashid\SweetAlert\Facades\Alert;

class GuruController extends Controller
{
    
    public function index()
    {
        $guru = Guru::all();
        return view('guru.index', compact(['guru']));
    }

    
    public function store(Request $request)
    {
        $guru = Guru::create([
            
            'nama' => $request->nama,
            'nip' => $request->nip,
            
        ]);

        if ($guru) {
            Alert::success('Success', 'Guru Berhasil Ditambah'); 
            return redirect()->route('guru.index');
        } else {
            Alert::error('Gagal', 'Guru Berhasil Ditambah'); 
            return redirect()->route('guru.index');
        }
    }

   
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $guru->update([
            
            
            'nama' => $request->nama,
            'nip' => $request->nip,
        ]);

        if ($guru) {
            Alert::success('Success', 'Guru Berhasil Diedit');
            //redirect dengan pesan sukses
            return redirect()->route('guru.index');
        } else {
            Alert::error('Gagal', 'Guru Gagal Diedit'); 
            //redirect dengan pesan error
            return redirect()->route('guru.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        $guru->delete();


        if ($guru) {
            Alert::success('Success', 'Guru Berhasil Dihapus'); 
            //redirect dengan pesan sukses
            return redirect()->route('guru.index');
        } else {
            Alert::error('Gagal', 'Guru Gagal Dihapus'); 
            //redirect dengan pesan error
            return redirect()->route('guru.index');
        }
    }
}
