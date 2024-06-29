<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
isLogged($sid); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Gerador de QR Code</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			text-align: center;
		}

		h1 {
			margin-top: 30px;
		}

		#qrcode {
			margin-top: 50px;
		}

		#share-btn {
			margin-top: 20px;
			padding: 10px 20px;
			background-color: #007bff;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

		#link-input {
			width: 300px;
			height: 30px;
			margin-top: 20px;
			padding: 5px;
			font-size: 16px;
			border-radius: 5px;
			border: 1px solid #ccc;
		}
	</style>
</head>
<body>
	<h1>Gerador de QR Code</h1>
	<input type="text" id="link-input" placeholder="Digite o link para gerar o QR Code">
	<div id="qrcode"></div>
	<button id="share-btn">Compartilhar</button>

	<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
	<script>
		// Gerar o QR Code
		var qr = new QRCode(document.getElementById("qrcode"), {
			width: 200,
			height: 200
		});

		function generateQRCode(text) {
			qr.clear();
			qr.makeCode(text);
		}

		// Gerar o QR Code com o texto do input
		var linkInput = document.getElementById("link-input");
		linkInput.addEventListener("input", function() {
			var link = linkInput.value;
			if (link !== "") {
				generateQRCode(link);
			}
		});

		// Compartilhar o QR Code
		var shareBtn = document.getElementById("share-btn");
		shareBtn.addEventListener("click", function() {
			var canvas = document.querySelector("#qrcode canvas");
			if (navigator.share) {
				canvas.toBlob(function(blob) {
					navigator.share({
						title: "QR Code",
						text: "Compartilhamento do QR Code gerado",
						files: [new File([blob], 'qrcode.png', {type: 'image/png'})]
					})
					.then(() => console.log('Compartilhado com sucesso.'))
					.catch(error => console.log('Erro ao compartilhar:', error));
				});
			} else {
				console.log("API de compartilhamento não suportada neste navegador.");
			}
		});
	</script>
</body>
</html>
