<?php
include"dbinfo.php";

if(isset($_GET['dc_id'])){
	$result=mysqli_query($conn,"DELETE FROM `report` WHERE `id`='".$_GET['dc_id']."'")or die(mysqli_error($conn));
	if($result)
	header("location:admin_display.php");
}
?>