<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="manifest" href="manifest.json">
  <title>Link Whatsapp</title>

  <link rel="stylesheet" href="style.css?v=1.0.1">
</head>




<body>

  <header>
    <div class="navbar">
      <span>Gerador de Link Whatsapp</span>

      <div class="nb-buttons">
        <a href="https://t.me/VEM_BRABO" target="_blank" rel="Projeto no privado do telegram">
          <img src="images/whatsapp.svg" alt="icon whatsapp">
        </a>
      </div>
    </div>
  </header>

  <main>
    <ul class="last-numbers">
    </ul>
  </main>

  <footer>
    <form class="frm-new-number">
      <input id="ws-number" class="npt-number" type="text" autocomplete="off" pattern="[0-9 ()-]+$">
      <div class="group-btn">
        <button type="submit" class="btn-ws">Abrir no Whatsapp</button>
        <button type="button" class="btn-sh">
          <img src="images/share.svg" alt="icon share">
        </button>
      </div>
    </form>
  </footer>

  <script>
    const $frmNewNumber = document.querySelector('.frm-new-number');
    const $btnWs = document.querySelector('.btn-ws');
    const $btnSh = document.querySelector('.btn-sh');
    const $nptNumber = document.querySelector('.npt-number');
    const $lastNumbers = document.querySelector('.last-numbers');

    const setMask = (value, mask, ini = 0) => mask.replace(/\*/g, () => value[ini++] || '');
    const onlyNumbers = (number) => (String(number).match(/\d+/g) || []).join('');
    const openWhats = (number) => window.open(`https://wa.me/55${number}`, '_blank');
    const formatTime = (date) => new Date(date).toLocaleString('pt-br');

    const saveNumber = (strNumber) => {
      const listLastNumbers = JSON.parse(localStorage.getItem('numbers') || '[]');

      listLastNumbers.unshift({
        phone: strNumber,
        time: Date.now()
      });

      localStorage.setItem('numbers', JSON.stringify(listLastNumbers.splice(0, 10)));
    }

    const showLastNumbers = () => {
      const listLastNumbers = JSON.parse(localStorage.getItem('numbers') || '[]');

      $lastNumbers.textContent = '';
      listLastNumbers.forEach(number => {
        $lastNumbers.innerHTML = $lastNumbers.innerHTML + `
          <li onclick="openWhats(${onlyNumbers(number.phone)})">
            <p class="number">${number.phone}</p>
            <span class="time">${formatTime(number.time)}</span>
          </li>
        `
      });
    }

    const maskPhone = (phoneNumber) => {
      if (phoneNumber.length < 11) {
        return setMask(phoneNumber, '(**) ****-****');
      } else {
        return setMask(phoneNumber, '(**) *****-****');
      }
    }

    const clearInputNumber = () => {
      $frmNewNumber.reset();
    }

    $frmNewNumber.addEventListener('submit', (ev) => {
      ev.preventDefault();

      saveNumber(maskPhone(onlyNumbers($nptNumber.value)));
      showLastNumbers();
      openWhats(onlyNumbers($nptNumber.value));
      clearInputNumber();
    });

    $nptNumber.addEventListener('keyup', (ev) => {
      if (onlyNumbers(ev.target.value).length > 8) {
        ev.target.value = maskPhone(onlyNumbers(ev.target.value));
      } else {
        ev.target.value = onlyNumbers(ev.target.value);
      }
    })

    $btnSh.addEventListener('click', (ev) => {
      if (navigator.share !== undefined) {
        navigator.share({
          title: 'Link do WhatsApp',
          text: 'link do whatsapp para o número ' + maskPhone(onlyNumbers($nptNumber.value)),
          url: 'https://wa.me/55' + onlyNumbers($nptNumber.value),
        }).catch((error) => console.log('Error sharing', error));
      }
    })

    window.onload = () => {
      showLastNumbers();
    }
  </script>
  
 
</body>

</html>