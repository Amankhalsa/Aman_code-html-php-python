#include<stdio.h>
#include<conio.h>
void main()
{
	int no; 
	char ans;
	start:
	printf("enter a no");
	scanf("%d",&no);
	if(no%2==0)
	{
		printf("This no is even");
	}
	else
		{
		printf("this no is odd");
		}
	printf("\n\ndo you want to exit:");
	scanf("%c",&ans);
	
	if(ans=='n')
	{
	goto start;
	}
	getch();
}