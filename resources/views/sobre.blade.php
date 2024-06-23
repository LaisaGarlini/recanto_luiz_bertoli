@extends('layout.app')
@section('title', $title)
@section('content')

<style>
    .full-width-container {
        width: 100%;
        height: 100%;
    }
    .half-width-column {
        width: 48%;
        float: left;
        padding: 15px;
    }
    .half-width-column_mapa {
        width: 52%;
        height: 100%;
        float: left;
    }
</style>
<div class="full-width-container">
    <div class="half-width-column">
        <h1 class="featurette-heading fw-normal lh-1">Sobre <span class="text-body-secondary"></span></h1>
        <p class="lead">Administrado pela Congregação das Pequenas Missionárias de Maria Imaculada o Recanto Luiz
            Bertoli é um Instituto de Longa Permanência para Idosos – seu público alvo é idosos de 60 anos ou mais, de
            ambos os sexos, com diversos graus de dependência.
        </p>
    </div>
    <div class="half-width-column_mapa">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" 
            src="https://scontent.flaj2-1.fna.fbcdn.net/v/t39.30808-6/439026203_825547479606581_3355319321593237389_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_ohc=Fp4RIKjPgDQQ7kNvgFZJTdK&_nc_ht=scontent.flaj2-1.fna&oh=00_AYD05M3_zgKMqs6WMSxkRf0yyTkIojnMEqjaPmliQquH4g&oe=667A8BB5"
            role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
    </div>
</div>

<!-- <div class="row featurette">
    <div class="col-md-7" style="padding: 15px;">
        <h1 class="featurette-heading fw-normal lh-1">Sobre <span class="text-body-secondary"></span></h1>
        <p class="lead">Administrado pela Congregação das Pequenas Missionárias de Maria Imaculada o Recanto Luiz
            Bertoli é um Instituto de Longa Permanência para Idosos – seu público alvo é idosos de 60 anos ou mais, de
            ambos os sexos, com diversos graus de dependência.
        </p>
    </div>
    <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500"
            src="https://scontent.flaj2-1.fna.fbcdn.net/v/t39.30808-6/439026203_825547479606581_3355319321593237389_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_ohc=Fp4RIKjPgDQQ7kNvgFZJTdK&_nc_ht=scontent.flaj2-1.fna&oh=00_AYD05M3_zgKMqs6WMSxkRf0yyTkIojnMEqjaPmliQquH4g&oe=667A8BB5"
            role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%"
            fill="var(--bs-secondary-color)" dy=".3em"></text></img>
    </div>
</div> -->

@endsection