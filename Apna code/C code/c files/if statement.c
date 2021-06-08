#include<stdio.h>
#include<conio.h>
void main()
{
	int marks;
	printf("enter your marks:");
	scanf("%d",&marks);
	if(marks>33)
	{
		printf("\n\n\tyour number is:%d",marks);
		printf("\n\nYou Result is PASS");	/* stament associated with if*/
		printf("\n\ncongratulation....");
		printf("\n\n\n\nThank you so much...."); /*next stament*/
	}
	if(marks<33)
	{
		printf("\n\ntyour result is fail");
			printf("\n\n\n\n\nPlease try again");
			printf("\n\n\n\n\nSorry good luck next time");
	}
	getch();
}