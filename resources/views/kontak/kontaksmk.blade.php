@extends('layout.navbar')
@section('content')
@section('title', 'kontak')
<br><br><br><br>

<link rel="stylesheet" href="{{ asset('assets/utama.css') }}">


<div class="container-kontak">
  <div class="row">
    <div class="col">
      <div class="about-us">

        <h1 class='text-warning'>SMKS Nusantara Banyuwangi</h1>
        <p class='text-white'>Selamat datang di website resmi SMKS Nusantara Banyuwangi, terletak JL. K Mujahid Gunung Sari, Gn. Sari, Sambirejo, Kec. Bangorejo, Kabupaten Banyuwangi, Jawa Timur 68487.</p>
        <div class="contact-info">
            <p class='text-white'><span class="icon">📍</span> JL. K Mujahid Gunung Sari, Gn. Sari, Sambirejo, Kec. Bangorejo, Kabupaten Banyuwangi, Jawa Timur 68487</p>
            <p class='text-white'><span class="icon">📞</span> (0333) 3910297</p>
            <p class='text-white'><span class="icon">✉️</span> smknst_114@yahoo.co.id</p>
        </div>
      </div>
      
    </div>
    
    <div class="col">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15784.052338370535!2d114.1800486!3d-8.4981078!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd3f883ffffffff%3A0x9ad7d582e362cc08!2sSMK%20Nusantara%20Banyuwangi!5e0!3m2!1sid!2sid!4v1719926092210!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
  </div>

</div>

@endsection