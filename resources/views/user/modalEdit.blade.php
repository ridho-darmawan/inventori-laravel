<div class="modal fade" id="edit{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{ route('ruang.update', $p->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Kode Ruangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode" name="kode" value="{{ old('kode', $p->kode) }}">

                    
                </div>
            </div>

            

            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Ruangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $p->nama) }}">

                    
                </div>
            </div>

                  

            
            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
            

        </form>
            </div>

        </div>
    </div>
</div>