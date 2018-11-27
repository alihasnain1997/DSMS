var Records = Array();


$(document).ready(function () {

    $("#addProductButton").click(function () {
        const formHtml = `<div class="login-page">
    <div class="form">
        <table class="login-form">
            <tr>
                <h1><b style="color: #f1f1f1">Add Product</b></h1>
                <hr/>
                <input type="text" id="name" name="name" placeholder="Product Name" required ><br><br>
                <input type="number" id="price" name="price" placeholder="price" required><br><br>
                <textarea rows="3" col="10" id="detail" name="detail" maxlength="150"
                          placeholder="Details"></textarea><br><br><br>
                <input type="file" name="image" id="image" required>Upload File
                <br>
                <img src="" id="img" style="width:50px; height:50px">
                <input type="button" value="Submit" onClick="PostProduct()">

            </tr>
        </table>
    </div>
</div>`;
        $("#form").html(formHtml);
        $("#res").html('');
    });

    $("#button").click(function () {
        $.get("getproduct.php", function (data) {
            //      // Display the returned data in browser
            var result = JSON.parse(data);
            show(result);

        });
        //LoadProductData();/*
    });
    $('#form').on('change', '#image', function () {
        loadFilePreview();
    });

});


function show(record) {

    $("#res").html('');
    for (var i = 0; i < record.length; i++) {

        var product = `<div class="prod"><div style="display: inline-block">
        <img src=` + record[i].p_image + `  />
        </div>

        <div style="display: inline-block">
        Product Id:` + record[i].id + ` <br />
        Name:` + record[i].p_name + ` <br />
        Price:` + record[i].p_price + `<br />
        Created On ` + record[i].createdon + `<b> By</b> <span style="color:blue">` + record[i].createdby + `</span>
        </div></div>`

        $("#res").append(product);
    }
    $("#form").html('');
}

function loadFilePreview() {
    const file = $('#image')[0];
    console.log('file selected.')
    if (file.files && file.files[0]) {

        var imageName = file.files[0].name;
        var imageType = file.files[0].type.split("/");

        imageName = imageName.substring(0, imageName.lastIndexOf('.'));

        if (file.files[0].type.match(/^image\//)) {
            var reader = new FileReader();
            reader.onload = function (evt) {
                var img = new Image();
                img.onload = function () {
                };
                img.src = evt.target.result;
                $('#img').attr('src', img.src);
            };
            reader.readAsDataURL(file.files[0]);
        }
        else {
            alert("Invalid file type! Please select an image file.");
        }
    }
    else {
        // alert('No file(s) selected.');
    }
}

function PostProduct() {
    if (!CheckInputs()) return;
    $.ajax({
        url: "insertproduct.php",
        // send the base64 post parameter
        data: {
            p_name: document.getElementById("name").value,
            p_price: document.getElementById("price").value,
            p_detail: document.getElementById("detail").value,
            base64: $('#img').attr('src')
        },
        // important POST method s!
        type: "post",

        complete: function (data) {
            console.log(data);
            resetform();
            // window.location.href = "https://bitso.com";
        }
    });
    return false;
}

function CheckInputs() {
    var message = "Enter Valid Product ";
    var flag = true;
    if ($("#name").val().trim() <= 0) {
        if (!flag) message += ', ';
        message += "Name";
        flag = false;
    }
    if ($("#price").val() <= 0 || !$("#price").val()) {
        if (!flag) message += ', ';
        message += "Price";
        flag = false;
    }
    if (!$("#image").val()) {
        if (!flag) message += ', ';
        message += "Image";
        flag = false;
    }
    if (!flag) alert(message);
    return flag;
}

function resetform() {
    $("#name").val('');
    $("#price").val('');
    $("#detail").val('');
    $("#image").val('');
    $("#img").attr('src', '#');

}
