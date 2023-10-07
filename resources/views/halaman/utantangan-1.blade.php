@extends('layout.main')
@section('title', 'Tantangan')

@section('konten')
<!-- Tantangan -->
<section id="celen" class="celen">
  <div class="container" data-aos="fade-up">
    <div class="celen-title">
      <p>Sehari memakai barang guna ulang</p>
    </div>
    <div class="video">
      <iframe src=></iframe>
    </div>
    <br>
    <div class="text-center">
      <p>Coba sehari jajan di luar dengan memakai tempat minum dan makan sendiri dari rumah! Jangan lupa sedotan stainless juga ya!</p>
    </div>
    <form method="POST" action="{{ route('challenge.post') }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="formFile" class="form-label">Pakai tumblr sendiri</label>
        <input class="form-control" type="file" id="formFile" name="challengeItem1" required>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Selalu pakai sedotan stainless steel</label>
        <input class="form-control" type="file" id="formFile" name="challengeItem2" required>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Pakai totebag atau tas pakai ulang (reuse)</label>
        <input class="form-control" type="file" id="formFile" name="challengeItem3" required>
      </div>
      <div>
        <input class="form-control" id="formFile" name="user_id" value="{{ Auth::user()->id }}" hidden>
      </div>
      <button class="btn-com" type="submit">Selesaikan Tantangan</button>
  </form>

</section>
<!-- End Tantangan -->
@endsection