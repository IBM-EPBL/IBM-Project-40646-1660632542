<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="stylesheet.css" rel="stylesheet">

</head>
<body>
    
			<?php
	if(isset($_POST["user_details"]))
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") { 
			$email = $_POST["Email address"];
			$UserName = $_POST["User Name"];
			$contactno = $_POST["Register Number"];
			$Password = $_POST["Password"];
			
			
			$conn=  mysqli_connect("localhost","root","","ibm_project");
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			$sql = "INSERT INTO user_details (email,UserName, contatcno ,Password ) VALUES (\"$Email address\", \"$User Name\", \"$Register Number\", \"$Password\")";

			
				}
	}
	?>
    <!-- nav bar code begin -->
    <nav class="navbar bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="ims.jpg" width="46px" height"40px" alt="homepage" class="dark-logo" />
            <img src="logo-text.jpg" alt="homepage" class="dark-logo" />
          </a>
        </div>
    </nav>

    <!-- nav bar code ends -->

    <!-- login code starts -->
   <div id="container">
   <center><b>Register Here!</b></center><br><br>
    <form name = "myform" method="POST" action="register.php" >
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control"  name="email" required>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">User Name</label>
          <input type="text" class="form-control"  name="username" required>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Register Number</label>
          <input type="integer" class="form-control"  name="contactno" required>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Password</label>
          <input type="varchar" class="form-control"  name="password" required>
        </div>
        <a href="login.html" div class="btn btn-primary btn-rounded waves-effect waves-light m-b-40 text-white">Register</a>
        <div>
        Already registered? <a href="login.html" style="text-decoration:none ;">LOGIN</a>
    </form>
	 <?php
	if(isset($_POST["email"]))
	{
		if (mysqli_query($conn, $sql)) {
			 Echo "Record Inserted Successfully";
			}
			else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);
	}?>
    </div>
    <!-- login code ends -->
</body>
</html>