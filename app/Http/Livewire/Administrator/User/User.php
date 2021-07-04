<?php

namespace App\Http\Livewire\Administrator\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User as ModelUser;

class User extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search = '';
    public $idPengguna, $nama, $email, $telp, $password, $password_confirmation;

    public function render()
    {
        return view('livewire.administrator.user.user', [
            'user' => ModelUser::orderBy('created_at','DESC')
            ->where('nama', 'like', '%'.$this->search.'%')
            ->paginate(10)
        ]);
    }

    protected $rules = [
        'nama' => 'required|string|min:3|max:50',
        'email' => 'required|string|email|unique:users|min:5|max:50',
        'telp' => 'required|numeric|min:10',
        'password' => 'required|string|confirmed|min:8|max:30',
        'password_confirmation' => 'required',
    ];

    private function resetInput()
    {
        $this->nama = '';
        $this->email = '';
        $this->telp = '';
        $this->password = '';
        $this->password_confirmation = '';
    }

    public function save()
    {
        $this->validate();

        ModelUser::create([
            'nama' => $this->nama,
            'email' => $this->email,
            'telp' => $this->telp,
            'password' => bcrypt($this->password),
            'status' => '0',
        ]);

        session()->flash('message', 'Data berhasil ditambahkan.');
        $this->resetInput();
    }

    public function delete($id)
    {
        ModelUser::find($id)->delete();
        session()->flash('message', 'Data berhasil dihapus.');
    }
}
