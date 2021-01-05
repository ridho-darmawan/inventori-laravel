<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use RealRashid\SweetAlert\Facades\Alert;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact(['kategori']));
    }

  
    public function store(Request $request)
    {
        
        $this->validate($request, [
           
            'nama'    => 'required',
          
        ]);

        $kategori = Kategori::create([
            
            'nama' => $request->nama,
            
        ]);

        if ($kategori) {
            Alert::success('Success', 'Kategori Berhasil Ditambah'); 
            return redirect()->route('kategori.index');
        } else {
            Alert::error('Gagal', 'Kategori Berhasil Ditambah'); 
            return redirect()->route('kategori.index');
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
            
        ]);

        $kategori = Kategori::findOrFail($id);

        $kategori->update([
            
            'nama' => $request->nama,
            
        ]);

        if ($kategori) {
            Alert::success('Success', 'Kategori Berhasil Diedit');
            //redirect dengan pesan sukses
            return redirect()->route('kategori.index');
        } else {
            Alert::error('Gagal', 'Kategori Gagal Diedit'); 
            //redirect dengan pesan error
            return redirect()->route('kategori.index');
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
        
        $kategori = Kategori::findOrFail($id);

        $kategori->delete();


        if ($kategori) {
            Alert::success('Success', 'Kategori Berhasil Dihapus'); 
            //redirect dengan pesan sukses
            return redirect()->route('kategori.index');
        } else {
            Alert::error('Gagal', 'Kategori Gagal Dihapus'); 
            //redirect dengan pesan error
            return redirect()->route('kategori.index');
        }
    }
}
