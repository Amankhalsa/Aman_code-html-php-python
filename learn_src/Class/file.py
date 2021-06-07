'''
Created on 02-May-2021

@author: dell
'''"""
fn=open('python.txt','w')
fn.write("Woops! I have deleted the content!")"""

fn = open("pathon.txt", "r")
for x in fn:
  print(x)
'''import os
os.remove("text.txt")'''
fn.close()