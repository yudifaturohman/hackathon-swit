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
                    <label>Penyedia Jasa</label>
                    <fieldset class="form-group">
                        <select wire:model="idJasa" class="form-select @error('idJasa') is-invalid @enderror">
                            <option value="" selected>-- Pilih --</option>
                            @foreach ($penyediaJasa as $item)
                            <option value="{{ $item->idJasa }}">{{$item->namaToko}}</option>
                            @endforeach
                        </select>
                        @error('idJasa') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </fieldset>
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
                    <label>Nama Barang</label>
                    <div class="form-group">
                        <input wire:model="namaBarang" type="text" placeholder="Masukkan nama barang"
                            autocomplete="off" class="form-control @error('namaBarang') is-invalid @enderror">
                        @error('namaBarang') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <label>Deskripsi Barang</label>
                    <div class="form-group">
                        <input wire:model="deskripsi" type="text" placeholder="Masukkan deskripsi barang" autocomplete="off"
                            class="form-control @error('deskripsi') is-invalid @enderror">
                        @error('deskripsi') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <label>Harga</label>
                    <div class="form-group">
                        <input wire:model="harga" type="text" placeholder="Masukkan harga barang"
                            autocomplete="off" class="form-control @error('harga') is-invalid @enderror">
                        @error('harga') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <label>stok</label>
                    <div class="form-group">
                        <input wire:model="stok" type="text" placeholder="Masukkan stok barang"
                            autocomplete="off" class="form-control @error('stok') is-invalid @enderror">
                        @error('stok') <span class="invalid-feedback">{{ $message }}</span> @enderror
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
