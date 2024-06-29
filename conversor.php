<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/modais.php");
include_once 'VEM_BRABO.php';
isLogged($sid);
$uid = getIdBySid($sid); 
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Conversor Útil</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  
  <style>
    body {
      font-family: Arial, sans-serif;
      background: blur;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }
    #result, #resultIPv6 {
      margin-top: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
      color: red;
    }
    #copyButton, #copyButtonIPv6 {
      margin-top: 10px;
    }
  </style>
</head>
<body>
<div class="container">
  <h1 class="text-center">CONVERSOR ÚTIL</h1>
  <br>
  <h2>CONVERSOR DE IPV4 PARA IPV6</h2>
  <label for="ip">DIGITE O ENDEREÇO IP IPV4:</label>
  <br>
  <input type="text" id="ip" name="ip" placeholder="Exemplo: 192.168.1.1" required class="form-control">
  <button onclick="convertIP()" class="btn btn-primary mt-2">Converter</button>
  <div id="result"></div>
  <button id="copyButton" onclick="copyResult()" class="btn btn-secondary mt-2">Copiar Resultado</button>
  <h2>CONVERSOR DE IPV6 PARA IPV4</h2>
  <label for="ipv6">DIGITE O ENDEREÇO IPV6:</label>
  <br>
  <input type="text" id="ipv6" name="ipv6" placeholder="Exemplo: 2001:0db8:85a3:0000:0000:8a2e:0370:7334" required class="form-control">
  <button onclick="convertIPv6()" class="btn btn-primary mt-2">CONVERTER</button>
  <div id="resultIPv6"></div>
  <button id="copyButtonIPv6" onclick="copyResultIPv6()" class="btn btn-secondary mt-2">COPIAR RESULTADO</button>
</div>

<script 
src="https://cdn.jsdelivr.net/npm/toastify-js">
</script>

<script>
    function convertIP() {
  var ip = document.getElementById("ip").value;
  
  var ipv4 = ip;
  var ipv6 = "";

  // Convert IPv4 to IPv6 format
  if (ip.includes(".")) {
    var ipv4Sections = ip.split(".");
    ipv6 = "0000:0000:0000:0000:0000:FFFF:" + parseInt(ipv4Sections[0], 10).toString(16).padStart(2, '0') + parseInt(ipv4Sections[1], 10).toString(16).padStart(2, '0') + ":" + parseInt(ipv4Sections[2], 10).toString(16).padStart(2, '0') + parseInt(ipv4Sections[3], 10).toString(16).padStart(2, '0');
  // Exibir toast de sucesso após a conversão
  Toastify({
            text: "Conversão realizada com sucesso!",
            duration: 3000,
            backgroundColor: "green",
            position: "center"
        }).showToast();
    }

  var resultDiv = document.getElementById("result");
  resultDiv.innerHTML = "<p>IPv4: " + ipv4 + "</p><p>IPv6: " + ipv6 + "</p>";
}

function copyResult() {
  var resultText = document.getElementById("result").innerText;
  var tempInput = document.createElement("textarea");
  document.body.appendChild(tempInput);
  tempInput.value = resultText;
  tempInput.select();
  document.execCommand("copy");
  document.body.removeChild(tempInput);
 // alert("Resultado copiado para a área de transferência.");

// Exibir toast de sucesso após a cópia
        Toastify({
            text: "Resultado copiado para a área de transferência.",
            duration: 3000,
            backgroundColor: "green",
            position: "center"
        }).showToast();
    }

function convertIPv6() {
  var ipv6 = document.getElementById("ipv6").value;
  
  var ipv4FromIPv6 = "";

  // Convert IPv6 to IPv4 format
  if (ipv6.includes(":")) {
    var ipv6Sections = ipv6.split(":");
    if (ipv6Sections.length === 8) {
      ipv4FromIPv6 = parseInt(ipv6Sections[6].substring(0, 2), 16) + "." + parseInt(ipv6Sections[6].substring(2, 4), 16) + "." + parseInt(ipv6Sections[7].substring(0, 2), 16) + "." + parseInt(ipv6Sections[7].substring(2, 4), 16);
    }
  
  // Exibir toast de sucesso após a conversão
        Toastify({
            text: "Conversão realizada com sucesso!",
            duration: 3000,
            backgroundColor: "green",
            position: "center"
        }).showToast();
    }

  var resultDivIPv6 = document.getElementById("resultIPv6");
  resultDivIPv6.innerHTML = "<p>IPv4 (convertido de IPv6): " + ipv4FromIPv6 + "</p>";
}

function copyResultIPv6() {
  var resultTextIPv6 = document.getElementById("resultIPv6").innerText;
  var tempInput = document.createElement("textarea");
  document.body.appendChild(tempInput);
  tempInput.value = resultTextIPv6;
  tempInput.select();
  document.execCommand("copy");
  document.body.removeChild(tempInput);
  // alert("Resultado copiado para a área de transferência.");

// Exibir toast de sucesso após a cópia
        Toastify({
            text: "Resultado copiado para a área de transferência.",
            duration: 3000,
            backgroundColor: "green",
            position: "center"
        }).showToast();
    }
</script>

</body>
</html>
