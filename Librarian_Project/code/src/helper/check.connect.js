const os = require('os');
const process = require('process');
const _SECONDS = 5000;

// Count connect
const countConnect = () => {
    // Code để đếm kết nối trong MySQL
};

// Check overload
const checkOverload = () => {
    setInterval(() => {
        // Code để kiểm tra quá tải trong MySQL dựa trên số lượng kết nối, số lõi CPU, và sử dụng bộ nhớ
    }, _SECONDS);
};

module.exports = {
    countConnect,
    checkOverload
};
