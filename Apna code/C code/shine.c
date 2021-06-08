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
				printf("1");
			}
			printf("\n");
		}
	}
	getch();
}
	