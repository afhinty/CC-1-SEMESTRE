#include <stdio.h>
#include <locale.h>

int main(){
    setlocale(LC_ALL, "portuguese");
    
	float a1, a2, af, soma, media;
	float maior;
	
	do{
		printf("Digite a1:");
		scanf("%f", &a1);
		
	}while (a1 < 0 || a1 > 5);
	
	do{
		printf("Digite a2:");
		scanf("%f", &a2);
		
	}while (a2<0 || a2>5);
	
	media = a1+a2;
	
	if(media >= 6){
	    printf("Aprovado");
	} else{
	    do{
	        printf("Digite af:");
	        scanf("%f", &af);
		
	}while (af < 0 || af > 5)
	   
	maior = a1; 
	
	if(maior <= a2){
		maior = a2;
	}
	media = af + maior;
	if(media >=6){
		printf("Aluno aprovado");
	}else {
		printf("Aluno de DP");
	}

	}
	return 0;

	}

