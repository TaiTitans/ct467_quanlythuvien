'use strict';

const { Sequelize, DataTypes } = require('sequelize');

const sequelize = new Sequelize('qlthuvien.cewsvdlrs4tq.ap-southeast-1.rds.amazonaws.com', 'admin', 'ct467_nhom9', {
  host: 'qlthuvien.cewsvdlrs4tq.ap-southeast-1.rds.amazonaws.com',
  dialect: 'mysql',
});

const TABLE_NAME = 'taikhoan';

const TaiKhoan = sequelize.define(TABLE_NAME, {
  UserID: {
    type: DataTypes.STRING,
    allowNull: false,
    validate: {
      len: [0, 158],
    },
  },

  MatKhau: {
    type: DataTypes.STRING,
    allowNull: false,
  },
  IDnhanvien: {
    type: DataTypes.STRING,
    allowNull: false,
    validate: {
      len: [0, 158],
    },
  },
  IDdocGia: {
    type: DataTypes.STRING,
    allowNull: false,
    validate: {
      len: [0, 158],
    },
  },
}, {
  tableName: TABLE_NAME,
  timestamps: true,
});

(async () => {
  await sequelize.sync({ force: false }); // This will create the table if it doesn't exist

  // Your Sequelize model is now ready to be used for interacting with the MySQL database
  try {
    const user = await TaiKhoan.create({
      name: 'John Doe',
      email: 'john@example.com',
      password: 'hashed_password',
    });

    console.log('User created:', user.toJSON());
  } catch (error) {
    console.error('Error creating user:', error);
  }
})();