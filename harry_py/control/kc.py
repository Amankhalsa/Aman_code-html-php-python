'''
Created on May 25, 2021

@author: Admin
'''
print("Enter Operator:")
a=input()
while True:
    if a == "+" :
        print("your wana add:")
        print("num 1:")
        a=int(input())
        print("num 2:")
        b=int(input())
        if a == 45 and b == 4:
            print("Ans is : ",a,"+",b,"=", 50)
            print("enter value for continue")
        else:
            print("Ans is:",a+b)
            if  "yes"==input("if you wana continue type: \'yes\' "):
                    
                print("Enter Operator:")
                a=input()  
            else:
                print("\tThank you ...!")
                print("\t\tTry again..!")
                break      
    elif a == "-":
        print("your wana subtact:")
        a=int(input("num 1:"))
        b=int(input("num 2:"))
        if a == 15 and b == 4:
            print("Ans is :",10)
        else:
            print("Ans is:",a-b)
            if  "yes"==input("if you wana continue type: \'yes\' "):   
                print("Enter Operator:")
                a=input()  
            else: 
                print("\tThank you ...!")
                print("\t\tTry again..!")
                break


    elif a == "*":
        print("your wana Multiplication:")
        a=int(input("Enter num 1:"))
        b=int(input("Enter num 2:"))
        if a == 19 and b == 4:
            print("Ans is :",23)
        else:
            print("Ans is:",a*b)
            if  "yes"==input("if you wana continue type: \'yes\' "):
                    
                print("Enter Operator:")
                a=input()  
            else:
                print("\tThank you ...!")
                print("\t\tTry again..!")
                break
            
    elif a == "/":
        print("your wana Division:")
        a=int(input("Enter num 1:"))
        b=int(input("Enter num 2:"))
        if a == 100 and b == 4:
            print("Ans is :",22)
        else:
            print("Ans is:",a/b)
            if  "yes"==input("if you wana continue type: \'yes\' "):
                    
                print("Enter Operator:")
                a=input()  
            else:
                
                print("\tThank you ...!")
                print("\t\tTry again..!")
                break 
            
    else:
        print("Try Again")
        print("\t\twrong input")
        break
    
        
