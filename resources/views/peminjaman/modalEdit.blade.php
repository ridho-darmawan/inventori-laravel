<div class="modal fade" id="edit{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pengembalian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('peminjaman.update', $p->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

            
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="supplier" class=" form-control-label">Status</label>
                    </div>
                    <div class="col-12 col-md-9">
                    <select name="status" class="form-control" required="">
                        <option value="">Pilih Status...</option>
                        <option value="Dipinjam" >Dipinjam</option>
                        <option value="Kembali" >Kembali</option>
                    
                    
                    </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="pb" class=" form-control-label">Penerima Barang</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="pb" name="pb" placeholder="Nama Penerima Barang" class="form-control" required autocomplete="off">
                        <!-- <small class="form-text text-muted">This is a help text</small> -->
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                </div>
                
                

                </form>
            </div>

        </div>
    </div>
</div>