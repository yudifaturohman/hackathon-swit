<?php

namespace App\Http\Livewire\Administrator\PenyediaJasa;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PenyediaJasa as ModelPenyediaJasa;
use App\Models\Pengguna as ModelPengguna;

class PenyediaJasa extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $selected_id;
    public $idJasa, $idPengguna, $namaToko, $gambar, $deskripsi;

    public function render()
    {
        $pengguna = ModelPengguna::orderBy('nama','ASC')
        ->get();

        return view('livewire.administrator.penyedia-jasa.penyedia-jasa', [
            'penyediaJasa' => ModelPenyediaJasa::select('penyedia_jasa.*', 'pengguna.nama')
            ->join('pengguna', 'pengguna.idPengguna', '=', 'penyedia_jasa.idPengguna')
            ->orderBy('namaToko','ASC')
            ->where('namaToko', 'like', '%'.$this->search.'%')
            ->paginate(10)
        ], compact('pengguna'));
    }

    protected $rules = [
        'idPengguna' => 'required',
        'namaToko' => 'required|min:3|max:255',
        'deskripsi' => 'required|min:3|max:125',
    ];

    private function resetInput()
    {
        $this->idPengguna = '';
        $this->namaToko = '';
        $this->deskripsi = '';
    }

    public function edit($id)
    {
        $cerbung = ModelPenyediaJasa::findOrFail($id);
        $this->selected_id = $id;
        $this->idPengguna = $cerbung->idPengguna;
        $this->namaToko = $cerbung->namaToko;
        $this->deskripsi = $cerbung->deskripsi;
    }

    public function update()
    {
        $this->validate();

        $cerbung = ModelPenyediaJasa::find($this->selected_id);
        $cerbung->idPengguna = $this->idPengguna;
        $cerbung->namaToko = $this->namaToko;
        $cerbung->deskripsi = $this->deskripsi;
        $cerbung->update();

        session()->flash('message', 'Data berhasil diubah.');
        $this->resetInput();
    }

    public function delete($id)
    {
        $file = ModelPenyediaJasa::find($id);
        File::delete('storage/penyedia_jasa/'.$file->gambar);
        $file->delete();
        session()->flash('message', 'Data berhasil dihapus.');
    }
}
