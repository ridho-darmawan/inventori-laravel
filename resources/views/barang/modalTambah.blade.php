<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{ route ('barang.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf    

                    <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="kode" class=" form-control-label">Kode Barang</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="kode" name="kode" placeholder="kode" class="form-control" required autocomplete="off">
                                <!-- <small class="form-text text-muted">This is a help text</small> -->
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="nama" class=" form-control-label">Nama Barang</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="nama" name="nama" placeholder="Nama" class="form-control" required autocomplete="off">
                                <!-- <small class="form-text text-muted">This is a help text</small> -->
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="kategori" class=" form-control-label">Kategori</label>
                            </div>
                            <div class="col-12 col-md-9">
                            <select data-placeholder="Pilih Kategori..." multiple class="standardSelect" class="form-control" name="kategori">
                                
                                    @foreach($kategori as $p)
                                        <option value="{{$p->id}}">{{$p->nama}}</option>
                                    @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="stok" class=" form-control-label">Stok</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" id="stok" name="stok" placeholder="stok" class="form-control" required autocomplete="off">
                                <!-- <small class="form-text text-muted">This is a help text</small> -->
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="jumlah" class=" form-control-label">Jumlah</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="number" id="jumlah" name="jumlah" placeholder="jumlah" class="form-control" required autocomplete="off">
                                <!-- <small class="form-text text-muted">This is a help text</small> -->
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="lokasi" class=" form-control-label">Lokasi</label>
                            </div>
                            <div class="col-12 col-md-9">
                            <select data-placeholder="Pilih Lokasi..." multiple class="standardSelect" class="form-control" name="lokasi">
                                
                                    @foreach($ruang as $p)
                                        <option value="{{$p->id}}">{{$p->nama}}</option>
                                    @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="supplier" class=" form-control-label">Supplier</label>
                            </div>
                            <div class="col-12 col-md-9">
                            <select data-placeholder="Pilih supplier..." multiple class="standardSelect" class="form-control" name="supplier">
                                
                                    @foreach($supplier as $p)
                                        <option value="{{$p->id}}">{{$p->nama}}</option>
                                    @endforeach
                            </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="kondisi" class=" form-control-label">Kondisi Barang</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="kondisi" name="kondisi" placeholder="kondisi" class="form-control" required autocomplete="off">
                                <!-- <small class="form-text text-muted">This is a help text</small> -->
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="sumber_dana" class=" form-control-label">Sumber Dana</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="sumber_dana" name="sumber_dana" placeholder="sumber_dana" class="form-control" required autocomplete="off">
                                <!-- <small class="form-text text-muted">This is a help text</small> -->
                            </div>
                        </div>

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