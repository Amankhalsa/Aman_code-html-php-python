'''
Created on May 26, 2021

@author: Admin
'''
# f =open("tst.txt",'w')
# f.write("Aman is a good boy now im learning python ")

# f =open("tst.txt",'a')
# f.write("Aman is a good boy now im learning python \n ")
#
# f=open("tst.txt","rt")
#
# for c in f:
#     print(c)


f=open("test.txt","r+")
print(f.read())
f.write("\n You are great  ")
print(f.read())
f.close()