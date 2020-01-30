function showFlag(str){
    var doc = document.getElementById(str);
    var op = 0.1;
    var timer = setInterval(function () {
        if (op >= 1){
            clearInterval(timer);
            doc.style.opacity = 1;
        }
        doc.style.opacity = op;
        op += 0.1;
    }, 200);
}

function hideFlag(str){
    var doc = document.getElementById(str);
    var op = 1;
    var timer = setInterval(function () {
        if (op <= 0){
            clearInterval(timer);
            doc.style.opacity = 0;
        }
        doc.style.opacity = op;
        op -= 0.1;
    }, 200);
}


