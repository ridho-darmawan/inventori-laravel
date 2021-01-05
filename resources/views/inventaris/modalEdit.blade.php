<div class="modal fade" id="edit{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('inventaris.update', $p->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')




                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="nama" class=" form-control-label">Nama Barang</label>
                        </div>
                        <div class="col-12 col-md-9">
                        <select name="nama" class="form-control" required="">
                            <option value="" disabled>Pilih Lokasi...</option>
                            @foreach($barangMasuk as $value)
                                <option value="{{$value->id}}" {{ ($value->id == $p->barang_id) ? 'selected' : ''}}>
                                    {{$value->nama}}
                                </option>
                            @endforeach
                           
                        </select>
                            
                        </div>
                    </div>

                       
<!-- 
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="jumlah" class=" form-control-label">Jumlah</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="jumlah" name="jumlah" placeholder="jumlah" class="form-control @error('jumlah') is-invalid @enderror" required autocomplete="off"  value="{{ old('jumlah', $p->jumlah) }}">
                            <small class="form-text text-muted">This is a help text</small>
                        </div>
                    </div> -->

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="lokasi" class=" form-control-label">Lokasi</label>
                        </div>
                        <div class="col-12 col-md-9">
                        <select name="lokasi" class="form-control" required="">
                            <option value="" disabled>Pilih Lokasi...</option>
                            @foreach($ruang as $value)
                                <option value="{{$value->id}}" {{ ($value->id == $p->lokasi) ? 'selected' : ''}}>
                                    {{$value->nama}}
                                </option>
                            @endforeach
                           
                        </select>
                        </div>
                    </div>

                   
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
            

                </form>
            </div>

        </div>
    </div>
</div>