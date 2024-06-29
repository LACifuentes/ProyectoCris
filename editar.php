<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
isLogged($sid);
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');

if ($acao == "servidor") :

    if (isset($_POST['atualiza_servidor'])) :

        $id_owner = addslashes($_POST['id_owner']);
        $id = addslashes($_POST['id']);
        $nome = addslashes($_POST['nome']);
        $tipo = addslashes($_POST['tipo']);
        $flag = addslashes($_POST['flag']);
        $serverip = addslashes($_POST['serverip']);
        $checkuser = addslashes($_POST['checkuser']);
          $online = addslashes($_POST['online']);
        
        $serverport = addslashes($_POST['serverport']);
        $sslport = addslashes($_POST['sslport']);
        
         
        $serveruser = addslashes($_POST['serveruser']);
        $serverpass = addslashes($_POST['serverpass']);
        
        $payload = addslashes($_POST['pay']);
        $sni = addslashes($_POST['sni']);
        $tlsip = addslashes($_POST['tlsip']);
        $proxyip = addslashes($_POST['proxyip']);
        $proxyport = addslashes($_POST['proxyport']);
        $info = addslashes($_POST['info']);
        $categoria = addslashes($_POST['categoria']);
        
        if (empty($nome)) :
            echo "<script>swal('ERRO!', 'Nome não pode ficar vazio!', 'error').then(function() {
            window.location ='".getConfig('link')."/app.php';"."})</script>";

        else :

            $sql = $conn->prepare("UPDATE servidores SET id_owner=?,
            Name=?, 
            TYPE=?, 
            FLAG=?, 
            ServerIP=?, 
            CheckUser=?,
            Online=?,
             
            ServerPort=?,
            SSLPort=?,
            
            ServerUser=?,
            ServerPass=?,
            
            Payload=?,
            SNI=?,
            TlsIP=?,
            ProxyIP=?,
            ProxyPort=?,
            Info=?,
            categoria=? 
            WHERE id=?");
            $sql->execute([$id_owner,
            $nome,
            $tipo, 
            $flag,
            $serverip,
            $checkuser,
            $online,
            $serverport, 
            $sslport, 
            
            $serveruser,
            $serverpass,
            
            $payload, 
            $sni, 
            $tlsip, 
            $proxyip,
            $proxyport, 
            $info,
            $categoria, 
            $id]);            

            echo "<script>swal('OK!', 'Servidor atualizado com sucesso!', 'success').then(function() {
            window.location ='".getConfig('link')."/app.php';"."})</script>";

        endif;
    else :
        header("location: /");
    endif;




elseif ($acao == "sms") :

    if (isset($_POST['atualiza_sms'])) :

        $id_owner = $_POST['id_owner'];
        $sms = $_POST['sms'];

        $sql = $conn->prepare("SELECT * FROM mensagens WHERE id_owner = ?");
        $sql->execute([$id_owner]);        

        if ($sql->rowCount() > 0) :

            $sql = $conn->prepare("UPDATE mensagens SET msg=? WHERE id_owner=?");
            $sql->execute([$sms, $id_owner]);

        else :

            $sql = $conn->prepare("INSERT INTO mensagens (id_owner, msg) VALUES (?, ?)");
            $sql->execute([$id_owner, $sms]);
                        
        endif;


        addSms($id_owner);

        $sql = $conn->prepare("SELECT * FROM mensagens WHERE id_owner = ?");
        $sql->execute([$id_owner]);
        $busca = $sql->fetch();

        $pronto = '{"SendMessage":"' . $busca['att'] . '","MyMessage":"' . $busca['msg'] . '"}';

        $path = "update/" . getData('pasta_att', $uid) . "";
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $config = "update/" . getData('pasta_att', $uid) . "/sms";

        //verifica se já tem
        if (file_exists($config)) {
            unlink($config);
        }

        file_put_contents($config, $pronto);

        echo "<script>swal('OK!', 'SMS enviado com sucesso!', 'success').then(function() {
        window.location ='".getConfig('link')."/app.php';"."})</script>";
    else :
        header("location: /");
    endif;

