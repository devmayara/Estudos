function button() {
  let antes = Number(prompt('Qual era o preço anterior do produto?'));
  let agora = Number(prompt('Qual é o preço atual do produto?'));

  res.innerHTML = `<strong>Analisando os valores informados...</strong> <br>
  O produto custava <strong>R$${antes}</strong> e agora custa <strong>R$${agora}</strong>.<br>`;
  if (antes < agora) {
      res.innerHTML += `Hoje o produto está mais caro.<br>
      O preço subiu <strong>R$${agora - antes}</strong><br>
      Uma variação de <strong>${(agora - antes) / antes * 100}%</strong> pra cima.`;
    } else if (antes > agora) {
      res.innerHTML += `Hoje o produto está mais barato.<br>
      O preço caiu <strong>RS${agora - antes}</strong><br>
      Uma variação de <strong>${(agora - antes) / antes * 100}%</strong> pra baixo.`;
    }
}
