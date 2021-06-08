/* Seconds to hours , mintue and seconds*/
#include<stdio.h>
#include<conio.h>
main()
{

	double mega,kb;
	printf("Enter the amount of mb to convert:\n");
	scanf("%lf",&mega);
	kb=mega*1024;
	printf("There are %lf KB  in %lf MB\n",kb,mega);

	getch();
		
}