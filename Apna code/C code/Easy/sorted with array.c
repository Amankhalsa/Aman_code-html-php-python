#include<stdio.h>
#include<conio.h>
 main()						/*main start*/
{
	int arr1[5]={2,1,7,5,3},arr2[5]={15,11,12,16,10},arr3[10];
	int i,j,k=0,temp;
	for(i=0;i<10;i++)
	{
		if(i>4)
		{
			arr3[i]=arr2[k];
			k++;
		}
		else 
		{
		arr3[i]=arr1[i];	
		}	
		}		
		printf("\nelements are:");
		for(i=0;i<10;i++)
		{
			printf("\n\t\t\t%d",arr3[i]);
		}
		for (i=0;i<10-1;i++)		/*outer loop */
		{
			for(j=i+1;j<10;j++)	/*inner loop */
			{
				if(arr3[j]<arr1[i])
				{
					temp=arr1[i];
					arr3[i]=arr1[j];
					arr3[j]=temp;
				}
			}
		}
	printf("\nsorted elements are:");
	for(i=0;i<10;i++)
	{
		printf("\n\t\t\t%d",arr3[i]);
	}
	getch();	
	}
	