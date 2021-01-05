<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Tambah Peminjam</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{ route ('peminjaman.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                        <label for="pj" class=" form-control-label">Penanggung Jawab</label>
                    </div>
                    <div class="col-12 col-md-9">
                    <select  class="form-control" name="pj">
                    <option value="">Pilih Penanggung Jawab ...</option>
                            @foreach($guru as $p)
                                <option value="{{$p->id}}">{{$p->nama}}</option>
                            @endforeach
                    </select>
                    </div>
                </div>
                
               

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="pemberi" class=" form-control-label">Pemberi Barang</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="pemberi" name="pemberi" placeholder="Nama Pemberi Barang" class="form-control" required autocomplete="off">
                        <!-- <small class="form-text text-muted">This is a help text</small> -->
                    </div>
                </div>

                  
                 
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="kondisi" class=" form-control-label">Kondisi Barang</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="kondisi" name="kondisi"  class="form-control" required autocomplete="off">
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

    
