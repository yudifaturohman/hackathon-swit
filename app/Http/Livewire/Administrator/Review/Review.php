<?php

namespace App\Http\Livewire\Administrator\Review;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Review as ModelReview;
use App\Models\PenyediaJasa as ModelPenyediaJasa;
use App\Models\Pengguna as ModelPengguna;

class Review extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search = '';
    public $idReviewRating, $idJasa, $idPengguna, $review, $rating;

    public function render()
    {
        $pengguna = ModelPengguna::orderBy('nama','ASC')
        ->get();
        $penyediaJasa = ModelPenyediaJasa::orderBy('namaToko','ASC')
        ->get();

        return view('livewire.administrator.review.review', [
            'reviewRating' => ModelReview::select('review.*', 'pengguna.nama', 'penyedia_jasa.namaToko')
            ->join('pengguna', 'pengguna.idPengguna', '=', 'review.idPengguna')
            ->join('penyedia_jasa', 'penyedia_jasa.idJasa', '=', 'review.idJasa')
            ->orderBy('created_at','DESC')
            ->where('nama', 'like', '%'.$this->search.'%')
            ->orWhere('namaToko', 'like', '%'.$this->search.'%')
            ->paginate(10)
        ], compact('pengguna','penyediaJasa'));
    }

    protected $rules = [
        'idJasa' => 'required',
        'idPengguna' => 'required',
        'review' => 'required|string|min:3|max:255',
        'rating' => 'required|string|max:1',
    ];

    private function resetInput()
    {
        $this->idJasa = '';
        $this->idPengguna = '';
        $this->review = '';
        $this->rating = '';
    }

    public function save()
    {
        $this->validate();

        ModelReview::create([
            'idJasa'        => $this->idJasa,
            'idPengguna'    => $this->idPengguna,
            'review'        => $this->review,
            'rating'        => $this->rating,
        ]);

        session()->flash('message', 'Data berhasil ditambahkan.');
        $this->resetInput();
    }

    public function delete($id)
    {
        ModelReview::find($id)->delete();
        session()->flash('message', 'Data berhasil dihapus.');
    }
}
