
function button() {
  var temperatura = Number(prompt("Digite uma temperatura em Grau Celsius (ºC):"));

  var kelvin = temperatura + 273.15;
  var fahrenheit = (temperatura * 9/5) + 32;

  var res= document.querySelector('div#res');
  res.innerHTML = `<strong>A temperatura de ${temperatura}ºC, corresponde a... </strong> <br>
    ${kelvin.toFixed(2)}ºK (Kelvin) ;<br>
    ${fahrenheit.toFixed(2)}ºF (Fahrenheit) .`;
}
