'use strict'

const express = require('express')
const router = express.Router()

router.get('/test', (req,res,next)=>{
    return res.status(200).json({
        message: 'Welcome'
    })
})


router.use('/v1/api_', require('./access'))

module.exports =  router