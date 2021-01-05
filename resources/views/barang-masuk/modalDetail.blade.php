<div class="modal fade" id="detail{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Barang Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <div class="form-group row" style="text-align:left">

                <div class="col col-md-3">
                    <label  class="form-control-label">Nama Barang</label>
                    <input type="text" class="form-control" value="{{ $p->nama }}" readonly>
                </div>

                <div class="col col-md-3">
                    <label  class="form-control-label">Merk</label>
                    <input type="text" class="form-control" value="{{$p->merk}}" readonly>
                </div>

                <div class="col col-md-3">
                    <label  class="form-control-label">Tahun Pembelian</label>
                    <input type="text" class="form-control" value="{{$p->tahun_pembelian}}" readonly>
                </div>

                <div class="col col-md-3">
                    <label  class="form-control-label">Kategori</label>
                    <input type="text" class="form-control" value="{{$p->kategori->nama}}" readonly>
                </div>

            </div>

            <div class="form-group row" style="text-align:left">

                <div class="col col-md-3">
                    <label  class="form-control-label">Supplier</label>
                    <input type="text" class="form-control" value="{{$p->supplier->nama}}" readonly>
                </div>

                <div class="col col-md-3">
                    <label  class="form-control-label">Keterangan</label>
                    <input type="text" class="form-control" value="{{$p->keterangan}}" readonly>
                </div>

                <div class="col col-md-3">
                    <label  class="form-control-label">Tahun Pembelian</label>
                    <input type="text" class="form-control" value="{{$p->tahun_pembelian}}" readonly>
                </div>

                <div class="col col-md-3">
                    <label  class="form-control-label">Kategori</label>
                    <input type="text" class="form-control" value="{{$p->kategori->nama}}" readonly>
                </div>

            </div>
           

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ukuran CC</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$p->ukuranCC}}" disabled>

                </div>
            </div>

            @php
                if($p->kategori_id == '2') { 
            @endphp

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NO Rangka</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$p->no_rangka}}" disabled>

                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NO Mesin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$p->no_mesin}}" disabled>

                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NO Polisi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$p->no_polisi}}" disabled>

                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NO BPKB</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$p->no_bpkb}}" disabled>

                </div>
            </div>

            @php 
                }
            @endphp

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Bahan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$p->bahan}}" disabled>

                </div>
            </div>

            <button type="button" class="btn btn-md btn-primary float-right" data-dismiss="modal">Cancel</button>
           
            </div>

        </div>
    </div>
</div>