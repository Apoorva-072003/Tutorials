number = int(input())

#code here
def utility(number):
    return {1: "One", 2: "Two", 3: "Three", 4: "Four", 5: "Five", 6: "Six", 7: "Seven", 8: "Eight", 9: "Nine"}.get(number, "Unknown")
    
# def utility(number):

#         match(number):
#             case 1:
#                 return "One"
#             case 2:
#                 return "Two"
#             case 3:
#                 return "Three"
#             case 4:
#                 return "Four"
#             case 5:
#                 return "Five"
#             case 6:
#                 return "Six"
#             case 7:
#                 return "Seven"
#             case 8:
#                 return "Eight"
#             case 9:
#                 return "Nine"
#             case _:
#                 return "Unknown"

print(utility(number))