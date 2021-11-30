
test_dict = {'nikhil' : 1, "varsha" : 2, 'akshat' : 3, 'throni' : 4}

print("The original dictionary : " + str(test_dict))

res = {key: test_dict[key] for key in test_dict.keys() & {'varsha', 'throni'}}

print("The filtered dictionary is : " + str(res))