<?php include "dbConfig.php";
session_start();
$msg = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
     if ($name == '' || $password == '' || $firstname=='' || $lastname=='' || $gender=='') {
        $msg = "You must enter all fields";
    } else {
        $sql = "INSERT INTO members values('$name', '$password','$firstname','$lastname','$gender')";
        $query = mysqli_query($link, $sql);

        if ($query === false) {
            echo "Could not successfully run query ($sql) from DB: " . mysqli_error($link);
            exit;
        }
        echo "success";
        $msg = "Username and password do not match";
    }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form</title>
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" type="text/css" href="style.css">

	<body>

      <div class="registrationbox">
      	<h1>Registration Form</h1>
                    <form method="POST">
					    <div class="header">
						<input type="text" placeholder="First Name" name="firstname" >
						<input type="text" placeholder="Last Name" name="lastname">
						<p>Type your email as username</p>
						<input type="text" placeholder="Username" name="name">
					</div>
						
						<input type="password" placeholder="Password" name="password">
						<input type="password" placeholder="Confirm Password" name="">
						<select name="gender" id="" class="">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="other">Other</option>
						</select>
					    <input type="submit" name="" value="Submit">
				</form>
			</div>

</body>

<style>

body{
    margin: 0;
    padding: 0;
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
    height: 400px;
    background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%)
  }

.registrationbox{
    width: 400px;
    height: 550px ;
    background: linear-gradient(to bottom, #99ccff 0%, #ffcccc 65%);
    color:#fff;
    top:50%;
    left:50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing:border-box;
    padding:70px,40px;
}



h1{
    margin: 0;
    padding: 0 0 10px;
    text-align: center;
    font: size 22px;
    color: brown;
}
p{
    margin: 0;
    text-align: center;
    font: size 22px;
    color: brown;
}



.registrationbox input[type="text"],input[type="password"]
{
    border:none;
    border-bottom: 1px solid#000;
    outline: none;
    height: 40px;
    color:black;
    font-size: 16px;
    margin-bottom: 15px;
    margin-top: 10px;
    width: 300px;
    margin-left: 10% ;
    border-radius: 20px;
    font-color:black;
    
}


.registrationbox input[type="submit"]
{
    border:none;
    outline:none;
    height: 40px;
    width: 100px;
    background:dodgerblue;
    font-size: 18px;
    border-radius: 20px;
    margin-left: 40px;
    margin-top: 10px;
    text-align: center;
}
.registrationbox input[type="submit"]:hover
{
    cursor:pointer;
    background:tomato ;
    color:#000;
    
}
select {
            width: 100px;
            height: 40px;
            font-size: 18px;
            border-radius: 20px;
            margin-left: 40px;
    		margin-top: 10px;
            background-color: white;
         }

</style>
</head>
</html>
		
	