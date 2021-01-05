<?php

namespace App\Http\Controllers;

use App\Supplier;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    
    public function index()
    {
        $supplier = Supplier::all();
        return view('supplier.index', compact(['supplier']));
    }

   
   
    public function store(Request $request)
    {
        $this->validate($request, [
           
            'nama'    => 'required',
            'alamat'    => 'required',
            'telepon'    => 'required',
          
        ]);

        $supplier = Supplier::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            
        ]);

        if ($supplier) {
            Alert::success('Success', 'Supplier Berhasil Ditambah'); 
            return redirect()->route('supplier.index');
        } else {
            Alert::error('Gagal', 'Supplier Gagal Ditambah'); 
            return redirect()->route('supplier.index');
        }
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request, [
           
            'nama'    => 'required',
            'alamat'    => 'required',
            'telepon'    => 'required',
            
        ]);

        
        $supplier = Supplier::findOrFail($id);

        $supplier->update([
            
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            
        ]);

        if ($supplier) {
            Alert::success('Success', 'supplier Berhasil Diedit');
            //redirect dengan pesan sukses
            return redirect()->route('supplier.index');
        } else {
            Alert::error('Gagal', 'supplier Gagal Diedit'); 
            //redirect dengan pesan error
            return redirect()->route('supplier.index');
        }

       
    }

  
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);

        $supplier->delete();


        if ($supplier) {
            Alert::success('Success', 'supplier Berhasil Dihapus'); 
            //redirect dengan pesan sukses
            return redirect()->route('supplier.index');
        } else {
            Alert::error('Gagal', 'supplier Gagal Dihapus'); 
            //redirect dengan pesan error
            return redirect()->route('supplier.index');
        }
    
    }


    public function cetak()
    {
        $supplier = Supplier::all();

        $cetak = PDF::loadview('supplier.cetak',['supplier'=>$supplier]);
        // return $pdf->download('laporan-pegawai-pdf');
        return $cetak->stream();
        
	
    }
    
}
