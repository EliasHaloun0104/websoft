/**
 * Route for lotto.
 */
"use strict";

var express = require("express");
var router  = express.Router();
var arr = [1,7,9,22,27,30,34];

router.get("/", (req, res) => {
    let data = {};     
    data.lottoNum = arr.toString(); 
    res.render("lotto", data);
});



module.exports = router;
