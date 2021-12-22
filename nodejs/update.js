var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "kajal_test"  
});  
con.connect(function(err) {  
if (err) throw err;  
var sql = "UPDATE customer SET Cust_city = 'Delhi' WHERE cust_city = 'surat'";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log(result.affectedRows + " record(s) updated");  
});  
}); 
