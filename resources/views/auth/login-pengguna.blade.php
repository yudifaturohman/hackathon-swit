@extends('layouts.front.user')
@section('title')
    Masuk
@endsection
@section('content')
    <!-- Start form_signup_onek -->
<section class="form_signup_one">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-lg-5 ml-auto">
          <div class="item_group">
            <form action="{{ route('login.user') }}" class="row" method="POST">
              @csrf
              <div class="col-12">
                <div class="title_sign">
                  <h2>Masuk</h2>
                  <p>Belum punya akun? <a href="{{route('pendaftaran')}}">Yuk Daftar Sekarang</a></p>
                </div>
                @if (session()->has('pesan'))
                <div class="alert alert-success">
                  {{ session('pesan') }}
                </div>
                @endif
                @if (session()->has('error'))
                <div class="alert alert-danger">
                  {{ session('error') }}
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
              <div class="col-12">
                <div class="form-group">
                  <label>E-Mail</label>
                  <input type="email" class="form-control" placeholder="E-Mail" name="email" value={{old('email')}}>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group --password" id="show_hide_password">
                  <label>Password</label>
                  <div class="input-group">
                    <input type="password" name="password" class="form-control" data-toggle="password" placeholder="8 Karakter" />
                  </div>
                </div>
              </div>
              <div class="col-12">
                <button class="btn w-100 margin-t-3 btn_account bg-lightgreen c-white rounded-8" type="submit">
                  Masuk
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