elseif ($acao == "config") :

    if (isset($_POST['atualiza_config'])) :

        $id_owner = addslashes($_POST['id_owner']);
        $notas = addslashes($_POST['notas']);
        $sms = getConfig('link') . '/update/' . getData('pasta_att', $uid) . '/sms';
        $update = getConfig('link') . '/update/' . getData('pasta_att', $uid) . '/config';
        $email = addslashes($_POST['email']);
        $contato = addslashes($_POST['contato']);
        $termos = addslashes($_POST['termos']);
        $checkuser = addslashes($_POST['checkuser']);
        
          $online = addslashes($_POST['online']);
          $udpport = addslashes($_POST['udpport']);
          $painel = addslashes($_POST['painel']);
        
        
        $videoUrl = addslashes($_POST['videoUrl']);
        $LogoOnline = addslashes($_POST['LogoOnline']);
        $FundoOnline = addslashes($_POST['FundoOnline']);
       
        
        $sql = $conn->prepare("SELECT * FROM configuracoes WHERE id_owner = ?");
        $sql->execute([$id_owner]);        

        if ($sql->rowCount() == 0) :
            $sql = $conn->prepare("INSERT INTO configuracoes SET id_owner=?,
            notas=?,
            sms=?,
            att=?,
            email=?, 
            contato=?,
            termos=?,
            checkuser=?, 
            
              online=?, 
              udpport=?, 
                painel=?, 
                
            videoUrl=?,
            LogoOnline=?,
            FundoOnline=?");
            
            $sql->execute([$id_owner, 
            $notas,
            $sms,
            $update, 
            $email, 
            $contato, 
            $termos,
            $checkuser,
            
             $online, 
            $udpport,
            $painel,
            
            $videoUrl,
            $LogoOnline, 
            $FundoOnline]);
            
            if ($sql) :
                echo "<script>swal('OK!', 'Configurações editadas com sucesso!', 'success').then(function() {
                window.location ='".getConfig('link')."/app.php';"."})</script>";
            endif;
        elseif ($sql->rowCount() == 1) :
            $sql = $conn->prepare("UPDATE configuracoes SET
            notas=?,
            email=?,
            contato=?, 
            termos=?,
            checkuser=?, 
            
            online=?, 
              udpport=?, 
                painel=?, 
            
            videoUrl=?,
            LogoOnline=?,
            FundoOnline=?
           
            WHERE id_owner=?");
            
            $sql->execute([
            $notas,
            $email, 
            $contato,
            $termos,
            $checkuser,
            
              $online, 
            $udpport,
            $painel,
            
            $videoUrl,
            $LogoOnline, 
            $FundoOnline, 
           
            $id_owner]);
            
            if ($sql) :
                echo "<script>swal('OK!', 'Configurações editadas com sucesso!', 'success').then(function() {
                window.location ='".getConfig('link')."/app.php';"."})</script>";
            endif;
        endif;
    else :
        header("location: /");
    endif;

elseif ($acao == "site") :

    if (getAdm($uid) == false) :
        header("location: /");
    endif;

    if (isset($_POST['atualiza_site'])) :

        $logo = addslashes($_POST['logo']);
        $altura = addslashes($_POST['altura']);
        $largura = addslashes($_POST['largura']);
        $text_msg = addslashes($_POST['texto_msg']);
        $link = addslashes($_POST['link']);
        $titulo = addslashes($_POST['titulo']);

        $sql_logo = $conn->prepare("UPDATE configs SET valor=? WHERE nome='logo'");
        $sql_logo->execute([$logo]);
        
        $sql_altura = $conn->prepare("UPDATE configs SET valor=? WHERE nome='altura'");
        $sql_altura->execute([$altura]);
        
        $sql_largura = $conn->prepare("UPDATE configs SET valor=? WHERE nome='largura'");
        $sql_largura->execute([$largura]);
        
        $sql_texto_msg = $conn->prepare("UPDATE usuarios SET texto_msg=?");
        $sql_texto_msg->execute([$text_msg]);
        
        $sql_link = $conn->prepare("UPDATE configs SET valor=? WHERE nome='link'");
        $sql_link->execute([$link]);
        
        $sql_titulo = $conn->prepare("UPDATE configs SET valor=? WHERE nome='titulo'");
        $sql_titulo->execute([$titulo]);
        

        if ($sql_titulo) :
            echo "<script>swal('OK!', 'Configurações do site editadas com sucesso!', 'success').then(function() {
            window.location ='".getConfig('link')."/';"."})</script>";
        endif;
    else :
        header("location: /");
    endif;

