@extends('layout.app')
@section('title', $title)
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<style>
    .full-width-container {
        width: 100%;
        height: 100vh;
    }
    .half-width-column {
        width: 50%;
        height: 100%;
        float: left;
    }
</style>
<div class="full-width-container">
    <div class="half-width-column">
        <h4>Entre em contato conosco para mais informações!</h4>
        <p>
            <i class="fas fa-phone"></i>
            Telefone: (47) 3543-0131
        </p>
        <p>
            <i class="fab fa-facebook"></i> Facebook:
            <a href="https://www.facebook.com/recantoluizbertoli" target="_blank" class="text-decoration-none text-dark">recantoluizbertoli</a>
        </p>
        <p>
            <i class="fab fa-instagram"></i> Instagram:
            <a href="https://www.instagram.com/ipmmirecantoluizbertoli/" target="_blank" class="text-decoration-none text-dark">ipmmirecantoluizbertoli</a>
        </p>
        <p>
            <i class="fas fa-map-marker-alt"></i> Endereço:
            <a href="https://maps.app.goo.gl/f5pZdrNfFiK36vuG8" target="_blank" class="text-decoration-none text-dark">Av Luiz Bertoli, 585, Rio d'Oeste, SC, Brazil, 89180-000</a>
        </p>
    </div>
    <div class="half-width-column">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3548.962906770827!2d-49.8107178!3d-27.1889026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dfcef771a5028f%3A0x18d83873b3aa5ed3!2sR.%20Lu%C3%ADs%20Bertoli%2C%20n.%20585%20-%20Jardim%20das%20Hort%C3%AAnsias%2C%20Rio%20do%20Oeste%20-%20SC%2C%2089180-000!5e0!3m2!1spt-BR!2sbr!4v1718925675280!5m2!1spt-BR!2sbr" 
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
@endsection