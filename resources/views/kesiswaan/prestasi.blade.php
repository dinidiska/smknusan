@extends('layout.navbar')
@section('content')

<link rel="stylesheet" href="{{ asset('assets/utama.css') }}">

<br><br><br><br><br><br>

    <div class="container-fluid">
        <center><h2 class="text-success"><b>Prestasi Siswa</b></H2></center> 
          <br></br>
        <div class="row">
         
          <br></br>
      
          <div class="news-container">
            @foreach ($prestasi as $item)
                <div class="news-card">
                    <img src="{{ asset($item->image_url) }}" alt="News Image">
                    <br></br>
                    <div class="news-content">
                        <h5 class="news-title">{{ $item->title }}</h5>
                        <p class="news-description">{{ $item->description }}</p>

                    </div>
                </div>
            @endforeach
      
      </div>
</div>

@endsection