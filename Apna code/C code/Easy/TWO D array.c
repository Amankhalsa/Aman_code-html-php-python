/*two dimentional array for print elements  total*/ 
#include<stdio.h>
#include<conio.h>
void main()
{
	int sub[2][3],i,j,total=0;
	printf("enter your marks");
	for(i=0;i<2;i++)					/*outerloop open */
	{
		for(j=0;j<3;j++)
		{
		scanf("%d",&sub[i][j]);	
		}
		}							/*outerloop Closs with scanf */
	printf("values are:\n");
	for(i=0;i<2;i++)				/*outerloop start for print  */
		{
			for(j=0;j<3;j++)
			{
			printf("\t%d",sub[i][j]);
			total=total+sub[i][j];	
			}
			printf(" = %d",total);
			total=0;
			printf("\n");
			}								/*outerloop END */
			getch();

}			