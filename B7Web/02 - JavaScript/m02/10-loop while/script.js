
let html = '';

let i = 1;
while (i <= 10) {
  html += "Número: " + i + "<br>";
  i++;
}

// while(true) {   // enquanto verdadeiro
//   ...           // executa o bloco de código
// }

for(let i = 1; i <= 10; i++) {
  html += "Número: " + i + "<br>";
}

document.getElementById('demo').innerHTML = html;
