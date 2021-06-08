#include<stdio.h>
#include<conio.h>
void main()
{	
	char ch1,ch2,ch3;
	printf("\n type any first character:");
	ch1=getchar();
	printf("\n dont worry neter second character:");
	ch2=getch();
	printf("\n ok enter last character:");
	ch3=getch();
	printf("\n all the character you'b typed are:\n");
	putchar(ch1);
	putch('\n');
	putch(ch2);
	putchar('\n');
	putchar(ch3);
}