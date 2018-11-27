var Records;
var pageno = 0;
var Total = 0;
var recordsperpage = 10;

$(document).ready(function () {

    LoadProductData();

});

function LoadProductData() {
    $.get("getproduct.php", function (data) {

        var result = JSON.parse(data);
        Records = result;
        Total = Records.length;
        RecordNext();
    });
}


function RecordNext() {


    if (pageno < parseInt(Total / recordsperpage) + 1)
        pageno++;
    if (pageno <= parseInt(Total / recordsperpage) + 1) {
        $("#res").html('');
        for (var i = (pageno - 1) * recordsperpage; i < pageno * recordsperpage && i < Total; i++) {

        var product = `<div class="prod"><div style="display: inline-block">
        <img src=` + Records[i].p_image + `  style="width:150px;height:150px;" />
        </div>

        <div style="display: inline-block">
        <b>Product Id: </b>` + Records[i].id + ` <br />
        <b>Name: </b>` + Records[i].p_name + ` <br />
        <b>Price: </b>` + Records[i].p_price + `<br />
        <b>Created On </b>` + Records[i].createdon + `
        </div></div>`

            $("#res").append(product);
        }
        $("#form").html('');


        //  console.log(count);
        // count = count + 10;
     //   document.getElementById('res').innerHTML = table;
      //  $("#form").html('');
    }
}

function RecordPrev() {


    if (pageno > 1) {
     //   var table = "";
        for (var i = (pageno - 2) * recordsperpage; i < (pageno - 1) * recordsperpage && i < Total; i++) {
            var product = `<div class="prod"><div style="display: inline-block">
        <img src=` + Records[i].p_image + `   />
        </div>

        <div style="display: inline-block">
        <b>Product Id: </b>` + Records[i].id + ` <br />
        <b>Name: </b>` + Records[i].p_name + ` <br />
        <b>Price: </b>` + Records[i].p_price + `<br />
        <b>Created On </b>` + Records[i].createdon + `
        </div></div>`

            $("#res").append(product);
        }
        if (pageno > 1)
            pageno--;
    //    document.getElementById('res').innerHTML = table;
        $("#form").html('');
    }

}

function show(record) {
    var table = "";
    for (var i = 0; i < record.length; i++) {
        table += "<td class='data'>" + record[i].p_name + "</td>";
        table += "<td class='data'>" + record[i].p_price + "</td>";
        table += "<td class='data'>" + record[i].p_detail + "</td>";
        table += "<td class='data'> <img src=" + record[i].p_image + " + height=250px width=500px></td>";
        table += "</tr>";
    }

    document.getElementById('res').innerHTML = table;
    $("#form").html('');
}
