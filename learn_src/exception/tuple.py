'''
Created on 05-May-2021

@author: dell
'''
from exception.list import list
print("Tuple")
list=(1,2,3,4,5,2,2,2)
print(list)
print(list[0])
print("you can't update tuple")
print(len(list))
list2=(6,7,8)
add= list+list2
print(add)
for x in list2:
    print(x)
    
print("slicing :",list[:3])


print(list[2:])
print(list[:2])
print(list*3)
print("Length is :",len(list))

print(3 in list)

for x in list:
    print(x)

print("DIR")
print(dir(list))
help(list.count)
print(list.count(2))