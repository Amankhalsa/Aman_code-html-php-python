/* love statement */
#include<stdio.h>
#include<conio.h>
void main()
{
	char love;
	printf("\nIF YOU LIKE ME PRESS Y/N:");
	scanf("%c",&love);
	switch(love)
		{
		case 'y'	:
		case 'Y'	:	printf("\n\t I love you"); break;
		case 'n'	:	
		case 'N'	:   printf("\n\t I miss you"); break;
		
		dafault    :   printf("\n\n wrong input"); break;
	}
		printf("\n\n\nThank you so much");
getch();

}