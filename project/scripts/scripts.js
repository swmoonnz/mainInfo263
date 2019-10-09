// Keep your scripts in here
var lastPanel = 0;

$("#customer").click(function() {
    customerTable();
})

function customerTable() {
    var x = document.getElementById("customerInfo");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display= "none";
    }
}

$("#vehicle").click(function() {
    displayTable("vehicle");
})

$("#invoice").click(function() {
    displayTable("invoice");
})

$("#garage").click(function() {
    console.log("test");
    displayTable("garage");
})

$("#alignment").click(function() {
    console.log("test");
    displayTable("alignment");
})

function displayTable(tableType) {
    var x = document.getElementById(tableType + "Info");

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display= "none";
    }

    if (lastPanel === 0) {
        lastPanel = x;
    } else {
        if (lastPanel === x) {
            return;
        }
        lastPanel.style.display = "none";
        lastPanel = x;
    }
}

function hideTable(tableType) {
    var x = document.getElementById(tableType + "Info");
    x.style.display = "none";
}


// function getData() {
//     $.get("/assignment/php/fetchVehicleInfo.php", function(data) {
//         var test = data;
//         console.log(test);
//     });
// }

