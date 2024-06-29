<!DOCTYPE html>
<html>
<head>
    <title>Extrair ID Vmess</title>
</head>
<body>
    <h1>Extrair ID Vmess</h1>
    <form method="post">
        <label for="vmess_link">Insira o link Vmess:</label>
        <input type="text" id="vmess_link" name="vmess_link">
        <input type="submit" value="Extrair ID">
    </form>

    <?php
    // Função para extrair o ID Vmess
    function extract_vmess_id($vmess_url) {
        $decoded_link = str_replace("-", "+", str_replace("_", "/", $vmess_url));  // Decodificar caracteres especiais
        $base64_data = explode("vmess://", $decoded_link)[1];
        preg_match('/"id":"([\w-]+)"/', $base64_data, $matches);
        
        if (isset($matches[1])) {
            return $matches[1];
        } else {
            return null;
        }
    }

    // Verificar se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $vmess_link = $_POST["vmess_link"];
        $vmess_id = extract_vmess_id($vmess_link);

        if ($vmess_id) {
            echo "<p>ID Vmess extraído: " . $vmess_id . "</p>";
        } else {
            echo "<p>Nenhum ID Vmess encontrado no link.</p>";
        }
    }
    ?>

</body>
</html>