elseif ($acao == "dados") :

    if (!empty($_POST['nome'])) :
        $nome = addslashes($_POST['nome']);
        $sql = $conn->prepare("SELECT * FROM usuarios WHERE nome = ?");
        $sql->execute([$nome]);
        $count = $sql->rowCount();

        if ($count > 0) :
            echo "<script>swal('ERRO!', 'Este nome de usuário já está em uso!', 'error').then(function() {
            window.location ='".getConfig('link')."/perfil.php';"."})</script>";
        elseif (empty($nome)) :
            echo "<script>swal('ERRO!', 'Nome não pode ficar vazio!', 'error').then(function() {
            window.location ='".getConfig('link')."/perfil.php';"."})</script>";
        else :
            $sql = $conn->prepare("UPDATE usuarios SET nome=? WHERE id=?");
            $sql->execute([$nome, getIdBySid($sid)]);

            echo "<script>swal('OK!', 'Nome atualizado com sucesso!', 'success').then(function() {
            window.location ='".getConfig('link')."/perfil.php';"."})</script>";
        endif;

    elseif (!empty($_POST['login'])) :
        $login = addslashes($_POST['login']);
        $sql = $conn->prepare("SELECT * FROM usuarios WHERE login = ?");
        $sql->execute([$login]);
        $count = $sql->rowCount();
        

        if ($count > 0) :
            echo "<script>swal('ERRO!', 'Este login de usuário já está em uso!', 'error').then(function() {
            window.location ='".getConfig('link')."/perfil.php';"."})</script>";
        elseif (empty($login)) :
            echo "<script>swal('ERRO!', 'O login não pode ficar vazio!', 'error').then(function() {
            window.location ='".getConfig('link')."/perfil.php';"."})</script>";
        else :
            $sql = $conn->prepare("UPDATE usuarios SET login=? WHERE id=?");
            $sql->execute([$login, getIdBySid($sid)]);
            echo "<script>swal('OK!', 'Login atualizado com sucesso!', 'success').then(function() {
            window.location ='".getConfig('link')."/perfil.php';"."})</script>";
        endif;
    elseif (!empty($_POST['senha'])) :
        $senha = addslashes($_POST['senha']);
        $senha = md5($senha);

        if (empty($senha)) :
            echo "<script>swal('ERRO!', 'A senha não pode ficar em branco!', 'error').then(function() {
            window.location ='".getConfig('link')."/perfil.php';"."})</script>";
        else :

            $sql = $conn->prepare("UPDATE usuarios SET nome=?, login=?, senha=? WHERE id=?");
            $sql->execute([$nome, $login, $senha, getIdBySid($sid)]);
            echo "<script>swal('OK!', 'Senha atualizada com sucesso!', 'success').then(function() {
            window.location ='".getConfig('link')."/perfil.php';"."})</script>";
        endif;

    elseif (!empty($_POST['pasta'])) :
        $pasta = addslashes($_POST['pasta']);

        $sql = $conn->prepare("SELECT * FROM usuarios WHERE pasta_att = ?");
        $sql->execute([$pasta]);
        $count = $sql->rowCount();
        $dados = $sql->fetch(PDO::FETCH_ASSOC);
        
        if ($count !== 0) :
            echo "<script>swal('ERRO!', 'Esta pasta já está em uso!', 'error').then(function() {
            window.location ='".getConfig('link')."/perfil.php';"."})</script>";
        else :
            $pasta_velha = "update/" . addslashes($_POST['pasta_velha']);
            $pasta_nova = "update/" . addslashes($_POST['pasta']);

            rename($pasta_velha, $pasta_nova);

            $sms = getConfig('link') . '/update/' . $_POST['pasta'] . '/sms';
            $update = getConfig('link') . '/update/' . $_POST['pasta'] . '/config';

            $sql = $conn->prepare("UPDATE configuracoes SET att=?, sms=? WHERE id_owner=?");
            $sql->execute([$update, $sms, getIdBySid($sid)]);
            
            $sql = $conn->prepare("UPDATE usuarios SET pasta_att=? WHERE id=?");
            $sql->execute([$pasta, getIdBySid($sid)]);

            echo "<script>swal('OK!', 'Pasta atualizada com sucesso!', 'success').then(function() {
            window.location ='".getConfig('link')."/perfil.php';"."})</script>";
        endif;
    else :
        echo "<script>swal('ERRO!', 'Parametro em branco ou nao encontrado!', 'error').then(function() {
            window.location ='".getConfig('link')."/perfil.php';"."})</script>";

    endif;

