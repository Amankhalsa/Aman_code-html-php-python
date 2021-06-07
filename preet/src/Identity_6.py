'''
Created on Apr 21, 2021



@author: hp
'''
from pickle import TRUE
print("Python Identity Operators")
print("\nIdentity operators are used to compare the objects, not if they are equal,\n but if they are actually the same object, with the same memory location:")
'''
Operator    Description                                                Example    
is        Returns True if both variables are the same object            x is y    
is not    Returns True if both variables are not the same object        x is not y
'''
print("\nis operator:")
x=True
y=True
print("Result is", x is y)

print("\nis not Operator ")
print("Result of is not :", x is not y)