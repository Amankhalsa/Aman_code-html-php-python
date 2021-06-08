/*Addition and multiply with array*/ 
#include<stdio.h>
#include<conio.h>
 main()						/*main start*/
{
	int sub1[4],sub2[4],i,total[4],mult[4];
	printf("enter 1st Array:\n");		/*scanf section  for 1st Array*/
	for(i=0;i<4;i++)
	{
		scanf("%d",&sub1[i]);
	}
	printf("enter 2st Array:\n");		/*scanf section  for 2nd Array*/
	for(i=0;i<4;i++)
	{
		scanf("%d",&sub2[i]);
	}
	
	for(i=0;i<4;i++)
	{
		total[i]=sub1[i]+sub2[i];
		mult[i]=sub1[i]*sub2[i];	/*Addition & multiple section*/
	}
	printf("\nAddition of array");
	for(i=0;i<4;i++)
	{								/*Printing section  for all Array*/
     printf("\n%d\t%d\tADD=\t%d\t%d",sub1[i],sub2[i],total[i],mult[i]);	
	}			
	printf("\n\n\t\t\tThank You So much.....!");		
		getch();
}							/*main close*/