elseif ($acao == "usuarios") :

    if (getAdm($uid) == false) :
        header("location: /");
    endif;

    if (isset($_POST['atualiza_usuarios'])) :

        $id = $_POST['id'];
        $nome = addslashes($_POST['nome']);
        $login = addslashes($_POST['login']);
        $senha = addslashes($_POST['senha']);
        $nivel = addslashes($_POST['nivel']);

        if (empty($senha)) :

            $sql = $conn->prepare("UPDATE usuarios SET nome=?, login=?, nivel=?, pasta_att=? WHERE id=?");
            $sql->execute([$nome, $login, $nivel, $_POST['pasta_nova'], $id]);
            
            $pasta_velha = "update/" . $_POST['pasta_velha'];
            $pasta_nova = "update/" . $_POST['pasta_nova'];

            rename($pasta_velha, $pasta_nova);

            $sms = getConfig('link') . '/update/' . getData('pasta_att', $id) . '/sms';
            $update = getConfig('link') . '/update/' . getData('pasta_att', $id) . '/config';

            $sql = $conn->prepare("UPDATE configuracoes SET att=?, sms=? WHERE id_owner=?");
            $sql->execute([$update, $sms, $id_owner]);
            
            if ($sql) :
                echo "<script>swal('OK!', 'Usuário editado com sucesso!', 'success').then(function() {
                    window.location ='".getConfig('link')."/usuarios.php';"."})</script>";
            endif;
        else :

            $senha = md5($senha);

            $sql = $conn->prepare("UPDATE usuarios SET nome=?, login=?, senha=?, nivel=?, pasta_att=? WHERE id=?");
            $sql->execute([$nome, $login, $senha, $nivel, $_POST['pasta_nova'], $id]);
            
            $pasta_velha = "update/" . $_POST['pasta_velha'];
            $pasta_nova = "update/" . $_POST['pasta_nova'];

            rename($pasta_velha, $pasta_nova);

            $sms = getConfig('link') . '/update/' . getData('pasta_att', $id) . '/sms';
            $update = getConfig('link') . '/update/' . getData('pasta_att', $id) . '/config';

            $sql = $conn->prepare("UPDATE configuracoes SET att=?, sms=? WHERE id_owner=?");
            $sql->execute([$update, $sms, $id_owner]);
            
            if ($sql) :
                echo "<script>swal('OK!', 'Senha do usuário atualizada com sucesso!', 'success').then(function() {
                    window.location ='".getConfig('link')."/usuarios.php';"."})</script>";

            endif;
        endif;
    endif;

else :
    header("location: /");
endif;
