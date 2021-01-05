
@extends('layouts.template')

@section('main')
<div class="container">
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Barang Keluar</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="home">Dashboard</a></li>
                                <li class="active">Barang Keluar</li>
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
                                    <button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah Barang Keluar</button>
                                    @include('barang-keluar.modalTambah')
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Inventaris Barang</th>
                                                <th>Nama Barang</th>
                                                <!-- <th>Jumlah Keluar</th> -->
                                                <th>Tanggal Keluar</th>
                                               
                                                <th>Aksi</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=1; @endphp
                                        @forelse ($barangKeluar as $bk)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{ $bk->kode_inventaris }}</td>
                                            <td>{{$bk->barangMasuk->nama}}</td>
                                            
                                            <td>{{  date('d-m-Y', strtotime($bk->tanggal_keluar))  }}</td>
                                            
                                            <td class="text-center">

                                            <a href="#detail{{$bk->id}}" class="badge badge-warning" data-toggle="modal">Detail</a>

                                                @include('barang-keluar.modalDetail')

                                            

                                                <a href="#edit{{$bk->id}}" class="badge badge-primary" data-toggle="modal">Edit</a>

                                                @include('barang-keluar.modalEdit')
                                            
                                            </td>
                                        </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Barang Keluar belum Tersedia.
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