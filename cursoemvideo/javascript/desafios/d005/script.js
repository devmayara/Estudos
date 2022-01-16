
function button() {
  var distancia = Number(prompt("Digite uma distância em metros (m):"));

  var km = distancia / 1000;
  var hm = distancia / 100;
  var dam = distancia / 10;
  var dm = distancia * 10;
  var cm = distancia * 100;
  var mm = distancia * 1000;

  var res= document.querySelector('div#res');
  res.innerHTML = `<strong>A distância de ${distancia} metros, corresponde a... </strong> <br>
   ${km} quilometros (km) ;<br>
   ${hm} hectometros (hm) ;<br>
   ${dam} decametros (dam) ;<br>
   ${dm} decimetros (dm) ;<br>
   ${cm} centimetros (cm) ;<br>
   ${mm} milimetros (mm) .`;
}
