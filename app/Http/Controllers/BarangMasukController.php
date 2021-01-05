<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;
use App\Ruang;
use App\BarangMasuk;
use App\MasterBarang;
use App\Kategori;

use RealRashid\SweetAlert\Facades\Alert;
class BarangMasukController extends Controller
{
   
    public function index()
    {
        $kategori = Kategori::all();
        $supplier = Supplier::all();
        $barangMasuk = BarangMasuk::all();
        return view('barang-masuk.index', compact(['barangMasuk','supplier','kategori']));
    }

    
    public function store(Request $request)
    {
        // $kodeBarang = $request->nama.'-'.rand();
        $barang = BarangMasuk::create([
            
            'kode' => $request->kode_barang,
            'nama' => $request->nama,
            'kategori_id' => $request->kategori,
            // 'stok' => $request->jumlah,
            'jumlah' => $request->jumlah,
            'merk' => $request->merk,
            'supplier_id' => $request->supplier,
            'ukuranCC' => $request->ukuran,
            'sumber_dana' => $request->sumber_dana,
            'keterangan' => $request->keterangan,
            'tanggal_masuk' => $request->tanggal_masuk,
            'bahan' => $request->bahan,
            'tahun_pembelian' => $request->tahun_pembelian,
            'no_rangka' => $request->no_rangka,
            'no_mesin' => $request->no_mesin,
            'no_bpkb' => $request->no_bpkb,
            'no_polisi' => $request->no_polisi,
            'anggaran' => $request->anggaran,
          
            
        ]);

        if ($barang) {

            MasterBarang::create([
                'barang_id'=>$barang->id,
                'nama'=>$request->nama,
                'jumlah'=>$request->jumlah,
                'kode_barang'=>$request->kode_barang
            ]);

            Alert::success('Success', 'Barang Masuk Berhasil Ditambah'); 
            return redirect()->route('barang-masuk.index');
        } else {
            Alert::error('Gagal', 'Barang Masuk Gagal Ditambah'); 
            return redirect()->route('barang-masuk.index');
        }
    }

  
    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $barang = BarangMasuk::findOrFail($id);
        // $kodeBarang = $request->nama.'-'.rand();
        $barang->update([
            
           
            'nama' => $request->nama,
            'kategori_id' => $request->kategori,
            // 'stok' => $request->jumlah,
            'jumlah' => $request->jumlah,
            'merk' => $request->merk,
            'supplier_id' => $request->supplier,
            'ukuranCC' => $request->ukuran,
            'sumber_dana' => $request->sumber_dana,
            'keterangan' => $request->keterangan,
            'tanggal_masuk' => $request->tanggal_masuk,
            'bahan' => $request->bahan,
            'tahun_pembelian' => $request->tahun_pembelian,
            'no_rangka' => $request->no_rangka,
            'no_mesin' => $request->no_mesin,
            'no_bpkb' => $request->no_bpkb,
            'no_polisi' => $request->no_polisi,
            'anggaran' => $request->anggaran,
          
            
        ]);

        if ($barang) {
            Alert::success('Success', 'barang masuk Berhasil Diedit');
            //redirect dengan pesan sukses
            return redirect()->route('barang-masuk.index');
        } else {
            Alert::error('Gagal', 'barang masuk Gagal Diedit'); 
            //redirect dengan pesan error
            return redirect()->route('barang-masuk.index');
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
        $barang = BarangMasuk::findOrFail($id);

        $barang->delete();


        if ($barang) {
            Alert::success('Success', 'barang masuk Berhasil Dihapus'); 
            //redirect dengan pesan sukses
            return redirect()->route('barang-masuk.index');
        } else {
            Alert::error('Gagal', 'barang masuk Gagal Dihapus'); 
            //redirect dengan pesan error
            return redirect()->route('barang-masuk.index');
        }
    }
}
