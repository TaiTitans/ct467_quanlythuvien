require('dotenv').config()
const compression = require('compression') // tang toc va giam dung luong bo nho network
const express = require ('express')
const { default: helmet } = require('helmet')   // bao mat lo hong
const morgan = require('morgan') //tra ve test case
const app = express()
const bodyParser = require('body-parser');
const ejs = require('ejs') // import EJS

app.set('view engine', 'ejs') // su dung ejs de lam template

app.use(bodyParser.urlencoded({extended: true}));
app.use(bodyParser.json())



//init middleware
app.use(morgan('dev'))
app.use(helmet())
app.use(compression())
//init db
require('./dbs/init.mysql')

//init routes

app.get('/', (req, res) => {
  res.render('home', { username: 'Guest' });
});


// xu li dang nhap
app.post('/login', (req, res) => {
  const { username, password } = req.body;

  // Thực hiện truy vấn kiểm tra tài khoản và mật khẩu
  const query = `SELECT * FROM users WHERE username = ? AND password = ?`;

  connection.query(query, [username, password], (error, results, fields) => {
      if (error) {
          console.error('Lỗi truy vấn:', error);
          res.status(500).json({ message: 'Lỗi truy vấn dữ liệu.' });
          return;
      }

      if (results.length > 0) {
          // Đăng nhập thành công, trả về JSON với thông báo thành công
          res.status(200).json({ message: 'Đăng nhập thành công' });
      } else {
          // Đăng nhập thất bại, trả về JSON với thông báo lỗi
          res.status(401).json({ message: 'Sai tên người dùng hoặc mật khẩu. Vui lòng nhập lại.' });
      }
  });
});
//endpoint API


//handling error
module.exports = app


