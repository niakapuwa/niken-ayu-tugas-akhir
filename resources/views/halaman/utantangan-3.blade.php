@extends('layout.main')
@section('title', 'Tantangan')

@section('konten')
<!-- Tantangan -->    
<section id="celen" class="celen">
  <div class="container" data-aos="fade-up">
  <div class="celen-title">
    <p>Memakai produk non-mikroplastik</p>
    </div>
    <div class="video">
      <iframe src=></iframe>
    </div>
    <br>
    <div class="text-center">
    <p>Tantang dirimu memakai produk ramah lingkungan. Produk bisa kamu beli di supermarket terdekat atau di halaman lokasi website ini.</p>
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Memakai facecare non-mikroplastik (sabun muka, toner, sunscreen, dan sebagainya)</label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Memakai bodycare non-mikroplastik (shampoo, sabun mandi, dan sebagainya)</label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <button class="btn-com"><a href="/masuk">Selesaikan tantangan</a></button>
    </div>
</section>
<!-- End Tantangan -->
@endsection