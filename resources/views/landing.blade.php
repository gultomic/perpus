@extends('layouts.public')
@section('title', 'DIGILIB')
@section('content')
<!-- ==== Intro Area Start ==== -->
<div class="intro">
  <!-- Logo -->
  <br><br><br><br><br><br>
  <center>
  <a href="#" class="logo"> 
    <img src="img/logo.png" alt="logo">
  </a>
  </center>

  <!-- Intro Text -->
  <div class="intro-content">
    <center><h2>DIGITAL LIBRARY<br> TINGKAT <span>SMP</span></h2></center>
    <center><p>Silahkan klik "info" untuk lihat informasi Perpustakaan atau klik "mulai" untuk memulai Aplikasi</p></center>
    <br>
    <center>
      @guest
        <a href="#subscribe" class="site-btn popup">LogIn</a>
        <a href="#register" class="site-btn popup">Daftar</a>
      @else
        <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" 
          class="site-btn popup">
          LogOut
        </a>
        <a href="#register" class="site-btn popup disabled">Daftar</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      @endguest
      <button class="site-btn" id="go_about">Info</button>
      <button class="site-btn go_menu">Mulai</button>
    </center>
  </div>

  <!-- Social Links -->
  <!--
  <div class="social">
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-google-plus"></i></a>
    <a href="#"><i class="fa fa-vimeo"></i></a>
  </div>
  -->
</div>

<!-- Switch button -->
<div class="switch">
  <span class="bar-one"></span>
  <span class="bar-two"></span>
  <span class="bar-three"></span>
</div>
<!-- ==== Intro Area End ==== -->
<div class="right-warp">

  <!-- About Content -->
  <div class="about-content spad">
    <h2>DIGITAL LIBRARY</h2>
    <p>
    Digital Library merupakan layanan perpustakaan dalam bentuk digital. Anda dapat menggunakan Teknologi ini untuk keperluan Pendidikan dan Ilmu Pengetahuan lain.<br>
    Di dalam Aplikasi ini terdapat konten-konten secara digital dan masih berkaitan dengan Perpustakaan konvensional. Konten tersebut antara lain, Konten Sumber Buku | Konten Ebook | Konten CD Pembelajaran | Konten Video | Konten Audio | Konten Foto <br>
    Semua transaksi peminjaman buku dll dilakukan secara otomatis dan komputerisasai, sehingga mempermudah administrasi perpustakaan.<br>
    Bagi anda pengguna baru, silahkan lakukan registrasi Member Baru agar terdaftar di database Perpustakaan sebagai member.
    </p>
  </div>

  <!-- Service Items -->
  <div class="services-area spad">
    <div class="row">
      <!-- item -->
      <div class="col-sm-6 service-item">
        <i class="fa fa-compass"></i>
        <h4>Sumber Buku</h4>
        <p>Berisi informasi isi koleksi buku yang ada di perpustakaan letak dan posisi buku tersebut berada</p>
      </div>
      <!-- item -->
      <div class="col-sm-6 service-item">
        <i class="fa fa-cube"></i>
        <h4>Konten Ebook</h4>
        <p>Buku digital atau Ebook merupakan buku digital yang dapat di unduh atau dibaca di tempat.</p>
      </div>
      <!-- item -->
      <div class="col-sm-6 service-item">
        <i class="fa fa-cog"></i>
        <h4>Konten CD Pembelajaran</h4>
        <p>Berisi koleksi cd pembelajaran interaktif anda dapat melihat dan mengunduhnya</p>
      </div>
      <!-- item -->
      <div class="col-sm-6 service-item">
        <i class="fa fa-cog"></i>
        <h4>Konten Video</h4>
        <p>Berisi koleksi video pembelajaran dan koleksi video sekolah, anda dapat melihat dan mengunduhnya</p>
      </div>
      <!-- item -->
      <div class="col-sm-6 service-item">
        <i class="fa fa-bar-chart"></i>
        <h4>Konten Audio</h4>
        <p>Berisi koleksi Audio yang dapat di dengarkan secara lansung dan anda dapat mengunduhnya</p>
      </div>
      <!-- item -->
      <div class="col-sm-6 service-item">
        <i class="fa fa-bar-chart"></i>
        <h4>Konten Gambar</h4>
        <p>Berisi koleksi Gambar yang belum tentu ada di perpustakaan Anda dapat melihat dan mengunduhnya</p>
      </div>
    </div>
  </div>

  <!-- Contact Area -->
  <div class="contact-area spad">

    <!-- Contact info -->
    <!--
    <div class="row">
      <div class="col-sm-4 con-item">
        <div class="con-icon">
          <i class="fa fa-map"></i>
        </div>
        <p>A902, Crosswinds Apt, Western Road, Brighton, East Sussex, Bath</p>
      </div>
      <div class="col-sm-4 con-item">
        <div class="con-icon">
          <i class="fa fa-phone"></i>
        </div>
        <p>+1 (123) 456-7890<br>+1 (234) 456-7981</p>
      </div>
      <div class="col-sm-4 con-item">
        <div class="con-icon">
          <i class="fa fa-send"></i>
        </div>
        <p>domain@gmail.com<br>support@domain.com</p>
      </div>
    </div>
    -->

    <!-- Contact Form -->
    <!--
    <form action="http://ahadhossain.com/bootex/don/mail.php" id="contact-form" method="POST" >
      <div id="form-chack"></div>
      <div class="row">
        <div class="col-sm-6">
          <input type="text" name="name" id="name" required placeholder="Your Name*">
        </div>
        <div class="col-sm-6">
          <input type="email" name="email" id="email" required placeholder="Your Email*">
        </div>
        <div class="col-sm-12">
          <textarea id="massage" name="massage" required placeholder="Your Massage*"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" id="send-form">Massege</button>
        </div>
      </div>
    </form>
    -->
  </div>	
</div>
@endsection
@push('styles')
<style>
  .disabled {
    pointer-events: none;
    cursor: default;
  }
</style>
@endpush
@push('scripts')
<script>
  $('.disabled').click(function(e){
    e.preventDefault();
  })
</script>
@endpush