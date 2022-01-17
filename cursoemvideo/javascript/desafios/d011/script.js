function button() {
  let ano = prompt("Qual é o ano que você quer verificar?");

  let bissexto = ano % 4;

  res.innerHTML = `<strong>Analisando o ano de ${ano}...</strong> <br>`;
  if (bissexto == 0) {
    res.innerHTML += `O ano de ${ano} 
    É BISSEXTO! \u{2705}`;
    res.style.color = 'green';
  } else {
    res.innerHTML += `O ano de ${ano} NÃO É BISSEXTO! \u{274C}`;
    res.style.color = "red";
  }
} // Fim da função button()
