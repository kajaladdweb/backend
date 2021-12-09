#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable()

print("Content-type:text/html\r\n\r\n")

db = pymysql.connect(host="localhost",user="root",password="",database="admin_panel" )
cursor = db.cursor()
cursor.execute("select * from student")

data = cursor.fetchall()
for row in data:
	id = row[0]
	name = row[1]
	Email = row[2]
	Password = row[3]
	Mobile = row[4]
	print ("Id=%d,Name=%s,Email=%s,Password=%s,Mobile=%s" %(id, name, Email, Password, Mobile))
	print("<a href='update_new.py?sid=%d'>edit</a> <a href='delete.py?sid=%d'>delete</a><br>" %(id,id))     
db.close()
