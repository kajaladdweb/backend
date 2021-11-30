def count_(stmt):
    print("Given String: ", stmt)
    count = 0
    for i in range(len(stmt) - 1):
        count += stmt[i: i + 4] == 'Emma'
    return count

count = count_("Emma is good developer. Emma is a writer")
print("Emma appeared ", count, "times")