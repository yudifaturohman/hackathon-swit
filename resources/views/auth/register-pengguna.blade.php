@extends('layouts.front.user')
@section('title')
    Pendaftaran Akun Baru
@endsection
@section('content')
    <!-- Start form_signup_onek -->
<section class="form_signup_one">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-lg-5 ml-auto">
          <div class="item_group">
            <form method="POST" action="{{ URL('/pendaftaran/berhasil') }}" class="row">
                @csrf
              <div class="col-12">
                <div class="title_sign">
                  <h2>Buat akun baru</h2>
                  <p>Kamu udah punya akun? Langsung <a href="{{route('login')}}">Masuk</a> aja</p>
                  @if (session()->has('pesan'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('pesan') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="tio clear"></i>
                    </button>
                  </div>
                  @endif
                  
                  @foreach ($errors->all() as $error)
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="tio clear"></i>
                    </button>
                  </div>
                  @endforeach
                </div>

              </div>
              <div class="col-12">
                <div class="form-group">
                  <label>E-mail</label>
                  <input type="email" class="form-control" placeholder="E-mail" value="{{old('email')}}" name="email" autocomplete="email">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" class="form-control" placeholder="Nama Lengkap" value="{{old('nama')}}" name="nama" autocomplete="nama">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label>Telpon</label>
                  <input type="text" class="form-control" placeholder="Nomor Telpon" value="{{old('telp')}}" name="telp" autocomplete="telp">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group --password" id="show_hide_password">
                  <label>Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" data-toggle="password" placeholder="8 Karakter"  name="password" />
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group --password" id="show_hide_password">
                  <label>Konfirmasi Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" data-toggle="password" placeholder="8 Karakter"  name="password_confirmation" />
                  </div>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn w-100 margin-t-3 btn_account bg-lightgreen c-white rounded-8">
                  Daftar
                </button>
                <a href="{{ URL('/') }}" class="btn w-100 margin-t-3 btn_account bg-blue c-white rounded-8">
                  <i class="tio arrow_long_left mr-1 align-middle font-s-16"></i>
                  <span>Kembali ke Beranda</span>
                </a>
              </div>
            </form>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!-- End.form_signup_one -->
@endsection