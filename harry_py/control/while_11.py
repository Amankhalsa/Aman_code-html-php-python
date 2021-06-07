'''
Created on May 21, 2021

@author: Admin
'''
i=0
while i<=9:
    guess=int(input("Enter number less than 9:\n"))
    if guess>9:
        print(f"You entered {guess}")
        print("please enter {less} num.\n")
    elif guess<9:
        print(f"You entered {guess}")
        print("please enter {grater} number\n")
    else:
        print(" Congratulations..! \n\t you won this game\n")
        print(f"you have taken {i} no of change")
        break
    i=i+1
    if i>8:
        print(f"you lost  {i} change ")

        print("Game is over \n \t \t Try Again ")
        break
        
    print(9-i,"left chance")

'''
uess=18
count=1
while(True):
    user=int(input("Enter the guessing number: "))
    if user==guess:
        print(f"you won!!!   you guess in {count} times")

        break
    else:
        print(f"wrong guess!!!  you guess {count} times")

    count = count + 1
    if count==9:
        break
        '''