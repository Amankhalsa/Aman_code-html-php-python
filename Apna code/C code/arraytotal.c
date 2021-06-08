/* ONE  array for total*/
#include<stdio.h>
#include<conio.h>
void main()
{	
	int sub[5],i,total=0;
	printf("enter your no:");
	for(i=0; i<5; i++)
	{
	scanf("%d",&sub[i]);
	total=total+sub[i];
	}
	printf("\nelements are:");
	for(i=0; i<5; i++)
	{
	printf("\nyou result is %d",sub[i]);
	}
	printf("\n\nYOUR TOTAL IS=%d",total);
	printf("\n\nTHANKS FOR USE THIS FOR LOOP WITH ARRAY");
		getch();
	
}