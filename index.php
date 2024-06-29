<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
require_once($_SERVER['DOCUMENT_ROOT'] . "/login.php");
if (getLogged($sid) == true) {
	header("location: choose_screen.php");
} else {
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<title>Painel Free Conecta4G</title>


<!-- Adiciona o CSS do Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-Mh6+LJQLtUTmM67YHjMby+NoJckKG6kH2Nv3m/FK8hoUa/03E/c/+SxkXQRiVoZmFpi4BvXzv4qGqyZg0oR4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
<head>
<style type="text/css">

    /* Define o estilo para o spinner */
      #spinner {
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 2em;
      }

    body {
      background: linear-gradient(-45deg, #443C68, #060047, #66347F, #62CDFF);
      background-size: 400% 400%;
      animation: gradientBG 9s ease infinite;
    }
    @keyframes gradientBG {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
      .round-iframe {
         border-radius: 20px;
         width: 350px;
         height: 200px;
        }
    }
    
    .rotatergb{ 
  animation: rotatergb 4s linear alternate infinite; 
} 
@keyframes rotatergb{ 
  from{filter: hue-rotate(0deg);} 
  to{filter: hue-rotate(360deg)} 
}
  </style>
<style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        .btn-dark {
            background-color: #181818;
            border: none;
        }
                .btn-red {
            background-color: #CC0605;
            border: none;
        }
        .text-bg-dark {
            background-color: #181818;
        }
        .btn.disabled,
        .btn:disabled,
        fieldset:disabled .btn {
            background-color: #181818;
            border: none;
        }
        iframe {
            border: none !important;
            border-radius: 5px;
            width: 100% !important;
        }
        iframe #recaptcha-anchor {
            border: none !important;
            border-radius: 50px;
            width: 100% !important;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
</style>

<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
<div class="container">
<div class="col-15 d-flex align-items-center justify-content-center  ">


<div class="" style="max-width: 500px; margin: auto; padding: 30px; border-radius: 20px; background: #212529;">
<center>
<div class= "text-white">
<h5>FAÇA LOGIN</h5>
</div>
</center>
<br>
<form id="login-form" action="" method="POST" class="mt-1">
<center>

<!-- Form -->
<div class="form-group mb-4 text-white">
<label for="email">Usuário</label>
<div class="input-group">
<input type="text" data-ls-module="charCounter" maxlength="20" class="form-control" style="border-radius: 10px;" placeholder="Usuário max 20 caracteres" name="login" autofocus required>
</div>
</div>
<!-- End of Form -->

<!-- Início Modal Cadastro -->
<div class="form-group">
<!-- Form -->
<div class="form-group mb-4 text-white">
<label for="password">Senha</label>
<div class="input-group">
<input type="password" data-ls-module="charCounter" maxlength="20" placeholder="Senha max 20 caracteres" class="form-control " style="border-radius: 10px;" name="senha" required>
</div>
</div>
<!-- End of Form -->

<div class="d-flex justify-content-between align-items-top mb-4">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="remember">
<label class="form-check-label text-white mb-0" for="remember">
Lembre-me</label>
</div>
</div>
</div>


<div class="d-grid">
<button type="submit" name="btn_login" class="w-100 btn btn-lg btn-dark btn-block  d-flex align-items-center justify-content-center text-white text-center">
ENTRAR</button>
<i id="spinner" class="fa fa-spinner fa-spin"></i>
</div>
<br>
<div style="float: center;">
<center>
<button class="w-100 btn btn-lg btn-red btn-block d-flex align-items-center justify-content-center text-white"    type="button" data-ls-module="charCounter" maxlength="10" data-bs-toggle="modal" data-bs-target="#modal-novo-usuario">
CRIAR CONTA
</button>
</div>
</form>


<div class="d-flex justify-content-center align-items-center mt-4">
<span class="fw-normal">
<a href="https://t.me/VEM_BRABO" class="fw-bold text-white">© PAINEL CONECTA4G</a>
</span>
</div>
</div>
</div>
</div>
         


 <!-- Adiciona o script do jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      $(function() {
        // Esconde o spinner quando a página é carregada
        $('#spinner').hide();
        // Adiciona o evento submit ao formulário
        $('#login-form').submit(function() {
          // Mostra o spinner quando o formulário é enviado
          $('#spinner').show();
        });
      });
    </script>

    <script language="JavaScript">
    function protegercodigo() {
    if (event.button==2||event.button==3){
        alert('Codigo protegido!');}
    }
    document.onmousedown=protegercodigo
</script>
       
    </section>
    </main>



    <!------------------------------------------------------------------------------------>

    <!-- MODAL CONFIG USUÁRIO -->

    <!------------------------------------------------------------------------------------>

<div class="modal fade bg-transparent"  id="modal-novo-usuario" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    
<div style="padding: 20px;" class="modal-dialog modal-dialog-centered" role="document">

<div style="max-width: 800px; margin: auto; border: 1px solid #212529;  border-radius: 20px; background:linear-gradient(to right, #443C68, #212529, #66347F, #212529);" class="modal-content">
<center>
<br>
<br>



<h1 class="h3 mb-3 fw-normal text-white">
CADASTRAR
</h1>


<h3 class="h3 mb-3 fw-normal text-white">
SE COMPROU ACESSO A ESSE LINK<br>VOCÊ FOI ENGANADO<br>PEÇA REEMBOLSO
</h3>
</center>


<div class="modal-body">
  <form action="adicionar.php?acao=cadastrousuario" method="post">
    <div class="form-group">
      <label style="color: white" for="nome">Nome</label>
      <input type="text" name="nome" data-ls-module="charCounter" maxlength="10" style="border-radius: 10px;" class="form-control" placeholder="máximo 10 caracteres" required>
    </div>

<div class="form-group">
  <label style="color: white" for="login">Login</label>
  <input type="text" name="login" data-ls-module="charCounter" maxlength="10" style="border-radius: 10px;" class="form-control" placeholder="máximo 10 caracteres" required>
</div>

<div class="form-group">
  <label style="color: white" for="senha">Senha</label>
  <input type="password" name="senha" data-ls-module="charCounter" maxlength="10" style="border-radius: 10px;" class="form-control" placeholder="máximo 10 caracteres" required>
</div>


<!-- MENU DESATIVADO -->
<!-- <div class="form-group">
  <label style="color: white" for="pasta_nova">Pasta atualização</label>
  <input type="text" name="pasta_nova" data-ls-module="charCounter" maxlength="10" style="border-radius: 10px;" class="form-control" placeholder="máximo 10 caracteres" required>
</div> -->
<br>

<div id="liveAlertPlaceholder"></div>   
<button type="submit" name="cadastrar_usuario" class="w-100 btn btn-lg btn-dark btn-block d-flex align-items-center justify-content-center text-white text-center">
  REGISTRAR
</button>
</form>
  <br>
  <button type="button" class="w-100 btn btn-lg btn-danger btn-block d-flex align-items-center justify-content-center text-white text-center" data-bs-dismiss="modal">
    CANCELAR
  </button>
  <br>
  <font color="#ffffff">
    CASO SEU USUÁRIO E SENHA<br>NÃO LOGUE CRIE UM NOVO.
  </font>
</div>
</div>
</div>
</div>

<head>


<?php

}
                                
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/rodape.php"); ?>
