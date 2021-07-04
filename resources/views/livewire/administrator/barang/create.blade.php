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
            <form action="{{ route('admin.barang.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <label>Penyedia Jasa</label>
                        <fieldset class="form-group">
                            <select name="idJasa" class="form-select @error('idJasa') is-invalid @enderror">
                                <option value="" selected>-- Pilih --</option>
                                @foreach ($penyediaJasa as $item)
                                <option value="{{ $item->idJasa }}">{{$item->namaToko}}</option>
                                @endforeach
                            </select>
                            @error('idJasa') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </fieldset>
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
                        <label>Nama Barang</label>
                        <div class="form-group">
                            <input name="namaBarang" type="text" placeholder="Masukkan nama barang" autocomplete="off"
                                class="form-control @error('namaBarang') is-invalid @enderror">
                            @error('namaBarang') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <label>Deskripsi Barang</label>
                        <div class="form-group">
                            <textarea name="deskripsi" type="text" placeholder="Masukkan deskripsi"
                                autocomplete="off" rows="4" class="form-control @error('deskripsi') is-invalid @enderror"></textarea>
                            @error('deskripsi') <span class="invalid-feedback">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Harga</label>
                                <input name="harga" type="text" placeholder="Masukkan harga" autocomplete="off"
                                    class="form-control @error('harga') is-invalid @enderror">
                                @error('harga') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Stok</label>
                                <input name="stok" type="text" placeholder="Masukkan stok" autocomplete="off"
                                    class="form-control @error('stok') is-invalid @enderror">
                                @error('stok') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <label>Gambar</label>
                        <div class="form-group">
                            <input name="gambar" type="file" placeholder="Masukkan gambar barang"
                                class="form-control @error('gambar') is-invalid @enderror">
                            @error('gambar') <span class="invalid-feedback">{{ $message }}</span> @enderror
                            <p><small class="text-muted"><i>(Maximal 2MB)</i></small>
                            </p>
                        </div>
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
