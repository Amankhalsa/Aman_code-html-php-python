#include<stdio.h>
#include<conio.h>
void main()
{
int a,b,c;
printf("enter three value ");
scanf("%d%d%d",&a,&b,&c);
if(a>b)
{
if(a>c)
{
printf("\nyour grater value is %d",a);
}
else
{
    printf("\ngrater value is %d",c);
    }
}
else
{
if(b>c)
{
 printf("\ngrater value is %d",b);
    }
else
{
printf("\ngrater value is %d",c);
  }
}
printf("\n\n\tTHANKS YOUR VISIT MY PROGRAM BY AMANPREET SINGH ");
getch();
}

