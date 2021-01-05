
@extends('layouts.template')

@section('main')
<div class="container">
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Inventaris Barang</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="home">Dashboard</a></li>
                                <li class="active">Inventaris Barang</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

        <div class="content">
            <div class="container">
            @include('sweetalert::alert')
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <!-- <strong class="card-title">Kategori</strong> -->
                                    <button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah Inventaris Barang</button>
                                    <a href="/cetak-barcode" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-barcode"></i>&nbsp;Cetak All Barcode</a>
                                    @include('inventaris.modalTambah')
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Inventaris</th>
                                                <th>Nama Barang</th>
                                                <th>Lokasi Barang</th>
                                                <th>Status</th>
                                                <!-- <th>Stok Tersedia</th>
                                                <th>Jumlah</th> -->
                                                <th>Aksi</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=1; @endphp
                                        @forelse ($inventaris as $p)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$p->kode_inventaris}}</td>
                                            <td>{{ $p->barangMasuk->nama }}</td>
                                            <td>{{ $p->ruang->nama }}</td>
                                            <td>{{$p->status}}</td>
                                            <!-- <td>{{ $p->stok}}</td>
                                            <td>{{ $p->jumlah }}</td> -->
                                            
                                            <td class="text-center">

                                            <a href="#detail{{$p->id}}" class="badge badge-warning" data-toggle="modal">Detail</a>

                                                @include('inventaris.modalDetail')

                                              
                                                <a href="#hapus{{$p->id}}" class="badge badge-danger" data-toggle="modal">Hapus</a>

                                                @include('inventaris.modalHapus')

                                                <a href="{{url('cetak-barcode-by-barang/'.$p->id)}}" class="badge badge-success" target="_blank">Cetak Barcode</a>
                                            </td>
                                        </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Barang Inventaris belum Tersedia.
                                        </div>
                                        @endforelse
                                    </tbody>
                                    </table>
                                   
                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div>

        <div class="clearfix"></div>


@endsection