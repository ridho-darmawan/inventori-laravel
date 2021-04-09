<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inventory</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link href="{{ asset('template/assets/css/cs-skin-elastic.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/lib/datatable/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/css/lib/chosen/chosen.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css"> -->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
@include('sweetalert::alert')
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <li class="menu-title">menu</li>
                    <li>
                        <a href="home"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"  aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Data Master</a>
                        <ul class="sub-menu children dropdown-menu">                                <li><i class="fa fa-puzzle-piece"></i><a href="supplier">&nbsp Supplier</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="kategori">&nbsp Kategori</a></li>

                            <li><i class="fa fa-bars"></i><a href="ruang">&nbsp Ruang</a></li>
                            <li><i class="fa fa-bars"></i><a href="guru">&nbsp Guru</a></li>
                            <li><i class="fa fa-users"></i><a href="user">&nbsp User</a></li>
                            <li><i class="fa fa-list"></i><a href="master-barang">&nbsp Barang</a></li>

                        </ul>
                    </li>

                    <!-- <li>
                        <a href="#"> <i class="menu-icon ti-email"></i>Maintenence Barang</a>
                    </li> -->

                    <li>
                        <a href="inventaris"> <i class="menu-icon ti-email"></i>Inventaris Barang</a>
                    </li>

                    <li>
                        <a href="barang-masuk"> <i class="menu-icon ti-email"></i>Barang Masuk </a>
                    </li>
                    <li>
                        <a href="barang-keluar"> <i class="menu-icon ti-email"></i>Barang Keluar </a>
                    </li>
                    <li>
                        <a href="peminjaman"> <i class="menu-icon ti-email"></i>Peminjaman </a>
                    </li>


                    <!-- <li class="menu-title">Data Master</li>/.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"  aria-expanded="false"> <i class="menu-icon ti-email"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="laporan-barang-masuk">&nbsp Barang Masuk</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="laporan-barang-keluar">&nbsp Barang Keluar</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="laporan-peminjaman">&nbsp Peminjaman</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="laporan-inventaris">&nbsp Inventaris Barang</a></li>


                        </ul>
                    </li>




                </ul>
            </div>
        </nav>
    </aside>

    <div id="right-panel" class="right-panel">

        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard"><img src="{{asset('template/images/logopgri.jpg')}}" alt="Logo" width="40px"></a>
                    <a class="navbar-brand hidden" href="dashboard"><img src="{{asset('template/images/logo2.png')}}" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">


                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('template/images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu" aria-labelledby="navbarDropdown">
                                <a
                                    class="nav-link"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"
                                >
                                <i class="fa fa-power-off"></i>{{ __('Logout') }}</a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>


                    </div>

                </div>
            </div>
        </header>

        <!-- <div class="content"> -->
            @yield('main')
        <!-- </div> -->


        <footer class="site-footer">
            <!-- <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div> -->
        </footer>

    </div>

    <script src="{{ asset('template/assets/js/widgets.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{ asset('template/assets/js/main.js') }}"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="{{ asset('template/assets/js/init/weather-init.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>

    <script src="{{ asset('template/assets/js/init/fullcalendar-init.js') }}"></script>

    <script src="{{ asset('template/assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('template/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/init/datatables-init.js') }}"></script>
    <script src="{{ asset('template/assets/js/lib/chosen/chosen.jquery.min.js') }}"></script>

    <!-- <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();

      } );
  </script>

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "maaf, data tidak tersedia!",
            width: "100%"
        });
    });
</script>



</body>
</html>
