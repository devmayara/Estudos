function button() {
  var produto = prompt("Qual é o produto que você está comprando?");
  var preco = Number(prompt(`Qual é o preço do ${produto}?`));

  var desconto = preco/100*10;
  var precoComDesconto = preco - desconto;

  res.innerHTML = `<strong>Calculando desconto de 10% para ${produto} ... </strong> <br>
                    O preço original era ${preco.toLocaleString('pt-BR', 
                    {style: 'currency', currency: 'BRL'})}. <br>
                    Você acaba de ganhar ${desconto.toLocaleString('pt-BR', 
                    {style: 'currency', currency: 'BRL'})} de desconto (-10%). <br>
                    No fim, você vai pagar ${precoComDesconto.toLocaleString('pt-BR', 
                    {style: 'currency', currency: 'BRL'})} no ${produto}.`;
}
