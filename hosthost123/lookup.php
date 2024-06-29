<?php
// Função para validar o endereço IP
function isValidIP($ip) {
    return filter_var($ip, FILTER_VALIDATE_IP);
}

// Verifica se o endereço IP foi fornecido e é válido
if (isset($_GET['ip'])) {
    $ip = $_GET['ip'];

    if (!isValidIP($ip)) {
        header('HTTP/1.1 400 Bad Request');
        echo "Endereço IP inválido.";
        exit;
    }

    // Aqui você pode implementar a lógica para verificar o domínio associado ao endereço IP
    // Por exemplo, você pode usar funções de DNS, bibliotecas de terceiros ou uma API de verificação de domínio segura

    // Exemplo fictício de verificação
    if ($ip === '51.222.75.247') {
        $domains = ['exemplo.com', 'outrodominio.com'];
    } else {
        $domains = [];
    }

    // Retorna os domínios encontrados em formato JSON
    header('Content-Type: application/json');
    echo json_encode($domains);
} else {
    header('HTTP/1.1 400 Bad Request');
    echo "Endereço IP não fornecido.";
    exit;
}
