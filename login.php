<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
include_once 'config.php';

if (isset($_POST['btn_login'])) {

    // Sanitize the input fields for XSS and SQLi prevention
    $login = htmlentities($_POST['login'], ENT_QUOTES);
    $senha = htmlentities($_POST['senha'], ENT_QUOTES);

    if (empty($login) || empty($senha)) {
        $_SESSION['erro'] = "<center><div style='padding: 1px; margin: 1px' class='alert alert-danger'>Preencha todos os campos.</div></center>";
        echo "<script>swal('ERRO!', 'Preencha todos os campos!', 'error').then(function() {
            window.location ='" . getConfig('link') . "/index.php';" . "})</script>";
        exit();
    }

    $senha = md5($senha);

    // Use prepared statements for the SQL query
    $sql = $conn->prepare("SELECT * FROM usuarios WHERE login = ? AND senha = ?");
    $sql->execute([$login, $senha]);

    if ($sql->rowCount() == 1) {
        $sql = $conn->prepare("DELETE FROM sessao WHERE uid= ?");
        $sql->execute([getIdByNick($login)]);
        $uid = getIdByNick($login);
        $xtm = time() + 2000;
        $did = $uid;
        $tdid = $uid . $xtm . $did;
        $gerar = md5($tdid);
        $_SESSION["logado"] = $gerar;

        $sql = $conn->prepare("INSERT INTO sessao SET id = ?, uid = ?, expira = ?");
        $sql->execute([$_SESSION["logado"], $uid, $xtm]);
        header("location: choose_screen.php");
        exit();
    } elseif ($sql->rowCount() > 1) {
        $_SESSION['erro'] = "<center><div style='padding: 1px; margin: 1px' class='alert alert-danger'>Usuário duplicado, por favor chame o suporte</div></center>";
        echo "<script>swal('ERRO!', 'Usuário duplicado, por favor chame o suporte!', 'error').then(function() {
            window.location ='" . getConfig('link') . "/index.php';" . "})</script>";
    } else {
        $_SESSION['erro'] = "<center><div style='padding: 1px; margin: 1px' class='alert alert-danger'>Usuário ou senha incorretos</div></center>";
        echo "<script>swal('ERRO!', 'Usuário ou senha incorretos!', 'error').then(function() {
            window.location ='" . getConfig('link') . "/index.php';" . "})</script>";
    }
}
