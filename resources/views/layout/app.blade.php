<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo_sem_fundo.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
        
    <style>
        body {
            font-family: 'Dosis', sans-serif;
            
        }
        
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>@yield('title')</title>
</head>

<body>
    <header style="background-color: #bfdbfe; font-weight:500;">
        <nav class="navbar navbar-expand-lg navbar-light" style="  box-shadow: 0 10px 20px rgba(0, 0, 0, .2);">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo_sem_fundo.png') }}" width="100" height="50"
                    class="d-inline-block align-top" alt="Logo do IPMMI Recanto Luiz Bertoli">
            </a>
            <div class="collapse navbar-collapse fs-4" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contato">Contatos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/comentario">Comentários/Feedback</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <section id="conteudo" style="height: calc(100vh - 110px);">
        @yield('content')
    </section>

    <footer class="fixed-bottom d-flex align-items-center" style="height: 5%; padding-left: 10px; background-color: #bfdbfe; ">
        <p class="m-0">INSTITUTO DA PEQUENAS MISSIONÁRIAS DE MARIA IMACULADA - (47) 3543-0131 - Av Luiz Bertoli, 585, Rio d'Oeste, SC, Brazil, 89180-000</p>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</html>