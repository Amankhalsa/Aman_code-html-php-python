'''
Created on Apr 21, 2021

@author: hp
'''
print ("Nested  example")
x=int(input("enter value :")) 
if x>0:
    print("Positive number ")
    if x % 2==0:
        print(x,"is Even Number")
    else:
        print(x, "is Odd Number")
elif x<0:
    print("Negative number ")
    
else:
    print("Negative number ")