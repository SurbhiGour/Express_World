<?php
session_start(); 
include ("dbinfo.php");   
$error=''; 

if (isset($_POST['submit'])) 
{
	$username=$_POST['username'];
	$password=$_POST['password'];
		
	$query = mysqli_query($conn,"SELECT * FROM `admin_login` WHERE admin_user='".$username."' AND admin_pass='".$password."'")or die(mysqli_error($conn));

	$row = mysqli_fetch_array($query);
	$cnt = mysqli_num_rows($query);
	if ($cnt == 1) 
	{
		$_SESSION['admin_session']=$row['admin_id']; 
		header("location:admin_home.php"); 
	}
	else
	{
		header('location:admin_login.php?status=1');
	}
}

//--------------------------------------- add new ----------------------------------
if (isset($_POST['btn_add'])) 
{
	$id=$_POST['txt_id'];
	$airway=$_POST['txt_airway'];
	$txt_date=$_POST['txt_date'];
	$shipper=$_POST['txt_shipper'];
	$conntn=$_POST['txt_conn'];
	$wt=$_POST['txt_wt'];
	$dest=$_POST['txt_dest'];
	$trackno=$_POST['txt_trackno'];
	//$basic=$_POST['txt_basic'];
	//$fs=$_POST['txt_fs'];
	//$st=$_POST['txt_st'];
	//$total=$_POST['txt_total'];
	$carrier=$_POST['txt_carrier'];
	//$com=$_POST['txt_com'];

	
	if($id=='')
	{

		
		    
				   $query=mysqli_query($conn,"INSERT INTO `report`(`airway_bno`,`txt_date`,`shipper`,`connection`,`weight`,`destination`,`trackno`,`carrier`,`record_date`) VALUES('$airway','$txt_date','$shipper','$conntn','$wt','$dest','$trackno','$carrier',CURDATE())")or die(mysqli_error($conn));
					  //exit();
					  if($query==true)
					  {
					  	header('location:admin_add.php?status=1');
					  }
					  else
					  {
					  	header('location:admin_add.php?status=3');
					  }
					


	}//if
	else
		{header("location:admin_add.php?status=3");}
}


//-------------------------------------------------------------------------------------------//
if (isset($_POST['add_update'])) 
{
	$id=$_POST['txt_id'];
	$airway=$_POST['txt_airway'];
	$txt_date=$_POST['txt_date'];
	$shipper=$_POST['txt_shipper'];
	$conntn=$_POST['txt_conn'];
	$wt=$_POST['txt_wt'];
	$dest=$_POST['txt_dest'];
	$trackno=$_POST['txt_trackno'];
	//$basic=$_POST['txt_basic'];
	//$fs=$_POST['txt_fs'];
	//$st=$_POST['txt_st'];
	//$total=$_POST['txt_total'];
	$carrier=$_POST['txt_carrier'];
	//$com=$_POST['txt_com'];
	
	$uquery=mysqli_query($conn,"UPDATE `report` SET `airway_bno`='$airway',`txt_date`='$txt_date',`shipper`='$shipper',`connection`='$conntn',`weight`='$wt',`destination`='$dest',`trackno`='$trackno',`carrier`='$carrier' WHERE `id`='$id'")or die(mysqli_error($conn));
	//exit();
	if($uquery)
	{header('location:admin_add.php?status=2');}
	else
	{header('location:admin_add.php?status=3');}
}

?>


<!-- if($id=='')
	{
		$query=mysql_query("INSERT INTO `report`(`airway_bno`, `date`, `shipper`, `connection`, `weight`, `destination`, `trackno`, `carrier`, `record_date`) VALUES('$airway','$date','$shipper','$conn','$wt','$dest','$trackno','$carrier',CURDATE())")or die(mysql_error());
		//exit();
		if($query)
		{header('location:admin_add.php?status=1');}
		else
		{header('location:admin_add.php?status=3');}
	}
	else
		{header("location:admin_add.php?status=3");} -->