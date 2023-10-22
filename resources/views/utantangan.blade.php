@extends('layout.main2')
@section('title', 'Tantangan')

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
    <h4>Ini challenge pertama</h4>
      <p>akan ada tantangan untuk pengguna. sampai di tahap ini semua masih bisa di akses secara luas.
        User juga bisa mengklik challenge ini dan melihat isi challengenya. tapi saat mengklik button “tantang dirimu” user akan diarahkan ke login form.</p>
        <br>
        <br>
      <button class="btn-center"><a href="/tantangan-1">Berani klik nggak?</a></button>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
  <div class="icon-box">
    <h4>Ini challenge kedua</h4>
      <p>akan ada tantangan untuk pengguna. sampai di tahap ini semua masih bisa di akses secara luas.
        User juga bisa mengklik challenge ini dan melihat isi challengenya. tapi saat mengklik button “tantang dirimu” user akan diarahkan ke login form.</p>
        <br>
        <br>
      <button class="btn-center"><a href="/tantangan-2">Berani klik nggak?</a></button>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
  <div class="icon-box">
    <h4>Ini challenge ketiga</h4>
      <p>akan ada tantangan untuk pengguna. sampai di tahap ini semua masih bisa di akses secara luas.
        User juga bisa mengklik challenge ini dan melihat isi challengenya. tapi saat mengklik button “tantang dirimu” user akan diarahkan ke login form.</p>
        <br>
        <br>
      <button class="btn-center"><a href="/tantangan-3">Berani klik nggak?</a></button>
    </div>
  </div>
 </div>
</div>
</section>
<!-- End challenge -->

@endsection