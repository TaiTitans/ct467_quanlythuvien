const mysql = require('mysql');
const express = require('express');
const routes = require('./routes')
const app = express();

app.listen(3000, function () {
    console.log('Node server running: http://localhost:3000')
});

const con = mysql.createConnection({
    host: "qlthuvien.cewsvdlrs4tq.ap-southeast-1.rds.amazonaws.com",
    user: "admin",
    password: "ct467_nhom9",
    port: '3306',
    database: "qlthuvien"
});

app.get('/', function (req, res) {
    const sql = "SELECT * FROM docgia";
    con.query(sql, function (err, results) {
        if (err) throw err;
        res.send(results);
    });
});

routes(app)