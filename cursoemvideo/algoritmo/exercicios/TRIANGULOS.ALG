algoritmo "triangulos"
var
   A, B, C: Real
   EQ, ES, TRI: Logico
inicio
      Escreva("Digite o primeiro lado: ")
      Leia(A)
      Escreva("Digite o segundo lado: ")
      Leia(B)
      Escreva("Digite o terceiro lado: ")
      Leia(C)
      TRI<-(A<B+C) e (B<A+C) e (C<A+B)
      EQ <-(A=B) e (B=C) e (A=C)
      ES <-(A<>B) e (B<>C) e (A<>C)
      Escreval ("Pode formar um TRINGULO? ", TRI)
      Escreval ("O triangulo e EQUILATERO? ", EQ)
      Escreval ("O triangulo e ESCALENO? ", ES)
fimalgoritmo