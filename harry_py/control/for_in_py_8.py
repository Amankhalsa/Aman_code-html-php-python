'''
 list1=[1,2,3,4,5]
  print(list1[0])
 for item in list1:
     print(item)
 list1 = [ ["Harry", 1], ["Larry", 2],
           ["Carry", 6], ["Marie", 250]]
 dict1 = dict(list1)
 for item in dict1:
     print(item)
 for item, lollypop in dict1.items():
      print(item, "and lolly is ", lollypop)
'''
items = [int, float, "amanY", 5,3, 3, 22, 21, 64, 23, 233, 23, 6]

for item in items:
    if str(item).isnumeric() and item>=6 and item<=23:
        print(item)
print("for loop done")