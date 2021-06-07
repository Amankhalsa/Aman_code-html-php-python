'''
Created on 06-May-2021

@author: dell
'''
import re

#Check if the string starts with "The" and ends with "Spain":

txt = "The rain in Spain"
x = re.search("Spain", txt)

if x:
  print("YES! We have a match!")
else:
  print("No match")
