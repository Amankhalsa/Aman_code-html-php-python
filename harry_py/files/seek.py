'''
Created on May 27, 2021

@author: Admin
'''
f=open('test.txt')
# where is pointer 
print(f.tell())
print(f.readline())
print(f.tell())
print(f.readline())
# if i use seek 0 then reading from starting 
f.seek(0)
print(f.readline())

f.close()


def square(n):
    '''Takes in a number n, returns the square of n'''
    return n**2

print(square.__doc__)