var mysql = require('mysql');


var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "kajal_test"
});


con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT * FROM customer WHERE cust_name LIKE 'k%'", function (err, result) {
    if (err) throw err;
    console.log(result);
  });
});
