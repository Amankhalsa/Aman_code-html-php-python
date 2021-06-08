/*switch statement */
#include<stdio.h>
#include<conio.h>
void main()
{
	char ch;
	
	printf("\nenter any alphabet:");
	scanf("%c",&ch);
	switch(ch)
		{
		case 'a'	:	
		case 'e'	:
		case 'o'	:		
		case 'u'	:	
		case 'i'	:			
		
		printf("\n%c is vowe",ch);
		break;
		dafault :	printf("\n\n\%c wrong input",ch);
		break;
	}	
	
			
	getch();
}