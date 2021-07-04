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
            <form wire:submit.prevent="save">
                <div class="modal-body">
                    <label>Nama</label>
                    <div class="form-group">
                        <input wire:model="nama" type="text" placeholder="Masukkan Nama"
                            autocomplete="off" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <label>Email</label>
                    <div class="form-group">
                        <input wire:model="email" type="text" placeholder="Masukkan Email"
                            autocomplete="off" class="form-control @error('email') is-invalid @enderror">
                        @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <label>No. Hp</label>
                    <div class="form-group">
                        <input wire:model="telp" type="text" placeholder="Masukkan nomor telepon"
                            autocomplete="off" class="form-control @error('telp') is-invalid @enderror">
                        @error('telp') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <label>Password</label>
                    <div class="form-group">
                        <input wire:model="password" type="password" placeholder="Masukkan Password"
                            autocomplete="off" class="form-control @error('password') is-invalid @enderror">
                        @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <label>Konfirmasi Password</label>
                    <div class="form-group">
                        <input wire:model="password_confirmation" type="password" placeholder="Masukkan Konfirmasi Password"
                            autocomplete="off" class="form-control @error('password_confirmation') is-invalid @enderror">
                        @error('password_confirmation') <span class="invalid-feedback">{{ $message }}</span> @enderror
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
