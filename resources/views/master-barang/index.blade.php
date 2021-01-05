
@extends('layouts.template')

@section('main')
<div class="container">
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Master Barang</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="home">Dashboard</a></li>
                                <li class="active">Master Barang</li>
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
                                    <!-- <button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah Barang</button> -->
                                    <!-- <a href="/cetak" class="btn btn-primary btn-sm" target="_blank"><i class="fa fa-print"></i>&nbsp;Cetak Barang</a>
                                    <a href="/cetak-barcode" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-barcode"></i>&nbsp;Cetak Barcode</a>
                                   -->
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Kode Barang</th>
                                                <th>Jumlah</th>
                                                <th>Status</th>
                                                
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=1; @endphp
                                        @forelse ($masterBarang as $p)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{ $p->nama }}</td>
                                            <td>{{ $p->kode_barang }}</td>
                                            <td>{{ $p->jumlah }}</td>
                                            <td>

                                            @php 
                                                if($p->jumlah == 0 ){
                                                    echo 'Tidak Tersedia';
                                                }else{
                                                    echo 'Tersedia';
                                                }
                                            @endphp
                                            
                                            
                                           </td>
                                            
                                            
                                        </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Master Barang belum Tersedia.
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