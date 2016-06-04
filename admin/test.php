
<?php
include"config.php";
 if(isset($_GET['table'])){
 echo "<table class='table table-bordered table-hover table-responsive' id='email-table2'><tr class='info'>";
 echo "<th >Name</th>";
 echo "<th >Email</th></tr>";
 
$a=mysql_query("SELECT email,name FROM users WHERE is_promotional=1");

 while($b= mysql_fetch_assoc($a)){  
 
 echo "<tr class='active'><td >";
  print_r($b['name']);
 echo "</td><td>";
 print_r($b['email']); 
 echo "</td></tr>";
 }
 echo "</table>";
 }

?>