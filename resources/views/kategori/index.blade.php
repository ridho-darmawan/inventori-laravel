
@extends('layouts.template')

@section('main')
<div class="container">
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Kategori</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="home">Dashboard</a></li>
                                <li class="active">Kategori</li>
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
                                    <button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah Kategori</button>
                                    @include('kategori.modalTambah')
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Aksi</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=1; @endphp
                                        @forelse ($kategori as $p)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            
                                            
                                            <td>{{ $p->nama }}</td>
                                            <td class="text-center">

                                            

                                                <a href="#edit{{$p->id}}" class="badge badge-primary" data-toggle="modal">Edit</a>

                                                @include('kategori.modalEdit')
                                            
                                                <a href="#hapus{{$p->id}}" class="badge badge-danger" data-toggle="modal">Hapus</a>

                                                @include('kategori.modalHapus')
                                            </td>
                                        </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data kategori belum Tersedia.
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