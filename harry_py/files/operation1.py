'''
Created on May 26, 2021

@author: Admin
'''
from gevent.tests.test__backdoor import readline
print("file operation 1:\n")
f =open('test.txt','rt')

cont= f.read()
print(cont)

# for line in f:
#     print(line,end="") 
# print(f.readline())
# print(f.readline())
# print(f.readlines())
f.close()