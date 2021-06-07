'''
Created on Apr 21, 2021

@author: hp
'''
myVariable = input("enter number:")
try:
    tmp = int(myVariable)
    print('The variable a number')
except:
    print('The variable is not a number')