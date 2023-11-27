@extends('layout.main')
@section('title')

@section('konten')
<div class="login-container">
    <h2 class="login-title">Masuk</h2>
      
    <form class="login-form" method="POST" action="{{ route('login.post') }}">
      @csrf  
      <div>
        <label for="email">Email</label>
        <input id="email" type="email" placeholder="email@email.com" name="email" required/>
      </div>  
      <div>
        <label for="password">Kata Sandi</label>
        <input id="password" type="password" placeholder="Kata sandi" name="password" required/>
      </div>  
    <button class="btn btn--form" type="submit" value="login">Masuk</button>
    </form>
    <small class="d-block text-center mt-2"><a href="/registrasi">Daftar sekarang</a></small>
  </div>

  @endsection