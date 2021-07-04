@extends('pengguna.layouts.onta')
@section('title')
Buka Jasa Camp
@endsection
@section('content')
<main data-spy="scroll" data-target="#navbar-example2" data-offset="0">
    <!-- Start banner_about -->
    <section class="pt_banner_inner">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="banner_title_inner margin-b-10">

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End banner_about -->

    <!-- Start section__showcase -->
    <section class="section__showcase margin-b-6">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-5">
                    <div class="title_sections_inner margin-b-5">
                        <h2>Buka Jasa Camp mu di Sini</h2>
                    </div>
                    @if (session()->has('pesan'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('pesan') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="tio clear"></i>
                        </button>
                    </div>
                    @endif
                    @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="block__tab">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-integ-tab" data-toggle="pill" href="#pills-integ" role="tab"
                            aria-controls="pills-integ" aria-selected="false">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18">
                                    <g id="Group_6273" data-name="Group 6273" transform="translate(-4 -3)">
                                        <path id="Rectangle" d="M6,3H18l2,3.5H4Z" fill="#0b2238" fill-rule="evenodd"
                                            opacity="0.3" />
                                        <path id="Combined-Shape"
                                            d="M6,5H18a2,2,0,0,1,2,2V19a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V7A2,2,0,0,1,6,5ZM9,9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z"
                                            fill="#0b2238" fill-rule="evenodd" />
                                    </g>
                                </svg>
                            </div>
                            <h3>Buka Jasa</h3>
                            <div class="prog"></div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-view-tab" data-toggle="pill" href="#pills-view" role="tab"
                            aria-controls="pills-view" aria-selected="false">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.94" height="17"
                                    viewBox="0 0 16.94 17">
                                    <g id="Group_6274" data-name="Group 6274" transform="translate(-3.06 -3)">
                                        <path id="Combined-Shape" d="M4,12.2,13,14V4.062A8,8,0,1,1,4,12.2Z"
                                            fill-rule="evenodd" opacity="0.3" />
                                        <path id="Combined-Shape-Copy" d="M3.06,10.012A8,8,0,0,1,11,3v8.6Z"
                                            fill-rule="evenodd" />
                                    </g>
                                </svg>

                            </div>
                            <h3>Upload Barang / Jasa</h3>
                            <div class="prog"></div>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-view-tab2" data-toggle="pill" href="#pills-view2" role="tab"
                            aria-controls="pills-view" aria-selected="false">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.94" height="17"
                                    viewBox="0 0 16.94 17">
                                    <g id="Group_6274" data-name="Group 6274" transform="translate(-3.06 -3)">
                                        <path id="Combined-Shape" d="M4,12.2,13,14V4.062A8,8,0,1,1,4,12.2Z"
                                            fill-rule="evenodd" opacity="0.3" />
                                        <path id="Combined-Shape-Copy" d="M3.06,10.012A8,8,0,0,1,11,3v8.6Z"
                                            fill-rule="evenodd" />
                                    </g>
                                </svg>

                            </div>
                            <h3>List Barang / Jasa</h3>
                            <div class="prog"></div>
                        </a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-integ" role="tabpanel" aria-labelledby="pills-view-tab">
                        <div class="ss_software">
                            <div class="form_cc_four">
                                <form action="{{ route('pengguna.penyedia-jasa.simpan') }}" class="row" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Usaha</label>
                                            <input type="text"
                                                class="form-control @error('namaToko') is-invalid @enderror"
                                                name="namaToko">
                                            @error('namaToko')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi Usaha</label>
                                            <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                                rows="7" name="deskripsi"></textarea>
                                            @error('deskripsi')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Logo</label>
                                            <input type="file"
                                                class="form-control @error('gambar') is-invalid @enderror"
                                                name="gambar">
                                            @error('gambar')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 d-md-flex justify-content-between margin-t-2">
                                        <button type="submit"
                                            class="btn btn_md_primary bg-gold rounded-8 c-white h-fit-content">
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="pills-view" role="tabpanel"
                        aria-labelledby="pills-integ-tab">
                        <div class="ss_software">
                            <div class="table-responsive">
                                <form action="{{ route('pengguna.barang-jasa.simpan') }}" class="row" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Usaha</label>
                                            <select name="idJasa" class="form-control">
                                                <option value="">Pilih Toko Anda</option>
                                                @foreach ($penyediaJasa as $item)
                                                <option value="{{ $item->idJasa }}">{{ $item->namaToko }}</option>
                                                @endforeach
                                            </select>
                                            @error('namaToko')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input type="text"
                                                class="form-control @error('namaBarang') is-invalid @enderror"
                                                name="namaBarang">
                                            @error('namaBarang')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi Barang</label>
                                            <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                                rows="7" name="deskripsi"></textarea>
                                            @error('deskripsi')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Harga Barang</label>
                                        <input type="text" class="form-control @error('harga') is-invalid @enderror"
                                            name="harga">
                                        @error('harga')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Stok</label>
                                        <input type="text" class="form-control @error('stok') is-invalid @enderror"
                                            name="stok">
                                        @error('stok')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file"
                                                class="form-control @error('gambar') is-invalid @enderror"
                                                name="gambar">
                                            @error('gambar')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 d-md-flex justify-content-between margin-t-2">
                                        <button type="submit"
                                            class="btn btn_md_primary bg-gold rounded-8 c-white h-fit-content">
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-view2" role="tabpanel" aria-labelledby="pills-view-tab2">
                        <div class="ss_software">
                            <div class="form_cc_four">

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>
@endsection
