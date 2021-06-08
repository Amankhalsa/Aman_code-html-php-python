#include<stdio.h>
#include<conio.h>
void main()
{
	int i,j;
	for(i=1; i<=7; i++)/*forst line print*/
	{
		for(j=1; j<=i; j++)
		{
			printf(" * ",i);
		}
		printf("\n");
     	}
     	
		
	
	getch();
}