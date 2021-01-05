<div class="modal fade" id="detail{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
           
           
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$p->barangMasuk->kategori->nama}}" disabled>

                </div>
            </div>

        
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Supplier</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$p->barangMasuk->supplier->nama}}" disabled>

                </div>
            </div>

            <!-- <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kondisi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$p->kondisi}}" disabled>

                </div>
            </div> -->



            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Sumber Dana</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$p->barangMasuk->sumber_dana}}" disabled>

                </div>
            </div>


         

            <!-- <div class="form-group row">
                <label class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$p->keterangan}}" disabled>

                </div>
            </div> -->

             
            <button type="button" class="btn btn-md btn-primary float-right" data-dismiss="modal">Cancel</button>
           
            </div>

        </div>
    </div>
</div>