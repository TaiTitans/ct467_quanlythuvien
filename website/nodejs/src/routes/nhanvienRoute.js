const router = require('express').Router()
const { nhanvienController } = require('../controllers')

const productRoutes = app => {
    router.post('/create', nhanvienController.nhanvienCreate)
    return app.use('/api/post', router) 
}

module.exports = productRoutes