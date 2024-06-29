<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
isLogged($sid); ?>

<!DOCTYPE html>
<html> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>apk store</title>
  <style> 
    body {
      background-color: #F5F5F5;
      font-family: Arial, sans-serif;
      
      margin: auto;
    }

h1 {
  font-size: 24px;
  color: white;
  margin-top: 50px;
}

h3 {
  font-size: 24px;
  color: white;
  margin-top: 50px;
}

p {
  font-size: 18px;
  color: white;
}

#Progress_Status {
  width: 100%;
  height: 10px;
  border-radius: 5px;
  background-color: #ddd; 
  margin-top: 20px;
  overflow: hidden;
}

#myprogressBar {
  width: 0%;
  height: 100%;
  background-color: #4CAF50;
  border-radius: 5px;
  transition: width 0.5s ease-in-out;
}

button {
  background-color: #4CAF50;
  color: black;
  font-size: 20px;
  border-radius: 5px;
  border: none;
  padding: 10px 20px;
  margin-top: 20px;
  cursor: pointer;
  transition: background-color 0.5s ease-in-out;
}

button:hover {
  background-color: #3E8E41;
}
  </style>
</head>
<body> 

<p> 

<div style="background-color: rgba(10, 70, 50, 0.9);; color: white; padding: 20px; border-radius: 20px; border: 2px solid cyan;">

<center><b><h1><svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="11.000000pt" height="11.000000pt" viewBox="0 0 49.000000 52.000000" preserveAspectRatio="xMidYMid meet"> <g transform="matrix(0.1, 0, 0, -0.1, 0.613139, 48.262775)" fill="#3390ec" stroke="none"> <rect x="105.986" y="-337.226" width="237.372" height="203.212" style="stroke: rgb(0, 0, 0); fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, -1, 0, 0)"></rect> <g transform="matrix(1, 0, 0, 1, -15.766434, 2.627754)" fill="#3390ec" stroke="none"> <path d="M157 444 c-16 -32 -21 -35 -55 -32 l-37 3 3 -37 c3 -34 0 -39 -32 -55 l-35 -16 20 -34 21 -33 -21 -33 -20 -34 35 -16 c32 -16 35 -21 32 -55 l-3 -37 37 3 c34 3 39 0 55 -32 l16 -35 34 20 33 21 33 -21 34 -20 16 35 c16 32 21 35 55 32 l37 -3 -3 37 c-3 34 0 39 32 55 l35 16 -20 34 -21 33 21 33 20 34 -35 16 c-32 16 -35 21 -32 55 l3 37 -37 -3 c-34 -3 -39 0 -55 32 l-16 35 -34 -20 -33 -21 -33 21 -34 20 -16 -35z m191 -142 c2 -7 -28 -45 -67 -85 l-72 -71 -42 42 c-39 39 -41 43 -24 59 16 16 18 16 40 -5 l23 -22 49 51 c49 49 83 60 93 31z"></path> </g> </g> </svg> APK STORE <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="11.000000pt" height="11.000000pt" viewBox="0 0 49.000000 52.000000" preserveAspectRatio="xMidYMid meet"> <g transform="matrix(0.1, 0, 0, -0.1, 0.613139, 48.262775)" fill="#3390ec" stroke="none"> <rect x="105.986" y="-337.226" width="237.372" height="203.212" style="stroke: rgb(0, 0, 0); fill: rgb(255, 255, 255);" transform="matrix(1, 0, 0, -1, 0, 0)"></rect> <g transform="matrix(1, 0, 0, 1, -15.766434, 2.627754)" fill="#3390ec" stroke="none"> <path d="M157 444 c-16 -32 -21 -35 -55 -32 l-37 3 3 -37 c3 -34 0 -39 -32 -55 l-35 -16 20 -34 21 -33 -21 -33 -20 -34 35 -16 c32 -16 35 -21 32 -55 l-3 -37 37 3 c34 3 39 0 55 -32 l16 -35 34 20 33 21 33 -21 34 -20 16 35 c16 32 21 35 55 32 l37 -3 -3 37 c-3 34 0 39 32 55 l35 16 -20 34 -21 33 21 33 20 34 -35 16 c-32 16 -35 21 -32 55 l3 37 -37 -3 c-34 -3 -39 0 -55 32 l-16 35 -34 -20 -33 -21 -33 21 -34 20 -16 -35z m191 -142 c2 -7 -28 -45 -67 -85 l-72 -71 -42 42 c-39 39 -41 43 -24 59 16 16 18 16 40 -5 l23 -22 49 51 c49 49 83 60 93 31z"></path> </g> </g> </svg></h1></b></center>
<center><h3>APLICATIVO DISPONÍVEL</h3></center>
<li>PAINEL CONECTA4G</li>
<div id="Progress_Status">
<div id="myprogressBar"></div>
</div> 
<center><b><button onclick="update()" id="button1">BAIXAR APLICATIVO</button></b></center>
<script src="./js.js"></script>
</body>
<p>
</html>



