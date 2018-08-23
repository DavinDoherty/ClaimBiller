
<?php

				session_start();
                    if(!isset($_SESSION['username']))
                    {
                        header("Location:index.php");
                    }
    
	//start the session
	session_start();
	$server="localhost";
	$dbuser="root";
	$password="";
	$link=mysqli_connect($server,$dbuser,$password);
	mysqli_select_db($link,"claimbiller");

	//if the form is submitted
	if(isset($_POST['username']) and isset($_POST['password']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
	//Checking the values are existing in the database or not	
	$query="SELECT * FROM users WHERE userID='$username' and password ='$password'";
	$result=mysqli_query($link, $query) or die (mysqli_error($connection));
	$count=mysqli_num_rows($result);
	
	//if the posted values are equal to the database values, then session will be created for the user.
	if($count==1)
		{
            $_SESSION['username']=$username;
            header("Location:logincomplete.php");
			exit;
		}
	else
	//If the login credentials don't match, show an error message and return to login
		{
			$_SESSION['errors']=array('Your username and/or password were incorrect');
			header("Location:index.php");
		}
	}
?>