'''
Created on Apr 22, 2021

@author: hp
'''
print("While looop:")
tbl=1
while(tbl<11):
    print("Table of ",tbl)
    mul=1
    while(mul<=10):
        
        print(tbl," x ",mul,"=",tbl*mul)
        mul+=1
        print('____________')
    
    tbl+=1
