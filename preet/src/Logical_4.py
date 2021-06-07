'''
Created on Apr 21, 2021

@author: hp
'''
from pickle import FALSE, TRUE
from xml.sax import _false
print("*** Logical Operators***")

" Logical operators are used to combine conditional statements:"

''' 
Operator 
and     Returns True if both statements are true
or      Returns True if one of the statements is true
not     Reverse the result, returns False if the result is true
'''
x=False
y=True
print("result is :",x and y)


print("\n and Operator :")
x=10
y=10
A=2
B=3
print("if value",x, "or",y,"both true  :",x==y and A==B)
print("\n or Operator :")
x=10
y=10
A=2
B=3
print("if value",x,y,"or ",A,B,"one is true :",x==y or A==B)

print("\n Not Operator:")
x=True
y=True
print("Retrun reverse result :",not x)