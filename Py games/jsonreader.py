import json
  
# Opening JSON file
f = open('fire_bookmarks.json',)
  
# returns JSON object as 
# a dictionary
data = json.load(f)
  
# Iterating through the json
# list
# for i in data['Uri']:
#     print(i)
# print(data)
a=data['children']
for i in a:

    print(i)

f.close()

# guid
# title
# index
# dateAdded
# lastModified
# id
# typeCode
# type
# root
# children
