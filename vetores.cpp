#include <stdio.h>
#include <locale.h>

int main(){
    setlocale(LC_ALL, "portuguese");
    
    int vet[5];
    int indice, soma = 0;
    float media;
    
    for(indice = 0; indice <5; indice++){
    	//printf("n%d", indice);
    	printf("Digite a idade:");
    	scanf("%d", &vet[indice]);
		soma+= vet[indice];//+= � a mesma coisa que soma+vet
	//printf("%d", &soma);
	}
	media = soma / indice;
	printf("A media �: %.2f", media);
	return 0;
}

