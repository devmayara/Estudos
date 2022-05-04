function button() {
  let aluno = prompt("Qual é o nome do aluno?");
  let n1 = Number(prompt(`Primeira nota de ${aluno}:`));
  let n2 = Number(prompt(`Segunda nota de ${aluno}:`));

  let media = (n1 + n2) / 2;

  res.innerHTML = `<strong>Analisando a situação de ${aluno}...</strong><br>
  Com as notas ${n1} e ${n2}, <strong>a média é ${media}</strong><br>`;
  if (media >= 6) {
    res.innerHTML += `Com a média acima de 6.0, o aluno está <br> Aprovado!`;
  } else if (media < 6 || media == 3) {
    res.innerHTML += `Com média entre 3.0 e 6.0, o aluno está em <br> Recuperação!`;
  } else (media < 3); {
    res.innerHTML += `Com média abaixo de 3.0, o aluno está <br> Reprovado!`;
  } 
  
}
