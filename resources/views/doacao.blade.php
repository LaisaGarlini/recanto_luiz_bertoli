@extends('layout.app')
@section('title', $title)
@section('content')

<style>
    .full-width-container {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
    }
    .half-width-column {
        width: 80%; /* Ajuste a largura conforme necessário */
        padding: 15px;
    }
    .qr-code {
        margin-top: 20px; /* Espaço adicional acima do QR Code */
    }
    .list-unstyled{
        list-style-type: none; /* Remove os marcadores padrão das listas */
        padding: 0; /* Remove o espaçamento interno padrão das listas */
    }
</style>

<div class="full-width-container">
    <div class="half-width-column">
        <h1 class="featurette-heading fw-normal lh-1">PIX SOLIDÁRIO <span class="text-body-secondary"></span></h1>
        <p class="lead">Ajude o IPMMI Recanto Luiz Bertoli através do Pix Solidário!<br>
            Escaneie o QR Code ou utilize os dados bancários abaixo:
        </p>
        <img src="http://127.0.0.1:8000/images/qrcode.png" alt="qr_code" width="300" height="300" class="qr-code">
        <ul class="list-unstyled">
            <li>Banco: Banco do Brasil</li>
            <li>Agência: 2545-3</li>
            <li>Conta Corrente: 10391-8</li>
            <li>Titular: IPMMI Recanto Luiz Bertoli</li>
        </ul>
        <p>Você também pode ajudar com alimentos, produtos de higiene pessoal, agasalhos e roupa de cama.</p>
    </div>
</div>

@endsection
