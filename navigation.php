<div class="navbar-header" style="width: 361px;">

					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

						<span class="sr-only">Toggle navigation</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

					  </button>

					  <div class="logo">

							<a href="index.php"><img src="images/logo.png" alt=""/></a>

					 </div>			  

				 </div>
                 
                 
                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					 <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;">

                            <li class="dropdown">

                             <button class="buttons"><a href="index.php"> Home</a></button>

						   </li>
                           
                            <?php

                            if(isset($_SESSION['name'])){

                            ?>
                            
                           <li class="dropdown">

                             <button class="buttons"><a href="referredFriends.php"> Referred Friends/Points</a></button>

						   </li>
                           
                           <li class="dropdown">

                             <button class="buttons"><a href="#"> Referral leader board</a></button>

						   </li>
                           
                           <?php

                            }

                            ?>
                           
                           <li class="dropdown">

                             <button class="buttons"><a href="#"> Terms & Conditions</a></button>

						   </li>
                           
                          
                     
                           <?php

                            //for after login hide buttons

                            if(isset($_SESSION['name'])){

                            ?>

                           <!-- <li class="dropdown">

                             <button class="buttons"  onclick="startasurvey()"> Start a survey</button>

						   </li>-->

                           <li class="dropdown">

                             <button class="buttons"><a href="logout.php"> Logout</a></button>

						   </li>

                          <?php

                         }else{ 

                             ?>

                                 <li class="dropdown">

							<button class="buttons" onClick="popup_display()" ><a onclick="return false;" > Login </a></button>

						  </li>                 

						  <li class="dropdown">
                          
                          <button class="buttons" onClick="popupSignup_display()" > <a onclick="return false;" > Register </a></button>
              
                      

						  </li>

                          

                           <?php

                             }

                            ?>
                            
                            
                            

					  </ul>

				  </div><!-- /.navbar-collapse -->