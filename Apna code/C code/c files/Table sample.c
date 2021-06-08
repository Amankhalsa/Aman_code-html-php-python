#include<stdio.h>
#include<conio.h>
void main()
{
	int i,n;
	printf("enter your no:");
	scanf("%d",&n);
	printf("\n\t\tTable of:%d",n);
	for(i=1; i<=10; i++)
	{
		
	printf("\n%d*%d=%d",n,i,n*i);/*number mulxi then nxi=ans */
	}
	getch();
}