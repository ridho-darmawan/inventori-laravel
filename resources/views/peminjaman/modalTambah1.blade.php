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
                            <label for="lokasi" class=" form-control-label">Lokasi Barang</label>
                        </div>
                        <div class="col-12 col-md-9">
                        <select  class="form-control" name="lokasi" id="sel_lokasi">
                            <option value="">Pilih Lokasi</option>
                                @foreach($ruang as $p)
                                    <option value="{{$p->id}}">{{$p->nama}}</option>
                                @endforeach
                        </select>
                        </div>
                    </div>

                <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="barang" class=" form-control-label">Nama Barang</label>
                        </div>
                        <div class="col-12 col-md-9">
                        <select  class="form-control" name="barang" id="nama_barang">
                            <option value="0">Pilih Barang</option>
                                
                        </select>
                        </div>
                    </div>
                


                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="pj" class=" form-control-label">Penanggung Jawab</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="pj" name="pj" placeholder="Penanggung Jawab" class="form-control" required autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                    <div class="row form-group" id="jumlah">
                        <div class="col col-md-3">
                            <label for="jumlah" class=" form-control-label">Jumlah</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number" id="jumlah" name="jumlah" placeholder="Jumlah" class="form-control" required autocomplete="off">
                            <!-- <small class="form-text text-muted">This is a help text</small> -->
                        </div>
                    </div>

                 

                    <!-- <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="tanggal_pinjam" class=" form-control-label">Tanggal Pinjam</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="datetime" id="tanggal_pinjam" name="tanggal_pinjam" placeholder="tanggal_pinjam" class="form-control" required autocomplete="off">
                           
                        </div>
                    </div> -->

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="kondisi" class=" form-control-label">Kondisi</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="kondisi" name="kondisi" placeholder="kondisi" class="form-control" required autocomplete="off">
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

    $('#sel_lokasi').change(function(){

    var id = $(this).val();
    console.log('id',id);

    // Empty the dropdown
    $('#nama_barang').find('option').not(':first').remove();

    // AJAX request 
    $.ajax({
        url: 'get-data-inventaris/'+id,
        type: 'get',
        dataType: 'json',
        success: function(response){
            console.log('response:',response)
        var len = 0;
        if(response != null){
            len = response.length;
        }

        if(len > 0){
            // Read data and create <option >
            for(var i=0; i<len; i++){

                var id =response[i].barang_id;
                var name = response[i].barang_masuk.nama;

                var option = "<option value='"+id+"'>"+name+"</option>"; 

                $("#nama_barang").append(option); 
            }
        }

        }
    });
    });

    });

</script>
   
    
