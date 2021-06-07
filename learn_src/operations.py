'''
Created on 26-Apr-2021

@author: dell
'''
'''
print("Python module function:\n")
import calc

c=calc.addition(10,20)

print("1st Addition is :",c)
c=calc.sub(30,10)
print("2nd Subtracion is :",c)
c=calc.mul(25,4)

print("3rd Multiplication is :",c)
c=calc.div(40,2)
print("4th Division is :",c)


can import using method1, method2, 3...n
'''
from calc import *


c=addition(10,20)

print("1st Addition is :",c)
c=sub(35,10)
print("2nd Subtracion is :",c)
c=mul(22,4)

print("3rd Multiplication is :",c)
c=div(41,2)
print("4th Division is :",c)

