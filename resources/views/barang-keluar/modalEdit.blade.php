<div class="modal fade" id="edit{{$bk->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Barang Keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{ route('barang-keluar.update', $bk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

                    
                <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="tanggal_keluar" class=" form-control-label">Tanggal Keluar</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="tanggal_keluar" name="tanggal_keluar" placeholder="tanggal_keluar" class="form-control" required autocomplete="off" value="{{ old('tanggal_keluar', $bk->tanggal_keluar) }}">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                    <!-- <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="lokasi" class=" form-control-label">Lokasi</label>
                        </div>
                        <div class="col-12 col-md-9">
                        <select name="lokasi" class="form-control" required="">
                            <option value="" disabled>Pilih Lokasi...</option>
                            @foreach($ruang as $value)
                                <option value="{{$value->id}}" {{ ($value->id == $bk->lokasi) ? 'selected' : ''}}>
                                    {{$value->nama}}
                                </option>
                            @endforeach
                           
                        </select>
                        </div>
                    </div> -->

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="keterangan" class=" form-control-label">Keterangan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="keterangan" name="keterangan" placeholder="keterangan" class="form-control" required autocomplete="off" value="{{ old('keterangan', $bk->keterangan) }}">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>


                  

            
            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
            

        </form>
            </div>

        </div>
    </div>
</div>