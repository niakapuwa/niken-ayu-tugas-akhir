<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Beridampak | @yield('title')</title>

  <meta content="HTML, CSS, JavaScript, PHP" name="description">
  <meta content="Microplastic" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="img/favicon_io/favicon.ico">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-icons/bootstrap-icons.css">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <!-- Header id="header" class="fixed-top"-->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h2 class="logo me-auto me-lg-0"><a href="#">Beridampak</a></h2>

      <nav id="navbar" class="navbar order-last oreder-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Profil</a></li>
          <li><a class="nav-link scrollto" href="#lokasi">Tantangan</a></li>
          <li><a class="nav-link scrollto" href="/tantangan">Keluar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  @yield('konten')
  <!-- Footer -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="/" class="logo d-flex align-items-center"><span>Beridampak</span></a>
          <p>Bantu Beridampak agar dapat terus memberikan informasi terbaru dan terbaik dengan mengirim kritik dan saran membangun di bawah.</p>
          <form>
            <div class="input-group mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
              <div class="input-group-append">
                <button class="btn-get" type="button">Kirim</button>
              </div>
            </div>
          </form>
          <div class="social-links d-flex mt-4">
            <a href="https://www.instagram.com/pxrtrait.niakapuwa/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/niken-wardhana/" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Kategori</h4>
          <ul>
            <li><a href="#">Jenis Sampah</a></li>
            <li><a href="#">Mikroplastik</a></li>
            <li><a href="#">Penanggulangan</a></li>
            <li><a href="#">Tantangan</a></li>
            <li><a href="#">Produk Non-Mikroplastik</a></li>
            <li><a href="#">Tempat Daur Ulang</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Customer Care</h4>
          <ul>
            <li><a href="#">Profil Akun</a></li>
            <li><a href="#">Cara Penggunaan Website</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-links">
          <h4>Halaman</h4>
          <ul>
            <li><a href="#">Artikel</a></li>
            <li><a href="#">Lokasi</a></li>
            <li><a href="#">Tantangan</a></li>
            <li><a href="#">Tentang Kita</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyright">
    &copy; Copyright <strong><span>Beridampak</span></strong> All Rights Reserved
  </div>
  <script src="css/bootstrap/js/jquery.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="css/main.js"></script>
</body>

</html>