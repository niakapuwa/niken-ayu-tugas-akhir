@extends('layout.main')
@section('title')

@section('konten')

  <!--Main Content-->
  <div class="regis-container">
    <form method="POST" action="{{ route('register.post') }}">
      @csrf
      <div class="row jumbotron">
        <div class="col-sm-12 mx-t3 mb-4">
          <h2 class="text-center">Registrasi</h2>
        </div>
        <div class="col-sm-6 form-group">
          <label for="name">Nama Lengkap</label>
          <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus placeholder="Nama lengkapmu">
        </div>
        <div class="col-sm-6 form-group">
          <label for="address-1">Kota Tinggal</label>
          <input type="address" class="form-control" name="address" id="address" placeholder="Nama kota/kabupaten" required>
        </div>
        <div class="col-sm-6 form-group">
          <label for="tel">No HP</label>
          <input type="tel" name="phone" class="form-control" id="tel" placeholder="Masukkan angka dengan format 628111111" required>
        </div>
        <div class="col-sm-6 form-group">
          <label for="name-f">Jenis Kelamin</label>
          <input type="text" class="form-control" name="gender" id="name-f" placeholder="Pria / Wanita" required>
        </div>
        <div class="col-sm-6 form-group">
          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
          <input id="email" type="email" class="form-control" name="email" required autocomplete="email" placeholder="email@email.com">
        </div>
        <div class="col-sm-6 form-group">
          <label for="pass" class="col-md-4 col-form-label text-md-right">{{ __('Kata Sandi') }}</label>
          <input type="Password" name="password" class="form-control" id="pass" placeholder="Masukkan kata sandi" required>
        </div>
        <div class="col-sm-12 form-group mb-0">
          <button class="btn-get float-right mt-1">Registrasi</button>
        </div>
      </div>
    </form>
    <small class="d-block mt-2">Sudah punya akun? <a href="/masuk">Masuk sekarang</a></small>
  </div>
@endsection