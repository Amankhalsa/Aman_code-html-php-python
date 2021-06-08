#include<stdio.h>
#include<conio.h>
void main()
{
	int marks;
	char grade;
	printf("enter your marks:");
	scanf("%d",&marks);
	if(marks>=90) 	grade='O';
	if(marks>=80	&& 	marks<90)	grade='D';
	if(marks>=75	&&	marks<80)	grade='M';
	if(marks>=60	&&	marks<75)	grade='1ST';
	if(marks>=50	&&	marks<60)	grade='2ND';
	if(marks>=40	&&	marks<50)	grade='3RD';
	if(marks<40) grade='f';

			{
		printf("\n\nYOUR GRADE IS: %c",grade);
	}
	getch();
}