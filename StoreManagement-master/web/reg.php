

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
<?php
include 'Navbar.php';
?>
	<div class="container-fluid">
	<br>

					
		<div class="container">
		<div class="row" style="background-color:white;"><br>
		<h3 style="color:purple;margin-left:10px;"><b>Hotel Registration Form</b></h3><hr />
				
					<form method="POST" enctype="multipart/form-data">
					<div class="col-md-3">
										<label>
										 Product Name:</label><br>
										<input type="text" id="name" name="name" placeholder="Enter Product Name"><br><br>
										<label>
										Price</label><br>
										<input type="number" id="price" name="price"><br><br>
										
										<label>
														Product detail</label><br>
														<textarea rows="3" col="10" id="detail" name="detail" maxlength="150"></textarea><br><br><br>
					<label>
					<input type="file" name="image" id="image">Upload File
					<br>
					<input   type="submit" value="Submit">
					</div>
					
      </form>

</div>
</div>
<br>
<script>
	
	function getFormData(){
			var data = {        
				p_name: document.getElementById("name").value, 
				p_price: document.getElementById("price").value,
				p_detail: document.getElementById("detail").value,
				p_image: document.getElementById("image").value,

				};      
			return data;
		}
		 function handlePostRequest(){
        var data = getFormData();
        if(data.name && data.price && data.detail && data.image){
            PostProduct(data);
            //getAllStudents();
        }else console.log('No data entered');
    }

    function PostProduct(data) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "insertproduct.php", true);
        xmlhttp.setRequestHeader('Content-type','application/json; charset=utf-8'); //declare that you are sending json data
        var studentData = JSON.stringify(data); //convert your json object into json string to be passed on
        xmlhttp.send(studentData);     //it should be converted intro string before passing
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText) console.log(this.responseText);
                else if(this.responseText=="FALSE" || this.responseText==false){
                    alert('Could not store the record');
                }
            }
        };
    }
</script>
</body>
</html>

<?php
	  $con = mysqli_connect('localhost','root','','sms');
	 
	 

		if(isset($_POST['submit'])){
				 $p_name = $_POST['name'];
				 $h_phone = $_POST['phone'];
				 $r_price = $_POST['pri_room'];
				 $h_room = $_POST['n_room'];
				 $h_city = $_POST['city'];
				 $h_detail = $_POST['detail'];
				 $image_name=$_FILES['image']['name'];
				 $image_size=$_FILES['image']['size'];
				 $image_type=$_FILES['image']['type'];
				 $image_tmp=$_FILES['image']['tmp_name'];
				 $value=0;
				 
				 if($image_type=="image/jpeg" or $image_type=="image/png" or $image_type=="image/gif" or $image_type=="image/jpg"){
				 if($image_size<=1024000){
				 move_uploaded_file($image_tmp,"images/$image_name");
				 }
				 else{
					 echo "<script>alert('image is larger,only 1mb size is allowed')</script>";
					 exit();
				 }
				 }
				 else{
					 echo "<script>alert('image type is invalid')</script>";
					 exit();
				 }
				 
				 
				 
				$insert	= "INSERT INTO registration(hotel_name, hotel_phone, room_price, hotel_image, hotel_city, hotel_rooms,
					hotel_detail, value)
				 
				VALUES ('$h_name','$h_phone','$r_price','$image_name','$h_city','$h_room','$h_detail','$value')";
					$query = mysqli_query($con,$insert);
			
				if($query){
					echo "<script>alert('Success ! Your Request has Submitted.')</script>";
					
					}
					else{
					die('not uploaded'.mysqli_error($con));
				}
				
		
		}	 

?>
<br>

