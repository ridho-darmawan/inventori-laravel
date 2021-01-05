<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Tambah Ruang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{ route ('ruang.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf    

                


                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="nama" class=" form-control-label">Nama Ruangan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="nama" name="nama" placeholder="Nama" class="form-control" required autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="kode_ruangan" class=" form-control-label">Kode Ruangan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="kode_ruangan" name="kode_ruangan" placeholder="kode_ruangan" class="form-control" required autocomplete="off">
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