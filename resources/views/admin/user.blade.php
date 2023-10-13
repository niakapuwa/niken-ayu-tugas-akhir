@extends('layout.main')
@section('title', '| User')

@section('konten')
<!-- ======= Up Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
      <div class="col-xl-11 col-lg-8">
        <h2><span>Halo, {{$userName}}</span></h2>
        <h2><span>Sudah menebar kebaikan untuk bumi hari ini?</span></h2>
        <p>Poin tantangan kamu: {{ $userPoint }}</p>
      </div>
    </div>
  </div>
</section> <!-- End Up Section -->
<!-- ======= user ======= -->
<section id="admin" class="putih">
  <div class="putih-title">
    <p>Data diri</p>
  </div>
  <form method="post" action="{{ route('change-password') }}" class="row g-3">
    <div class="mb-3 row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ Auth::user()->nama }}">
      </div>
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ Auth::user()->email }}">
      </div>
      <label for="staticEmail" class="col-sm-2 col-form-label">Kota Tinggal</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ Auth::user()->alamat }}">
      </div>
      <label for="staticEmail" class="col-sm-2 col-form-label">Nomor HP</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ Auth::user()->no_hp }}">
      </div>
      <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ Auth::user()->gender }}">
      </div>
    </div>
    @csrf
    <div class="mb-3 row">
      <label for="inputPassword" class="col-sm-2 col-form-label">Ganti Password</label>
      <div class="col-sm-10">
        <input type="password" name="password" class="form-control" id="inputPassword" style="max-width: 50vh">
      </div>
      <input name="user_id" class="form-control" id="userID" value="{{ Auth::user()->id }}" hidden required>
      <div class="col-sm-12 form-group mb-0">
        <button class="btn-get float-center mt-1">Ubah password</button>
      </div>
    </div>
  </form>
</section>
<!-- End user -->

@endsection