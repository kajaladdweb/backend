
s1 = "Abc"
s2 = "Xyz"


s1_len= len(s1)
s2_len= len(s2)


length = s1_len if s1_len > s2_len else s2_len
result = ""
s2 = s2[::-1]
for i in range(length):
    if i < s1_len:
        result = result + s1[i]
    if i < s2_len:
        result = result + s2[i]

print(result)