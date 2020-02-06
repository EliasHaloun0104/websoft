/**
 * Route for lotto.
 */
"use strict";

var express = require("express");
var router  = express.Router();
var arr = [1,7,9,22,27,30,34];

router.get("/", (req, res) => {
    let data = {};     
    data.lottoNum = arr;
    //is there a parameter
    if(req.query.row != null){
        var clientNum = req.query.row;
        var clientArr = clientNum.split(",");
        var identical = 0;
        for(var i= 0; i<arr.length; i++){
            var num = parseInt(clientArr[i]);
            if(arr.includes(num)){
                identical++;
            }
        }
        data.yourLotto = clientArr; 
        data.identical = identical + " identical number/s";
     }
    res.send(JSON.stringify(data));
});



module.exports = router;
