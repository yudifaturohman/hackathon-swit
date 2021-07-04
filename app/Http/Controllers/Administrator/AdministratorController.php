<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\PenyediaJasa as ModelPenyediaJasa;
use App\Models\Barang as ModelBarang;
use App\Models\Blog as ModelBlog;

class AdministratorController extends Controller
{
    public function index()
    {
        return view('administrator.dashboard');
    }

    public function halamanUser()
    {
        return view('administrator.user');
    }

    public function halamanPenyediaJasa()
    {
        return view('administrator.penyedia-jasa');
    }

    public function halamanPenyediaJasaSave(Request $request)
    {
        $this->validate($request, [
            'idPengguna' => 'required',
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

        ModelPenyediaJasa::create([
            'idPengguna'            => $request->get('idPengguna'),
            'namaToko'              => $request->get('namaToko'),
            'gambar'                => $filenameSimpan,
            'deskripsi'             => $request->get('deskripsi'),
        ]);

        session()->flash('message', 'Data berhasil ditambahkan.');
        return redirect()->back();
    }

    public function halamanBarang()
    {
        return view('administrator.barang');
    }

    public function halamanBarangSave(Request $request)
    {
        $this->validate($request, [
            'idJasa' => 'required',
            'idPengguna' => 'required',
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

        ModelBarang::create([
            'idJasa'            => $request->get('idJasa'),
            'idPengguna'        => $request->get('idPengguna'),
            'namaBarang'        => $request->get('namaBarang'),
            'deskripsi'         => $request->get('deskripsi'),
            'harga'             => $request->get('harga'),
            'gambar'            => $filenameSimpan,
            'stok'              => $request->get('stok'),
        ]);

        session()->flash('message', 'Data berhasil ditambahkan.');
        return redirect()->back();
    }

    public function halamanBlog()
    {
        return view('administrator.blog');
    }

    public function halamanBlogSave(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:3|max:255',
            'konten' => 'required|min:3',
            'gambar' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $filenameWithExt = Str::slug($request->get('judul'));
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('gambar')->move('storage/blog/', $filenameSimpan);
        }else{
            $filenameSimpan = '';
        }

        ModelBlog::create([
            'idAdministrator'       => 'ADM001',
            'judul'                 => $request->get('judul'),
            'slug'                  => Str::slug($request->get('judul')),
            'konten'                => $request->get('konten'),
            'gambar'                => $filenameSimpan,
        ]);

        session()->flash('message', 'Data berhasil ditambahkan.');
        return redirect()->back();
    }

    public function halamanReview()
    {
        return view('administrator.review');
    }
}
