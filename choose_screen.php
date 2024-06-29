<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 'On');
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
isLogged($sid);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Painel Conecta4G - gerencie seu app sem complexibilidade e aproveite todas as funções que ele lhe proporciona">
  <meta name="author" content="VEM_BRABO">
  <title>menu X PLUS</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <script src="https://kit.fontawesome.com/d09e941168.js" crossorigin="anonymous"></script>
  
  
  
  

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
      background: radial-gradient(circle at 50% -20.71%, #a3a7ff 0, #7a8ffc 25%, #3c78f2 50%, #0063e8 75%, #0051de 100%);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-color: #333;
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px); /* Suporte para navegadores WebKit */
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      overflow-y: scroll;
      position: relative;
    }
    
    body::before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  background: linear-gradient(45deg, #ff0000, #00ff00, #0000ff, #ff0000);
  background-size: 400% 400%;
  animation: gradientAnimation 10s ease infinite;
}

@keyframes gradientAnimation {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      padding: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .card {
  backdrop-filter: blur(2px);
  -webkit-backdrop-filter: blur(2px);
  background-color: rgba(255, 255, 255, 0.5);
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin: 15px;
  width: calc(50% - 30px);
  text-align: center;
  box-shadow: 0 4px 4px rgba(0, 0, 0, 0.9);
  border-radius: 8px;
  transition: transform 0.3s ease-in-out;
  animation-duration: 2s;
  color: #333;
}



    .card:hover {
      transform: translateY(-5px);
    }

    .card-icon {
      font-size: 48px;
      margin-bottom: 10px;
      color: #333;
    }

    .card-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #333;
    }

    .card-description {
      font-size: 14px;
      color: #888;
    }
    
    .card1 {
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    border-radius: 25px;
    margin-left: 50px;
    margin-right: 50px;
  }

    .footer {
      text-align: center;
      margin-top: 40px;
      margin-left: 50px;
      margin-right: 50px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      border-radius: 20px;
      color: black;
      font-size: 20px;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    @media (min-width: 768px) {
      .card {
        width: calc(33.33% - 30px);
      }
    }
    
    .rotatergb {
  animation: rotatergb 4s linear alternate infinite;
}

@keyframes rotatergb {
  0%   { filter: hue-rotate(0deg); }
  25%  { filter: hue-rotate(90deg); }
  50%  { filter: hue-rotate(180deg); }
  75%  { filter: hue-rotate(270deg); }
  100% { filter: hue-rotate(360deg); }
}

.content-title {
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}
  </style>
</head>
<body>
<br>
<!-- banner -->
<center>
<a href="https://t.me/VEM_BRABO">
<img class="mt-5" src="<?= htmlspecialchars(getConfig('logo')) ?>" width="<?= htmlspecialchars(getConfig('largura')) ?>" height="<?= htmlspecialchars(getConfig('altura')) ?>"></a>
<br><br>

<div class="card1 animate__animated animate__fadeInUp"><p>
  <b>Olá </b><b><?= html_entity_decode(htmlspecialchars(getNickById($uid))) ?></b><br>
  <div class="alerts light-theme card-notification">
  <h2 class="alerts-title">CENTRAL DE NOTIFICAÇÃO</h2>
  <div class="alerts-content">
    <p class="alerts-description"><?= html_entity_decode(gettextmsg('texto_msg')) ?></p><br>
  </div>
</div>
</div>

  
    <div class="container">
    
     <div>
    <h4 class="animate__fadeInRight">
    OPÇÕES DE PAINEIS</h4>
    <hr>
    </div>
    
    <a href="https://www.radioaeromix.com.br/" class="card animate__animated animate__fadeInRight vendas-card">
      <i class="fa-solid fa-face-grin-wide card-icon"></i>
      <h3 class="card-title">AO VIVO</h3>
      <p class="card-description">Rádio Aéro Mix</p>
    </a>
        
    <a href="home.php" class="card animate__animated animate__fadeInRight vendas-card">
      <i class="fa-solid fa-face-grin-wide card-icon"></i>
      <h3 class="card-title">DASH C4G</h3>
      <p class="card-description">Painel C4G</p>
    </a>
    
    <a href="#" class="card animate__animated animate__fadeInRight vendas-card">
      <i class="fa-solid fa-face-grin-hearts card-icon"></i>
      <h3 class="card-title">ATLAS</h3>
      <p class="card-description">painel ssh vip</p>
    </a>
    
    <a href="https://gltunnelvip.alphi.media/" class="card animate__animated animate__fadeInRight vendas-card">
      <i class="fa-solid fa-face-grin-hearts card-icon"></i>
      <h3 class="card-title">GL PAINEL</h3>
      <p class="card-description">5 reais mensal</p>
    </a>
    
    <a href="https://vembrabo.alphi.media/any/" class="card animate__animated animate__fadeInRight vendas-card">
      <i class="fa-solid fa-face-grin-hearts card-icon"></i>
      <h3 class="card-title">ANY MOD</h3>
      <p class="card-description">painel any mod</p>
    </a>
    
    <a href="https://vembrabo.alphi.media/painelweb/login.php" class="card animate__animated animate__fadeInRight vendas-card">
      <i class="fa-solid fa-face-grin-hearts card-icon"></i>
      <h3 class="card-title">PAINEL SSH</h3>
      <p class="card-description">painel web ssh</p>
    </a>
    
    <div>
    <h4 class="animate__fadeInRight">
    OPÇÕES DE VENDAS</h4>
    <hr>
    </div>
    
    <a href="./vps" class="card animate__animated animate__fadeInRight vendas-card">
      <i class="fa-solid fa-face-grin-hearts card-icon"></i>
      <h3 class="card-title">VENDAS</h3>
      <p class="card-description">Logins SSH</p>
    </a>
    
    <a href="https://vembrabo.alphi.media/vendas_scannyvpn" class="card animate__animated animate__fadeInRight vendas-card">
      <i class="fa-solid fa-face-grin-hearts card-icon"></i>
      <h3 class="card-title">VENDAS</h3>
      <p class="card-description">App ScannyVPN</p>
    </a>
    
    <?php
if (isset($_GET['acao']) && $_GET['acao'] === 'sair') {
  $sql = $conn->prepare("DELETE FROM sessao WHERE id = ?");
  $sql->execute([$sid]);

  session_start();
  session_destroy();
  header("Location: /");
  exit();
}
?>
<a href="?acao=sair" class="card animate__animated animate__fadeInRight vendas-card">
  <i class="fas fa-stop-circle card-icon"></i>
  <h3 class="card-title">SAIR</h3>
  <p class="card-description">sair da sessão</p>
</a>
    
    <div class="right-details">
    <p class="content-title">
    <h1 style="text-align:center"><span style="color:#00a3f7">H</span><span style="color:#00a5f4">O</span><span style="color:#00a7f1">S</span><span style="color:#00a9ee">P</span><span style="color:#00abeb">E</span><span style="color:#00ade8">D</span><span style="color:#00afe5">A</span><span style="color:#00b1e2">G</span><span style="color:#00b3df">E</span><span style="color:#00b5dc">M</span> <span style="color:#00bad6">P</span><span style="color:#00bcd3">O</span><span style="color:#00bed0">R</span> <span style="color:#00c2ca">A</span><span style="color:#00c4c7">P</span><span style="color:#00c6c4">E</span><span style="color:#00c8c1">N</span><span style="color:#00cabe">A</span><span style="color:#00ccbb">S</span> <span style="color:#00d1b4">1</span><span style="color:#00d3b1">0</span> <span style="color:#00d7ab">R</span><span style="color:#00d9a8">E</span><span style="color:#00dba5">A</span><span style="color:#00dda2">I</span><span style="color:#00df9f">S</span> <span style="color:#00e399">M</span><span style="color:#00e596">E</span><span style="color:#00e893">N</span><span style="color:#00ea90">S</span><span style="color:#00ec8d">A</span><span style="color:#00ee8a">L</span> <span style="color:#00f284">A</span><span style="color:#00f481">B</span><span style="color:#00f67e">A</span><span style="color:#00f87b">I</span><span style="color:#00fa78">X</span><span style="color:#00fc75">O</span></h1>
    </p>
    <a href="https://alphimedia.com/loja/aff.php?aff=565" target="_blank"><img src="https://alphimedia.com/wp-content/uploads/2022/04/alphimedia_250x250.gif" width="250" height="250" border="0"></a></div>
    
    
  
                        
                        
    <footer class="footer">Desenvolvido por <strong><svg height="11.000000pt"preserveAspectRatio="xMidYMid meet"version="1.0"viewBox="0 0 49.000000 52.000000"width="11.000000pt"xmlns="http://www.w3.org/2000/svg"><g fill="#3390ec"stroke="none"transform="matrix(0.1, 0, 0, -0.1, 0.613139, 48.262775)"><rect height="203.212"style="stroke:#000;fill:#fff"transform="matrix(1, 0, 0, -1, 0, 0)"width="237.372"x="105.986"y="-337.226"></rect><g fill="#3390ec"stroke="none"transform="matrix(1, 0, 0, 1, -15.766434, 2.627754)"><path d="M157 444 c-16 -32 -21 -35 -55 -32 l-37 3 3 -37 c3 -34 0 -39 -32 -55 l-35 -16 20 -34 21 -33 -21 -33 -20 -34 35 -16 c32 -16 35 -21 32 -55 l-3 -37 37 3 c34 3 39 0 55 -32 l16 -35 34 20 33 21 33 -21 34 -20 16 35 c16 32 21 35 55 32 l37 -3 -3 37 c-3 34 0 39 32 55 l35 16 -20 34 -21 33 21 33 20 34 -35 16 c-32 16 -35 21 -32 55 l3 37 -37 -3 c-34 -3 -39 0 -55 32 l-16 35 -34 -20 -33 -21 -33 21 -34 20 -16 -35z m191 -142 c2 -7 -28 -45 -67 -85 l-72 -71 -42 42 c-39 39 -41 43 -24 59 16 16 18 16 40 -5 l23 -22 49 51 c49 49 83 60 93 31z"></path></g></g></svg> @VEM_BRABO</strong>
    </footer>
  </div>
  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

  <script>
    new WOW().init();
  </script>

</body>
</html>

