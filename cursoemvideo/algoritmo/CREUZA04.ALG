algoritmo "Creuza04"
var
   preco, imposto: Real
inicio
      Escreva("Qual o preço do produto? US$")
      Leia(preco)
      imposto<-(preco*60)/100
      Escreva("O imposto sera de US$", imposto:5:2)
fimalgoritmo