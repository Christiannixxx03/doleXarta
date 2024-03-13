<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $lname = mysqli_real_escape_string($conn, $_POST['lname']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `login_tbl` WHERE username = '$username' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO `login_tbl`(name, lname, username, password) VALUES('$name','$lname', '$username', '$pass')") or die('query failed');
      $message[] = 'registered successfully!';
      header('location:index.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
      <style type="text/css">
      body {
  font-family: Arial, sans-serif;
  background-image: url(../images/dolebuilding.jpg);
  margin: 0;
  padding: 0;
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  

}
.form-container{
  background-color: black;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  color: #fff;
  position: absolute;
  width: 500px;
        top: 300px
}

form {
  display: flex;
  flex-direction: column;
}

.input-group {
  margin-bottom: 10px;
}

.input-group label {
  font-weight: bold;
}

.input-group input {
  padding: 8px;
  border-radius: 3px;
  border: 1px solid #ccc;
}

button {
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}
h2{
  display: flex;
  justify-content: center;
  align-items: center;
}
.headerimg{
  padding-bottom: 35%;
  align-items: center;
</style>

</head>
<body>
   <div class="headerimg">
    <img src="../images/Header.png">
 </div>
 <?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>


<div class="form-container">

   <form action="" method="post">
      <h3>REGISTER NOW</h3>
      <input type="text" name="name" required placeholder="Enter firstname" class="box"><br>
      <br>
      <input type="text" name="lname" required placeholder="Enter lastname" class="box"><br>
      <br>
      <input type="username" name="username" required placeholder="Enter username" class="box"><br>
      <br>
      <input type="password" name="password" required placeholder="Enter password" class="box"><br>
      <br>
      <input type="password" name="cpassword" required placeholder="Confirm password" class="box"><br>
      <br>
      <input type="submit" name="submit" class="btn" value="Register now">
      <p>Already have an account? <a href="index.php">Login now</a></p>
   </form>

</div>

</body>
</html>