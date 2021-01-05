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
                <form action="{{ route ('inventaris.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf    


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="nama" class=" form-control-label">Nama Barang</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select  class="form-control" name="nama" required>

                                    <option value="">Pilih Barang</option>
                                        @foreach($barangMasuk as $p)
                                            <option value="{{$p->id}}">{{$p->nama}}</option>
                                        @endforeach
                                </select>

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
                            <select  class="form-control" name="lokasi">
                            <option value="">Pilih Ruangan ...</option>
                                    @foreach($ruang as $p)
                                        <option value="{{$p->id}}">{{$p->nama}}</option>
                                    @endforeach
                            </select>
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