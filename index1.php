<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `login_tbl` WHERE username = '$username' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:../index.php');
   }else{
      $message[] = 'Incorrect password or email!';
   }

}

?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin Login Form </title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
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
      <h3>Login now</h3>
      <input type="username" name="username" required placeholder="Enter Username" class="box">
      <input type="password" name="password" required placeholder="Enter Password" class="box">
      <input type="submit" name="submit" class="btn" value="login now">
      <p>Don't have an account? <a href="register.php">Register now</a></p>
   </form>

</div>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 
 

  

</body>

</html>
