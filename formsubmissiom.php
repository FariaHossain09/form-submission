<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FORM SUBMISSION</title>
</head>
<body>
	<h1>FORM SUBMISSION</h1>
	<?php 

	$fName=$lName=$gender=$birthday=$re=$email=$username=$password="";
    $fNameErr=$lNameErr=$genderErr=$birthdayErr=$reErr=$emailErr=$usernameErr=$passwordErr="";
    $flag=false;
    $done="";	
		
	?>
    
    <?php
    
        if($_SERVER['REQUEST_METHOD']==="POST")
        {   echo "<br>";
            $fName=$_POST['fName'];
            $lName=$_POST['lName']; 
            $gender=$_POST['gender'];
            $birthday=$_POST['birthday'];
            $re=$_POST['re']; 
            $email=$_POST['email'];
            $username=$_POST['username'];
            $password=$_POST['password'];

        
        if(empty($fName))
        {
            $fNameErr="Field can not be empty!";
            $flag=true;
        }

        if(empty($lName))
        {
            $lNameErr="Field can not be empty!";
            $flag=true;
        }

        if(empty($gender))
        {
            $genderErr="Field can not be empty!";
            $flag=true;
        }

        if(empty($birthday))
        {
        	$birthdayErr="Field can not be empty!";
        	$flag=true;
        }

        if(empty($re))
        {
        	$reErr="Field can not be empty!";
        	$flag=true;
        }

        if(empty($email))
        {
        	$emailErr="Email is not validated!";
        	$flag=true;
        }

        if(empty($username))
        {
        	$usernameErr="Field can not be empty!";
        	$flag=true;
        }

        if(empty($password))
        {
        	$passwordErr="Field can not be empty!";
        	$flag=true;
        }

        if(!$flag)
        {
            //$fileName="data.txt";
            $done="Successfully received";
            //echo "Successfully received";
            
        }
       

	function input($val)
	{
		$val=trim($val);
		$val=stripslashes($val);
		$val=htmlspecialchars($val);
		return $val;

	}
}
		
		
	?>

 <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
		<form>
		<fieldset>
        <legend>Basic Information:</legend>
        <label for="fName">First name:</label>
		<input type="text" name="fName" id="fName" value ="<?php echo $fName;?>" > 
		<spam style="color:red"><?php echo $fNameErr;?></spam>
		
		<br><br>
		<label for="lName">Last name:</label>
		<input type="text" name="lName" id="lName" value ="<?php echo $lName;?>" > 
		<spam style="color:red"><?php echo $lNameErr;?></spam>
         <br> <br>
		<label for="gender">Gender:</label>
		<spam style="color:red"><?php echo $genderErr;?></spam>
        <br>
        <input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label>
		<br>
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label>
		<br>
		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label>
		<br><br>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday">
        <spam style="color:red"><?php echo $birthdayErr;?></spam>
        <br><br>
        <label for="re">Religion:</label>
        <spam style="color:red"><?php echo $reErr;?></spam>
       
        <select name="re" id="re">
        <option value="Islam">Islam</option>
        <option value="Hindu">Hindu</option>
        <option value="Christian">Christian</option> 
        </select> 
        </fieldset>
        <br><br>


    <fieldset>
    <legend>Contact Information:</legend>
    <label for="paddress">Present Address:</label>
    <input type="text" id="paddress" name="paddress"><br><br>
    <label for="ppaddress">Premanent address:</label>
    <input type="text" id="ppaddress" name="ppaddress"><br><br>

    <label for="phone">phone:</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
    <br><br>
    <label for="email">Enter your email:</label>
    <input type="email" id="email" name="email">
    <spam style="color:red"><?php echo $emailErr;?></spam>
    <br><br>
    <label for="a">Personal website link:</label>
    <a href="https://github.com/FariaHossainBorna/registration-form/">Visit github.com!</a>
    </fieldset>
    <br><br>
          

     <fieldset>
    <legend>Account Information:</legend>
    <label for="username">User Name:</label>
    <input type="text" id="username" name="username">
    <spam style="color:red"><?php echo $usernameErr;?></spam>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <spam style="color:red"><?php echo $passwordErr;?></spam>
    </fieldset>
    <br><br>


		<input type="submit" name="submit" value="Submit">
	    </form> 
        <span style="color:green;"><?php echo $done;?></span>
	
</body>
</html>
