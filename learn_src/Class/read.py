'''
Created on 02-May-2021

@author: dell
'''
import os
print("read function ")
path="/home/dell/Desktop/Chrome Passwords.csv"
f=open(path,'r')
print(f.read())

f.close()