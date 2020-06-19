<?php include "dbConfig.php";
session_start();
$msg = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $phoneno = $_POST['phoneno'];
    $age = $_POST['age'];
    $specialization = $_POST['specialization'];
    echo sha1($firstname.$name.$phoneno);
   
         if ($name == '' || $password == '' || $firstname=='' || $lastname=='' || $gender=='' ||  $phoneno == '' || $age =='' || $specialization ==''){
        $msg = "You must enter all fields";
    } else {
             $id = sha1($firstname.$name.$phoneno);
        $sql = "INSERT INTO doctor values('$id','$name', '$password','$firstname','$lastname','$gender','$phoneno','$age','$specialization')";
        $query = mysqli_query($link, $sql);

        if ($query === false) {
            echo "Could not successfully run query ($sql) from DB: " . mysqli_error($link);
            exit;
        }
    
        echo "Registration completed successfully <br>";
        
       
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
        <div class="header"> 
            <img src="sdn.png"><h1> SensorDrops<br> Networks </h1>
            


        </div>


      <div class="registrationbox">
        <h1>Registration Form<br>Doctors</h1>
                    <form id="registration" method="POST">
                        
                <div class="name"> 
                        <input type="text" placeholder="First Name" name="firstname" >
                        <input type="text" placeholder="Last Name" name="lastname">
                        </div>
                        <input type="text" placeholder="Email" name="name">
                    
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
                        <input type="int" placeholder="Phone Number" name="phoneno">
                        <input type="int" placeholder="Age" name="age"> </div>
                    
                        <div class="doctor">
                        <input type="text" placeholder="Specialization" name="specialization">


                       </div>
                        
                        <input type="password" placeholder="Password" name="password">
                        <input type="password" placeholder="Confirm Password" name="">
                        <input type="submit" name="" value="Submit">

                </form>
            </div>

</body>

<style>

@import url("https://fonts.googleapis.com/css?family=Varela+Round");
:root {
  --color-1: #21d4fd;
  --color-2: #b721ff;
  --color-3: #08aeea;
  --color-4: #2af598;
}
body {
  font-family: 'Varela Round', sans-serif;
  background-size: cover;
  background-image: url("image.jpg");
}

.registrationbox{
    width: 480px;
    height: 580px ;
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
    margin-top: 10px;
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
    width: 350px;
    border-radius: 20px;
    font-color:black;
    text-align: center;
    margin-left: 14%;
    
    
}
.common input[type="int"]
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


table{
    margin-left: 110px;
    color: brown;
}


img{
    width: 200px;
    height: auto;
    margin-left:130px;
    margin-right: 100px;
    margin-top: 40px;

}


</style>
</head>
</html>
