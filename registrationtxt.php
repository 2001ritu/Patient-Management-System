<?php include "dbConfig.php";
session_start();
$msg = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    
    $usertype = $_POST['usertype'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $phoneno = $_POST['phoneno'];
    $bloodgroup =$_POST['bloodgroup'];
    $age = $_POST['age'];
    $specialization = $_POST['specialization'];
   
         if ($name == '' || $password == '' || $firstname=='' || $lastname=='' || $gender=='' ||
         $usertype =='' || $weight =='' || $height == '' || $phoneno == '' || $bloodgroup =='' || $age =='' || $specialization ==''){
        $msg = "You must enter all fields";
    } else {
        $sql = "INSERT INTO members values('$name', '$password','$firstname','$lastname','$gender','$phoneno','$age','$bloodgroup','$height','$usertype','$weight','$specialization')";
        $query = mysqli_query($link, $sql);

        if ($query === false) {
            echo "Could not successfully run query ($sql) from DB: " . mysqli_error($link);
            exit;
        }
        echo "Registration completed successfully";
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
                        
                            <table>
                                <tr>
                                    <td>
                                        Usertype:
                                    </td>
                                    <td>

                            <input type="radio" name="usertype" value="doctor">Doctor
                            <input type="radio" name="usertype" value="patient">Patient
                        </td>
                    </tr>
                </table>
                <div class="name"> 
                        <input type="text" placeholder="First Name" name="firstname" >
                        <input type="text" placeholder="Last Name" name="lastname">
                        </div>
                        <p>Type your email as username</p>
                        <input type="text" placeholder="Username" name="name">
                    
                    <table>
                                <tr>
                                    <td>
                                        Gender:
                                    </td>
                                    <td>

                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="other">Other
                        </td>
                    </tr>
                </table>
                <div class="common">
                        <input type="number" placeholder="Phone Number" name="phoneno">
                        <input type="text" placeholder="Age" name="age"> </div>
                       <div class="patient">
                           For patients only:
                        <input type="text" placeholder="Blood Group" name="bloodgroup">
                        <input type="text" placeholder="Height (in cm)" name="height">
                        <input type="text" placeholder="Weight (in Kg)" name="weight">

                       </div>
                        <div class="doctor">
                           For Doctors only:
                        <input type="text" placeholder="Specialization" name="specialization">

                       </div>
                        
                        <input type="password" placeholder="Password" name="password">
                        <input type="password" placeholder="Confirm Password" name="">
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
    background: linear-gradient(to right, #33ccff 0%, #ff99cc 100%);


  }

.registrationbox{
    width: 480px;
    height: 610px ;
    background: linear-gradient(to bottom, #99ccff 0%, #ffcccc 65%);
    color:#fff;
    top:50%;
    left:50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing:border-box;
    padding:70px,40px;
    color: red;
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
    height: 35px;
    color:black;
    font-size: 16px;
    margin-bottom: 15px;
    margin-top: 10px;
    width: 350px;
    margin-left: 14% ;
    border-radius: 20px;
    font-color:black;
    text-align: center;
    
}
.patient input[type="text"]
{
    border:none;
    border-bottom: 1px solid#000;
    outline: none;
    height: 35px;
    color:black;
    font-size: 16px;
    margin-bottom: 15px;
    margin-top: 10px;
    width: 100px;
    border-radius: 20px;
    font-color:black;
    text-align: center;
    margin-left: 5px;
    
}
.doctor input[type="text"]
{
    border:none;
    border-bottom: 1px solid#000;
    outline: none;
    height: 35px;
    color:black;
    font-size: 16px;
    margin-bottom: 15px;
    margin-top: 10px;
    width: 330px;
    border-radius: 20px;
    font-color:black;
    text-align: center;
    margin-left: 5px;
    tex
    
}
.common input[type="text"]
{
    border:none;
    border-bottom: 1px solid#000;
    outline: none;
    height: 35px;
    color:black;
    font-size: 16px;
    margin-bottom: 15px;
    margin-top: 10px;
    width: 200px;
    border-radius: 20px;
    font-color:black;
    text-align: center;
    margin-left: 20px;
    
}

.name input[type="text"]
{
    border:none;
    border-bottom: 1px solid#000;
    outline: none;
    height: 35px;
    color:black;
    font-size: 16px;
    margin-bottom: 15px;
    margin-top: 10px;
    width: 200px;
    border-radius: 20px;
    font-color:black;
    text-align: center;
    margin-left: 20px;
    
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
    margin-left: 40%;
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

table{
    margin-left: 110px;
    color: brown;
}
</style>
</head>
</html>