@extends('layout.main')
@section('title', 'Tantangan')

@section('konten')
<!-- Tantangan -->    
<section id="celen" class="celen">
  <div class="container" data-aos="fade-up">
  <div class="celen-title">
    <p>Mengurangi polusi mikroplastik dari ban kendaraan</p>
    </div>
    <div class="video">
      <iframe src=></iframe>
    </div>
    <br>
    <div class="text-center">
    <p>Sehari belajar mengurangi polusi mikroplastik dari ban kendaraan.</p>
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Bersepeda saat berpergian</label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Memakai kendaraan umum saat berpergian</label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Jalan kaki saat berpergian</label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <button class="btn-com"><a href="/masuk">Selesaikan tantangan</a></button>
    </div>
</section>
<!-- End Tantangan -->
@endsection