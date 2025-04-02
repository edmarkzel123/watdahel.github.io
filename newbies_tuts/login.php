<?php
//login.php
// echo "login process here...";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

include("SQLConnect.php");
$query = mysqli_query($con,"SELECT username, email, password FROM password WHERE username='".$_POST['username']."'") or die(mysql_error());



{
	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
	{		
		if($row['password'] == $_POST['password'])
		{
		
		echo "user found";
	
		}
		else
		{
			echo "<br><br><br>Password Incorrect!";	
		}
	}
}

?>