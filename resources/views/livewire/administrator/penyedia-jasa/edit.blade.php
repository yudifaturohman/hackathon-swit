<div wire:ignore.self class="modal fade text-left" id="edit" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel18" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel18">Edit Data
                </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form wire:submit.prevent="update">
                <div class="modal-body">
                    <label>Pengguna</label>
                    <fieldset class="form-group">
                        <select wire:model="idPengguna" class="form-select @error('idPengguna') is-invalid @enderror">
                            <option value="" selected>-- Pilih --</option>
                            @foreach ($pengguna as $item)
                            <option value="{{ $item->idPengguna }}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                        @error('idPengguna') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </fieldset>
                    <label>Nama Toko</label>
                    <div class="form-group">
                        <input wire:model="namaToko" type="text" placeholder="Masukkan Nama Toko"
                            autocomplete="off" class="form-control @error('namaToko') is-invalid @enderror">
                        @error('namaToko') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <label>Deskripsi Toko</label>
                    <div class="form-group">
                        <input wire:model="deskripsi" type="text" placeholder="Masukkan Deskripsi Toko" autocomplete="off"
                            class="form-control @error('deskripsi') is-invalid @enderror">
                        @error('deskripsi') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Ubah</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
