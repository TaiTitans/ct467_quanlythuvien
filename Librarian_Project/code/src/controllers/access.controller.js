'use strict';

class AccessController {
    async signUp(req, res, next) { // Đúng cú pháp
        try {
            console.log('[P]::signUp::', req.body);
            res.status(201).json({ // Đã sửa 'this.res' thành 'res'
                code: '2001',
                metadata: { userid: 1 }
            });
        } catch (error) {
            next(error); // Đã sửa 'this.next' thành 'next'
        }
    }
}

module.exports = new AccessController();
