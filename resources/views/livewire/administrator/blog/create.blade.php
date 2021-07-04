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
            <form action="{{ route('admin.blog.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label>Judul</label>
                    <div class="form-group">
                        <input name="judul" type="text" placeholder="Masukkan judul"
                            autocomplete="off" class="form-control @error('judul') is-invalid @enderror">
                        @error('judul') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <label>Konten</label>
                    <div class="form-group">
                        <textarea name="konten" type="text" placeholder="Masukkan konten" autocomplete="off" rows="4"
                            class="form-control @error('konten') is-invalid @enderror"></textarea>
                        @error('konten') <span class="invalid-feedback">{{ $message }}</span> @enderror
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
