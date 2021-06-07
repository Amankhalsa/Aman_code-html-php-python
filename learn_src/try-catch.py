'''
Created on May 23, 2021

@author: Admin
'''

num1=input("enter 1st no")
num2=input("enter 2nd no")
try:
    num3=int(num1)+int(num2)
    print("Result is :",num3)
except Exception as e:
    print(e)
    print("An exception occurred")
    
