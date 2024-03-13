<?php 
 
require 'config.php';

$client = $_POST['client'];
$currentDate = date("Y-m-d");
$gender = $_POST['gender'];
$age = $_POST['age'];
$region = $_POST['region'];
$service = $_POST['service'];
$otherservice = $_POST['other_service'];
$c = $_POST['c'];
$cc = $_POST['cc'];
$ccc = $_POST['ccc'];
$sqd = $_POST['sqd'];
$sqd_one = $_POST['sqd_one'];
$sqd_two = $_POST['sqd_two'];
$sqd_three = $_POST['sqd_three'];
$sqd_four = $_POST['sqd_four'];
$sqd_five = $_POST['sqd_five'];
$sqd_six = $_POST['sqd_six'];
$sqd_seven = $_POST['sqd_seven'];
$sqd_eight = $_POST['sqd_eight'];
$suggestion = $_POST['suggestion'];
$email = $_POST['email'];


    





$query = mysqli_query($conn, "INSERT INTO `poll`(`id`, `client`, date, `gender`, `age`, `region`, `service`,`other_service`, `c`,`cc`,`ccc`,`sqd`,`sqd_one`,`sqd_two`,`sqd_three`,`sqd_four`,`sqd_five`,`sqd_six`,`sqd_seven`,`sqd_eight`,`suggestion`,`email`) VALUES ('','$client','$currentDate','$gender','$age','$region','$service','$otherservice','$c','$cc','$ccc','$sqd','$sqd_one','$sqd_two','$sqd_three','$sqd_four','$sqd_five','$sqd_six','$sqd_seven','$sqd_eight','$suggestion','$email')");
echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';
?>

/*$query1 = "SELECT * FROM `staff` WHERE email = '$email' AND password = '$password'";
$result_query1 = mysqli_query($conn, $query1);
$count_query1 = mysqli_num_rows($result_query1);
/*if ($count_query1 != 0) 
	{
    header("Location: controller/staff.php");
	exit();
	} 
else {
		    $query2 = "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password'";
			$result_query2 = mysqli_query($conn, $query2);
			$count_query2 = mysqli_num_rows($result_query2);
			$count_query2 = mysqli_num_rows($result_query2);
			if ($count_query2!=0) 
			{
		   		header("Location: controller/admin.php");
				exit();
		   	} 		
		   	else
		   	 {
		   	 	echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';

			 }

	}

//echo $email;
//echo '</br>';
//echo $password;



ob_end_flush();*/
?>

