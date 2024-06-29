<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 'On');

require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");

if ($acao == "json"):
    isLogged($sid);

    if (isset($_POST['importar_json'])):

        $json_file = $_FILES['json_file']['tmp_name'];
        $json_string = file_get_contents($json_file);
        $json = json_decode($json_string, true);

        if ($json === null) {
            $errorMessage = "Este arquivo não é um JSON!";
            $encodedErrorMessage = htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8');
            echo "<script>swal('ERRO!', '$encodedErrorMessage', 'error').then(function() {
            window.location ='" . getConfig('link') . "/app.php';" . "})</script>";
            exit();
        }

       
        $Servers = $json['Servers'];
        $qtdServers = 0;
       
        if (!array_key_exists('Servers', $json)) {
            $errorMessage = "Arquivo JSON inválido!";
            $encodedErrorMessage = htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8');
            echo "<script>swal('ERRO!', '$encodedErrorMessage', 'error').then(function() {
            window.location ='" . getConfig('link') . "/app.php';" . "})</script>";
            exit();
        }

       

        foreach ($Servers as $Server) {
            $nome = $Server['Name'];
            $tipo = $Server['TYPE'];
            $flag = $Server['FLAG'];
            $serverip = $Server['ServerIP'];
            $checkuser = $Server['CheckUser'];
            
            $online = $Server['Online'];
            $serveruser = $Server['ServerUser'];
            $serverpass = $Server['ServerPass'];
            
            $serverport = $Server['ServerPort'];
            $sslport = $Server['SSLPort'];
            
            $payload = $Server['Payload'];
            $sni = $Server['SNI'];
            $tlsip = $Server['TlsIP'];
            $proxyip = $Server['ProxyIP'];
            $proxyport = $Server['ProxyPort'];
            $info = $Server['Info'];

            $sql = $conn->prepare("SELECT * FROM servidores WHERE Name= ? AND id_owner= ?");
            $sql->execute([$nome, $uid]);

            if ($sql->rowCount() > 0) {
                continue;
            } else {
                $qtdServers++;
                $sql = $conn->prepare("INSERT INTO servidores SET id_owner= ?,
                Name= ?, 
                TYPE= ?, 
                FLAG= ?, 
                ServerIP= ?, 
                CheckUser= ?, 
                
                  Online= ?, 
                
                ServerPort= ?, 
                SSLPort= ?, 
                
                ServerUser= ?, 
                ServerPass= ?, 
              
                Payload=?,
                SNI=?,
                TlsIP=?, 
                ProxyIP=?, 
                ProxyPort=?,
                Info=?, 
                categoria=?");
                
                $sql->execute([$uid,
                $nome, 
                $tipo, 
                $flag, 
                $serverip, 
                $checkuser,
                
                 $online,
                 $serveruser,
                 $serverpass,
                 
                $serverport, 
                $sslport,
                
               $payload, 
               $sni,
               $tlsip, 
               $proxyip, 
               $proxyport, 
               $info, 
               "10"]);
            }
            
        }

       
        $successMessage = "Foram importados:\\n$qtdServers servidores.";
        $encodedSuccessMessage = htmlspecialchars($successMessage, ENT_QUOTES, 'UTF-8');
        echo "<script>swal('OK!', '$encodedSuccessMessage', 'success').then(function() {
        window.location ='" . getConfig('link') . "/app.php';" . "})</script>";

    else:
        header("location: /");
    endif;

elseif ($acao == "servidor"):
    isLogged($sid);
    if (isset($_POST['adicionar_servidor'])):

        $id_owner = addslashes($_POST['id_owner']);
        $nome = addslashes($_POST['nome']);
        $tipo = addslashes($_POST['tipo']);
        $flag = addslashes($_POST['flag']);
        $serverip = addslashes($_POST['serverip']);
        $checkuser = addslashes($_POST['checkuser']);
        
        $online = addslashes($_POST['online']);
        $serveruser = addslashes($_POST['serveruser']);
        $serverpass = addslashes($_POST['serverpass']);
        
        $serverport = addslashes($_POST['serverport']);
        $sslport = addslashes($_POST['sslport']);
        $categoria = addslashes($_POST['categoria']);

        $sql = $conn->prepare("SELECT * FROM servidores WHERE Name= ? AND id_owner= ?");
        $sql->execute([$nome, $id_owner]);

        if ($sql->rowCount() > 0) {
            $errorMessage = "Já existe um servidor com esse nome!";
            $encodedErrorMessage = htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8');
            echo "<script>swal('ERRO!', '$encodedErrorMessage', 'error').then(function() {
            window.location ='" . getConfig('link') . "/app.php';" . "})</script>";
        } elseif (empty($nome)) {
            $errorMessage = "Nome não pode ficar vazio!";
            $encodedErrorMessage = htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8');
            echo "<script>swal('ERRO!', '$encodedErrorMessage', 'error').then(function() {
            window.location ='" . getConfig('link') . "/app.php';" . "})</script>";
        } else {
            $sql = $conn->prepare("INSERT INTO servidores SET id_owner= ?,
            Name= ?, 
            TYPE= ?,
            FLAG= ?, 
            ServerIP= ?,
            CheckUser= ?,
            Online= ?, 
            ServerPort= ?,
            SSLPort= ?, 
            ServerUser= ?, 
            ServerPass= ?, 
            
            Payload=?,
            SNI=?,
            TlsIP=?, 
            ProxyIP=?, 
            ProxyPort=?,
            Info=?, 
            categoria=?");
            
            $sql->execute([$id_owner,
            $nome,
            $tipo,
            $flag, 
            $serverip, 
            $checkuser,
            
            $serverport, 
            $sslport,
            $online,
            $serveruser,
            $serverpass,
            
            $payload, 
            $sni,
            $tlsip, 
            $proxyip, 
            $proxyport, 
            $info, 
            $categoria]);

            $successMessage = "Servidor adicionado com sucesso!";


            $encodedSuccessMessage = htmlspecialchars($successMessage, ENT_QUOTES, 'UTF-8');
            echo "<script>swal('OK!', '$encodedSuccessMessage', 'success').then(function() {
            window.location ='" . getConfig('link') . "/app.php';" . "})</script>";
        }

    else:
        header("location: /");
    endif;







