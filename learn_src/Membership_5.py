'''
Created on Apr 21, 2021

@author: hp
'''
print("Python Membership Operators")
print("Membership operators are used to test if a \nsequence is presented in an object:")
'''

in         Returns True if a sequence with the specified value is present in the object        x in y    
not in    Returns True if a sequence with the specified value is not present in the object    x not in y
'''
print("\nif  value is present in the object")
list=[1,2,3,4,5]
x=3
print("Result is :",x in list)
print("\nif value is not present in the object")
print(x not in list)

