<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendas login SSH - Planos ON</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .popup-sidebar {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0, 0, 0, 0.8);
      color: white;
      padding: 75px;
      border-radius: 10px;
      text-align: center;
      display: none; /* Oculta o sidebar no início */
      z-index: 9999;
    }

    .popup-sidebar a {
      color: white;
      text-decoration: none;
      font-size: 18px;
      display: block;
      margin-bottom: 20px;
    }

    .popup-sidebar a:hover {
      opacity: 0.7;
    }

    .open-popup-btn {
      background-color: black;
      border: none;
      border-radius: 4px;
      color: white;
      cursor: pointer;
      font-size: 16px;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .open-popup-btn:hover {
      background-color: black;
    }

    header {
      background-color: #ff6347;
      color: white;
      padding: 10px;
      text-align: center;
    }

    h1 {
      margin: 0;
      font-size: 24px;
    }

    .plan-card {
      background-color: #f8f8f8;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin: 20px;
      padding: 20px;
    }

    .plan-title {
      font-size: 24px;
      margin: 0;
      text-align: center;
    }

    .plan-price {
      font-size: 36px;
      font-weight: bold;
      margin: 10px 0;
      text-align: center;
    }

    .plan-features {
      list-style-type: none;
      padding: 0;
    }

    .plan-features li {
      margin-bottom: 5px;
    }

    .btn {
      background-color: #ff6347;
      border: none;
      border-radius: 4px;
      color: white;
      cursor: pointer;
      font-size: 16px;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #e60000;
    }

    footer {
      background-color: #ff6347;
      color: white;
      padding: 10px;
      text-align: center;
    }

    .footer-icon {
      font-size: 24px;
      margin: 5px;
    }

    .footer-link {
      color: white;
      text-decoration: none;
      margin: 5px;
    }
  </style>
</head>
<body>
  <header>
    <h1>PLANOS PRIME - SSH_VIP</h1>
    <br>
    <button class="open-popup-btn" onclick="togglePopup()">MENU</button>
  </header>

  <div class="plan-card">
  <h2 class="plan-title">
Plano Prime <br>1 login
<i class="fas fa-check-circle"></i></h2>
    <div class="plan-price">R$ 10,00</div>
    <ul class="plan-features">
      <li><i class="fas fa-globe"></i> internet ilimitada</li>
      <li><i class="fas fa-phone"></i> recebe os dados do login</li>
      <li><i class="fas fa-calendar-alt"></i> Validade de 30 dias</li>
    </ul>
    <h1>VENDEDORES AUTORIZADO </h1>
    <br>
    <a href="https://t.me/VEM_BRABO" class="btn fab fa-telegram"> VEM_BRABO</a>
    <a href="https://t.me/scvirtual" class="btn fab fa-telegram"> SCVIRTUAL</a>
  </div>

  <div class="plan-card">
    <h2 class="plan-title">Plano Prime<br> 2 login <i class="fas fa-check-circle"></i></h2>
    <div class="plan-price">R$ 20,00</div>
    <ul class="plan-features">
      <li><i class="fas fa-globe"></i> internet ilimitada</li>
      <li><i class="fas fa-phone"></i> recebe os dados do login</li>
      <li><i class="fas fa-calendar-alt"></i> Validade de 30 dias</li>
    </ul>
    <h1>VENDEDORES AUTORIZADO </h1>
    <br>
    <a href="https://t.me/VEM_BRABO" class="btn fab fa-telegram"> VEM_BRABO</a>
    <a href="https://t.me/scvirtual" class="btn fab fa-telegram"> SCVIRTUAL</a>
  </div>

  <div class="plan-card">
    <h2 class="plan-title">Plano Prime<br> 3 login <i class="fas fa-check-circle"></i></h2>
    <div class="plan-price">R$ 30,00</div>
    <ul class="plan-features">
      <li><i class="fas fa-globe"></i> internet ilimitada</li>
      <li><i class="fas fa-phone"></i> recebe os dados do login</li>
      <li><i class="fas fa-calendar-alt"></i> Validade de 30 dias</li>
    </ul>
    <h1>VENDEDORES AUTORIZADO </h1>
    <br>
    <a href="https://t.me/VEM_BRABO" class="btn fab fa-telegram"> VEM_BRABO</a>
    <a href="https://t.me/scvirtual" class="btn fab fa-telegram"> SCVIRTUAL</a>
  </div>

  <div class="plan-card">
    <h2 class="plan-title">Plano Prime VIP<br> 10 login <i class="fas fa-check-circle"></i> PREMIUM</h2>
    <div class="plan-price">R$ 60,00</div>
    <ul class="plan-features">
      <li><i class="fas fa-globe"></i> internet ilimitada</li>
      <li><i class="fas fa-phone"></i> recebe os dados do login</li>
      <li><i class="fas fa-calendar-alt"></i> Validade de 30 dias</li>
    </ul>
    <h1>VENDEDORES AUTORIZADO </h1>
    <br>
    <a href="https://t.me/VEM_BRABO" class="btn fab fa-telegram"> VEM_BRABO</a>
    <a href="https://t.me/scvirtual" class="btn fab fa-telegram"> SCVIRTUAL</a>
  </div>

  <div class="plan-card">
    <h2 class="plan-title">Plano Prime VIP 2<br> 20 login <i class="fas fa-check-circle"></i> PREMIUM</h2>
    <div class="plan-price">R$ 100,00</div>
    <ul class="plan-features">
      <li><i class="fas fa-globe"></i> internet ilimitada</li>
      <li><i class="fas fa-phone"></i> recebe os dados do login</li>
      <li><i class="fas fa-calendar-alt"></i> Validade de 30 dias</li>
    </ul>
    <h1>VENDEDORES AUTORIZADO </h1>
    <br>
    <a href="https://t.me/VEM_BRABO" class="btn fab fa-telegram"> VEM_BRABO</a>
    <a href="https://t.me/scvirtual" class="btn fab fa-telegram"> SCVIRTUAL</a>
  </div>

  <div class="plan-card">
    <h2 class="plan-title">Plano Prime VIP 3<br> 30 login <i class="fas fa-check-circle"></i> PREMIUM</h2>
    <div class="plan-price">R$ 150,00</div>
    <ul class="plan-features">
      <li><i class="fas fa-globe"></i> internet ilimitada</li>
      <li><i class="fas fa-phone"></i> recebe os dados do login</li>
      <li><i class="fas fa-calendar-alt"></i> Validade de 30 dias</li>
    </ul>
    <h1>VENDEDORES AUTORIZADO </h1>
    <br>
    <a href="https://t.me/VEM_BRABO" class="btn fab fa-telegram"> VEM_BRABO</a>
    <a href="https://t.me/scvirtual" class="btn fab fa-telegram"> SCVIRTUAL</a>
  </div>

  <div class="popup-sidebar" id="popupSidebar">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
    <a href="#">link 4</a>
    <a href="#">Link 5</a>
    <a href="#">Link 6</a>
    <a href="#">Link 7</a>
    <a href="#">link 8</a>
  </div>

  <footer>
    <a href="#" class="footer-link"><i class="fas fa-check-circle footer-icon"></i> site verificado</a>
    <a href="#" class="footer-link"><i class="fab fa-whatsapp footer-icon"></i></a>
    <a href="#" class="footer-link"><i class="fab fa-telegram footer-icon"></i></a>
    <a href="#" class="footer-link"><i class="fab fa-instagram footer-icon"></i></a>
  </footer>

  <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>

  <script>
    function togglePopup() {
      var popup = document.getElementById("popupSidebar");
      popup.style.display = popup.style.display === "block" ? "none" : "block";
    }
  </script>
</body>
</html>
