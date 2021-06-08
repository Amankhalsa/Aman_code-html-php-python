#include<stdio.h>
#include<conio.h>
void main()
{
	int day;
	printf("enter any number");
	scanf("%d",&day);
	switch(day)
	{
		case 1	:printf("Sunday");
		break;
		case 2	:printf("monday");
		break;
		case 3	:printf("tuesday");
		break;
		case 4	:printf("wednesday");
		break;
		case 5	:printf("thursday");
		break;
		case 6	:printf("friday");
		break;
		case 7	:printf("Saturday");
		break;
		
		
	}
	if (day>7)
	{
		printf("\n\n\n\t\twrong input");
	}
	
	getch();
}