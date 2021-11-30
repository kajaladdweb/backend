

ini_dict = {'kajal': 1, 'vishva' : 5,'Riya' : 10}

print ("initial 1st dictionary", ini_dict)

ini_dict['akash'] = ini_dict['Riya']
del ini_dict['Riya']

print ("final dictionary", str(ini_dict))