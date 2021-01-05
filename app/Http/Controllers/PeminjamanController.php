<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Peminjaman;
use App\Ruang;
use App\BarangMasuk;
use App\Guru;
use App\InventarisBarang;
use RealRashid\SweetAlert\Facades\Alert;
use DataTables;

class PeminjamanController extends Controller
{
    
    public function index(Request $request)
    {

        // $barang = BarangMasuk::all();
        $inventaris = InventarisBarang::all();
        $ruang = Ruang::all();
        $guru = Guru::all();
        // $dtBarang = Barang::find($id);
        $peminjaman = Peminjaman::all();
        return view('peminjaman.index', compact(['ruang','peminjaman','inventaris','guru']));


    }

    public function getDataBarangByRuang($ruang_id)
    {
        $getData = InventarisBarang::with('barangMasuk:id,nama')->where('ruang_id',$ruang_id)->get();
        
        return response()->json($getData);
    }

    public function statusPeminjaman($id)
    {

        $getDataPeminjaman = Peminjaman::find($id);

        $status = Peminjaman::update([
            'status'=>'Kembali',
            'tanggal_kembali'=>date('Y-m-d H:i:s'),
        ]);

        if($status){
            
            $getDataInventaris = InventarisBarang::where('barang_id',$getDataPeminjaman->barang_id)->where('ruang_id', $getDataPeminjaman->ruang_id)->first();
            $stok = $getDataPeminjaman->jumlah + $getDataInventaris->stok;
            $updateStokInventaris = InventarisBarang::update(['stok',$stok]);

            Alert::success('Success', 'Berhasil Melakukan Pengembalian'); 
            return redirect()->route('peminjaman.index');
        
        } else {
            Alert::error('Gagal', 'Gagal Melakukan Pengembalian'); 
            return redirect()->route('peminjaman.index');
        }
    }

   
    public function store(Request $request)
    {
        $peminjaman = Peminjaman::create([
            
            'tanggal_pinjam' => date('Y-m-d H:i:s'),
            'inventaris_id' => $request->kode_inventaris,
            // 'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
            'pj' => $request->pj,
            'pemberi' => $request->pemberi,
          
            
        ]);

        if ($peminjaman) {

            $dataInventaris = InventarisBarang::where('kode_inventaris',$request->kode_inventaris)->first();
           
            if($dataInventaris != 'null'){
                $dataInventaris->update(['status'=>'Dipinjam']);
            }
            
           
            Alert::success('Success', 'Berhasil Melakukan Peminjaman'); 
            return redirect()->route('peminjaman.index');
        } else {
            Alert::error('Gagal', 'Gagal Melakukan Peminjaman'); 
            return redirect()->route('peminjaman.index');
        }
    }

   
   
    public function update(Request $request, $id)
    {
        $getDataPeminjaman = Peminjaman::find($id);

        $getDataPeminjaman->update([
            'status'=>$request->status,
            'penerima_barang'=>$request->pb,
            'tanggal_kembali'=>date('Y-m-d H:i:s'),
        ]);

        if($getDataPeminjaman){
            
            $getDataInventaris = InventarisBarang::where('kode_inventaris',$getDataPeminjaman->inventaris_id)->first();
           
            $getDataInventaris->update(['status'=>'Tersedia']);

            // Alert::success('Success', 'Berhasil Melakukan Pengembalian'); 
            Alert::success('Success', 'Berhasil Melakukan Pengembalian'); 
            return redirect()->route('peminjaman.index');
        
        } else {
            Alert::error('Gagal', 'Gagal Melakukan Pengembalian'); 
            return redirect()->route('peminjaman.index');
        }
    }

   
    public function destroy($id)
    {
        //
    }
}
