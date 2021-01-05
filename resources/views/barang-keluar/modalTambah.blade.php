<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Tambah Barang Keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{ route ('barang-keluar.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf    

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="barang" class=" form-control-label">Kode Inventaris Barang</label>
                        </div>
                        <div class="col-12 col-md-9">
                        <input type="text"  name="kode_inventaris" class="form-control" required autocomplete="off">
                    </div>
                </div>


                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="tanggal_keluar" class=" form-control-label">Tanggal Keluar</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="tanggal_keluar" name="tanggal_keluar" placeholder="tanggal_keluar" class="form-control" required autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                    <!-- <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="jumlah" class=" form-control-label">Jumlah</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="jumlah" name="jumlah" placeholder="jumlah" class="form-control" required autocomplete="off">
                            <small class="form-text text-muted">This is a help text</small>
                        </div>
                    </div> -->

                   

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="keterangan" class=" form-control-label">Keterangan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="keterangan" name="keterangan" placeholder="keterangan" class="form-control" required autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                  
                                   
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
</div>