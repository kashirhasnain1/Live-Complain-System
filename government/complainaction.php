<?php 
session_start();

include('../includes/connection.php');

if(isset($_POST['update'])) // when click on Update button
{
    $id=$_POST['complain_id'];

$cprogress=$_POST['progressinformtion'];
$cremarks=$_POST['complainremarks'];
	var_dump($_POST);
    $edit = mysqli_query($con,"UPDATE complains set progress_id= '$cprogress', remarks='$cremarks' where complain_id='$id'");
	
    if($edit)
    {

        $con ->close();

        // Close connection
        unset($_SESSION["complain_id"]);
        header("Location:checkcomplain.php"); // redirects to all records page
        
    }
    else{
        echo "Unable to Update Your Record";
    }
      	
}
else
{
    echo "Failed";
}
?>