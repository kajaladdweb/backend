#!/usr/bin/python3
import pymysql
import cgi,cgitb
cgitb.enable()

db = pymysql.connect(host="localhost",user="root",password="",database="admin_panel" )

cursor = db.cursor()
form = cgi.FieldStorage()

email = form.getvalue('email')
password = form.getvalue('password')

sql="select s_email,s_pwd from student where s_email='"+email+"' AND s_pwd='"+password+"' "

if(cursor.execute(sql)):
    db.commit()
    print ("Content-type:text/html\r\n")
    print('''<html>
        <head>
            <title>Hello Word - First CGI Program</title>
        </head>
        <body>
            <h2>successfully login</h2>
        </body>
    </html>''')
else:
    db.commit()
    print("Content-type: text/html")
    print("<html>")
    print("<body>")
    print("<h2>Login fail</h2>")
    print("</body>")
    print("</html>")

db.close()