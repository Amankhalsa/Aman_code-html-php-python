'''
Created on 06-May-2021

@author: dell
'''
import re
pattern =r"^ABC" 
mystr="ABCD"
x=re.match(pattern, mystr)
if x:
    print("Matched ")
else:
    print("Not match")

 