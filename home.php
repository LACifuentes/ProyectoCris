<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
isLogged($sid); ?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="Painel Conecta4G - gerencie seu app sem complexibilidade e aproveite todas as funções que ele lhe proporciona">

<meta name="author" content="VEM_BRABO">
<title>DASHBOARD X PLUS</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  
  <link rel="stylesheet" type="text/css" href="styles.css">
  
  <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

<script src="https://kit.fontawesome.com/d09e941168.js" crossorigin="anonymous">
</script>


<script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5">
</script>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<link rel="stylesheet" href="/static/css/styles.css">
<link rel="stylesheet" href="/static/css/bootstrap.css">
<link rel="stylesheet" href="/static/css/sidebar.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


<link integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

<script async defer src="https://buttons.github.io/buttons.js">
</script>

<script src="//code.jquery.com/jquery-2.1.0.min.js">
</script>

<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet" />


<!-- CSS AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- animate css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />




    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    
	
    <!-- Sweet Alert -->
    <link type="text/css" href="https://vembrabo.alphi.media/assets/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="https://vembrabo.alphi.media/assets/vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="https://vembrabo.alphi.media/assets/css/volt.css" rel="stylesheet">

    <script src="https://vembrabo.alphi.media/assets/js/jquery.min.js"></script>
    
   
<script>   src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
</script>
  
  
  
  <style>
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
    
    .banner {
    margin-bottom: 10px; /* Ajuste o valor conforme necessário */
    border-radius: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

    
    .alerts {
  width: 300px; /* Largura desejada do card */
  margin: 0 auto; /* Centraliza horizontalmente */
  margin-top: 20vh; /* Espaço superior para centralizar verticalmente */
  margin-bottom: 5px; /* Ajuste o valor conforme necessário */
  padding: 20px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);
  border-radius: 8px; /* Ajusta o raio das bordas */
}

.alerts.light-theme {
  background-color: #f808075;
  color: red;
}

.alerts.dark-theme {
  background-color: #333;
  color: #fff;
}

.alerts-title {
  text-align: center;
  font-size: 24px;
  margin-bottom: 10px;
}

.alerts-content {
  margin-bottom: 20px;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  font-weight: bold;
}

.alerts-link {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
}

