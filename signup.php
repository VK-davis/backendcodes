<?php
	require "conn.php";
	$name=$_POST["name"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$flag=0;
	$query="SELECT * FROM user_entry WHERE username like '$username';";
	$result=$conn->query($query);
	$res=$result->fetch_assoc();
	if(!$res){
			$query="INSERT INTO user_entry VALUES(null,'$name','$username','$password');";
			$result=$conn->query($query);
			if($result===TRUE){
				echo "Welcome ".$name;
				$flag=1;
			}
	
			else
				echo "error!!".$result."<br>".$conn->error;
	
		}
	
	if($flag==0)
	{
		echo "Username ".$username." exists";
	}
$conn->close();
?>