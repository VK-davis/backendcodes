<?php
/*	include("conn.php");	
	$loggedinname=$_POST["name"];
	$file_path="uploads/".$loggedinname."/";
	$file_destination=$file_path.basename($_FILES['uploaded_file']['name']);
	/*if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$file_path)){
		echo "success";
	}
	else
		echo error;
		

	if(file_exists("$file_destination")) unlink("$file_destination");
	@getdirectory($loggedinname);
	if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$file_destination)){
		echo "success";
		update_folder_db_during_upload($file_destination,$loggedinname,$conn);
	}
	else
		echo "error"; 
//--------------------------------------------------------------------------------------------------------------------------------
//linking the logged in user with their folder
function update_folder_db_during_upload($file_destination,$loggedinname,$conn){
	$query="select * from folders where path like '$file_destination';";//to delete duplicate file entry(till label:1)
	$result=$conn->query($query);
	while($r=$result->fetch_assoc()){
		if($r['path']==$file_destination)
			$query="delete from folders where path like '$file_destination';";
			$conn->query($query);
	}																				// label:1


	$query="INSERT INTO folders VALUES(null, '$loggedinname','$file_destination');";//add to the table folder...
	if(!($conn->query($query))){
		echo "Error updating the table".$conn->error;
		return;
	}
}
function getdirectory($loggedinname){
	$dir=$loggedinname;
	if(is_dir($dir)==false){
		mkdir("uploads/".$dir);
	}
	else
		return $dir;
}*/
//----------------------------------------------------------------------------------------------------------------------------
	$loggedinname=$_POST["name"];
	$file_path="uploads/".$loggedinname."/";
	$file_path=$file_path.basename($_FILES['uploaded_file']['name']);
	if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$file_path)){
		echo "success...".$file_path;
	}
	else
		echo error;
?>