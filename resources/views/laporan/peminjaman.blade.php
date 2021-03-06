
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
                                    <h4>Cetak Laporan Peminjaman Barang </h4>
                                </div>
                                <div class="card-body">
                                    <div class="default-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active pl-5 pr-5" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Semua Data</a>
                                                <a class="nav-item nav-link pl-5 pr-5" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sedang Dipinjam</a>
                                                
                                            </div>
                                        </nav>
                                        <div class="tab-content pl-3 pt-5" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <a href="/cetak-all-peminjaman" class="btn btn-primary btn-sm" target="_blank"><i class="fa fa-print"></i>&nbsp;Cetak Data</a>
                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                            <a href="/cetak-peminjaman-by-dipinjam" class="btn btn-primary btn-sm" target="_blank"><i class="fa fa-print"></i>&nbsp;Cetak Data</a>
                                            </div>
                                           
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div>

        <div class="clearfix"></div>


@endsection