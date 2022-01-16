
function button() {
  var produto = prompt("Que produto você está comprando?");

  var custa = Number(prompt(`Quanto custa ${produto} que você está comprando?`));
  var n1 = custa.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'})

  var deu = Number(prompt(`Qual foi o valor que você deu para pagar ${produto}?`));
  var n2 = deu.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'}) 

  var troco = deu - custa;
  var n3 = troco.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'}) 

  alert(`Você comprou ${produto} que custou ${n1}. Deu ${n2} em dinheiro e vai receber ${n3} de troco. Volte Sempre!`);
}
