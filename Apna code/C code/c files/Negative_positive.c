#include<stdio.h>
#include<conio.h>
void main()
{
	int marks;
	printf("enter your marks:");
	scanf("%d",&marks);
	if(marks<0)
	{
		printf("\n\nyou enter is negative no:");
	}
	else 
	{
		printf("\n\nyour enter is positive no:");
	}

	getch();
}