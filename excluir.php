<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/modais.php");
isLogged($sid);

if ($acao == "servidor") :

    if (isset($_POST['excluir_servidor'])) :

        $id = $_POST['id'];
        $id_owner = $_POST['id_owner'];

        $sql = $conn->prepare("DELETE FROM servidores WHERE id=? AND id_owner=?");
        $sql->execute([$id, $id_owner]);
        
        if ($sql->rowCount() > 0) :
            echo "<script>swal('OK!', 'Servidor excluído com sucesso!', 'success').then(function() {
            window.location ='".getConfig('link')."/app.php';"."})</script>";
        else :
            echo "<script>swal('ERRO!', 'Falha ao excluir servidor!', 'error').then(function() {
            window.location ='".getConfig('link')."/app.php';"."})</script>";
        endif;
    else :
        header("location: /");
    endif;


elseif ($acao == "todos-servidores") :

    $id_owner = $_POST['id_owner'];

    if (isset($_POST['form_apaga_servidores']) && $id_owner == $uid) :
        
        $sql = $conn->prepare("DELETE FROM servidores WHERE id_owner=?");
        $sql->execute([$id_owner]);
                
        if ($sql->rowCount() > 0) :
            echo "<script>swal('OK!', 'Todos os servidores foram excluídos com sucesso!', 'success').then(function() {
            window.location ='".getConfig('link')."/app.php';"."})</script>";
        else :
            echo "<script>swal('ERRO!', 'Falha ao excluir servidores!', 'error').then(function() {
            window.location ='".getConfig('link')."/app.php';"."})</script>";
        endif;
    else :
        header("location: /");
    endif;
    
    
elseif ($acao == "usuario") :

    if (getOwner($uid) == false) :
        header("location: /");
    endif;

    if (isset($_GET['id'])) :

        $id = $_GET['id'];
        $pasta = getData('pasta_att', $id);

        $sql = $conn->prepare("SELECT nivel FROM usuarios WHERE id=?");
        $sql->execute([$id]);
        $resultado = $sql->fetch();
        
        if ($resultado[0] >= 3) :
            echo "<script>swal('ERRO!', 'Você não pode excluir o dono do site!', 'error').then(function() {
                window.location ='".getConfig('link')."/adicionar.php';"."})</script>";
        else :

            $sql = $conn->prepare("DELETE FROM usuarios WHERE id=?");
            $sql->execute([$id]);
            
            $sql = $conn->prepare("DELETE FROM configuracoes WHERE id_owner=?");
            $sql->execute([$id]);
            
            $sql = $conn->prepare("DELETE FROM servidores WHERE id_owner=?");
            $sql->execute([$id]);
            
            
            
            $sql = $conn->prepare("DELETE FROM mensagens WHERE id_owner=?");
            $sql->execute([$id]);

            delTree("update/$pasta");

            if ($sql->rowCount() > 0) :
                echo "<script>swal('OK!', 'Usuário excluído com sucesso!', 'success').then(function() {
                window.location ='".getConfig('link')."/app.php';"."})</script>";
            else :
                echo "<script>swal('OK!', 'Usuario excluido com com sucesso!', 'success').then(function() {
                window.location ='".getConfig('link')."/adicionar.php';"."})</script>";
            endif;
        endif;
    else :
        header("location: /");
    endif;

elseif ($acao == "conta") :
    
            $id = $uid;
            $pasta = getData('pasta_att', $id);
    
            $sql = $conn->prepare("SELECT nivel FROM usuarios WHERE id=?");
            $sql->execute([$id]);
            $resultado = $sql->fetch();
            
            if ($resultado[0] >= 3) :
                echo "<script>swal('ERRO!', 'Usuários admin não podem ser excluídos!', 'error').then(function() {
                    window.location ='".getConfig('link')."/';"."})</script>";
            else :
    
                $sql = $conn->prepare("DELETE FROM usuarios WHERE id=?");
                $sql->execute([$id]);
                
                $sql = $conn->prepare("DELETE FROM configuracoes WHERE id_owner=?");
                $sql->execute([$id]);
                
                $sql = $conn->prepare("DELETE FROM servidores WHERE id_owner=?");
                $sql->execute([$id]);
                
              
              
                $sql = $conn->prepare("DELETE FROM mensagens WHERE id_owner=?");
                $sql->execute([$id]);
    
                delTree("update/$pasta");
    
                if ($sql->rowCount() > 0) :
                    echo "<script>swal('OK!', 'Sua conta foi excluída com sucesso!', 'success').then(function() {
                    window.location ='".getConfig('link')."/';"."})</script>";
                else :
                    echo "<script>swal('ERRO!', 'Falha ao excluir sua conta!', 'error').then(function() {
                    window.location ='".getConfig('link')."/';"."})</script>";
                endif;
            endif;
endif;
?>
