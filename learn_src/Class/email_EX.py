'''
Created on 06-May-2021

@author: dell
'''
import re
pat=r"(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9]+$)"
email="Abc@preet.com"
x=re.match(pat,email)
if x:
    print("Email is Matched ")
else :
    print("email is Not Matched ")