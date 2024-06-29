async function fetchDomains() {
    const ipInput = document.getElementById('ipInput');
    const ip = ipInput.value;

    if (ip) {
        const response = await fetch(`lookup.php?ip=${ip}`);
        const data = await response.json();
        displayResults(data);
    } else {
        alert('Insira um endereço IP Válido.');
    }
}

function displayResults(domains) {
    const resultDiv = document.getElementById('result');
    resultDiv.innerHTML = '';
    
    if (domains.length === 0) {
        resultDiv.textContent = 'Nenhum domí­nio de VPS encontrado.';
        return;
    }

    const ul = document.createElement('ul');
    domains.forEach(domain => {
        const li = document.createElement('li');
        li.textContent = domain;
        ul.appendChild(li);
    });

    resultDiv.appendChild(ul);
}