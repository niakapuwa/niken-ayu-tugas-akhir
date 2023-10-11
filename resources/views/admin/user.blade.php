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
  <table class="table">
    <tr>
      <td>Nama Pengguna</td>
      <td>{{ Auth::user()->nama }}</td>
    </tr>
    <tr>
      <td>Email</td>
      <td>{{ Auth::user()->email }}</td>
    </tr>
    <tr>
      <td>Kota Tinggal</td>
      <td>{{ Auth::user()->alamat }}</td>
    </tr>
    <tr>
      <td>Nomor HP</td>
      <td>{{ Auth::user()->no_hp }}</td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>{{ Auth::user()->gender }}</td>
    </tr>
  </table>
  <form method="post" action="{{ route('change-password') }}">
    @csrf
    <label for="password">Ganti Password</label>
    <input type="password" name="password" class="form-control" style="max-width: 50vh" id="password" placeholder="Enter your password" required>
    <input name="user_id" class="form-control" id="userID" value="{{ Auth::user()->id }}" hidden required>
    <div class="col-sm-12 form-group mb-0">
      <button class="btn-get float-center mt-1">Ubah password</button>
    </div>
  </form>
</section>
<!-- End user -->

@endsection