elseif ($acao == "cadastrousuario"):

    if (isset($_POST['cadastrar_usuario'])):

        $nome = addslashes($_POST['nome']);
        $login = addslashes($_POST['login']);
        $senha = addslashes($_POST['senha']);
        $rand = rand(5, 5);
        $pasta = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvxyzw0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $rand);

        if (empty($nome) || empty($login) || empty($senha)):
            echo "<script>swal('ERRO!', 'Preencha todos os campos!', 'error').then(function() {
            window.location ='" . getConfig('link') . "/index.php';" . "})</script>";
            exit();
        endif;

        if (empty($pasta)):
            $rand = rand(5, 5);
            $pasta = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvxyzw0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $rand);
        endif;

        $sql = $conn->prepare("SELECT * FROM usuarios WHERE login= ? OR pasta_att= ?");
        $sql->execute([$login, $pasta]);

        if ($sql->rowCount() > 0):
            echo "<script>swal('ERRO!', 'Já existe um usuario com esse login/pasta de atualização!', 'error').then(function() {
            window.location ='" . getConfig('link') . "/index.php';" . "})</script>";
        else:
            $senha = md5($senha);

            $sql = $conn->prepare("INSERT INTO usuarios SET nome= ?, login= ?, senha= ?, pasta_att= ?, texto_msg= ?");
            $sql->execute([$nome, $login, $senha, $pasta, ""]);

            if ($sql):
                echo "<script>swal('OK!', 'Usuário adicionado com sucesso!', 'success').then(function() {
                window.location ='" . getConfig('link') . "/index.php';" . "})</script>";
            endif;
        endif;
    else:
        header("location: /");
    endif;
elseif ($acao == "usuario"):
    isLogged($sid);

    if (getOwner($uid) == false):
        header("location: /");
    endif;

    if (isset($_POST['adicionar_usuario'])):

        $nome = addslashes($_POST['nome']);
        $login = addslashes($_POST['login']);
        $senha = addslashes($_POST['senha']);
        $rand = rand(5, 5);
        $pasta = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvxyzw0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $rand);

        if (empty($pasta)):
            $rand = rand(5, 5);
            $pasta = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvxyzw0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, $rand);
        endif;

        if (empty($nome) || empty($login) || empty($senha)):
            echo "<script>swal('ERRO!', 'Preencha todos os campos!', 'error').then(function() {
                window.location ='" . getConfig('link') . "/index.php';" . "})</script>";
            exit();
        endif;

        $sql = $conn->prepare("SELECT * FROM usuarios WHERE login= ? OR pasta_att= ?");
        $sql->execute([$login, $pasta]);

        if ($sql->rowCount() > 0):
            echo "<script>swal('ERRO!', 'Já existe um usuario com esse login/pasta de atualização!', 'error').then(function() {
                window.location ='" . getConfig('link') . "/usuarios.php';" . "})</script>";
        else:
            $senha = md5($senha);

            $sql = $conn->prepare("INSERT INTO usuarios SET nome= ?, login= ?, senha= ?, pasta_att= ?, texto_msg= ?");
            $sql->execute([$nome, $login, $senha, $pasta, ""]);

            if ($sql):
                echo "<script>swal('OK!', 'Usuário adicionado com sucesso!', 'success').then(function() {
                    window.location ='" . getConfig('link') . "/usuarios.php';" . "})</script>";
            endif;
        endif;
    else:
        header("location: /");
    endif;
else:
    header("location: /");
endif;