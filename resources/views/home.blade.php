@extends('layout.app')
@section('title', $title)
@section('content')
<main>

    <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="bd-placeholder-img" width="100%" height="100%" src="{{ asset('images/home1.jpg') }}"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </img>
                <div class="container">
                    <div class="carousel-caption text-start">
                       
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="{{ asset('images/home2.jpg') }}"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </img>
                <div class="container">
                    <div class="carousel-caption">
                    <h1>Recanto Luiz Bertoli</h1>
                        <p>Desde 1989 cuidando de quem cuidou de você!</p>
                        
                        
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" width="100%" height="100%" src="{{ asset('images/home3.jpg') }}"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </img>
                <div class="container">
                    <div class="carousel-caption text-end">
                       
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <br>
    <div class="container marketing">
<br>
<h1 style="text-align:center; padding:3%;">Alguns serviços que oferecemos</h1>
<br>
        <div class="row" style="padding:padding:3%;">
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                src="{{ asset('images/atv1.jpg') }}" role="img" aria-label="Placeholder"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" style=" font-size: 1.125rem; text-anchor: middle;-webkit-user-select: none;-moz-user-select: none;user-select: none;" />
                </img>
                <br>
                <h2 class="fw-normal">Atividades Físicas</h2>
                <p>Através da música os residentes são contagiados pela alegria dos compassados, estimulando as funções motoras, cognitivas, emocionais e físicas</p>
                
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                src="{{ asset('images/atv2.jpg') }}" role="img" aria-label="Placeholder"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </img>
                <br>
                <h2 class="fw-normal">Estimulação Cognitiva</h2>
                <p>Os jogos em geral desempenham um papel importante para adquirir conhecimentos, conceitos, estimulando a imaginação ajudando a promover o raciocínio lógico.</p>
                <p></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                    src="{{ asset('images/atv3.jpg') }}" role="img" aria-label="Placeholder"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                </img>
                <br>
                <h2 class="fw-normal">Fisioterapia</h2>
                <p>A fisioterapia é crucial para idosos porque melhora o equilíbrio e a coordenação, prevenindo quedas, e ajuda na gestão da dor de condições crônicas, promovendo uma melhor qualidade de vida e independência..</p>
               
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->



        <br>
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2>Quem somos?</h2>
                <p class="lead">O IPMMI- Recanto Luiz Bertoli desenvolve um trabalho há mais de 32 anos na região. Localizada no municipio de Rio do Oeste. Atualmente atendemos 108 idosos provenientes de vários municipios do Alto Vale.
                Sendo uma Instituição de longa permanência para idosos, cujo local é de acolhimento em regime residencial, prevista na proteção social especial de alta complexidade, atende pessoas idosas com 60 anos ou mais, de ambos os sexos, com diferentes necessidades e graus de dependência. Hoje a maior preocupação da Instituição perpassa por garantir uma assistência digna e humanizada aos idosos residentes e manter o ambiente dentro das exigências legais e sanitárias.</p>
            </div>
            <div class="col-md-5">
                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500"  src="{{ asset('images/div1.jpg') }}" role="img" aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" />
                </img>
            </div>
        </div>
<br>
        <hr class="featurette-divider">
        @endsection