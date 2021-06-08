/*one dimentional array for print elements  total*/ 
#include<stdio.h>
#include<conio.h>
void main()
{
	int sub[5],i,total=0;
	printf("enter your marks");
	for(i=0;i<5;i++)
	{
		scanf("%d",&sub[i]);
		total=total+sub[i];
	}
	
printf("\nelementa are");
for(i=0;i<5;i++)
{
	printf("\n%d",sub[i]);
}	

printf("\nTotal is %d",total);
getch();

}