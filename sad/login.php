<?php

include 'connection.php';
if(isset($_GET['submit']))
{
  $uname = $_GET['uname'];
  $password=$_GET['password'];

  $sql = "SELECT * FROM signup where uname = '$uname' AND password='$password'";
  $result = mysqli_query($conn,$sql);
  $mr = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $result2 = mysqli_num_rows($result);
    if($result2==1){
      header('index.php');
    }

    else{
      echo "Login failed";
    }


}




?>







<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login-Admission Service System</title>
  <link rel="shortcut icon" href="images/Admission.png">
  <link rel="stylesheet" href="login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


  <form style="width:30%;margin: auto;margin-top: 10%;" action="login.php" method="GET" style="border:1px solid #ccc; margin-top: 80px;">
    <div class="container2">
      <h1 style=" text-align: center;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Login</h1>
      <p>Please fill in this form to Login</p>
      <hr>

      <label for="text"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>




      <div class="clearfix">

        <button style="width:100%;font-family: 'Dosis', sans-serif;" type="submit" name="submit" class="signupbtn">Login</button>

      </div>
    </div>
  </form>
</body>

</html>