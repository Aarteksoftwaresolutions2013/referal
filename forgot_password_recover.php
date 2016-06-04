<?php
include "config.php";

$email=$_POST['email'];


$newPass= substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 7)), 0, 6);
$sPass=$newPass;
                 $text = $newPass;
                 include "encrypt.php";
                 $newPassEnc = $text_enc;

$sql = "UPDATE `users` SET `password`='".$newPassEnc."' WHERE email='".$email."'";

$sql=mysqli_query($connect,$sql);

mail($email,"New Password","Your new password is - ".$sPass);

header('location:index.php?&msg=Password Sent');


?>