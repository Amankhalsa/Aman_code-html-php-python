/*this program is used for find enven or odd no*/

#include<stdio.h>
#include<conio.h>
void main()
{
	int n;
	printf("enter your number to find Even or odd:");
	scanf("%d",&n);
	if(n%2==0)
	
		printf("your no is Even\n");
	
	else
	
		printf("your no is Odd\n");
	
	getch();
}