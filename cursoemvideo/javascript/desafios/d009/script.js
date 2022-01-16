function button() {
  var funcionario = prompt("Qual é o nome do funcionário?");
  var salario = Number(prompt(`Qual é o salário de ${funcionario}?`));
  var porcentagem = Number(prompt(`O salário de ${funcionario} vai ser reajustado em quantos porcentos?`));

  res.innerHTML = ` <strong>${funcionario} recebeu um aumento salárial! </strong> <br>
                    O salário atual era de R$${salario}. <br>
                    Com um aumento de ${porcentagem}%, o salário vai aumentar R$${Number(salario) * (porcentagem / 100)} no próximo mês. <br>
                    E a partir daí, ${funcionario} vai ganhar R$${Number(salario) + (Number(salario) * (porcentagem / 100))} por mês.`;
}
