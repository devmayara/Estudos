
function button() {
  var produto = prompt("Que produto você está comprando?");
  var custa = Number(prompt(`Quanto custa ${produto} que você está comprando?`));
  var deu = Number(prompt(`Qual foi o valor que você deu para pagar ${produto}?`));
  alert(`Você comprou ${produto} que custou ${custa}. Deu ${deu} em dinheiro e vai receber ${deu - custa} de troco. Volte Sempre!`);
}