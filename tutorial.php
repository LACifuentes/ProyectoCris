<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
isLogged($sid); ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Painel Conecta4G - gerencie seu app sem complexibilidade e aproveite todas as funções que ele lhe proporciona">
<script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="/static/css/styles.css">
<link rel="stylesheet" href="/static/css/bootstrap.css">
<link rel="stylesheet" href="/static/css/sidebar.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site de Filmes e Séries</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<style>
body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  color: #333;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Estilos para dispositivos móveis */
@media screen and (max-width: 767px) {
  body {
    font-size: 14px;
    padding: 10px;
  }
}

/* Estilos para desktop */
@media screen and (min-width: 768px) {
  body {
    font-size: 18px;
    padding: 20px;
  }
}

.fixed-header {

background: #000000;

position: null;

border-radius: 25px;

color: white;

font-size: 24px;

text-align: center;

}

.fixed-header1 {

background: black;

position: null;

border-radius: 15px;

color: light;

font-size: 18px;

text-align: center;

}

.cor {
color: #ffdc00;
}

.cor1 {
color: #ffdc00;
}

paragrafo {
margin-top: 50px;
}

div {
  margin-top: 5px;
}


</style>
<body>




  <main>


    <div class="fixed-header"
        <div class="paragrafo"
        <h6>MENU DE TUTORIAS</h6>
        
    <section class="section-one">
      <div class="container">
      <div class="cor"
        <h6>Clique na foto para ver os tutoriais</h1>
        
        
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#" data-bs-toggle="modal" data-bs-target="#filme2">
                <img class="card-img-bottom" src="https://vembrabo.alphi.media/imgshare/uploads/poster_2023-03-24-073133.png">
              </a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="https://vembrabo.alphi.media/home.php">
                   retornar para dashboard</a></h4>
                <p class="fixed-header">@VEM_BRABO</p>
              </div>
            </div>
          </div>
          
          

</section>


<!-- ############################################################ -->


<!-- Modal do Tutorial -->

<div class="modal fade" id="filme2" tabindex="-1" aria-labelledby="filme2Label" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="350" height="250" src="https://www.youtube.com/embed/kJQP7kiw5Fk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="fixed-header1"
        <b>ola vamos testar o player de video veremos algo novo</b>
        </div>
         

      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- Final modal Tutorial -->

<script 
src="https://code.jquery.com/jquery-3.6.0.min.js">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js">
</script>


<script type="text/javascript">
  document.onkeydown = function(e) {
    if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 65 || e.keyCode === 88)) {
      return false;
    } else {
      return true;
    }
  };
  document.oncontextmenu = function(e) {
    e.preventDefault();
  };
</script>


</body>
</html>
