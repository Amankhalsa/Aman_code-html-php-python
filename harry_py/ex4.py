'''
Created on May 26, 2021

@author: Admin
'''


print("enter number:")
n =int(input())
print("type 1 or 0:")
one=int(input())
new=bool(one)
if new ==True:
    for x in range(1,n,+1):
        # print(x)
        # print("bahar wala ",x)
        for i in range(1,x+1):
            #j bahar wale ki value lai raha hai 
            print(i,end=" ")
            #useke according print kar raha hai 
            # print("*", end=" ")
            # print("*",end=" ")
        print()
elif new == False:
     for x in range(n,0,-1):
        # print(x)
        # print("bahar wala",x)
        for i in range(1,x+1):
            print(i,end=" ")
            # print("*", end=" ")
            # print("*",end=" ")
        print()
        
""" 
help text 
print("How Many Row You Want To Print")
one= int(input())
print("Type 1 Or 0")
two = int(input())
new =bool(two)
if new == True:
    for i in range(1,one+1):
        for j in range(1,i+1):
            print("*",end=" ")
        print()
elif new ==False:
    for i in range(one,0,-1):
        for j in range(1,i+1):
            print("*", end="")
        print()

"""   



  