<?php
//include "../funcs.php";
//include "funcs.php";
?>

<div id="page-top-outer">    


<div id="page-top">

	<div id="logo" style="margin-top: 25px;">
 <a href="home.php"><img src="images/logo.png" width="140"/></a>
	</div>

	
 	<div class="clear"></div>

</div>


</div>

	
<div class="clear">&nbsp;</div>
 

<div class="nav-outer-repeat"> 

<div class="nav-outer"> 


		<div id="nav-right">
		


	
			<div class="nav-divider">&nbsp;</div>
			<a href="logout.php" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="change_pass.php" id="acc-settings">Settings</a>
				<div class="clear">&nbsp;</div>
				
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->

<?php
        $full_name = $_SERVER['PHP_SELF'];
        $name_array = explode('/',$full_name);
        $count = count($name_array);
        $page_name = $name_array[$count-1];
    ?> 

		<!--  start nav -->
		<div class="nav">
		<div class="table">
     
     <ul class="<?php echo ($page_name=='home.php')?'current':'';?> <?php echo ($page_name!='home.php')?'select':'';?>">	 <li><a href="home.php"><b>Dashboard</b><!--[if IE 7]><!--></a>
     </li>	 <li><button id="importButton" onclick="imprtemail()">Import Emails</button></li>
		</ul><script>function imprtemail(str){				if (window.XMLHttpRequest)         {	        xmlhttp=new XMLHttpRequest();        } else        {         xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");        }				xmlhttp.onreadystatechange=function()        {			        if (xmlhttp.readyState==4 && xmlhttp.status==200) {								}else{				document.getElementById('pera').innerHTML=xmlhttp.responseText;		}			}		xmlhttp.open("GET","test.php?table="+str,true);        xmlhttp.send();		}</script>				
       <!-- <ul class="<?php echo ($page_name=='review.php' || $page_name=='review.php')?'current':'';?> <?php echo ($page_name!='review.php')?'select':'';?>"><li><a href="review.php"><b>Review</b></a>
		
		 <div class="select_sub show">
			<ul class="sub">
				<li class="<?php echo ($page_name=='review.php')?'sub_show':'';?>"><a href="review.php">View all Review</a></li>
				<li class="<?php echo ($page_name=='addReview.php')?'sub_show':'';?>"><a href="addReview.php">Add Review</a></li>
			</ul>
		</div> 
		
		</li>
		</ul>-->
		<div class="nav-divider">&nbsp;</div>
        
       
        
        
         <div class="nav-divider">&nbsp;</div>
        
      
        
        
        
        <div class="nav-divider">&nbsp;</div>
        
    


 <div class="nav-divider">&nbsp;</div>
        
       


<div class="nav-divider">&nbsp;</div>
		

        
        
          
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>


		
		<div class="clear"></div>
	</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

  <div class="clear"></div>
