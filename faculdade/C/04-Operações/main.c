#include <stdio.h>

int main(int argc, char const *argv[])
{
    /* code */
    int idade = 18;
    int matricula = 12345;

    float preco = 80.5;

    //soma
    idade = idade + 1;
    idade++;
    idade += 1;

    //subtração
    idade = idade - 1;
    idade--;
    idade -= 1;

    //multiplicação
    idade = idade * 2;
    idade *= 2;

    //divisão
    idade = idade / 2;
    idade /= 2;

    //resto da divisão
    idade = idade % 2;
    idade %= 2;

    //ordem de precedência
    idade = (idade % 1) + 2 * 7 - 3 / 2;
    // () -> % -> + -> * -> - -> / 

    //comentario
    /*
        comentario
    */
    
    printf("Idade: %d\n", idade);
    printf("Matricula: %d\n", matricula);
    printf("Preco: %.2f\n", preco);
    
    return 0;
}
