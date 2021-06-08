/* two method of Swapint first third variable  2nd without third variable */
#include<stdio.h>
#include<conio.h>
void main()
{
	
	int a,b,c,temp;
	printf("\nplease enter your  A value:");
	scanf("%d",&a);
	printf("\nplease enter your  b value:");
	scanf("%d",&b);
	printf("\nyour present value of A value is:%d",a);
	printf("\nyour present value of B value is:%d",b);
/*	temp=a; 
     a=b;
	b=temp;*/
	
     	a=a+b; /*a=3+b=1=4 now a is 4 */
		b=a-b; /* 1-4=3 now b is 3*/
		a=a-b; /* now a=4-b=3 a=1 */
	
	printf("\n New value of A is:%d",a);
	printf("\n New value of b is:%d",b);
	
getch();
}

