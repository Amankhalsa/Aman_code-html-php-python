#include<stdio.h>
#include<conio.h>
void main()
{
	int i,j,k,n,mid;
	printf("enter the value of star:");
	scanf("%d",&n);
	mid=(n/2)+1;
	for (i=1;i<n;i++)
	{
		if(i==1 || i==mid)
		{
			for(j=1;j<=n;j++)
			{
				printf("*");
			}
			printf("\n");
		}
		else
		{
			for(k=1;k<=n;k++)
			{
				if(k==1 ||k==n)
				{
					printf("*");
				}
				else
				{
					printf(" ");
				}
			}
			printf("\n");
		}
	}
getch();
}
