@extends('layout.main')
@section('title', '| Tantangan')

@section('konten')
<!-- ======= Up Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
     <div class="col-xl-11 col-lg-8">
        <h2><span>Wow terpantau kamu suka tantangan yaa!</span></h2>
        <p>Langkah yang tepat! Disini kamu bisa menantang dirimu sendiri dengan beberapa challenge yang telah disiapkan. Tenang, challenge nya mudah kok!</p>
        <p>Challenge - challenge ini bisa diikuti baik bagi kalian yang sudah lama hidup eco living atau yang baru ingin memulai hidup eco living.</p>
      </div>
    </div>
  </div>
</section> <!-- End Up Section -->
<!-- ======= challenge ======= -->
<section id="lokasi" class="services">
  <div class="container" data-aos="fade-up">
  <div class="section-title">
    <p>Banyak tantangan yang menanti dirimu disini</p>
  </div>

  <div class="row">
  <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
  <div class="icon-box">
    <h4>Sehari memakai barang guna ulang</h4>
      <p>Coba sehari jajan di luar dengan memakai tempat minum dan makan sendiri dari rumah! Jangan lupa sedotan stainless juga ya!</p>
        <br>
        <br>
      <form action="/tantangan-1">
      <button class="btn-center" type="submit">Berani klik nggak?</button>
      </form>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
  <div class="icon-box">
    <h4>Mengurangi polusi mikroplastik dari ban kendaraan</h4>
      <p>Sehari belajar mengurangi polusi mikroplastik dari ban kendaraan.</p>
        <br>
        <br>
        <form action="/tantangan-2">
        <button class="btn-center" type="submit">Berani klik nggak?</button>
        </form>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
  <div class="icon-box">
    <h4>Memakai produk non-mikroplastik</h4>
      <p>Tantang dirimu memakai produk ramah lingkungan. Produk bisa kamu beli di supermarket terdekat atau di halaman lokasi website ini.</p>
        <br>
        <br>
        <form action="/tantangan-3">
        <button class="btn-center" type="submit">Berani klik nggak?</button>
        </form>
    </div>
  </div>
 </div>
</div>
</section>
<!-- End challenge -->

@endsection