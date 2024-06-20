<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Dosis', sans-serif;
        }
    </style>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <img src="{{ asset('images/logo_sem_fundo.png') }}" alt="Logo do IPMMI Recanto Luiz Bertoli" style="width: 80px;">
        <h1>IPMMI Recanto Luiz Bertoli</h1>
    </header>
    <div>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/sobre">Sobre</a></li>
            <li><a href="/contato">Contato</a></li>
        </ul>
    </div>
    
    <section id="conteudo">
        @yield('content')
    </section>
    <footer>
        <hr>
        <p>INSTITUTO DA PEQUENAS MISSIONÁRIAS DE MARIA IMACULADA - (47) 3543-0131 - Av Luiz Bertoli, 585, Rio d'Oeste, SC, Brazil, 89180-000</p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>