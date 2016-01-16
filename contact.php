<?php 
if (isset($_REQUEST['submitted'])) {
// Initialize error array.
  $errors = array();
  // Check for a proper name
  if (!empty($_REQUEST['name'])) {
  $name = $_REQUEST['name'];
  $pattern = "/^[a-zA-Z ]*$/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$name)){ $name = $_REQUEST['name'];}
  else{ $errors[] = 'Your Name can only contain A-Z or a-z .';}
  } else {$errors[] = 'You did not enter your name.';}
  
  
  
  //Check for a valid email address
  if (!empty($_REQUEST['email'])) {
  $email = $_REQUEST['email'];
  /*$pattern = "/^[@a-zA-Z0-9\_]{2,20}/";*/
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){ $email = $_REQUEST['email'];}
  /*else{ $errors[] = 'Your Phone number can only be numbers.';}*/
  } else {$errors[] = 'You did not enter your email address.';}


  // Check for a message
  if (empty($_REQUEST['comment'])) {
    $errors[] = 'You did not enter a question or comment.';
    }else {
        $comment = $_REQUEST['comment'];
      }
  
  
  }
  //End of validation 




if (isset($_REQUEST['submitted'])) {
  if (empty($errors)) { 
  $from = "www.citychurchinc.com"; //Site name
  // Change this to your email address you want to form sent to
  $to = "citychurchinc1@att.net"; 
  $subject = "Message from citychurchinc.com";
  
  $message = "
  Message from " . $name . "  
  Email: " . $email . "   
  Comment/Question: " . $comment ."";
  mail($to,$subject,$message,$from);

  }
}

?>






