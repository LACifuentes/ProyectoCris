<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
ob_start();
session_start();
if (strcmp(basename($_SERVER["SCRIPT_NAME"]), basename(__FILE__)) === 0){
    header("location: /");
    exit;
}
date_default_timezone_set('America/Sao_Paulo');
/* Credenciais do banco de dados. Supondo que você esteja executando o MySQL
servidor com configuração padrão (usuário 'root' sem senha) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'wekfbcga_oneblack');

/* Função para escapar dados para evitar XSS */
function escape($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/* Tentativa de conexão com o banco de dados MySQL */
try {
    $conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Defina o modo de erro PDO para exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Não foi possível conectar." . $e->getMessage());
}

#Variaveis já definidas
$sid = isset($_SESSION['logado']) ? $_SESSION['logado'] : '';
$acao = isset($_GET['acao']) ? $_GET['acao'] : '';
$uid = getIdBySid($sid);


require_once($_SERVER['DOCUMENT_ROOT'] . "/config/Mobile_Detect.php");
$detect = new Mobile_Detect;
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/conteudo.php");
?>
