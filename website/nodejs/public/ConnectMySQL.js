var mysql = require('mysql');
var con = mysql.createConnection({
    host:'qlthuvien.cewsvdlrs4tq.ap-southeast-1.rds.amazonaws.com',
    user:'admin',
    password:'ct467_nhom9',
    port:'3306'
});

//Kiểm tra kết nối với csdl được chưa
con.connect(function(err){
    if (err) {
        console.log('Error connecting to database:', err);
      } else {
        console.log('Connected to database!');
      }
})