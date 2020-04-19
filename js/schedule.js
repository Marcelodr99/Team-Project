function updatePrice() {
    //                                                                               \/ Prices
    var amountCR = parseInt((document.getElementById("cleanRoom").innerText), 10) * 15;
    var amountCB = parseInt((document.getElementById("cleanBath").innerText), 10) * 20;
    var amountCE = parseInt((document.getElementById("cleanEntry").innerText), 10) * 25;
    var amountCS = parseInt((document.getElementById("cleanStair").innerText), 10) * 30;

    var amountS = parseInt((document.getElementById("upSofa").innerText), 10) * 40;
    var amountSE = parseInt((document.getElementById("upSectional").innerText), 10) * 50;
    var amountC = parseInt((document.getElementById("upChair").innerText), 10) * 55;
    var amountO = parseInt((document.getElementById("upOttoman").innerText), 10) * 60;
    var amountD = parseInt((document.getElementById("upDining").innerText), 10) * 65;

    var amountTR = parseInt((document.getElementById("tileRoom").innerText), 10) * 70;
    var amountTB = parseInt((document.getElementById("tileBath").innerText), 10) * 75;
    var amountTE = parseInt((document.getElementById("tileEntry").innerText), 10) * 80;
    var amountTS = parseInt((document.getElementById("tileStair").innerText), 10) * 85;

    console.log(estimTotal);
    var estimTotal = amountCR + amountCB + amountCE + amountCS + amountS + amountSE + amountC + amountO + amountD + amountTR + amountTB + amountTE + amountTS;
    document.getElementById("total").innerHTML = estimTotal;
}


//CARPET
function addCR() {
    var quantity_temp = document.getElementById("cleanRoom").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    document.getElementById("cleanRoom").innerHTML = quantity_int.toString();
    updatePrice();
}

function subCR() {
    var quantity_temp = document.getElementById("cleanRoom").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_temp >= 1)
        document.getElementById("cleanRoom").innerHTML = quantity_int.toString();
    updatePrice();
}

function addCB() {
    var quantity_temp = document.getElementById("cleanBath").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    document.getElementById("cleanBath").innerHTML = quantity_int.toString();
    updatePrice();
}

function subCB() {
    var quantity_temp = document.getElementById("cleanBath").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_temp >= 1)
        document.getElementById("cleanBath").innerHTML = quantity_int.toString();
    updatePrice();
}

function addCE() {
    var quantity_temp = document.getElementById("cleanEntry").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    document.getElementById("cleanEntry").innerHTML = quantity_int.toString();
    updatePrice();
}

function subCE() {
    var quantity_temp = document.getElementById("cleanEntry").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_temp >= 1)
        document.getElementById("cleanEntry").innerHTML = quantity_int.toString();
    updatePrice();
}

function addCS() {
    var quantity_temp = document.getElementById("cleanStair").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    document.getElementById("cleanStair").innerHTML = quantity_int.toString();
    updatePrice();
}

function subCS() {
    var quantity_temp = document.getElementById("cleanStair").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_temp >= 1)
        document.getElementById("cleanStair").innerHTML = quantity_int.toString();
    updatePrice();
}

// UPHOLSTERY
function addS() {
    var quantity_temp = document.getElementById("upSofa").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    document.getElementById("upSofa").innerHTML = quantity_int.toString();
    updatePrice();
}

function subS() {
    var quantity_temp = document.getElementById("upSofa").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_temp >= 1)
        document.getElementById("upSofa").innerHTML = quantity_int.toString();
    updatePrice();
}

function addSe() {
    var quantity_temp = document.getElementById("upSectional").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    document.getElementById("upSectional").innerHTML = quantity_int.toString();
    updatePrice();
}

function subSe() {
    var quantity_temp = document.getElementById("upSectional").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_temp >= 1)
        document.getElementById("upSectional").innerHTML = quantity_int.toString();
    updatePrice();
}

function addC() {
    var quantity_temp = document.getElementById("upChair").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    document.getElementById("upChair").innerHTML = quantity_int.toString();
    updatePrice();
}

function subC() {
    var quantity_temp = document.getElementById("upChair").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_temp >= 1)
        document.getElementById("upChair").innerHTML = quantity_int.toString();
    updatePrice();
}

function addO() {
    var quantity_temp = document.getElementById("upOttoman").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    document.getElementById("upOttoman").innerHTML = quantity_int.toString();
    updatePrice();
}

function subO() {
    var quantity_temp = document.getElementById("upOttoman").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_temp >= 1)
        document.getElementById("upOttoman").innerHTML = quantity_int.toString();
    updatePrice();
}

function addDR() {
    var quantity_temp = document.getElementById("upDining").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    document.getElementById("upDining").innerHTML = quantity_int.toString();
    updatePrice();
}

function subDR() {
    var quantity_temp = document.getElementById("upDining").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_temp >= 1)
        document.getElementById("upDining").innerHTML = quantity_int.toString();
    updatePrice();
}

//TILE AND GROUT

function addTR() {
    var quantity_temp = document.getElementById("tileRoom").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    document.getElementById("tileRoom").innerHTML = quantity_int.toString();
    updatePrice();
}

function subTR() {
    var quantity_temp = document.getElementById("tileRoom").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_temp >= 1)
        document.getElementById("tileRoom").innerHTML = quantity_int.toString();
    updatePrice();
}

function addTB() {
    var quantity_temp = document.getElementById("tileBath").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    document.getElementById("tileBath").innerHTML = quantity_int.toString();
    updatePrice();
}

function subTB() {
    var quantity_temp = document.getElementById("tileBath").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_temp >= 1)
        document.getElementById("tileBath").innerHTML = quantity_int.toString();
    updatePrice();
}

function addTE() {
    var quantity_temp = document.getElementById("tileEntry").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    document.getElementById("tileEntry").innerHTML = quantity_int.toString();
    updatePrice();
}

function subTE() {
    var quantity_temp = document.getElementById("tileEntry").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_temp >= 1)
        document.getElementById("tileEntry").innerHTML = quantity_int.toString();
    updatePrice();
}

function addTS() {
    var quantity_temp = document.getElementById("tileStair").innerText;
    var quantity_int = parseInt(quantity_temp, 10) + 1;
    document.getElementById("tileStair").innerHTML = quantity_int.toString();
    updatePrice();
}

function subTS() {
    var quantity_temp = document.getElementById("tileStair").innerText;
    var quantity_int = parseInt(quantity_temp, 10) - 1;
    if (quantity_temp >= 1)
        document.getElementById("tileStair").innerHTML = quantity_int.toString();
    updatePrice();
}