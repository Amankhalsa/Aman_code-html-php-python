#include<stdio.h>
#include<conio.h>
enum days{mon=1,tue,wed,thu,fri,sat,sun};
void main()
{
    int no;
enum days d;
printf("enter your day no(1-7)");
scanf("%d",&no);
d=no;
if(d==sat || d==sun)
{
    printf("weekend");
}
else
    {
printf("this no %d is",no);
    printf("\n\t\nworking day");

}
getch();
}
