
@extends('layouts.template')

@section('main')
<div class="container">
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Supplier</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="home">Dashboard</a></li>
                                <li class="active">Supplier</li>
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
                                    <button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah Supplier</button>
                                    <a href="/cetak" class="btn btn-primary btn-sm" target="_blank"><i class="fa fa-print"></i>&nbsp;CETAK SUPPLIER</a>
		
                                    
                                    @include('supplier.modalTambah')
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Telepon</th>
                                                <th>Aksi</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=1; @endphp
                                        @forelse ($supplier as $p)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            
                                            
                                            <td>{{ $p->nama }}</td>
                                            <td>{{ $p->alamat }}</td>
                                            <td>{{ $p->telepon }}</td>
                                            <td class="text-center">

                                            

                                                <a href="#edit{{$p->id}}" class="badge badge-primary" data-toggle="modal">Edit</a>

                                                @include('supplier.modalEdit')
                                            
                                                <a href="#hapus{{$p->id}}" class="badge badge-danger" data-toggle="modal">Hapus</a>

                                                @include('supplier.modalHapus')
                                            </td>
                                        </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data supplier belum Tersedia.
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