.alerts-link:hover {
  background-color: #0056b3;
}

    .container-fluid {
      padding: 20px;
      display: flex;
      justify-content: left;
      align-items: left;  
      font-size: 14px;
      color: black;
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
    }

    .card-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .card-description {
      font-size: 14px;
      color: #888;
    }

    .footer {
      text-align: center;
      margin-top: 40px;
      color: #888;
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

    .theme-toggle {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #fff;
      border: none;
      border-radius: 50%;
      padding: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      font-size: 20px;
      color: #888;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    }

    .theme-toggle:hover {
      background-color: #f4f7fa;
      color: #333;
    }

    .dark-theme {
      background-color: #333;
color: #fff;
    }

    .dark-theme .container-fluid {
      color: #fff;
    }

    .dark-theme .card {
      background-color: #555;
      color: #fff;
    }

    .dark-theme .card-title {
      color: #fff;
    }

    .dark-theme .card-description {
      color: #ccc;
    }

    .dark-theme .footer {
      color: #ccc;
    }
    
    .submenus {
  display: none;
  position: fixed;
  background-image: url('');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 10%;
  border: 1px solid #ccc;
  border-radius: 15px;
  font-size: 15px;
  z-index: 9999;
  max-width: 90%;
  max-height: 90vh;
  overflow-y: auto;
}

.submenus.light-theme {
  background-color: #ffdc00;
  color: #000;
}

.submenus.dark-theme {
  background-color: #333;
  color: #fff;
  border-color: #666;
}

.submenus a {
  display: block;
  margin-bottom: 15px;
  color: #fff;
}

.card.vendas-card {
  background-color: ;
}

.card.vendas-card:hover {
  background-color: ;
}

.card.vendas-card:focus,
.card.vendas-card:active {
  background-color: ;
  outline: none;
}

.content-title {
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}
      
  </style>
</head>
<body class="light-theme">
    
  <div class="container">  
  
      <!-- <section id="home-1" class="home-1" style="height: 200px; width: 350px; border-radius: 20px; border: 1px solid white;background-color: black;">
<video playsinline autoplay muted loop poster="" style="height: 100%; width: 100%;">
<source src="./animation.gif.mp4" type="video/mp4">
</video></section> -->
    
    <div class="alerts light-theme card-notification">
  <h3 class="alerts-title">CENTRAL DE NOTIFICAÇÃO</h3>
  <div class="alerts-content">
    <p class="alerts-description"><?= html_entity_decode(gettextmsg('texto_msg')) ?></p>
  </div>
</div>    
  <div class="container-fluid animate__animated animate__fadeInRight">
    <h3><b>BEM VINDO!</b> <b><?= html_entity_decode(htmlspecialchars(getNickById($uid))) ?></b></h3>
  </div> 
      
        
          
            
              
                  
    <a href="doacao.php" class="card animate__animated animate__fadeInRight vendas-card">
      <i class="fas fa-hand-holding-usd card-icon"></i>
      <h3 class="card-title">Pix</h3>
      <p class="card-description">Ajude o projeto </p>
    </a>
    
    
    <a href="vendas_scannyvpn" class="card animate__animated animate__fadeInLeft vendas-card">
      <i class="fas fa-user-secret card-icon"></i>
      <h3 class="card-title">Vendas</h3>
      <p class="card-description">scanny vpn</p>
    </a>
    
    
    <a href="./venda/index.php" class="card animate__animated animate__fadeInDown vendas-card">
      <i class="fas fa-dolly-flatbed card-icon"></i>
      <h3 class="card-title">Login SSH</h3>
      <p class="card-description">Adquirir login</p>
    </a>
    
      <!-- TOTAL DE CADASTROS MODAL BOTAO COM OPCAO DE ARRASTAR ICONES-->
   <?php if (getAdm($uid) == true) : ?>
       <a href="#" id="app-link" data-bs-toggle="modal" data-bs-target="#totalCadastrosModal" class="card animate__animated animate__fadeInUp vendas-card">
      <i class="fas fa-tasks card-icon"></i>
      <h3 class="card-title">Cadastrado</h3>
      <p class="card-description">total de users</p>
    </a>
    <?php endif; ?>
    <div class="modal fade" id="totalCadastrosModal" tabindex="-1" aria-labelledby="totalCadastrosModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="totalCadastrosModalLabel">TOTAL DE CADASTROS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <form id="password-form">
          <label for="password">DIGITE A SENHA PARA ACESSAR:</label><br>
          <input type="password" id="password" name="password">
<br>
<br>
          <button type="submit" class="btn btn-primary">VERIFICAR</button>
        </form>
        <div id="content" style="display:none;">
          <h1 class="display-2 mb-4">
            <?php
            $sql = $conn->prepare("SELECT * FROM usuarios");
            $sql->execute();
            $total = $sql->rowCount();
            if ($total > 0) {
              echo $total;
            } else {
              echo "NENHUM CADASTRO ENCONTRADO";
            }
            ?>
          </h1>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
// seleciona o formulário de senha e o conteúdo do modal
const passwordForm = document.querySelector('#password-form');
const content = document.querySelector('#content');

// define a senha correta
const correctPassword = 'VEMBRABO';

// adiciona um ouvinte de evento para o envio do formulário de senha
passwordForm.addEventListener('submit', (event) => {
  event.preventDefault(); // impede o envio do formulário

  const password = document.querySelector('#password').value; // obtém a senha digitada

  if (password === correctPassword) {
    // exibe o conteúdo do modal se a senha estiver correta
    passwordForm.style.display = 'none';
    content.style.display = 'block';
  } else {
    // exibe uma mensagem de erro se a senha estiver incorreta
    alert('Senha incorreta. Tente novamente.');
  }
});
</script>
  



    <a href="app.php" class="card animate__animated animate__fadeInRight vendas-card">
      <i class="fas fa-th card-icon"></i>
      <h3 class="card-title">Atualização</h3>
      <p class="card-description">Menu C4G</p>
    </a>
    
    
    <?php if (getAdm($uid) == true) : ?>
    <a href="usuarios.php" class="card animate__animated animate__fadeInLeft vendas-card">
      <i class="fas fa-users-cog card-icon"></i>
      <h3 class="card-title">Usuários</h3>
      <p class="card-description">cadastrados</p>
    </a>
    <?php endif; ?>
    
       
        
        <?php if (getAdm($uid) == true) : ?>
       <a href="#" id="app-link" data-bs-toggle="modal" data-bs-target="#modal-config-site" class="card animate__animated animate__fadeInUp vendas-card">
      <i class="fas fa-tasks card-icon"></i>
      <h3 class="card-title">opções site</h3>
      <p class="card-description">Infor do site</p>
    </a>
    <?php endif; ?>
    
    
    
    
    
    <a href="perfil.php" class="card animate__animated animate__fadeInDown vendas-card">
      <i class="fas fa-id-card card-icon"></i>
      <h3 class="card-title">Perfil</h3>
      <p class="card-description">suas infor</p>
    </a>
    
    
    
    
    
    <a href="#" class="card animate__animated animate__fadeInDown vendas-card" onclick="mostrarSubmenus(event)">
  <i class="fas fa-table card-icon"></i>
  <h3 class="card-title">Sub-menus</h3>
  <p class="card-description">ferramentas</p>
</a>

<div id="submenus" class="submenus light-theme">
  <a href="tutorial.php">
      <i class="fas fa-link"></i> TUTORIAL </a>
  <a href="scripts_ssh.php"><i class="fas fa-bell"></i> SCRIPTS SSH </a>
  <a href="./imgshare/index.php">
      <i class="fas fa-link"></i> UPLOAD PNG - JPG </a>
  <a href="load.php"><i class="fas fa-link"></i> APP DO PAINEL</a>
  <a href="./banner/index.php"><i class="fas fa-link"></i> CRIAR BANNER RGB </a>
  <a href="./linkwhatsapp/index.php"><i class="fas fa-link"></i> CRIAR LINK WHATSAPP </a>
  <a href="#"><i class="fas fa-link"></i> EM BREVE</a>
  <a href="#"><i class="fas fa-backward"></i> VOLTAR </a>  
</div>



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

  </div>
  
  
  
  <footer class="footer">
    Desenvolvido por <strong> <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="11.000000pt" height="11.000000pt" viewBox="0 0 49.000000 52.000000" preserveAspectRatio="xMidYMid meet"> <g transform="matrix(0.1, 0, 0, -0.1, 0.613139, 48.262775)" fill="#3390ec" stroke="none"> <rect x="105.986" y="-337.226" width="237.372" height="203.212" style="stroke: rgb(0, 0, 0); fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, -1, 0, 0)"></rect> <g transform="matrix(1, 0, 0, 1, -15.766434, 2.627754)" fill="#3390ec" stroke="none"> <path d="M157 444 c-16 -32 -21 -35 -55 -32 l-37 3 3 -37 c3 -34 0 -39 -32 -55 l-35 -16 20 -34 21 -33 -21 -33 -20 -34 35 -16 c32 -16 35 -21 32 -55 l-3 -37 37 3 c34 3 39 0 55 -32 l16 -35 34 20 33 21 33 -21 34 -20 16 35 c16 32 21 35 55 32 l37 -3 -3 37 c-3 34 0 39 32 55 l35 16 -20 34 -21 33 21 33 20 34 -35 16 c-32 16 -35 21 -32 55 l3 37 -37 -3 c-34 -3 -39 0 -55 32 l-16 35 -34 -20 -33 -21 -33 21 -34 20 -16 -35z m191 -142 c2 -7 -28 -45 -67 -85 l-72 -71 -42 42 c-39 39 -41 43 -24 59 16 16 18 16 40 -5 l23 -22 49 51 c49 49 83 60 93 31z"></path> </g> </g> </svg> @VEM_BRABO</strong>
  </footer>
  <br>
  
 



  
  
  <button class="theme-toggle" onclick="toggleTheme()"><i class="fas fa-adjust"></i>
  </button>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <script>
    new WOW().init();
    
    function toggleTheme() {
      const body = document.body;
      body.classList.toggle('dark-theme');
      if (body.classList.contains('dark-theme')) {
        localStorage.setItem('theme', 'dark');
      } else {
        localStorage.setItem('theme', 'light');
      }
    }

    function setThemeFromLocalStorage() {
      const theme = localStorage.getItem('theme');
      if (theme === 'dark') {
        document.body.classList.add('dark-theme');
      } else {
        document.body.classList.remove('dark-theme');
      }
    }

    setThemeFromLocalStorage();
  </script>
  
  <script>
      function mostrarSubmenus(event) {
  event.preventDefault();
  var submenus = document.getElementById('submenus');
  
  if (submenus.style.display === 'block') {
    submenus.style.display = 'none';
  } else {
    submenus.style.display = 'block';
  }
}
  </script>
  
  
  
  
  
  
</body>
</html>

<?php
if (getAdm($uid) == true) : ?>
    <!------------------------------------------------------------------------------------>
    <!-- MODAL CONFIGURAÇÕES SITE -->
    <!------------------------------------------------------------------------------------>
    
    <style type="text/css">
    body {
      background: white;
      background-size: 400% 400%;
      animation: gradientBG 5s ease infinite;
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
    }
  </style>
    
    <div class="modal fade" id="modal-config-site" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title">Configuracoes do site</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="editar.php?acao=site" method="post">
                        <div class="row">
                            <div class="col">
                                <label for="">Logotipo</label>
                                <input type="text" name="logo" class="form-control" value="<?= htmlspecialchars(getConfig('logo')) ?>">
                            </div>
                        </div>





                        <div class="row mt-2">
                            <div class="col">
                                <label for="">Largura</label>
                                <input type="text" name="largura" class="form-control" value="<?= getConfig('largura') ?>">
                            </div>
                            <div class="col">
                                <label for="">Altura</label>
                                <input type="text" name="altura" class="form-control" value="<?= getConfig('altura') ?>">
                            </div>
                        </div>




 <div class="row mt-2">
                            <div class="col">
                                <label for="">Nota para clientes</label>
                              <input type="text" name="texto_msg" class="form-control" value="<?= html_entity_decode(gettextmsg('texto_msg')) ?>">
                            </div>
                            </div>




                        <div class="row mt-2">
                            <div class="col">
                                <label for="">Link do site</label>
                                <input type="text" name="link" class="form-control" value="<?= htmlspecialchars(getConfig('link')) ?>">
                            </div>




                            <div class="col">
                                <label for="">Titulo do site</label>
                                <input type="text" name="titulo" class="form-control" value="<?= htmlspecialchars(getConfig('titulo')) ?>">
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="atualiza_site" style="color: white" class="btn btn-success">Editar</button></form>
                    <button type="button" style="color: white" class="btn btn-secondary text-gray ms-auto" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>



<?php 
endif; 
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/rodape.php"); ?>
