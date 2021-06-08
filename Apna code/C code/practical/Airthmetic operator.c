// C Program to demonstrate the working of arithmetic operators

#include <stdio.h>
int main()
{
    int a,b,c;
    printf("\nenter your 1st  no for Add:");/* Addition tab*/
    scanf("%d",&a);
    printf("\nenter your 2nd  no for Add:");
    scanf("%d",&b);
    c = a+b;								
    printf("\nyour result for %d+%d=%d\n",a,b,c);
    printf("\nenter your 1st no for subtract:");/* subtracyion tab*/
    scanf("%d",&a);
 	printf("\nenter your 2nd no for subtract:");
    scanf("%d",&b);
	c = a-b;
    printf("\nyour result for %d-%d = %d \n",a,b,c);
    
    printf("\nenter your 1st no for Multiplication:");
    scanf("%d",&a);
    printf("\nenter your 2nd no for Multiplication:");
	scanf("%d",&b);
    c = a*b;
    printf("\nyour result for %d*%d = %d \n",a,b,c);
    
    printf("\nenter your  no for Divide:");
   /* scanf("%d",&a);
    printf("\nenter your 2nd no for Divide:");*/
	scanf("%d%d",&a,&b);
    c=a/b;
    printf("\nyour result for %d/%d = %d \n",a,b,c);
    
    printf("\nenter your 1st no for Module:");
    scanf("%d",&a);
    printf("\nenter your 2nd no for Module:");
    scanf("%d",&b);
    c=a%b;
    printf("\nRemainder when a divided by b = %d \n",a,b,c);
    
    return 0;
}