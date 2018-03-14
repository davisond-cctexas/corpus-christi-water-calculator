var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {

    var mysql = require('mysql')
    var connection = mysql.createConnection({
        host     : 'localhost',
        user     : 'root',
        password : 'velu12',
        database : 'water_calc_db'
    });

    connection.connect()

    connection.query('SELECT 1 + 1 AS solution', function (err, rows, fields) {
        if (err) throw err

        console.log('The solution is: ', rows[0].solution)
    })

    connection.end()

  res.render('index', { title: 'corpus chrtii' });
});

module.exports = router;
