<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
isLogged($sid); ?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Code Livepix</title>
  <style>
    /* Estilo geral */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
    }

    /* Estilo do conteúdo */
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .container h1 {
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 20px;
      color: #ffffff;
      background-color: black;
      border-radius: 20px;
    }

    #qrcode {
      display: block;
      margin: 0 auto;
      max-width: 100%;
      height: auto;
      margin-bottom: 20px;
    }

    #link {
      display: inline-block;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    #link:hover {
      background-color: #0062cc;
    }

    /* Responsividade */
    @media screen and (min-width: 768px) {
      .container {
        padding: 40px;
      }

      .container h1 {
        font-size: 48px;
        margin-bottom: 40px;
      }

      #qrcode {
        max-width: 50%;
      }
    }
  </style>
</head>
<body>
  <br>
  <br>
  <div class="container">
    <h1>AJUDE O PROJETO<p>FAÇA UMA DOAÇÃO</h1>
    <h1>QRCode Imagem</h1>
    <img src="https://api.qrserver.com/v1/create-qr-code/?data=https%3A%2F%2Flivepix.gg%2Fvembrabo&amp;size=200x200" alt="QR Code Livepix" id="qrcode">
    <p><a href="https://livepix.gg/vembrabo" id="link">CLIQUE AQUI PARA DOAR VIA PIX</a></p>
  </div>

    <br>
    <div>
    <center>
    <div class="container">
    <h1>ATENÇÃO</h1>
    <h1>a plataforma de doação não expõe seus dados,tanto para quem paga tanto para quem manda o link, então não fique ocioso de vazar seus dados...a conta pj recebe o pagamento e retorna o valor para a plataforma assim deixando nenhum dados sensíveis visíveis.</h1>
    <h1>GRATO A TODOS QUE COLABORAR</h1>
    </div>
</body>
<br>
</html>
