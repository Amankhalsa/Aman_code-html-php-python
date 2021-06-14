'''
Created on May 21, 2021

@author: Admin
'''

n=18
no_of_guess=1
print("Number of guesses is limited")
while no_of_guess<=9:
    guess_number=int(input("enter number:\n"))
    if guess_number<18:
        print("you enter less number please enter grater number\n")
    elif guess_number>18:
        print("please enter less number\n")
    else:
        print("you won \n")
        print(no_of_guess,"no.of guesses he took to finish.")
        break
    print(9-no_of_guess,"no. of guesses left")
    no_of_guess = no_of_guess + 1

    if(no_of_guess>9):
        print("Game Over गेम ओवर हो  गई है ")
        break
