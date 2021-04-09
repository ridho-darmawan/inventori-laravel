
@extends('layouts.template')

@section('main')


       <div class="container">
   <br>
       <h2>Dashborad</h2>
       <br>
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                
                <!-- /Widgets -->
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-1">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                    <h3 class="mb-0 fw-r">
                                        <span class="currency float-left mr-1"></span>
                                        <span class="count">{{$supplier}}</span>
                                    </h3>
                                    <p class="text-light mt-1 m-0">Supplier</p>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <i class="icon fade-5 icon-lg pe-7s-cart"></i>
                                </div><!-- /.card-right -->

                            </div>

                        </div>
                    </div>
                    <!--/.col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-6">
                            <div class="card-body">
                            <div class="card-left pt-1 float-left">
                                    <h3 class="mb-0 fw-r">
                                        <span class="count">{{$kategori}}</span>
                                    </h3>
                                    <p class="text-light mt-1 m-0">Kategori</p>
                                </div>

                                <div class="card-right float-right text-right">
                                    <div id="flotBar1" class="flotBar1"></div>
                                </div><!-- /.card-right -->

                            </div>

                        </div>
                    </div>
                    <!--/.col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-3">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                    <h3 class="mb-0 fw-r">
                                        <span class="count">{{$ruang}}</span>
                                    </h3>
                                    <p class="text-light mt-1 m-0">Ruang</p>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <i class="icon fade-5 icon-lg pe-7s-users"></i>
                                </div><!-- /.card-right -->

                            </div>

                        </div>
                    </div>
                    <!--/.col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-2">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                    <h3 class="mb-0 fw-r">
                                        <span class="count">{{$user}}</span>
                                    </h3>
                                    <p class="text-light mt-1 m-0">Users</p>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <div id="flotLine1" class="flotLine1"></div>
                                </div><!-- /.card-right -->

                            </div>

                        </div>
                    </div>
                    <!--/.col-->

    
                </div><!-- .row -->

                
                <div class="row">

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-6">
                            <div class="card-body">
                            <div class="card-left pt-1 float-left">
                                    <h3 class="mb-0 fw-r">
                                        <span class="count">{{$bl}}</span>
                                    </h3>
                                    <p class="text-light mt-1 m-0">Barang Keluar</p>
                                </div>

                                <div class="card-right float-right text-right">
                                    <div id="flotBar1" class="flotBar1"></div>
                                </div><!-- /.card-right -->

                            </div>

                        </div>
                    </div>
                    <!--/.col-->


                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-1">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                    <h3 class="mb-0 fw-r">
                                        <span class="currency float-left mr-1"></span>
                                        <span class="count">{{$bm}}</span>
                                    </h3>
                                    <p class="text-light mt-1 m-0">Barang Masuk</p>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <i class="icon fade-5 icon-lg pe-7s-cart"></i>
                                </div><!-- /.card-right -->

                            </div>

                        </div>
                    </div>
                    <!--/.col-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-2">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                    <h3 class="mb-0 fw-r">
                                        <span class="count">{{$kate}}</span>
                                    </h3>
                                    <p class="text-light mt-1 m-0">Kategori</p>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <div id="flotLine1" class="flotLine1"></div>
                                </div><!-- /.card-right -->

                            </div>

                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-3">
                            <div class="card-body">
                                <div class="card-left pt-1 float-left">
                                    <h3 class="mb-0 fw-r">
                                        <span class="count">{{$pinjam}}</span>
                                    </h3>
                                    <p class="text-light mt-1 m-0">Peminjaman</p>
                                </div><!-- /.card-left -->

                                <div class="card-right float-right text-right">
                                    <i class="icon fade-5 icon-lg pe-7s-users"></i>
                                </div><!-- /.card-right -->

                            </div>

                        </div>
                    </div>
                    <!--/.col-->
                    <!--/.col-->

    
                </div><!-- .row -->
            </div>
        
    
       
</div>
@endsection

