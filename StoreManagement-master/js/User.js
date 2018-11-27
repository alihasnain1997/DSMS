function checkAndAddUser() {
    var user = getFormData();
    var setting = {};
    setting.type = "post";
    setting.url = "getUsers.php";
    setting.dataType = 'json';
    setting.data = {'user': user.name}

    setting.success = function (userdata) {
        //  console.log(userdata);
        if (userdata == false) {
            postUser(user);
        }
        else alert('username is already exists');
        //data=userdata;
    }
    setting.error = function () {
        console.log("AJAX failed");
    }
    $.ajax(setting);
}

function handlePostRequest() {
    if ($("#username").val().trim()) {
      //  alert($("#username").val().trim());
        checkAndAddUser();
        $("#username").val('');
        $("#userpass").val('');
    }
    else alert('Please Enter valid username');
}

function getFormData() {
    var data = {
        name: document.getElementById("username").value,
        password: document.getElementById("userpass").value,
        role: "Manager"
    };
    return data;
}

function postUser(data) {
    var xml = new XMLHttpRequest();
    xml.open("POST", "insertUser.php", true);
    var UserData = JSON.stringify(data);
    xml.send(UserData);
    xml.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText) console.log(this.responseText);
            else if (this.responseText == "FALSE" || this.responseText == false) {
                alert('Could not store the record');
            }
        }
    };
}


$(document).ready(function () {

    $("#ViewUsers").click(function () {
        console.log('In View USer Click');
        $.get("getUsers.php", function (data) {
            //      // Display the returned data in browser
            var result = JSON.parse(data);
            console.log(data + "\n" + result);
            showUser(result);
        });

    })

    $("#addUserButton").click(function () {
        const UserFormHtml = `<div class="login-page">
<div class="form">
<table class="login-form">
    <tr>
        <input type="text" id="username" placeholder="username" required><br>
        <input type="password" id="userpass" placeholder="Password" required>
        <input type="submit" onclick="handlePostRequest()" class="button"  name="add" value="ADD"/>
    </tr>
</table>
</div>
</div><br><br>`;
        $("#UserForm").html(UserFormHtml);
        $("#Userdata").html('');
    });
})

function showUser(record) {
    var table = "";
    for (var i = 0; i < record.length; i++) {
        table += "<td class='data'>" + record[i].id + "</td>";
        table += "<td class='data'>" + record[i].name + "</td>";
        table += "<td class='data'>" + record[i].password + "</td>";
        table += "<td class='data'>" + record[i].role + " </td>";
        table += "</tr>";
    }

    document.getElementById('Userdata').innerHTML = table;
    $("#UserForm").html('');
}