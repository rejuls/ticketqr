<?php
include('config.php');
if (isset($_POST['register']))
{          session_start();
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
        $phone = mysqli_real_escape_string($db,$_POST['phone']);
	$password1 = mysqli_real_escape_string($db,$_POST['password1']);
	$password2 = mysqli_real_escape_string($db,$_POST['password2']);

	if ($password1==$password2) {
		$password= md5($password1);
		$sql = " insert into user(name,email,phone,password) values('$username','$email','$phone','$password1')";
		$query = mysqli_query($db,$sql);

                   $_SESSION['message']= "Registered successfully";
			//header("location: home.php");



	}
	else
	{
		$_SESSION['username'] = $username;

            $_SESSION['message']= "The two passwords do not match. Please Try Again";
	}
}
if (isset($_POST["login"]))
{          session_start();
           $user = mysqli_real_escape_string($db,$_POST['user']);
           $password = mysqli_real_escape_string($db,$_POST['password']);
					 $sql = " select * from user where name ='$user' and password = '$password'";

           $result = mysqli_query($db,$sql);

           if(mysqli_num_rows ($result)==1)
           {		$_SESSION['username'] = $user;

             $_SESSION['message']= " You are logged in as $user";

             // header("location : home.php");
           }
else {   $_SESSION['message'] = "Username/password incorrect. Please Try Again";   }
}

?>
