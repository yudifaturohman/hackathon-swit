<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Blog;
use App\Models\PenyediaJasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PagePenggunaController extends Controller
{
    public function index()
    {
        $penyediaJasa = PenyediaJasa::select('penyedia_jasa.*', 'users.nama')
        ->join('users', 'users.idPengguna', '=', 'penyedia_jasa.idPengguna')
        ->orderBy('namaToko','ASC')
        ->paginate(8);

        $blog = Blog::select('blog.*')
        ->orderBy('created_at', 'DESC')
        ->get();

        return view('pengguna/component/beranda', compact('penyediaJasa', 'blog'));
    }

    public function pageBukaJasa()
    {
        $penyediaJasa = PenyediaJasa::select('penyedia_jasa.*', 'users.nama')
        ->join('users', 'users.idPengguna', '=', 'penyedia_jasa.idPengguna')
        ->orderBy('namaToko','ASC')
        ->where('penyedia_jasa.idPengguna', '=', Auth::user()->idPengguna)
        ->get();
        
        return view('pengguna/component/buka-jasa', compact('penyediaJasa'));
    }

    public function simpanBukaJasa(Request $request)
    {
        $this->validate($request, [
            'namaToko' => 'required|min:3|max:125',
            'gambar' => 'required|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'required|min:3|max:255',
        ]);

        if ($request->hasFile('gambar')) {
            $filenameWithExt = Str::slug($request->get('namaToko'));
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('gambar')->move('storage/penyedia_jasa/', $filenameSimpan);
        }else{
            $filenameSimpan = '';
        }

        PenyediaJasa::create([
            'idPengguna'            => Auth::user()->idPengguna,
            'namaToko'              => $request->get('namaToko'),
            'gambar'                => $filenameSimpan,
            'deskripsi'             => $request->get('deskripsi'),
        ]);

        session()->flash('pesan', 'Selamat anda berhasil membuat toko usaha anda sendiri.');
        return redirect()->back();
    }

    public function simpanBarangJasa(Request $request)
    {
        $this->validate($request, [
            'idJasa' => 'required',
            'namaBarang' => 'required|min:3|max:125',
            'deskripsi' => 'required|min:3|max:255',
            'harga' => 'required|numeric|min:3',
            'gambar' => 'required|mimes:jpg,jpeg,png|max:2048',
            'stok' => 'required|numeric|min:3',
        ]);

        if ($request->hasFile('gambar')) {
            $filenameWithExt = Str::slug($request->get('namaBarang'));
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('gambar')->move('storage/barang/', $filenameSimpan);
        }else{
            $filenameSimpan = '';
        }

        Barang::create([
            'idJasa'            => $request->get('idJasa'),
            'idPengguna'        => Auth::user()->idPengguna,
            'namaBarang'        => $request->get('namaBarang'),
            'deskripsi'         => $request->get('deskripsi'),
            'harga'             => $request->get('harga'),
            'gambar'            => $filenameSimpan,
            'stok'              => $request->get('stok'),
        ]);

        session()->flash('pesan', 'Data berhasil ditambahkan.');
        return redirect()->back();
    }
}
