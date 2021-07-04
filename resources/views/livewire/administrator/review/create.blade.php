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
                    <label>Review</label>
                    <div class="form-group">
                        <textarea wire:model="review" type="text" placeholder="Masukkan review"
                            autocomplete="off" rows="4" class="form-control @error('review') is-invalid @enderror"></textarea>
                        @error('review') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                    <label>Rating</label>
                    <div class="form-group">
                        <input wire:model="rating" type="number" min="1" max="5" placeholder="Masukkan rating skala 1-5"
                            autocomplete="off" class="form-control @error('rating') is-invalid @enderror">
                        @error('rating') <span class="invalid-feedback">{{ $message }}</span> @enderror
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
