#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable()

form = cgi.FieldStorage()
db = pymysql.connect(host="localhost",user="root",password="",database="admin_panel" )
cursor = db.cursor()
print("Content-type:text/html\r\n\r\n")

id=form.getvalue('sid')
name= form.getvalue('name')
email = form.getvalue('email')
password = form.getvalue('password')
mobile = form.getvalue('mobile')

try:
	cursor.execute("update student set s_name='%s',s_email='%s',s_pwd='%s',s_mob='%s' where s_id=%s" %(name,email,password,mobile,id))
	db.commit()	   
	print("Data Updated")
except:
    db.rollback()
    print("error in Updating")
db.close()