@extends('layout.main')
@section('title', '| Tantangan')

@section('konten')
<!-- Tantangan -->    
<section id="celen" class="putih">
  <div class="container" data-aos="fade-up">
  <div class="putih-title">
    <p>Mengurangi polusi mikroplastik dari ban kendaraan</p>
    </div>
    <!--<div class="video">
      <iframe src="https://www.youtube.com/embed/745Pc4k2oww?autoplay=1"></iframe>
    </div>
    <br>--> 
    <p>Sesuai judulnya, challenge ini menantangmu untuk sehari mengurangi polusi mikroplastik dengan memakai transportasi umum atau berjalan kaki untuk bepergian!</p>
    <p>Mampu menerima challenge ini? Kalau gitu,</p>
    <form action="/masuk">
    <button class="btn-id" type="submit">Terima tantangan sekarang</button>
    </form>
    </div>
</section>
<!-- End Tantangan -->
@endsection