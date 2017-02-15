
<?php
	//session_start();
	require "conn.php";
	$usrname=$_POST["user_name"];
	$pass=$_POST["password"];
	$query="select * from user_entry where username like '$usrname' and password like '$pass';";
	$result=$conn->query($query);
	if($result->num_rows>0){
		while($res=$result->fetch_assoc())
			$loggedinname=$res["name"];
		echo "Login success ".$loggedinname;
		
	}
	else{
		$query="select * from user_entry where username like '$usrname';";
		$result=$conn->query($query);
		if($result->num_rows>0){
			while($res=$result->fetch_assoc()){
				if(!($res['password']==$pass)){
					echo "Incorrect Password!!!";	
				}
			
			}
			
		}
		else
					echo "The username doesn't match any account.";
	 	//echo("Error description: " . mysqli_error($mysqli));
	}
$conn->close();
?>
	
