
<!doctype html>
<html lang="pt-br">
<head>

<title>Site Online</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/png" href="favi.png">
<meta name="title" content="Site Online">
<meta name="description" content="Verificador de CDN">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

</head>

<style>
body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
      background: radial-gradient(circle at 50% -20.71%, #a3a7ff 0, #7a8ffc 25%, #3c78f2 50%, #0063e8 75%, #0051de 100%);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-color: #333;
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px); /* Suporte para navegadores WebKit */
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      overflow-y: scroll;
      position: relative;
    }
    
    body::before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  background: linear-gradient(45deg, #ff0000, #00ff00, #0000ff, #ff0000);
  background-size: 400% 400%;
  animation: gradientAnimation 10s ease infinite;
}

@keyframes gradientAnimation {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
</style>
<body style="
        background:#2a2b25; 
        color:#fff; 
        font-size:16px; 
        font-family: 'Roboto', sans-serif;">
<style>
        a:link {
            color: white;  text-decoration: none;
        }

        a:visited {
            color: white;  text-decoration: none;
        }
</style>
<center>
<img src="giphy.gif" style="height:140px;">
<div style="
                font-size: 18px;
                color: rgb(14, 194, 68);
                border-bottom: 1px solid;
                width: 246px;
                padding: 4px; ">
                
<h2>SITE ONLINE<br>
</div></h2><br>
<center>
<div class="container">
<h2>Checar Domínio da VPS</h2>
<div><label for="siteUrl">Digite o ip da vps:</label></div>
<br>
<input type="text" id="ipInput" placeholder="Exemplo: 51.222.75.247">
<button onclick="fetchDomains()">Verificar</button>
<div id="result"></div>
</div>
<script src="script.js"></script>
</center>
<br>
<br>
<br>
<p class="copyright">&copy; 2023 - <script> document.write(new Date().getFullYear())</script><br> Todos os direitos reservados<br><a title="Styleshout" href="https://t.me/VEM_BRABO">ALLSOURCESBRCANAL_OFC</a></p>
</body>
</html>
