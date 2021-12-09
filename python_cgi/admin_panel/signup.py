#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable()

db = pymysql.connect(host="localhost",user="root",password="",database="admin_panel" )

cursor = db.cursor()
form = cgi.FieldStorage()

name= form.getvalue('name')
email = form.getvalue('email')
password = form.getvalue('password')
mobile = form.getvalue('mobile')


print("Content-type:text/html\r\n\r\n")

try:
	cursor.execute("insert into student(s_name,s_email,s_pwd,s_mob) values('%s','%s','%s','%s')" %(name,email,password,mobile))
	db.commit()	   
	print("Data Inserted")
except:
    db.rollback()
    print("error in Inserting")
db.close()