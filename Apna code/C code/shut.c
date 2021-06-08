#include<stdio.h>
#include<conio.h>
void main()
{
	char ch;
	printf("do you want to sutdown your computer now(y/n)\n");
	scanf("%C",&ch);
	if(ch=='y' || ch=='y')
	{
		system("c:\\WINDOWS\\system32\\shutdown/s");
	}
		return 0;
}