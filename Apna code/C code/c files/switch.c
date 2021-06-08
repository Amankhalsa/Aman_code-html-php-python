#include<stdio.h>
#include<conio.h>
void main()
{
	int marks;
	
	printf("\nenter any number between 1 to 5:");
	scanf("%d",&marks);
	switch(marks)
		{
		case 1	:	 printf("\n ONE");
		
		case 2	:	printf("\n TWO");
	
		case 3	:	printf("\n THREE");
	
		case 4	:	printf("\n FOUR");
	
		case 5	:	printf("\n FIVE");
		
	}
	dafault :	printf("\n\n\nwrong input");
				printf("\n\n\nThank you so much");
	getch();
}