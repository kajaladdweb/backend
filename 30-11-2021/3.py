def first_last_same(numberList):
    print("Given list:", numberList)
    
    first = numberList[0]
    last= numberList[-1]
    
    if first== last:
        return True
    else:
        return False

numbers_x = [20, 40, 30, 10, 80]
print("result is", first_last_same(numbers_x))

numbers_y = [69, 80, 35, 35, 45]
print("result is", first_last_same(numbers_y))