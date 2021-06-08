#include<stdio.h>
#include<conio.h>
void main()
{
int ch;
printf("\n\t(1)Add");
printf("\n\t(2)Edit");
printf("\n\t(3)delete");
printf("\n\t(4)Exit");
printf("\n\tEnter your choice:");
scanf("%d",&ch);
if(ch==1)
{
	printf("Add option selected:");
}	
else if(ch==2)
{
printf("Edit option selected");	
}
else if(ch==3)
{
	printf("Delete option slected");
	}
else if(ch==4)
{
	printf("Exit option slected");
}
else 
{
	printf("\t\t\t\nInvalid option ");
	printf("\n\n\n\t\tPlese select Valid option under the condition ");

}
getch();
}
