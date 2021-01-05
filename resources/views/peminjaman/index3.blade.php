
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
                                    <a class="btn btn-success btn-sm" href="javascript:void(0)" id="createPeminjaman"> Tambah Data Peminjaman</a>
                                   
                                </div>
                                <div class="card-body">
                                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Penanggung Jawab</th>
                                                <th>Tanggal Pinjam</th>
                                                <th>Jumlah</th>
                                                <th>Lokasi</th>
                                                <th>Tgl Kembali</th>
                                                <th>Status</th>
                                               
                                                <th>Aksi</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                       
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

        <div class="modal fade" id="ajaxModel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modelHeading"></h4>
                    </div>
                    <div class="modal-body">
                        <form id="peminjamanForm" name="peminjamanForm" class="form-horizontal">
                        <input type="hidden" name="peminjaman_id" id="peminjaman_id">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                                </div>
                            </div>
            
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Details</label>
                                <div class="col-sm-12">
                                    <textarea id="detail" name="detail" required="" placeholder="Enter Details" class="form-control"></textarea>
                                </div>
                            </div>
            
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                            </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(function () {
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
    
                var table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('peminjaman.index') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'name', name: 'name'},
                        {data: 'detail', name: 'detail'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
     
                $('#createPeminjaman').click(function () {
                    $('#saveBtn').val("create-peminjaman");
                    $('#peminjaman_id').val('');
                    $('#peminjamanForm').trigger("reset");
                    $('#modelHeading').html("Create New Peminjaman");
                    $('#ajaxModel').modal('show');
                });
                
                $('body').on('click', '.editProduct', function () {
                var product_id = $(this).data('id');
                $.get("{{ route('peminjaman.index') }}" +'/' + product_id +'/edit', function (data) {
                    $('#modelHeading').html("Edit Product");
                    $('#saveBtn').val("edit-user");
                    $('#ajaxModel').modal('show');
                    $('#product_id').val(data.id);
                    $('#name').val(data.name);
                    $('#detail').val(data.detail);
                })
            });
                
                $('#saveBtn').click(function (e) {
                    e.preventDefault();
                    $(this).html('Sending..');
                
                    $.ajax({
                    data: $('#productForm').serialize(),
                    url: "{{ route('peminjaman.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                
                        $('#productForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        table.draw();
                    
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                });
                });
                
                $('body').on('click', '.deleteProduct', function () {
                
                    var product_id = $(this).data("id");
                    confirm("Are You sure want to delete !");
                
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('peminjaman.store') }}"+'/'+product_id,
                        success: function (data) {
                            table.draw();
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                });
                
            });
</script>


@endsection