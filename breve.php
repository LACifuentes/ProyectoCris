<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
isLogged($sid); ?>

<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('');
  background: cyan;
  height: 50%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: black;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 8px;
}

.middle {
  position: flex;
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>
        <div class="bgimg">
        <center>
        <a href="home.php"><img class="mt-5" src="<?= getConfig('logo') ?>" width="<?= getConfig('largura') ?>" height="<?= getConfig('altura') ?>"></a><br>
        <br>
        Bem vindo(a) <b><?= getNickById($uid) ?></b>!<br>
        <br>
        </div>
  <div class="bgimg">
  <div class="middle">
    <h1>NOVIDADES EM BREVE</h1>
    <hr>
    <p id="demo" style="font-size:23px"></p>
  </div>
</div>
<!--<div class="bottomleft">
<a href="/"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp;&nbsp;Voltar ao Início</a>
</div>
</div>-->
<!-- Botão Flutuante Inicial-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="/" style="position:fixed;width:60px;height:60px;bottom:15px;right:15px;background-color:#ffffff;color:#6922d9;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;">
<i style="margin-top:16px" class="fa fa-home"></i>
</a>
		<!-- Botão Flutuante Inicial-->


<script>
// Set the date we're counting down to
var countDownDate = new Date("April 4 2023 00:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>
