var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "kajal_test"  
});  
con.connect(function(err) {  
if (err) throw err;  
console.log("Connected!");  
var sql = "INSERT INTO customer (Cust_id, Cust_name, Cust_city,Cust_zip,Cust_email) VALUES ('11', 'nisha', 'surat','1234','n@gmail.com')";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log("1 record inserted");  
}); 
});


