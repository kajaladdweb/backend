
in_str= "james"

count = 0

for i in in_str:
	count = count + 1
newString = in_str[ 0:2 ] + in_str [count - 2: count ]


print("Input string = " + in_str)
print("New String = "+ newString)