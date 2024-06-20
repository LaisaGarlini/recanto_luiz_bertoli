@extends('layout.app')
@section('title',$title)
@section('content')
    <h1>Bem-Vindo ao Sobre</h1>

    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://scontent.flaj2-1.fna.fbcdn.net/v/t39.30808-6/444469135_850584273769568_4424128133179611985_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=auuQ2X5YdBoQ7kNvgEeOmYt&_nc_ht=scontent.flaj2-1.fna&oh=00_AYA5h7ykpqBhsKFIfDFVNpuzAkVcL4wzr1Y0fZ6-Ri-iSw&oe=667A7B98" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://scontent.flaj2-1.fna.fbcdn.net/v/t39.30808-6/444469135_850584273769568_4424128133179611985_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=auuQ2X5YdBoQ7kNvgEeOmYt&_nc_ht=scontent.flaj2-1.fna&oh=00_AYA5h7ykpqBhsKFIfDFVNpuzAkVcL4wzr1Y0fZ6-Ri-iSw&oe=667A7B98" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://scontent.flaj2-1.fna.fbcdn.net/v/t39.30808-6/444469135_850584273769568_4424128133179611985_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=auuQ2X5YdBoQ7kNvgEeOmYt&_nc_ht=scontent.flaj2-1.fna&oh=00_AYA5h7ykpqBhsKFIfDFVNpuzAkVcL4wzr1Y0fZ6-Ri-iSw&oe=667A7B98" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

@endsection