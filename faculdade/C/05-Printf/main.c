#include <stdio.h>

int main(int arge, char const *argv[])
{
    /* code */
    char var_char = 'c';
    int var_int = 18;
    float var_float = 80.5F;

    printf("var_char: %c\n", var_char);
    printf("var_int: '%05d'\n", var_int);
    printf("var_float: %.2f\n", var_float);
    printf("var_string: %s\n\n", "uma frase");

    return 0;
}
