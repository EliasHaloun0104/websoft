/**
 * Route for lotto.
 */
"use strict";

var express = require("express");
var router  = express.Router();
var arr = [1,7,9,22,27,30,34];

router.get("/", (req, res) => {
    var clientNum = req.query.row;
    var clientArr = clientNum.split(",");

    console.log("arr " + parseInt(clientArr[0]));
    var identical = 0;
    for(var i= 0; i<arr.length; i++){
        var num = parseInt(clientArr[i]);
        if(arr.includes(num)){
            identical++;
        }
    }
    
    let data = {};     
    data.lottoNum = arr;
    data.yourLotto = clientArr; 
    data.identical = identical + " number/s";

   


    res.render("lotto-json", data);
});



module.exports = router;
