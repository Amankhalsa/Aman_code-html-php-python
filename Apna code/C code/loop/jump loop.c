#include<stdio.h>
#include<conio.h>
void main()
{
	int i;
	for(i=1; i<=10; i++)
	{
	if(i==3)
	{
		continue;	
	}
	if(i==5)
	{
		break;
	}
		printf("\t %d",i);
	}

getch();	
}