
@extends('layouts.template')

@section('main')
<!-- 
<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Kategori</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="content">
            <div class="container">
            @include('sweetalert::alert')
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <!-- <strong class="card-title">Kategori</strong> -->
                                    <button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah Barang</button>
                                    <a href="/cetak" class="btn btn-primary btn-sm" target="_blank"><i class="fa fa-print"></i>&nbsp;Cetak Barang</a>
                                    <a href="/cetak-barcode" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-barcode"></i>&nbsp;Cetak Barcode</a>
                                    @include('barang.modalTambah')
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Barcode</th>
                                                <th>Kode Barang</th>
                                                <th>Nama</th>
                                                <th>Lokasi</th>
                                               
                                                <th>Aksi</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=1; @endphp
                                        @forelse ($barang as $p)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>

                                            <!-- {{$p->nama}}<br> -->
                                            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG(
                                            $p->kode, 'C39')}}" height="60" width="180">
                                            
                                            
                                            <!-- {!! \DNS1D::getBarcodeHTML($p->kode, 'C39')  !!} -->
                                            </td>
                                            
                                            
                                            <td>{{ $p->kode }}</td>
                                            <td>{{ $p->nama }}</td>
                                            <td>{{ $p->ruang->nama }}</td>
                                            
                                            <td class="text-center">

                                            <a href="#detail{{$p->id}}" class="badge badge-warning" data-toggle="modal">Detail</a>

                                                @include('barang.modalDetail')

                                            

                                                <a href="#edit{{$p->id}}" class="badge badge-primary" data-toggle="modal">Edit</a>

                                                @include('barang.modalEdit')
                                            
                                                <a href="#hapus{{$p->id}}" class="badge badge-danger" data-toggle="modal">Hapus</a>

                                                @include('barang.modalHapus')
                                            </td>
                                        </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Barang belum Tersedia.
                                        </div>
                                        @endforelse
                                    </tbody>
                                    </table>
                                    {{$barang->links()}}
                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div>

        <div class="clearfix"></div>


@endsection