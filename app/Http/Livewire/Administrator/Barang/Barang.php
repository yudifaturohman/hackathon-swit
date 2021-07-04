<?php

namespace App\Http\Livewire\Administrator\Barang;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Barang as ModelBarang;
use App\Models\PenyediaJasa as ModelPenyediaJasa;
use App\Models\Pengguna as ModelPengguna;
use File;

class Barang extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $selected_id;
    public $idBarang, $idJasa, $idPengguna, $namaBarang, $deskripsi, $harga, $gambar, $stok;

    public function render()
    {
        $pengguna = ModelPengguna::orderBy('nama','ASC')
        ->get();
        $penyediaJasa = ModelPenyediaJasa::orderBy('namaToko','ASC')
        ->get();

        return view('livewire.administrator.barang.barang', [
            'barang' => ModelBarang::select('barang.*', 'pengguna.nama', 'penyedia_jasa.namaToko')
            ->join('pengguna', 'pengguna.idPengguna', '=', 'barang.idPengguna')
            ->join('penyedia_jasa', 'penyedia_jasa.idJasa', '=', 'barang.idJasa')
            ->orderBy('namaBarang','ASC')
            ->where('namaBarang', 'like', '%'.$this->search.'%')
            ->orWhere('namaToko', 'like', '%'.$this->search.'%')
            ->orWhere('nama', 'like', '%'.$this->search.'%')
            ->paginate(10)
        ], compact('pengguna','penyediaJasa'));
    }

    protected $rules = [
        'idJasa' => 'required',
        'idPengguna' => 'required',
        'namaBarang' => 'required|min:3|max:125',
        'deskripsi' => 'required|min:3|max:255',
        'harga' => 'required|numeric|min:3',
        'stok' => 'required|numeric|min:3',
    ];

    private function resetInput()
    {
        $this->idJasa = '';
        $this->idPengguna = '';
        $this->namaBarang = '';
        $this->deskripsi = '';
        $this->harga = '';
        $this->stok = '';
    }

    public function edit($id)
    {
        $edit = ModelBarang::findOrFail($id);
        $this->selected_id = $id;
        $this->idJasa = $edit->idJasa;
        $this->idPengguna = $edit->idPengguna;
        $this->namaBarang = $edit->namaBarang;
        $this->deskripsi = $edit->deskripsi;
        $this->harga = $edit->harga;
        $this->stok = $edit->stok;
    }

    public function update()
    {
        $this->validate();

        $update = ModelBarang::find($this->selected_id);
        $update->idJasa = $this->idJasa;
        $update->idPengguna = $this->idPengguna;
        $update->namaBarang = $this->namaBarang;
        $update->deskripsi = $this->deskripsi;
        $update->harga = $this->harga;
        $update->stok = $this->stok;
        $update->update();

        session()->flash('message', 'Data berhasil diubah.');
        $this->resetInput();
    }

    public function delete($id)
    {
        $file = ModelBarang::find($id);
        File::delete('storage/barang/'.$file->gambar);
        $file->delete();
        session()->flash('message', 'Data berhasil dihapus.');
    }
}
