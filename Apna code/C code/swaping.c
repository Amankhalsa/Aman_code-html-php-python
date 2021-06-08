/*this program is used for find enven or odd no*/

#include<stdio.h>
#include<conio.h>
void main()
{
int a,b,temp;
printf("enter the value of a and b\n");
scanf("%d%d",&a,&b);
printf("before swaping\na=%d\nb=%d\n",a,b);
temp=a;
a=b;
b=temp;
printf("after swaping\na=%d\nb=%d\n",a,b);
	return 0;
}