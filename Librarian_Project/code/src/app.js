require('dotenv').config()
const compression = require('compression') // tang toc va giam dung luong bo nho network
const express = require ('express')
const { default: helmet } = require('helmet')   // bao mat lo hong
const morgan = require('morgan') //tra ve test case
const app = express()

//init middleware
app.use(morgan('dev'))
app.use(helmet())
app.use(compression())
//init db
require('./dbs/init.mysql')
//init routes
app.use('', require('./routes/index'))

//endpoint API


//handling error
module.exports = app


