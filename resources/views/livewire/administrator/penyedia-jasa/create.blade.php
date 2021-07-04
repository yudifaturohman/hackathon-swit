<div wire:ignore.self class="modal fade text-left" id="create" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel18" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel18">Tambah Data
                </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('admin.penyedia-jasa.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label>Pengguna</label>
                    <fieldset class="form-group">
                        <select name="idPengguna" class="form-select @error('idPengguna') is-invalid @enderror">
                            <option value="" selected>-- Pilih --</option>
                            @foreach ($pengguna as $item)
                            <option value="{{ $item->idPengguna }}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                        @error('idPengguna') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </fieldset>
                    <label>Nama Toko</label>
                    <div class="form-group">
                        <input name="namaToko" type="text" placeholder="Masukkan Nama Toko"
                            autocomplete="off" class="form-control @error('namaToko') is-invalid @enderror">
                        @error('namaToko') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <label>Deskripsi Toko</label>
                    <div class="form-group">
                        <input name="deskripsi" type="text" placeholder="Masukkan deskripsi toko" autocomplete="off"
                            class="form-control @error('deskripsi') is-invalid @enderror">
                        @error('deskripsi') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <label>Gambar</label>
                    <div class="form-group">
                        <input name="gambar" type="file" placeholder="Masukkan Gambar" class="form-control @error('gambar') is-invalid @enderror">
                        @error('gambar') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        <p><small class="text-muted"><i>(Maximal 2MB)</i></small>
                        </p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
