<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Patient Validation</title>
<link href="style/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.9.1.js"> </script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/liveval.js"></script>
</head>

<body>
	<div id="wrap"> <!--wrap start-->

	<h3 class="register">Patient Information</h3> 
		<form action="process.php" method="post" id="register_form">
    	<div id="wrap2">  <!--wrap2 start-->
        
    	
        	
                <p class="validate_msg">Please fix the errors below!</p>
                
                <p> <label for="rno">Patient Record Number</label> <input name="rno" type="text" /> <span class="val_rno"></span> </p> 
                <p> <span class="required"><label for="name">First Name</label> <input name="fname" type="text" /></span> <span class="val_fname"></span> </p> 
                <p> <label for="name">Middle Name</label> <input name="mname" type="text" />
                <p> <span class="required"><label for="lname">Last Name</label>  <input name="lname" type="text" /></span>  <span class="val_lname"></span> </p>
                <p> <span class="required"><label for="gender">Gender</label>  <input name="gender" type="radio" value="m" /> Male <input name="gender" type="radio" value="f" /> Female</span> <span class="val_gen"></span> </p>
                <p> <label for="birth">Date of Birth</label>  
                            	<select name="year">
                    				<option value="">Year</option>
                                    <?php 
										$year = date("Y");
										for($j = $year; $j > 1949; $j--) { 
									?>
                                    <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
                                    <?php } ?>
                                </select>
                            	<select name="month">
                    				<option value="">Month</option>
                                    <?php 
										$months = array('1' => 'Jan', '2' => 'Feb', '3' => 'Mar', '4' => 'Apr', '5' => 'May', '6' => 'June', '7' => 'July ', '8' => 'Aug', '9' => 'Sept', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec');
										foreach($months as $m => $month) {
									?>
                                    <option value="<?php echo $m; ?>"><?php echo $month; ?></option>
                                    <?php } ?>
                                </select>
                                <select name="day">
                    				<option value="">Day</option>
                                    <?php for($day = 1; $day < 32; $day++) { ?>
                                    <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                                    <?php } ?>
                                </select>
                <span class="val_bday"></span> </p>
                <p> <label for="ssn">SSN</label> <input name="ssn" type="text" /> <span class="val_ssn"></span> </p> 
            
        
       
        </div>  <!--wrap2 end-->

        <h3 class="register">Contact Information</h3> 
        <div id="wrap2">
        		<p> <span class="required"><label for="email">Email ID</label> <input name="email" type="text" /></span> <span class="val_email"></span> </p> 
        		<p> <span class="required"><label for="mphone">Mobile Phone</label> <input name="mphone" type="text" /></span> <span class="val_mphone"></span> </p>
        		<p> <label for="notification">Parent/Guardian has approved the following</label>
        		<input type="checkbox" name="not" value="text" />Send Text notification
        		<input type="checkbox" name="not" value="voice" />Send Voice notification
        		</p>
        		<p> <label for="hphone">Home Phone</label> <input name="hphone" type="text" /> <span class="val_hphone"></span> </p>
        		<p> <label for="wphone">Work Phone</label> <input name="wphone" type="text" /> <span class="val_wphone"></span> </p>
        		<p> <label for="wphone_ext">Work Ext</label> <input name="wphone_ext" type="text" /></p>

                <p> <label for="commu">Prefered Way of Communication</label>  
                            	<select name="commu">
                    				<option value="none">Not Specified</option>
                                    <option value="mph">Mobile Phone</option>
                                    <option value="hph">Home Phone</option>
                                    <option value="wph">Work Phone</option>
                                </select>


        </div>
        
        <p class="validate_msg">Please fix the errors Above!</p>
        <input type="submit" name="submit" value="Register">
        </form>
    </div>  <!--wrap start-->
</body>
</html>