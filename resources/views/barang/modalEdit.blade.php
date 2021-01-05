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
            <form action="{{ route('barang.update', $p->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="kode" class=" form-control-label">Kode Barang</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="kode" name="kode" placeholder="kode" class="form-control" required autocomplete="off" value="{{ old('kode', $p->kode) }}">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="nama" class=" form-control-label">Nama Barang</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="nama" name="nama" placeholder="Nama" class="form-control" required autocomplete="off" value="{{ old('nama', $p->nama) }}">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="kondisi" class=" form-control-label">Kondisi Barang</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="kondisi" name="kondisi" placeholder="kondisi" class="form-control" required autocomplete="off" value="{{ old('kondisi', $p->kondisi) }}">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="kategori" class=" form-control-label">Kategori</label>
                        </div>
                        <div class="col-12 col-md-9">

                        <select name="kategori" class="form-control" required="">
                            <option value="" disabled>Pilih Kategori...</option>
                            @foreach($kategori as $value)
                                <option value="{{$value->id}}" {{ ($value->id == $p->kategori_id) ? 'selected' : ''}}>
                                    {{$value->nama}}
                                </option>
                            @endforeach
                           
                        </select>

                        <!-- <select  class="form-control @error('kategori') is-invalid @enderror" name="kategori" >

                            @foreach ($kategori as $k)
                                <option value="{{ $k->id  }}"> 
                                    {{ $k->nama }} 
                                </option>
                            @endforeach 
                            
                               
                        </select> -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="stok" class=" form-control-label">Stok</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="stok" name="stok" placeholder="stok" class="form-control" required autocomplete="off"  value="{{ old('stok', $p->stok) }}">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="jumlah" class=" form-control-label">Jumlah</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="jumlah" name="jumlah" placeholder="jumlah" class="form-control @error('jumlah') is-invalid @enderror" required autocomplete="off"  value="{{ old('jumlah', $p->jumlah) }}">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

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

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="supplier" class=" form-control-label">Supplier</label>
                        </div>
                        <div class="col-12 col-md-9">

                        <select name="supplier" class="form-control" required="">
                            <option value="" disabled>Pilih Supplier...</option>
                            @foreach($supplier as $value)
                                <option value="{{$value->id}}" {{ ($value->id == $p->supplier_id) ? 'selected' : ''}}>
                                    {{$value->nama}}
                                </option>
                            @endforeach
                           
                        </select>
                       
                        </div>
                    </div>

                    


                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="sumber_dana" class=" form-control-label">Sumber Dana</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="sumber_dana" name="sumber_dana" placeholder="sumber_dana" class="form-control" required autocomplete="off"  value="{{ old('sumber_dana', $p->sumber_dana) }}">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="keterangan" class=" form-control-label">Keterangan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="keterangan" name="keterangan" placeholder="keterangan" class="form-control" required autocomplete="off"  value="{{ old('keterangan', $p->keterangan) }}">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                  

            
            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
            

        </form>
            </div>

        </div>
    </div>
</div>