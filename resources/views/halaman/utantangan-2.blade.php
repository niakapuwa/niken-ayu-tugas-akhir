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
    <form method="POST" action="{{ route('second-challenge.post') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="formFile" class="form-label">Bersepeda saat berpergian</label>
        <input name="challengeItem1" class="form-control" type="file" accept="image/* required">
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Memakai kendaraan umum saat berpergian</label>
        <input name="challengeItem2" class="form-control" type="file" accept="image/* required">
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Jalan kaki saat berpergian</label>
        <input name="challengeItem3" class="form-control" type="file" accept="image/* required">
      </div>
      <div>
        <input class="form-control" id="formFile" name="user_id" value="{{ Auth::user()->id }}" hidden>
      </div>
      <button class="btn-com" type="submit">Selesaikan tantangan</button>
    </form>
  </div>
</section>
<!-- End Tantangan -->
@endsection