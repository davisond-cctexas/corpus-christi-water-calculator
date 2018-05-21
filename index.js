var express = require('express');
var router = express.Router();
var request = require("request");
var content_all = "http://web01-stg-cctx-app01.ccpd.net/contentexportall";
// var content_all = "http://cms.cctexas.com/entity/departments";
var homepage_json = "";

router.get('/', function (req, res, next) {
    res.render('index', {title: 'Responsive-Front-End-Test'});
});

request({
    url: content_all,
    json: true
}, function (error, response, body)
{
    if (!error && response.statusCode === 200)
    {
        content_all = body;
        console.log(content_all.toString());
    }

    var content = [];

    content_all.forEach(function (item)
    {
        content = content.concat(item);
    });

    console.log(content.toString());
});

module.exports = router;
