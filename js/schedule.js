function updatePrice() {

    var amountCR = parseInt((document.getElementById("cleanRoom").innerText), 10);
    var amountCB = parseInt((document.getElementById("cleanBath").innerText), 10);
    var amountCE = parseInt((document.getElementById("cleanEntry").innerText), 10);
    var amountCS = parseInt((document.getElementById("cleanStair").innerText), 10);

    var amountS = parseInt((document.getElementById("upSofa").innerText), 10);
    var amountSE = parseInt((document.getElementById("upSectional").innerText), 10);
    var amountC = parseInt((document.getElementById("upChair").innerText), 10);
    var amountO = parseInt((document.getElementById("upOttoman").innerText), 10);
    var amountD = parseInt((document.getElementById("upDining").innerText), 10);

    var amountTR = parseInt((document.getElementById("tileRoom").innerText), 10);
    var amountTB = parseInt((document.getElementById("tileBath").innerText), 10);
    var amountTE = parseInt((document.getElementById("tileEntry").innerText), 10);
    var amountTS = parseInt((document.getElementById("tileStair").innerText), 10);

    var estimTotal = amountCR *15+ amountCB *15+ amountCE *15+ amountCS *15+ amountS *15+ amountSE *15+ amountC *15+ amountO *15+ amountD *15+ amountTR *15+ amountTB *15+ amountTE *15+ amountTS*15;
    document.getElementById("total").innerHTML = estimTotal;

    var message1 = "Carpet Cleaning : " + "<br><br>Rooms: " + amountCR + "<br><br>Bath/Laundry: " + amountCB + "<br><br>Entry/Hall: " + amountCE + "<br><br>Staircase: " + amountCS; 
    var message2 = "<br><br>Upholstery Cleaning : " + "<br><br>Sofa: " + amountS + "<br><br>Sectional: " + amountSE + "<br><br>Chair: " + amountC + "<br><br>Ottoman: " + amountO + "<br><br>Dining Room Chair: " + amountD; 
    var message3 = "<br><br>Tile & Grout Floor Cleaning : " + "<br><br>Rooms: " + amountTR + "<br><br>Bath/Laundry: " + amountTB + "<br><br>Entry/Hall: " + amountTE + "<br><br>Staircase: " + amountTS; 
    
    document.getElementById("disp").innerHTML = message1 + message2 + message3;
    document.getElementById("services").value = message1 + message2 + message3 +"<br><br> Estimated Total: $" +document.getElementById("total").innerHTML;
}

function showCalendar(){
    document.getElementById("btnShowDate").setAttribute("type", "hidden");
    document.getElementById("btnSubmit").setAttribute("type", "submit");
    document.getElementById("conDate").hidden = false;
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