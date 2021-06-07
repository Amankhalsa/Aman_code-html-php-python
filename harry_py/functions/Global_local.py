'''
Created on May 29, 2021

@author: Admin
'''
# local variable example
# def sum():
#
#       a=10 #local variable cannot be accessed outside the function
#       b=20
#       sum=a+b
#       print( sum)

# print(a) #this gives an error
# sum()

#global variable example 
a=1  
def print_Number():
    # a=a+1; // cannot edit global variable 
    global a
    a=5
    a=a+1;
    print(a)
print_Number()
print(a)