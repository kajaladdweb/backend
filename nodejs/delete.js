var mysql = require('mysql');  
var con = mysql.createConnection({  
host: "localhost",  
user: "root",  
password: "",  
database: "kajal_test"  
});  
con.connect(function(err) {  
if (err) throw err;  
var sql = "DELETE FROM customer WHERE Cust_city = 'Delhi'";  
con.query(sql, function (err, result) {  
if (err) throw err;  
console.log("Number of records deleted: " + result.affectedRows);  
});  
}); 
