
dic={1:"one", 2:"two", 3:"three", 4:"four"}
# print(dic["2"])
a=int(input("Enter value:"))
if a in dic:
    print(dic[a])
# print(dic)
else:    
    print("Sorry...! you entered wrong input\n Bcoz You cross the")

print("If you want to update this type below \n") 
hi=input("enter yes :")
if "yes" in hi:

    b=int(input("Updateing  key number:"))
    c=input("Updateing  key number:")
    dic.update({b:c})
    print(dic)
    print("Thanks for using it ")
else:
    print(hi * 2,"\nwrong input\n may be spell mistake")


# else:
#     a=int(a)
#     for x in range(0,a):
#         print(x)