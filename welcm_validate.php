<?php session_start();
include "config.php";

$email= $_POST['email'];

$pass=$_POST['pass'];

if(empty($email) &&  empty($pass)){

	header('location:index.php?&signinerror=Please Fill all fields&blankErr=1');
}

else if(empty($email)){

		header('location:index.php?&emailErr=Please Fill Email&blankErr=1');
}

else if( filter_var($email,FILTER_VALIDATE_EMAIL)=== false){

		header('location:index.php?b='.$email.'&emailErr=Enter a valid email&blankErr=1');		
}

else if(empty($pass)){

		header('location:index.php?&b='.$email.'&passErr=Please Fill password&blankErr=1');
}

else{
    
     $text = $pass;
	 include "encrypt.php";
	 $pass = $text_enc;
     
  
$logincheck=mysqli_query($connect,"SELECT * FROM users WHERE email='".$email."' AND password='".$pass."'");	

$count=mysqli_num_rows($logincheck);

if($count>0){

	//$CHECK= mysql_query("SELECT name FROM users WHERE email='".$email."' AND password='".$pass."'") or die(mysql_error());
	
	while($get_name= mysqli_fetch_assoc($logincheck)){

			$_SESSION['name']=$get_name['name'];
            $_SESSION['id']=$get_name['id'];  

	}	

		header('location:index.php');

}else{

	header('location:index.php?loginErr=You are not a valid user please check your "Email" and Password" or Signup&b='.$email.'&blankErr=1');
}

}
?>
