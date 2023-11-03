// const { userModel } = require('../model')
// const bcrypt = require('bcryptjs')

const userController = {
    nhanvienCreate: (req, res, next) => {
        res.status(500).json(
            'Vui lòng điền đủ thông tin!!!'
        )
    }
}

module.exports = userController