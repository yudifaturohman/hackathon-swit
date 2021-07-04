<?php

namespace App\Http\Livewire\Administrator\Blog;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog as ModelBlog;
use File;

class Blog extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $selected_id;
    public $idBlog, $idAdministrator, $judul, $slug, $konten, $gambar;

    public function render()
    {
        return view('livewire.administrator.blog.blog', [
            'blog' => ModelBlog::select('blog.*', 'administrator.nama')
            ->join('administrator', 'administrator.idAdministrator', '=', 'blog.idAdministrator')
            ->orderBy('judul','ASC')
            ->where('judul', 'like', '%'.$this->search.'%')
            ->paginate(10)
        ]);
    }

    protected $rules = [
        'judul' => 'required|min:3|max:255',
        'konten' => 'required|min:3',
    ];

    private function resetInput()
    {
        $this->judul = '';
        $this->konten = '';
    }

    public function edit($id)
    {
        $edit = ModelBlog::findOrFail($id);
        $this->selected_id = $id;
        $this->judul = $edit->judul;
        $this->konten = $edit->konten;
    }

    public function update()
    {
        $this->validate();

        $update = ModelBlog::find($this->selected_id);
        $update->judul = $this->judul;
        $update->konten = $this->konten;
        $update->update();

        session()->flash('message', 'Data berhasil diubah.');
        $this->resetInput();
    }

    public function delete($id)
    {
        $file = ModelBlog::find($id);
        File::delete('storage/blog/'.$file->gambar);
        $file->delete();
        session()->flash('message', 'Data berhasil dihapus.');
    }
}
