
@extends('layouts.template')

@section('main')
<div class="container">
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Barang Masuk</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="home">Dashboard</a></li>
                                <li class="active">Barang Masuk</li>
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
                                    <button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah Barang Masuk</button>
                                    @include('barang-masuk.modalTambah')
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Jumlah</th>
                                                <!-- <th>Stok</th> -->
                                                <th>Total Anggaran</th>
                                                <th>Sumber Dana</th>
                                               
                                                <th>Aksi</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=1; @endphp
                                        @forelse ($barangMasuk as $p)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{ $p->nama }}</td>
                                            <td>{{ date('d-m-Y', strtotime($p->tanggal_masuk)) }}</td>
                                            <td>{{ $p->jumlah }}</td>
                                            <!-- <td>{{ $p->stok }}</td> -->
                                            <td>Rp. {{ number_format($p->anggaran,0) }}</td>
                                            <td>{{ $p->sumber_dana }}</td>
                                            
                                            <td class="text-center">

                                            <a href="#detail{{$p->id}}" class="badge badge-warning" data-toggle="modal">Detail</a>

                                                @include('barang-masuk.modalDetail')

                                            

                                                <a href="#edit{{$p->id}}" class="badge badge-primary" data-toggle="modal">Edit</a>

                                                @include('barang-masuk.modalEdit')
                                            
                                                <a href="#hapus{{$p->id}}" class="badge badge-danger" data-toggle="modal">Hapus</a>

                                                @include('barang-masuk.modalHapus')
                                            </td>
                                        </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Barang Masuk belum Tersedia.
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