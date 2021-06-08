#include<stdio.h>
#include<conio.h>
void main()
{
	char vowel;
	printf("\nenter any vowel:");
	scanf("%c",&vowel);
	switch(vowel)
		{
		case'A'	:	 
		case'a'	:	printf("\n The A"); break;
		case'E'	:	
		case'e'	:	printf("\n The E"); break;
		case'I'	:	
		case'i'	:	printf("\n The I"); break;
		case'O'	:	
		case'o'	:	printf("\n The O"); break;
		case'U'	:	
		case'u'	:	printf("\n The U"); break;
		dafault :	printf("\n\nNOT A VOWEL");
	}
	
				printf("\n\n\nThank you so much");
	getch();
}