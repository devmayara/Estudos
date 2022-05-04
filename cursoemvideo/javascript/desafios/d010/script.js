function button() {
  let a = Number(prompt("Qual é o valor de a? "));
  let b = Number(prompt("Qual é o valor de b? "));
  let c = Number(prompt("Qual é o valor de c? "));
  let delta = b ** 2 - 4 * a * c;

  res.innerHTML = `<strong>Calculando...</strong> <br>
                  A equação atual é: <strong>${a}x² + ${b}x + ${c} = 0</strong> <br>
                  O cálculo realizado será: <strong>&#916;= ${b}² - 4 . ${a} . ${c}</strong> <br>
                  O valor calculado foi: <strong>&#916;= ${delta}</strong>`;
}
