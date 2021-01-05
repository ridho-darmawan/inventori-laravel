<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BarangKeluar;
use App\BarangMasuk;
use App\Ruang;
use App\InventarisBarang;

use RealRashid\SweetAlert\Facades\Alert;
class BarangKeluarController extends Controller
{
   
    public function index()
    {
        $dtBarang = InventarisBarang::all();
        $bm = BarangMasuk::all();
        $ruang = Ruang::all();
        $barangKeluar = BarangKeluar::all();
        return view('barang-keluar.index', compact(['barangKeluar','dtBarang','ruang','bm']));
    }

  
    public function store(Request $request)
    {

        $getBarangId = InventarisBarang::where('kode_inventaris',$request->kode_inventaris)->first();

        if($getBarangId){
            $barang = BarangKeluar::create([
            
                'tanggal_keluar' => $request->tanggal_keluar,
                'kode_inventaris' => $request->kode_inventaris,
                'barang_id' => $getBarangId->barang_id,
                'keterangan' => $request->keterangan,
            ]);

          
        }

       
       
       

        if ($barang) {
            InventarisBarang::where('kode_inventaris',$request->kode_inventaris)->delete();

            // InventarisBarang::where('kode_inventaris',$request->kode_inventaris)->delete();
            
            // $dataBarang = InventarisBarang::where('kode_inventaris',$request->kode_inventaris)->first();
            // $stok = $dataBarang->stok - $request->jumlah;
            // $dataBarang->update(['stok'=>$stok]);
           
            Alert::success('Success', 'Barang Keluar Berhasil Ditambah'); 
            return redirect()->route('barang-keluar.index');

        } else {
            Alert::error('Gagal', 'Barang Keluar Gagal Ditambah'); 
            return redirect()->route('barang-keluar.index');
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
  
    public function update(Request $request, $id)
    {
        $barang = BarangKeluar::findOrFail($id);

        $barang->update([
            'keterangan' => $request->keterangan,
            'tanggal_keluar' => $request->tanggal_keluar,
            
        ]);

        if ($barang) {
            Alert::success('Success', 'barang keluar Berhasil Diedit');
            //redirect dengan pesan sukses
            return redirect()->route('barang-keluar.index');
        } else {
            Alert::error('Gagal', 'barang keluar Gagal Diedit'); 
            //redirect dengan pesan error
            return redirect()->route('barang-keluar.index');
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
        //
    }
}
