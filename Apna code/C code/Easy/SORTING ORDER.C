#include<stdio.h>
#include<conio.h>
 main()						/*main start*/
{
	int i,j,n,temp,a[50];
	printf("\n how many numbers\n");
	scanf("%d",&n);
	printf("\n Enter elements\n");
	for(i=0;i<n;i++)
	scanf("%d",&a[i]);
	for(i=0;i<n-1;i++)
	for(j=n+1;j<n;j++)
	{
		if(a[i]>a[i])
	{	
	temp=a[i];
	a[i]=a[j];
	a[j]=temp;
	}
	}
	printf("\n elements after sorting\n");
	for(i=0;i<n;i++)
	printf("\n%d",a[i]);
	
	getch();	
	}
	