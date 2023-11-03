const nhanvienRoute = require('./nhanvienRoute')
const routes = app => {
    nhanvienRoute(app)
}

module.exports = routes