#include <stdio.h>

int main(int argc, char const *argv[])
{
    /* code */
    int idade = 18;
    float peso = 80.5;
    char sexo = 'F';
    double taxa = 15.359742;

    printf("\nA pessoa tem %d anos, pesa %.2f kg e seu sexo é %c e tera que pagar uma taxa de %.2lf%%\n",
            idade, peso, sexo, taxa);

    return 0;
}