<!DOCTYPE html>
<html>
	<head>
		<title>City Church Intl Louisville</title>
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">      
	  	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    	<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    	<link href='https://fonts.googleapis.com/css?family=Dancing+Script:700|Crimson+Text:700,400italic|PT+Serif:700,400italic' rel='stylesheet' type='text/css'>
    	<link href="css/mystyle.css" rel="stylesheet">	



	</head> 
	<body>
		<!-- NAV BAR -->
		<div class="navbar navbar-default">
			
			
		    <div class="container-fluid">
		    	<div class="row">


					<div class="col-sm-3 hidden-xs">
			    		<img class="img-responsive logo" src="img/world.jpg" alt="World Globe">
			    
			    	</div>	
			    	<div class="col-sm-9 col-xs-12">
			    		<h1 id ="name"><a href="index.html">City Church International</a></h1>
			    		<h4 id="verse">"And they that shall be of thee shall build the old waste places: thou shalt raise up the foundations of many generations; and thou shalt be called, The repairer of the breach, The restorer of paths to dwell in."  Isaiah 58:12</h4>

			    	</div>

			    	
			    	
				
				</div>
			</div>	
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          		<span class="icon-bar"></span>
           		<span class="icon-bar"></span>
          		<span class="icon-bar"></span>          
       		 </button>
		    
			<div class="collapse navbar-collapse">
				<ul class="nav nav-pills pull-right">
					<li><a href="index.html">HOME</a></li>
					<li><a href="about.html"  >ABOUT</a></li>
					<li><a href="events.html">EVENTS</a></li>
					<li><a href="contact.php" class="selected">CONTACT</a></li>
				</ul>
			</div>
				
			
		
		</div>  
		<!-- END NAV BAR  -->


		<!-- JUMBOTRON BEGINS -->
		<div class="container">
			<div class="jumbotron">
				<div class="row">
					<div class="col-sm-6 contactInfo">
						<h4>City Church International</h4>
						 <p>1100 S.26th Street</p>
						 <p>Louisville, KY 40210</p>
						 <p>Phone:(502)772-5384<p>
						 <p>Prayer Line :(502)772-1322</p>
						 <br>
						 <p>To send us a message, use the following form.  We love hearing from you.</p>

					</div>
					<div class="col-sm-6">
						<form action="" method="post">
			                <label>Name: <br />
			                <input name="name" type="text" /><br /></label>
			                <br><br>
			                
			                <label>Email: <br />
			                <input name="email" type="text" /><br /></label>
			                <br><br>

			                <label>Questions or Comments: <br />
			                 <textarea name="comment" rows="5" cols="30"></textarea>
			               
			                <br><br>
			                <br>
			                  
			                 </label>
			                 <br>
			                
			                <!-- <input class="btn btn-default pull-left" name="" type="reset" value="Reset Form" />  -->
			                <input class="btn btn-default" name="submitted" type="submit" value="Submit" />
			            </form>
			            <br>

		           	</div>

					
				</div>
			    
                 <?php

                  //Print Errors
                  if (isset($_REQUEST['submitted'])) {
                  // Print any error messages. 
                  if (!empty($errors)) { 
                  echo '<hr /><h4>The following occurred:</h4><ul>'; 
                  // Print each error. 
                  foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
                  echo '</ul><h4>Your mail could not be sent due to input errors.</h4><hr />';}
                   else{echo '<hr /><h4 align="center">Your mail was sent. Thank you!</h4><hr />';
                 
                  /*echo "Message from " . $name . " " . $lastname . " <br />Email: ".$email." <br />";*/
                  /*echo $comment;*/
                  

                  }
                  }
                   //End of errors array
                  ?> 	
			</div>
		
		</div>
	<!-- JUMBOTRON ENDS -->


	 <!--  FIRST FOOTER BEGINS -->
        <footer class="first">
        	<div class="container-fluid">
        		<div class="row top">
        			 <h4>Service Times</h4>
        		</div>

        		<div class="row" id="service">
        			<div class="col-md-3 col-sm-3">
        				<h4 class="day">Sunday</h4>        				
        			</div>
        			<div class="col-md-3 col-sm-4">
        				<h4>Morning Dew 9:30am</h4>
        				<h5>(Sunday School)</h5>         				
        			</div>
        			<div class="col-md-3 col-sm-4">
        				<h4>Morning Worship 10:30am</h4>        				
        			</div>
              <div class="col-sm-3 visible-sm">
                <h4></h4>
               </div>
        			<div class="col-md-3 col-sm-4 ">
        				<h4>Afternoon Worship 3pm</h4>        				
        			</div>        			
        			
        		</div>
        		<br>

        		<div class="row" id="service">
        			<div class="col-md-3 col-sm-3">
        				     				
        				<h4 class="day">Monday - Saturday</h4>     				
        			</div>
        			<div class="col-md-4 col-sm-4">
        				<h4>Prayer & Inspiration 12pm</h4>        				
        			</div>
        			
        		</div>
        		<br>

        		<div class="row" id="service">
        			<div class="col-md-3 col-sm-3">
        				<h4 class="day">Tuesday</h4>
        				      				
        			</div>
        			<div class="col-md-3 col-sm-4">
        				<h4>Bible Study 6:30pm</h4>
        				        				
        			</div>
        			<div class="col-md-5 col-sm-5">
        				<h4>Generation Great(Youth) 6:30pm</h4>        				
        			</div>
        			        			
        		</div>
        		<br>

        		<div class="row" id="service">
        			<div class="col-md-3 col-sm-3">
        				<h4 class="day">Wednesday</h4>        				
        			</div>
        			<div class="col-md-4 col-sm-4">
        				<h4>Prayer & Intercession 4pm</h4>        				
        			</div>

        		</div>
        		<br>

        		<div class="row" id="service">
        			<div class="col-md-3 col-sm-3">
        				<h4 class="day">Thursday</h4>        				
        			</div>
        			<div class="col-md-3 col-sm-4">
        				<h4>Morning Glory 6am</h4>
                <h5>(Prayer Service)</h5>        				
        			</div>
        			<div class="col-md-5 col-sm-5">
        				<h4>Breaking Free Class 5pm</h4>        				
        			</div>
        		</div>
        		
        	</div>

        </footer>
       <!--  FIRST FOOTER ENDS -->
       


      <!--  SECOND FOOTER BEGINS -->
        <footer class="second">
        	<div class="container-fluid">
        		<div class="row">
          			<div class="col-sm-4">
          				<img class="img-rounded church" src="img/church2.jpg">
          				
          			</div>
          			<div class="col-sm-6">
          				<h5>1100 S.26th Street</h5>
                          <h5>Louisville, KY 40210</h5>
          				<h5>Phone: (502) 772-5384</h5>
          				<h5>Prayer Line: (502) 772-1322</h5>
          				<h5>Email: citychurchinc1@att.net</h5>
          				
          			</div>
                <div class="col-sm-2 hidden-xs">
                <h6><small>Image at the top of the page, on the left hand side of screen, is courtesy of David Castillo Dominici at FreeDigitalPhotos.net</small></h6> 
              </div>
        			
        		</div>
        		

        	</div>

        </footer>
       <!--  SECOND FOOTER ENDS -->
		
		<script src="http://code.jquery.com/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	

	</body>


</html>