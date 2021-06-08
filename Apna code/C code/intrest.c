/*simple intrest*/

#include<stdio.h>
#include<conio.h>
void main()
{
int amount,rate,time,ans;
printf("\nEnter principal amount=");
scanf("%d",&amount);

printf("\nEnter rate of interst=");
scanf("%d",&rate);

printf("\nEnter rate of time=");
scanf("%d",&time);

ans=(amount*rate*time)/100;
/*simple interst formula*/
printf("\n simple interest =%d",ans);
getch();
	return 0;
}