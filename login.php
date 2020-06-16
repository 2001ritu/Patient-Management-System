<?php include "dbConfig.php";
session_start();
$msg = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];
    
     if ($name == '' || $password == '' ) {
        $msg = "You must enter all fields";
    } else {
        $sql = "SELECT * FROM  members WHERE name = '$name' AND password = '$password'";
        $query = mysqli_query($link, $sql);

        if ($query === false) {
            echo "Could not successfully run query ($sql) from DB: " . mysqli_error($link);
            exit;
        }
        if(mysqli_num_rows($query) == 1)
        	echo "success";
        else echo "Username and password do not match";
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title> </title>
           <link rel="stylesheet" type="text/css" href="style.css">

    </head>
        <body>
            <div class="loginbox">
         
             <h1>Login </h1>
               <form method="POST">
                <p>Username</p>
                <input type="text" name="name" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password"placeholder="Enter Password">
                <input type="Submit" name="" value="Login">
                <a href="#">Forgot your password?</a><br>
              <a href="#">Don't have an account?</a> </br>
            </form>
            </div>
           
        </body>
<style>
body{
	background-color: blue
    margin: 0;
    padding: 0;
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
    background-image: linear-gradient(pink,lightblue)
}
.loginbox{
    width: 320px;
    height: 450px ;
    background-color: gray;
  
    color:#fff;
    top:50%;
    left:50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing:border-box;
    padding:70px,40px;
    margin:0px;
}



h1{
    margin: 0;
    padding: 0 0 10px;
    text-align: center;
    font: size 22px;
}
loginbox p{
    margin:0;
    padding: 0;
    font-weight:bold;


}
.loginbox input{
    width:97%;
    height:40px;
    margin-bottom: 15px;
    font-size: 16px;
    margin-left: 2px;
}
.loginbox input[type="text"],input[type="password"]
{
    border:none;
    border-bottom: 1px solid#000;
    outline: none;
    height: 40px;
    color:#000;
    font-size: 16px;
    
}
.loginbox input[type="submit"]
{
    border:none;
    outline:none;
    height: 40px;
    background:white;
    font-size: 18px;
    border-radius: 20px;
    
}
.loginbox input[type="submit"]:hover
{
    cursor:pointer;
    background:tomato ;
    color:#000;

}
.loginbox a{
    text-decoration:none;
    font-size: 15px;
    line-height: 20px;
    color:white;
}
.loginbox a:hover
{
    opacity: 0.8;
    color:#ffc107;
}
</style>
</html>
