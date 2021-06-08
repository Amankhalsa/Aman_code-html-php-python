#include<stdio.h>
#include<conio.h>
void main()
{
	int a[100],i,n;

	printf("\n\nenter number of elements");
	scanf("%d",&n);
	printf("\nenter value in array\n");
	for(i-0;i<=n;i++)
	{
		scanf("%d",&a[i]);
	}
	printf("Entered array is:\n");
	for(i=1;i<=n;i++)
	{
		printf("\t\t%d\n",a[i]);
		
	}
	getch();
}