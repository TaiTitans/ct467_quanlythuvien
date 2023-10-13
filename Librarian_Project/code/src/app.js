require('dotenv').config()
const compression = require('compression') // tang toc va giam dung luong bo nho network
const express = require ('express')
const { default: helmet } = require('helmet')   // bao mat lo hong
const morgan = require('morgan') //tra ve test case
const app = express()

var mysql = require('mysql');

var connection = mysql.createConnection({
  host     : process.env.RDS_HOSTNAME,
  user     : process.env.RDS_USERNAME,
  password : process.env.RDS_PASSWORD,
  port     : process.env.RDS_PORT
});

connection.connect(function(err) {
  if (err) {
    console.error('Database connection failed: ' + err.stack);
    return;
  }

  console.log('Connected to database.');
});

//init middleware
app.use(morgan('dev'))
app.use(helmet())
app.use(compression())
//init db
require('./dbs/init.mysql')

//init routes



//endpoint API


//handling error
module.exports = app


