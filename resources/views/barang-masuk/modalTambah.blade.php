<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Tambah Barang Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{ route ('barang-masuk.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf    

                <div class="row form-group">
                        <div class="col col-md-3"><label for="select" class=" form-control-label">Kategori</label></div>
                        <div class="col-12 col-md-9">
                            <select name="kategori" id="kategori" required  class="form-control">
                            
                            <option value="">Pilih Kategori</option>
                                @foreach($kategori as $p)
                                    <option value="{{$p->id}}">{{$p->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="nama" class=" form-control-label">Nama Barang</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="nama" name="nama"  class="form-control" required autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="kode_barang" class=" form-control-label">Kode Barang</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="kode_barang" name="kode_barang"  class="form-control" required autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>


                    <div id="kendaraan" style="display:none">
                    
                    <label for="no_rangka" class=" form-control-label">Detail Kendaraan:</label>
                    
                    <div class="row form-group" >
                        <div class="col col-md-3">
                            <label for="no_rangka" class=" form-control-label">No Rangka</label>
                        <!-- </div>
                        <div class="col-12 col-md-9"> -->
                            <input type="text"  name="no_rangka"  class="form-control"  autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>

                        <div class="col col-md-3">
                            <label for="no_mesin" class=" form-control-label">No Mesin</label>
                        <!-- </div>
                        <div class="col-12 col-md-9"> -->
                            <input type="text" id="no_mesin" name="no_mesin"  class="form-control"  autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>

                        <div class="col col-md-3">
                            <label for="no_polisi" class=" form-control-label">No Polisi</label>
                        <!-- </div>
                        <div class="col-12 col-md-9"> -->
                            <input type="text" id="no_polisi" name="no_polisi"  class="form-control"  autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>

                        <div class="col col-md-3">
                            <label for="no_bpkb" class=" form-control-label">No BPKB</label>
                        <!-- </div>
                        <div class="col-12 col-md-9"> -->
                            <input type="text" id="no_bpkb" name="no_bpkb"  class="form-control"  autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>

                    </div>
                    <hr>

                 


                </div>


                <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="merk" class=" form-control-label">Merk</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="merk" name="merk" class="form-control"  autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>
            
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="tanggal_masuk" class=" form-control-label">Tanggal Masuk</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="tanggal_masuk" name="tanggal_masuk"  class="form-control" required autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                    

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="ukuran" class=" form-control-label">Ukuran CC</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="ukuran" name="ukuran"  class="form-control"  autocomplete="off">
                            <small class="form-text text-muted">kosongkan jika tidak ada</small>
                        </div>
                    </div>

                    <div class="row form-group" id="bahan">
                        <div class="col col-md-3">
                            <label for="bahan" class=" form-control-label">Bahan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="bahan"  class="form-control"  autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="tahun_pembelian" class=" form-control-label">Tahun Pembelian</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="tahun_pembelian" name="tahun_pembelian"  class="form-control"  autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                   

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="supplier" class=" form-control-label">Supplier</label>
                        </div>
                        <div class="col-12 col-md-9">
                        <select  class="form-control" name="supplier">
                                
                                <option value="">Pilih Supplier</option>
                            
                                @foreach($supplier as $p)
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
                            <input type="number" id="jumlah" name="jumlah"  class="form-control" required autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                  

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="anggaran" class=" form-control-label">Total Anggaran</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="anggaran" name="anggaran"  class="form-control" required autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="sumber_dana" class=" form-control-label">Sumber Dana</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="sumber_dana" name="sumber_dana" class="form-control" required autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="keterangan" class=" form-control-label">Keterangan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="keterangan" name="keterangan"  class="form-control"  autocomplete="off">
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


<script type='text/javascript'>
    $(document).ready(function(){
      
        $("#kategori").change(function() {
            console.log($("#kategori option:selected").val());

            if ($("#kategori option:selected").val() == '2') 
            {
                $('#kendaraan').prop('hidden', false);
                $('#kendaraan').css('display', '');
                $('#bahan').prop('hidden', 'true');
            } 
            else 
            {
                $('#kendaraan').prop('hidden', 'true');
            }
        });
    });
</script>