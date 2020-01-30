var arr = [
    {countryName: 'Germany', population: '90m', famousFood: 'beer'},
    {countryName: 'Italy', population: '50m', famousFood: 'pizza, pasta'},
    {countryName: 'Denmark', population: '5.6m' , famousFood: 'Danish pastries and desserts'},
    {countryName: 'Sweden', population: '10m' , famousFood: 'Crisp Bread'},
    {countryName: 'Netherlands', population: '17m' , famousFood: 'Hashish'}
];


function showFlag(str){
    var doc = document.getElementById(str);
    setCountryInfo(str);
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


function setCountryInfo(str){
    for(var i= 0; i<arr.length; i++){
        if(arr[i].countryName == str){
            var txt = '<b>Country Name:</b></br>' + arr[i].countryName + '</br></br>' +
            '<b>population:</b></br>' + arr[i].population + '</br></br>' +
            '<b>FamousFood:</b></br>' + arr[i].famousFood;
            document.getElementById('countryInfo').innerHTML = txt;
            break;
        }
    }
    
    
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




