@extends('layout.main')
@section('title', '| Tantangan')

@section('konten')
<!-- Tantangan -->    
<section id="celen" class="putih">
  <div class="container" data-aos="fade-up">
  <div class="putih-title">
    <p>Memakai produk non-mikroplastik</p>
    </div>
    <!--<div class="video">
      <iframe src="https://www.youtube.com/embed/745Pc4k2oww?autoplay=1"></iframe>
    </div>
    <br>--> 
    <p>Sesuai judulnya, challenge ini menantangmu untuk memakai produk ramah lingkungan! Produk bisa kamu beli di supermarket terdekat atau di halaman lokasi website ini. Lampirkan foto produk beserta tangkapan layar aplikasi beat the microbead.</p>
    <p>Mampu menerima challenge ini? Kalau gitu,</p>
    <form action="/masuk">
    <button class="btn-id" type="submit">Terima tantangan sekarang</button>
    </form>
    </div>
</section>
<!-- End Tantangan -->
@endsection