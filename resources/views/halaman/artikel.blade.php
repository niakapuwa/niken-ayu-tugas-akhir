@extends('layout.main')
@section('title', '| Artikel')

@section('konten')

<section id="up" class="hero">
  <div id="carouselExampleDark" class="carousel carousel-dark slide w-100 h-50">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="1000">
        <img src="img/slider1.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h3>Bahaya Oxodegradable: Solusi yang Menjadi Masalah Baru</h3>
          <p>Istilah plastik biodegradable bukanlah jawaban yang tepat dalam mengurangi pencemaran. Plastik jenis ini hanya bisa ‘hancur’ secara sempurna dalam kondisi lingkungan yang seringkali hanya ditemukan pada industrial composter.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="1000">
        <img src="img/slider2.jpeg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h3>Bahaya Mikroplastik Bagi Lingkungan serta Manusia</h3>
          <p>Seperti yang kita ketahui bersama, mikroplastik saat ini sudah menjadi permasalahan global yang perlu diwaspadai dan di perangi bersama. Namun, sebetulnya seberapa berbahaya kah mikroplastik, partikel yang berukuran sangat kecil bagi kesehatan kita?</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="1000">
        <img src="img/slider3.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h3>Hujan Mikroplastik di Paris: Fenomena Baru yang Buruk</h3>
          <p>Ibu kota Perancis ini akan dihujani oleh miliaran partikel mikroplastik yang menurut perkiraan cuaca dikatakan sebagai polusi plastik pertama dan diprediksi akan membawa sekitar 40 hingga 48 kilogram mikroplastik yang akan menyelimuti kota Paris setiap 24 jam.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>
</section>

<!-- ======= Artikel Section ======= -->
<main id="main"> 
  <section id="artikel" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h4>Baca semua artikel</h4>
        </div>
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 portfolio-container">
      
          <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
          <div class="portfolio-wrap">
          <a href="img/mikroplastik.jpeg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="img/mikroplastik.jpeg" class="img-fluid" alt=""></a>
          <div class="portfolio-info">
            <h4><a href="/Bahaya-Mikroplastik-Bagi-Lingkungan-serta-Manusia">Bahaya Mikroplastik Bagi Lingkungan serta Manusia</a></h4>
            <p>Seperti yang kita ketahui bersama, mikroplastik saat ini sudah menjadi permasalahan global yang perlu diwaspadai dan di perangi bersama. Namun, sebetulnya seberapa berbahaya kah mikroplastik, partikel yang berukuran sangat kecil bagi kesehatan kita?</p>
            <button class="btn-com"><a href="/Bahaya-Mikroplastik-Bagi-Lingkungan-serta-Manusia">Baca artikel</a></button>
          </div>
          </div>
          </div><!-- End Portfolio Item -->
  
          <div class="col-xl-4 col-md-6 portfolio-item filter-product">
          <div class="portfolio-wrap">
          <a href="img/hujan.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="img/hujan.jpg" class="img-fluid" alt=""></a>
          <div class="portfolio-info">
            <h4><a href="/Hujan-Mikroplastik-di-Paris:Fenomena-Baru-yang-Buruk">Hujan Mikroplastik di Paris: Fenomena Baru yang Buruk</a></h4>
            <p>Ibu kota Perancis ini akan dihujani oleh miliaran partikel mikroplastik yang menurut perkiraan cuaca dikatakan sebagai polusi plastik pertama dan diprediksi akan membawa sekitar 40 hingga 48 kilogram mikroplastik yang akan menyelimuti kota Paris setiap 24 jam.</p>
            <button class="btn-com"><a href="/Hujan-Mikroplastik-di-Paris:Fenomena-Baru-yang-Buruk">Baca artikel</a></button>
          </div>
          </div>
          </div><!-- End Portfolio Item -->
          
          <div class="col-xl-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
          <a href="img/straw.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="img/straw.jpg" class="img-fluid" alt=""></a>
          <div class="portfolio-info">
            <h4><a href="/Bahaya-Oxodegradable:Solusi-yang-Menjadi-Masalah-Baru">Bahaya Oxodegradable: Solusi yang Menjadi Masalah Baru</a></h4>
            <p>Istilah plastik biodegradable bukanlah jawaban yang tepat dalam mengurangi pencemaran. Plastik jenis ini hanya bisa ‘hancur’ secara sempurna dalam kondisi lingkungan yang seringkali hanya ditemukan pada industrial composter.</p>
            <button class="btn-com"><a href="/Bahaya-Oxodegradable:Solusi-yang-Menjadi-Masalah-Baru">Baca artikel</a></button>
          </div>
          </div>
          </div><!-- End Portfolio Item -->
      </div><!-- End Portfolio Container -->
    </div>
  </div>
  </section><!-- End Artikel Section -->

@endsection