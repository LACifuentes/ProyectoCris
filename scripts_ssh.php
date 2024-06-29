
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/config/funcoes.php");
isLogged($sid); ?>



<style type="text/css">
    body {
      background: #ffffff;
      background-size: 400% 400%;
      animation: gradientBG 5s ease infinite;
    }

    @keyframes gradientBG {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
      .round-iframe {
         border-radius: 20px;
         width: 350px;
         height: 200px;
        }
    }
  </style>
</head>

<div class="container">
  <div class="col mb-3">
<div class="card border border-0 shadow">
<div class="card-body text-center text-nowrap">
  
    
        
        
       <!---- <section id="home-1" class="home-1" style="height: 200px; width: 350px; border-radius: 20px; border: 2px solid white;background-color: black;">
<video playsinline autoplay muted loop poster="" style="height: 100%; width: 100%;">
<source src="./animation.gif.mp4" type="video/mp4">
</video></section><br>----->
     
<!-- banner -->
<center>
<a href="https://t.me/VEM_BRABO">
<img class="mt-5" src="<?= htmlspecialchars(getConfig('logo')) ?>" width="<?= htmlspecialchars(getConfig('largura')) ?>" height="<?= htmlspecialchars(getConfig('altura')) ?>"></a>
<br><br>

<div class="card1 animate__animated animate__fadeInUp"><p>
  <b>Olá </b><b><?= html_entity_decode(htmlspecialchars(getNickById($uid))) ?></b><br>
  <div class="alerts light-theme card-notification">
  <h2 class="alerts-title">CENTRAL DE NOTIFICAÇÃO</h2>
  <div class="alerts-content">
    <p class="alerts-description"><?= html_entity_decode(gettextmsg('texto_msg')) ?></p><br>
  </div>
</div>
</div>
</div>
<br>

<div class="card-body">


<div class="mt-3" class="col-12 px-0 mb-4">
<div class="card border-0 shadow bg-black">
</div>
                       
              
	<center>
	<font color="black">SCRIPTS VARIADOS</font>
	<br>

 <?php
   echo "<input type='button' 
   value='Não Lançado' 
   class='copiarTexto btn btn-gray-900' 
   onclick='copiarTextoBotão()'>

   <script>

   function copiarTextoBotão() {
     var aux = document.createElement('input');
     aux.setAttribute('value', 'Seu Texto Aqui');
     document.body.appendChild(aux);
     aux.select();
     document.execCommand('copy');    //Comando para selecionar e copiar texto no clipboard. 
     document.body.removeChild(aux);  //Após executada ação remove elemento criado no body.

      alert('O texto foi copiado com sucesso.');           
      }

    </script>"; 
?>

</center>	
<br>	

<center>
<div class="col mb-3">
<div class="card border border-0 shadow">
<div class="card-body text-center text-nowrap">
	<font color="black">VEM_BRABO COM CHECKUSER</font>
	<br>

	<?php
   echo "<input type='button' 
   value='Copiar' 
   class='copiarTexto btn btn-gray-900' 
   onclick='copiarTextoBotão2()'>

   <script>

   function copiarTextoBotão2() {
     var aux = document.createElement('input');
     aux.setAttribute('value', 'apt update -y && apt upgrade -y && wget https://raw.githubusercontent.com/VENHABRABO/SSHPLUS/main/Plus && chmod 777 Plus && ./Plus');
     document.body.appendChild(aux);
     aux.select();
     document.execCommand('copy');    //Comando para selecionar e copiar texto no clipboard. 
     document.body.removeChild(aux);  //Após executada ação remove elemento criado no body.

      alert('O Script foi copiado com sucesso.');           
      }

    </script>"; 
?>

</center>	
<p>

<center>
<div class="col mb-3">
<div class="card border border-0 shadow">
<div class="card-body text-center text-nowrap">
	<font color="black">KIRITO SSH COM CHECKUSER</font>
	<br>

	<?php
   echo "<input type='button' 
   value='Copiar' 
   class='copiarTexto btn btn-gray-900' 
   onclick='copiarTextoBotão2()'>

   <script>

   function copiarTextoBotão2() {
     var aux = document.createElement('input');
     aux.setAttribute('value', 'apt update -y && apt upgrade -y && wget https://raw.githubusercontent.com/kiritosshxd/SSHPLUS/master/Plus && chmod 777 Plus && ./Plus');
     document.body.appendChild(aux);
     aux.select();
     document.execCommand('copy');    //Comando para selecionar e copiar texto no clipboard. 
     document.body.removeChild(aux);  //Após executada ação remove elemento criado no body.

      alert('O Script foi copiado com sucesso.');           
      }

    </script>"; 
?>

</center>	
<p>
<center>
<div class="col mb-3">
<div class="card border border-0 shadow">
<div class="card-body text-center text-nowrap">
<font color="black">PAULO AUGUSTO SSH</font>
<p>

<?php
   echo "<input type='button' 
   value='Copiar' 
   class='copiarTexto btn btn-gray-900' 
   onclick='copiarTextoBotão3()'>

   <script>

   function copiarTextoBotão3() {
     var aux = document.createElement('input');
     aux.setAttribute('value', 'apt update -y && apt upgrade -y && wget https://raw.githubusercontent.com/cybernetbres/SSHPLUS/main/Plus && chmod 777 Plus && ./Plus');
     document.body.appendChild(aux);
     aux.select();
     document.execCommand('copy');    //Comando para selecionar e copiar texto no clipboard. 
     document.body.removeChild(aux);  //Após executada ação remove elemento criado no body.

      alert('O texto foi copiado com sucesso.');           
      }

    </script>"; 
?>

</center>	
	<br>

<center>
<div class="col mb-3">
<div class="card border border-0 shadow">
<div class="card-body text-center text-nowrap">
	<font color="black">ANUBIS WEB FREE</font>
	<br>
	<font color="black">KEY ILIMITADA: 12457:16878</font>
	<br>


	 <?php
   echo "<input type='button' 
   value='Copiar' 
   class='copiarTexto btn btn-gray-900' 
   onclick='copiarTextoBotão4()'>

   <script>

   function copiarTextoBotão4() {
     var aux = document.createElement('input');
     aux.setAttribute('value', 'bash <(wget -qO- https://raw.githubusercontent.com/carecagm/SSHPLUS/main/Plus)');
     document.body.appendChild(aux);
     aux.select();
     document.execCommand('copy');    //Comando para selecionar e copiar texto no clipboard. 
     document.body.removeChild(aux);  //Após executada ação remove elemento criado no body.

      alert('O texto foi copiado com sucesso.');           
      }

    </script>"; 
?>

</center>	
	

<!-- Botão Flutuante Inicial-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="/" style="position:fixed;width:60px;height:60px;bottom:15px;left:15px;background-color:#ffffff;color:#6922d9;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;">
<i style="margin-top:16px" class="fa fa-home"></i>
</a>
		<!-- Botão Flutuante Inicial-->
		