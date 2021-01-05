<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruang;
use RealRashid\SweetAlert\Facades\Alert;
class RuangController extends Controller
{
   

    public function index()
    {
        $ruang = Ruang::all();
        return view('ruang.index', compact(['ruang']));
    }

   
    public function store(Request $request)
    {
        Alert::success('Success', 'Ruang Berhasil Ditambah'); 

        $this->validate($request, [
           
            'nama'    => 'required',
            'kode_ruangan'    => 'required',
          
        ]);

        $ruang = Ruang::create([
            
            'nama' => $request->nama,
            'kode_ruangan' => $request->kode_ruangan,
            
        ]);

        if ($ruang) {
            Alert::success('Success', 'Ruang Berhasil Ditambah'); 
            return redirect()->route('ruang.index');
        } else {
            Alert::error('Gagal', 'Ruang Gagal Dihapus'); 
            return redirect()->route('ruang.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $this->validate($request, [
           
            'nama'    => 'required',
            'kode_ruangan'    => 'required',
           
        ]);

        
        $ruang = Ruang::findOrFail($id);

        $ruang->update([
            
            'nama' => $request->nama,
            'kode_ruangan' => $request->kode_ruangan,
            
        ]);

        if ($ruang) {
            Alert::success('Success', 'ruang Berhasil Diedit');
            //redirect dengan pesan sukses
            return redirect()->route('ruang.index');
        } else {
            Alert::error('Gagal', 'ruang Gagal Diedit'); 
            //redirect dengan pesan error
            return redirect()->route('ruang.index');
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
        $ruang = Ruang::findOrFail($id);

        $ruang->delete();


        if ($ruang) {
            Alert::success('Success', 'ruang Berhasil Dihapus'); 
            //redirect dengan pesan sukses
            return redirect()->route('ruang.index');
        } else {
            Alert::error('Gagal', 'ruang Gagal Dihapus'); 
            //redirect dengan pesan error
            return redirect()->route('ruang.index');
        }
    }
}
