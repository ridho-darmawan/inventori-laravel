<?php

namespace App\Http\Controllers;
use App\BarangMasuk;
use App\BarangKeluar;
use App\Peminjaman;
use App\Ruang;
use App\InventarisBarang;
use PDF;
use Illuminate\Http\Request;

class LaporanController extends Controller
{

    public function laporanBarangMasuk()
    {
        return view('laporan.barangMasuk');
    }

    public function laporanBarangKeluar()
    {
        return view('laporan.barangKeluar');
    }

    public function laporanPeminjaman()
    {
        return view('laporan.peminjaman');
    }

    public function laporanInventaris()
    {
        $ruang = Ruang::all();
        return view('laporan.inventaris', compact(['ruang']));
    }

    public function laporanInventarisByRuang(Request $request)
    {
        $ruang = $request->ruangan;
        $inventaris = InventarisBarang::where('ruang_id','=', $ruang)->get();

        $cetak = PDF::loadview('laporan.cetakInventaris',['inventaris'=>$inventaris]);
        // return $cetak->stream();
        return $cetak->download('inventaris-barang.pdf');
        // return $cetak->stream();
    }

    public function laporanAllInventaris()
    {
        $inventaris = InventarisBarang::all();


        $cetak = PDF::loadview('laporan.cetakInventaris',['inventaris'=>$inventaris]);
        // return $cetak->stream();
        return $cetak->download('inventaris-barang.pdf');
        // return $cetak->stream();
    }

    public function cetakAllBarangMasuk()
    {
        $barangMasuk = BarangMasuk::all();

        // $html = view('laporan.cetakBarangMasuk',['barang'=>$barangMasuk])->render();
        // $options = new Options();
        // $options->setIsRemoteEnabled(true);
        // $dompdf = new Dompdf($options);
        // $dompdf->loadHtml($html);
        // $dompdf->output();
        // $html = view('laporan.cetakBarangMasuk',['barang'=>$barangMasuk])->render();
        // $pdf->loadHTML('<h1>Test</h1>');
        $cetak = PDF::loadview('laporan.cetakBarangMasuk',['barang'=>$barangMasuk]);
        // $cetak = PDF::setOptions(['isRemoteEnabled' => true])->loadHTML($html);
        // return $pdf->download('laporan-pegawai-pdf');
        // return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadHTML($html)->stream();
        return $cetak->stream();

        // return view('laporan.cetakBarangMasuk',['barang'=>$barangMasuk]);
    }

    public function cetakBarangMasukByYear(Request $request)
    {
        $tahun = $request->tahun;
        $barangMasuk = BarangMasuk::whereYear('tanggal_masuk','=', $tahun)->get();

        $cetak = PDF::setOptions(['isRemoteEnabled' => true])->loadview('laporan.cetakBarangMasuk',['barang'=>$barangMasuk]);
        return $cetak->download('barang-masuk-'.$tahun.'.pdf');
        // return $cetak->stream();
    }


    public function cetakAllBarangKeluar()
    {
        $barangKeluar = BarangKeluar::all();

        $cetak = PDF::loadview('laporan.cetakBarangKeluar',['barang'=>$barangKeluar]);
        // return $pdf->download('laporan-pegawai-pdf');
        return $cetak->stream();
    }

    public function cetakBarangKeluarByYear(Request $request)
    {
        $tahun = $request->tahun;
        $barangKeluar = BarangKeluar::whereYear('tanggal_keluar','=', $tahun)->get();

        $cetak = PDF::loadview('laporan.cetakBarangKeluar',['barang'=>$barangKeluar]);
        return $cetak->download('barang-keluar-'.$tahun.'.pdf');
        // return $cetak->stream();
    }

    public function cetakAllPeminjaman()
    {
        $peminjaman = Peminjaman::all();

        $cetak = PDF::loadview('laporan.cetakPeminjaman',['peminjaman'=>$peminjaman]);
        // return $pdf->download('laporan-pegawai-pdf');
        return $cetak->stream();
    }

    public function cetakPeminjamanByDiPinjam()
    {
        $peminjaman = Peminjaman::where('status','Dipinjam')->get();

        $cetak = PDF::loadview('laporan.cetakPeminjaman',['peminjaman'=>$peminjaman]);
        // return $pdf->download('laporan-pegawai-pdf');
        return $cetak->stream();
    }
}
