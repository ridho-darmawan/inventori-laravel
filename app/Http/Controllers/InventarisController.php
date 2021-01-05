<?php

namespace App\Http\Controllers;
use App\InventarisBarang;
use App\Ruang;
use App\BarangMasuk;
use App\MasterBarang;
use Illuminate\Http\Request;
use PDF;
use DNS1D;
use DNS2D;
use RealRashid\SweetAlert\Facades\Alert;


class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruang= Ruang::all();
        $barangMasuk = BarangMasuk::all();
        $inventaris = InventarisBarang::all();
        return view ('inventaris.index', compact(['inventaris','ruang','barangMasuk']));
    }

   
    public function store(Request $request)
    {
        $barangMasuk = BarangMasuk::where('id',$request->nama)->first();
        $ruangan = Ruang::where('id',$request->lokasi)->first();

        for ($i=1; $i<= $request->jumlah; $i++){
            $inventaris = InventarisBarang::create([
                'kode_inventaris' => 'inv-'.$barangMasuk->kode.'-'.$ruangan->kode_ruangan.'-'.rand(0,100),
                'barang_id' => $request->nama,
                'ruang_id' => $request->lokasi,
                // 'stok' => $request->jumlah,
                // 'jumlah' => $request->jumlah,
            ]);
        }

       
        
        
        if ($inventaris) {

            $masterBarang = MasterBarang::where('barang_id',$request->nama)->first();
            $stok = $masterBarang->jumlah - $request->jumlah;

            MasterBarang::where('barang_id',$request->nama)->update(['jumlah'=>$stok]);
            Alert::success('Success', 'Inventaris Berhasil Ditambah'); 
            return redirect()->route('inventaris.index');
        } else {
            Alert::error('Gagal', 'inventaris Gagal Ditambah'); 
            return redirect()->route('inventaris.index');
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

    
    public function update(Request $request, $id)
    {
        $inventaris = InventarisBarang::findOrFail($id);

        $inventaris->update([
            
            'barang_id' => $request->nama,
            'ruang_id' => $request->lokasi,
            // 'stok' => $request->jumlah,
            // 'jumlah' => $request->jumlah,
            'lokasi' => $request->lokasi,
            
        ]);

        if ($inventaris) {
            Alert::success('Success', 'inventaris barang Berhasil Diedit');
            //redirect dengan pesan sukses
            return redirect()->route('inventaris.index');
        } else {
            Alert::error('Gagal', 'inventaris barang Gagal Diedit'); 
            //redirect dengan pesan error
            return redirect()->route('inventaris.index');
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
        $inventaris = InventarisBarang::findOrFail($id);

        $inventaris->delete();


        if ($inventaris) {
            Alert::success('Success', 'Data Inventaris Berhasil Dihapus'); 
            //redirect dengan pesan sukses
            return redirect()->route('inventaris.index');
        } else {
            Alert::error('Gagal', 'Data Inventaris Gagal Dihapus'); 
            //redirect dengan pesan error
            return redirect()->route('inventaris.index');
        }
    }

    public function cetakBarcode()
    {
        $inventaris = InventarisBarang::all();

      
        $cetak = PDF::loadview('inventaris.cetakBarcode',['inventaris'=>$inventaris]);
       
        // return $pdf->download('laporan-pegawai-pdf');
        return $cetak->stream();
    }
    
    public function cetakBarcodeByBarang($id)
    {
        $inventaris = InventarisBarang::find($id);

        $cetak = PDF::loadview('inventaris.cetakBarcodeByBarang',['inventaris'=>$inventaris]);
       
        // return $pdf->download('laporan-pegawai-pdf');
        return $cetak->stream();
    }
}
