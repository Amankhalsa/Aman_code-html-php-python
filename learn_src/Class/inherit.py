'''
Created on 28-Apr-2021

@author: dell
'''

class A:
    def Adata(self):
        print("Mehod of A class")
    def getdata(self):
        print("in A")
class B(A):
    def Bdata(self):
        print("from b class ")
    def getdata(self):
        print("in A")
class C(A,B):
    def Cdata(self):
        print(" from c class ")

obj=C()
'''obj.Cdata()
obj.Bdata()
obj.Adata()
'''
obj.getdata()

