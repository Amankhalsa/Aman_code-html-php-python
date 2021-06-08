/* Seconds to hours , mintue and seconds*/
#include<stdio.h>
#include<conio.h>
main()
{
	int t,h,m,s,r;
	printf("\n Enter your time in seconds:\n");
	scanf("%d",&t);
	h=t/3600;
	r=t/60;
	m=r/60;
	s=r%60;
	printf("TIME:%d Hours:%d Mintue:%d Second:%d",h,m,s);
	getch();
		
}