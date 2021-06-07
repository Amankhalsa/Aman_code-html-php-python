'''
Created on 03-May-2021

@author: dell
'''
import os
'''path ="/home/dell/Desktop/"
print(os.listdir(path))
print("\n")
old='/home/dell/Desktop/123.jpg'
new='/home/dell/Desktop/newdir/123.jpg'
os.renames(old,new)
'/home/dell/Desktop/123.jpg'''
path ='/home/dell/Desktop/newdir/123.jpg'
print(os.getcwd())
os.remove(path)
print("removed ")
