<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\Ruang;
use App\Kategori;
use App\User;
use App\BarangMasuk;
use App\BarangKeluar;
use App\Peminjaman;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $supplier = Supplier::count();
        $kategori = Kategori::count();
        $ruang = Ruang::count();
        $user = User::count();
        $bm = BarangMasuk::count();
        $bl = BarangKeluar::count();
        $kate = Kategori::count();
        $pinjam = Peminjaman::where('status','=','Dipinjam')->count();
        // $guru = Guru::count();
        return view('home', compact(['user','supplier','kategori','ruang','bl','bm','pinjam','kate']));
    }
}
