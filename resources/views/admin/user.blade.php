@extends('layout.main')
@section('title', '| User')

@section('konten')
<!-- ======= Up Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
     <div class="col-xl-11 col-lg-8">
        <h2><span>Halo, User</span></h2>
        <h2><span>Sudah menebar kebaikan untuk bumi hari ini?</span></h2>
        <p>Poin tantangan kamu: 0</p>
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
        <td>Niken Ayu</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>nikenayu@gmail.com</td>
    </tr>
    <tr>
        <td>Kota Tinggal</td>
        <td>Sidoarjo</td>
    </tr>
    <tr>
        <td>Nomor HP</td>
        <td>0811111111</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>Perempuan</td>
    </tr>
    <tr>
        <td>Password</td>
        <td>abcdefggh</td>
    </tr>
    <tr>
      <td>Ganti Password</td>
      <td><input type="Password" name="password" class="form-control" id="pass" placeholder="Enter your password" required></td>
  </tr>
  </table>
  <div class="col-sm-12 form-group mb-0">
    <button class="btn-get float-center mt-1">Ubah data</button>
  </div>
</section>
<!-- End user -->

@endsection

<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beridampak | User Page</title>

    <meta content="HTML, CSS, JavaScript, PHP" name="description">
    <meta content="Microplastic" name="keywords">

    // Favicons
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    // Google Fonts
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-icons/bootstrap-icons.css">

    // Template Main CSS File
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <div class="container bootstrap snippets bootdey">
    <div class="row">
      <div class="profile-nav col-md-3">
        <div class="panel">
          <div class="user-heading">
            <h1>Niken</h1>
            <p>Total Poin: </p>
          </div>
          <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="#"> <i class="fa fa-user"></i>Data diri</a></li>
          <li><a href="#"> <i class="fa fa-edit"></i>Tantangan</a></li>
          </ul>
        </div>
      </div>
    <div class="profile-info col-md-9">
      <div class="panel">
        <div class="bio-graph-heading">
          Data diri
        </div>
        <div class="panel-body bio-graph-info">
          <div class="row">
            <div class="bio-row">
              <p><span>Nomor HP</span>: 0824575243</p>
            </div>
            <div class="bio-row">
              <p><span>Alamat</span>: Australia</p>
            </div>
            <div class="bio-row">
              <p><span>Email</span>: niken@gmail.com</p>
            </div>
            <div class="bio-row">
              <p><span>Password</span>: **********</p>
            </div>
            <a class='btn btn-warning btn-sm-center' href="{{ url('/admin/detail-user') }}">Ubah data diri</a>
          </div>
        </div>
      </div>
  <div>
    <div class="bio-graph-heading">
      Tantangan
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="panel">
          <div class="panel-body">
            <div class="bio-chart">
              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="35" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;">
              </div>
            </div>
            <div class="bio-desk">
              <h4 class="purple">Envato Website</h4>
                <p>Started : 15 July</p>
                <p>Deadline : 15 August</p>
                <a class='btn btn-warning btn-sm-center' href="{{ url('/admin/detail-user') }}">Ambil tantangan</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel">
          <div class="panel-body">
            <div class="bio-chart">
              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="63" data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; -webkit-appearance: none; background: none;">
              </div>
            </div>
          <div class="bio-desk">
            <h4 class="terques">ThemeForest CMS </h4>
              <p>Started : 15 July</p>
              <p>Deadline : 15 August</p>
              <a class='btn btn-warning btn-sm-center' href="{{ url('/admin/detail-user') }}">Ambil tantangan</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript"></script>
</body>
</html>
-->