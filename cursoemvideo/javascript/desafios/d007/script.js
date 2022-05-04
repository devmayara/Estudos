
var cotacao = Number(prompt("Antes de mais nada. Digite quanto está a cotação do dólar agora: "));

function button() {
  var quantidade = Number(prompt("Quantos R$ você tem na carteira?"));
  var total = quantidade / cotacao;
  
  res.innerHTML = `<strong>Os ${quantidade.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'})} reais que você tem na carteira, corresponde a... </strong> <br>
    US$ ${total.toFixed(2)}`;
}
