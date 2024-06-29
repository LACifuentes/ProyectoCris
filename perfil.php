<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
isLogged($sid); ?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Gerenciar Perfil</title>
</head>

<style type="text/css">
    body {
      background-color: white;
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
.cabeçalho {
font-size: 17px;
}

.opcao1 {
font-size: 17px;
}

.opcao2 {
font-size: 17px;
}

.opcao3 {
font-size: 17px;
}

.opcao4 {
font-size: 17px;
}

.fixed-header {

background: #000000;

position: null;

border-radius: 25px;

color: white;

font-size: 24px;

text-align: center;

}

</style>

<main>
<body>
<br>
<!-- banner -->
<center>
<div class="col mb-3">
<div class="card border border-0 shadow">
<div class="card-body text-center text-nowrap">
<a href="home.php">
<img class="mt-5" src="<?= getConfig('logo') ?>" width="<?= getConfig('largura') ?>" height="<?= getConfig('altura') ?>"></a><br>
<b>BEM VINDO(A) </b><b><?= html_entity_decode(htmlspecialchars(getNickById($uid))) ?></b>!<br>
</div>
</div>
</div>



<!-- cabeçalho -->
<div class="col mb-3">
<div class="card border border-0 shadow">
<div class="card-body text-center text-nowrap">
<h1 class="fixed-header"> OPÇÕES DO PERFIL </h1>
</div>
</div>
</div>
</div>



<!-- OPÇÕES MENU DE BOTAO DO MODAL -->
<div class="container">
  <div class="row">
    <div class="col-md-6 col-sm-12 mb-3">
      <div class="d-flex justify-content-between">
        <div class="mb-3 mb-sm-0">
           
          <a href="#" data-bs-toggle="modal" data-bs-target="#modal-nomee">
            <button type="button" class="btn btn-outline-primary btn-block" disabled>
              ALTERAR NOME <br>
              <i class="bi bi-person-add"></i>
            </button>
          </a>
          
        </div>


        <div class="mb-3 mb-sm-0">
          <a href="#" data-bs-toggle="modal" data-bs-target="#modal-loginn">
            <button type="button" class="btn btn-outline-primary btn-block disabled">
              ALTERAR LOGIN <br>
              <i class="bi bi-person-fill-add"></i>
            </button>
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-12 mb-3">
      <div class="d-flex justify-content-between">
        <div class="mb-3 mb-sm-0">
          <a href="#" data-bs-toggle="modal" data-bs-target="#modal-senhaa">
            <button type="button" class="btn btn-outline-primary btn-block disabled">
              ALTERAR SENHA <br>
              <i class="bi bi-person-lock"></i>
            </button>
          </a>
        </div>

        <div class="mb-3 mb-sm-0">
          <a href="#" data-bs-toggle="modal" data-bs-target="#modal-pastaa">
            <button type="button" class="btn btn-outline-primary btn-block disabled">
              ALTERAR PASTA <br>
              <i class="bi bi-android"></i>
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12 mb-3">
      <div class="d-flex justify-content-center">
        <div>
          <a href="#" data-bs-toggle="modal" data-bs-target="#modal-excluir-contaa">
            <button type="button" class="btn btn-outline-danger btn-block disabled">
              EXCLUIR CONTA <br>
              <i class="bi bi-exclamation-triangle" style="color:red;"></i>
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- botão sair -->
<!--<div class="d-flex align-items-center justify-content-between pt-3">
<div>
<div class="h6 mb-0 d-flex align-items-center">
<a href="/"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp;&nbsp;VOLTAR AO INÍCIO</a>
</div>
</div>-->



<!-- Botão Flutuante Inicial-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="/" style="position:fixed;width:60px;height:60px;bottom:15px;right:15px;background-color:#ffffff;color:#6922d9;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;">
<i style="margin-top:16px" class="fa fa-home"></i>
</a>
</div>
</div>
</div>
</div>
</center>


</body>
</main>
<!-- MODAL NOME -->
<div class="modal fade" id="modal-nome" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Alterar nome</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="editar.php?acao=dados" method="post">
                    <label for="">Nome</label>
                    <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars(getData('nome', $uid)) ?>">
            </div>
            <div class="modal-footer">
                <button type="submit" style="color: white" class="btn btn-success">Salvar</button>
                <button type="button" style="color: white" class="btn btn-secondary text-gray ms-auto" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL EXCLUIR CONTA -->
<div class="modal fade" id="modal-excluir-conta" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Excluir Minha Conta</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="excluir.php?acao=conta" method="post">
                    <label for="" style="color:red;">Você está prestes a excluir sua conta:</label>
                    <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars(getNickById($uid)) ?>">
            </div>
            <div class="modal-body">
                <label for="" style="color:red;">Tem certeza disso? Esta ação não poderá ser desfeita!</label>
            </div>
            <div class="modal-footer">
                <button type="submit" style="color: white" class="btn btn-danger">Excluir Conta</button>
                <button type="button" style="color: white" class="btn btn-secondary text-gray ms-auto" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL LOGIN -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Alterar login</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="editar.php?acao=dados" method="post">
                    <label for="">Login</label>
                    <input type="text" name="login" class="form-control" value="<?= htmlspecialchars(getData('login', $uid)) ?>">
            </div>
            <div class="modal-footer">
                <button type="submit" style="color: white" class="btn btn-success">Salvar</button>
                <button type="button" style="color: white" class="btn btn-secondary text-gray ms-auto" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL SENHA -->
<div class="modal fade" id="modal-senha" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Alterar senha</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="editar.php?acao=dados" method="post">
                    <label for="">Nova senha</label>
                    <input type="password" name="senha" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="submit" style="color: white" class="btn btn-success">Salvar</button>
                <button type="button" style="color: white" class="btn btn-secondary text-gray ms-auto" data-bs-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

</html>
