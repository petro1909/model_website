const mysql = require("mysql2");

const connection = mysql.createConnection({
    host : "localhost",
    user: "root",
    database : "modeldb",
    password : "admin"
});

module.exports = connection;