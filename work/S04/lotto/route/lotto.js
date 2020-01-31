/**
 * Route for today.
 */
"use strict";

var express = require("express");
var router  = express.Router();
var arr = [1,7,9,22,27,30,34];

module.exports = {
    "generateRandom" : generateRandom
}


function generateRandom(){
    var arr = [0,0,0,0,0,0,0];
    var i= 0;
    while (i<7){
        var rnd = Math.floor(1 + Math.random() * 35);
        if(!arr.includes(rnd)){
            arr[i] = rnd;
            i++;
        }
    }
    return arr.toString;
}

router.get("/", (req, res) => {
    let data = {};     
    data.lottoNum = arr.toString(); 
    res.render("lotto", data);
});



module.exports = router;
