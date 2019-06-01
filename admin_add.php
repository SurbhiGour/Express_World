<?php  include("header_admin.php");
include ("dbinfo.php");
?>
<?php
		if($temp_id = isset($_GET['temp_id']) ? $_GET['temp_id'] : '')
		{
		   $row=mysqli_query($conn,"SELECT * FROM `report` WHERE id='$temp_id'");
			$data=mysqli_fetch_array($row);
		}
		else{
			$data['id']="";
			$data['airway_bno']="";
			$data['txt_date']="";
			$data['shipper']="";
			$data['connection']="";
			$data['weight']="";
			$data['destination']="";
			$data['trackno']="";
			// $data['basic']="";
			// $data['fs']="";
			// $data['st']="";
			// $data['total']="";
			$data['carrier']="";
			// $data['comment']="";
			$data['document']="";
			$data['record_date']="";
		}
?>
<style>
.col{
		float:left;
		width: 45%;
		padding: 5px 25px 5px 5px;
	}
.col1{
		float:left;
		width: 95%;
		padding: 5px 25px 5px 5px;
	}
</style>
<center>
  <div class="container"style="background: aliceblue;height: 671px;">
  <form id="contact2" action="code.php" method="post">
    <h3 style="position: relative;right: 36px;color: #094f9d;font-size: 30px;"><b>Enter Tracking Detail</b></h3><br>
	<input type="hidden" name="txt_id" value="<?php echo $data['id'];?>">
    <fieldset>
	<div class="col">
      <input placeholder="Airway Bill No" type="Text" name="txt_airway" value="<?php echo $data['airway_bno'];?>" tabindex="0" required autofocus>
    </div>
	<div class="col">
      <input placeholder="Date" type="date" name="txt_date" value="<?php echo $data['txt_date'];?>" tabindex="1" required>
    </div>
    <div class="col">
      <input placeholder="Shipper" type="Text" name="txt_shipper" value="<?php echo $data['shipper'];?>" tabindex="2" required>
    </div>
	<div class="col">
      <input placeholder="Receiver" type="Text" name="txt_carrier" value="<?php echo $data['carrier'];?>" tabindex="3" required>
    </div>
    <div class="col">
      <input placeholder="Weight" type="Text" name="txt_wt" value="<?php echo $data['weight'];?>" tabindex="3" required>
    </div>
    <div class="col">
      <input placeholder="Destination" type="Text" name="txt_dest" value="<?php echo $data['destination'];?>" tabindex="3" required>
    </div>

	<div class="col">
     <!--  <input placeholder="Connection" type="Text" name="txt_conn" value="<?php echo $data['connection'];?>" tabindex="3" required> -->

        <select placeholder="Connection" name="txt_conn" type="Text" value="<?php echo $data['connection'];?>" required="" style="width: 100%;padding: 8px;">
					<option value="">Select Connection</option>
					<option value="FEDEX">FEDEX</option>
					<option value="DHL">DHL</option>
					<option value="UPS">UPS</option>
					<option value="ARAMEX">ARAMEX</option>
					<option value="DTDC">DTDC</option>
					<option value="TNT">TNT</option>
		</select>

    </div>

    <div class="col">
      <input placeholder="Tracking No" type="Text" name="txt_trackno" value="<?php echo $data['trackno'];?>" tabindex="3" required>
    </div>

    
	
	<!--
    <div class="col">
      <input placeholder="Basic" type="Text" name="txt_basic" value="<?php echo $data['basic'];?>" tabindex="3" required>
    </div>
    <div class="col">
      <input placeholder="FS " type="Text" name="txt_fs" value="<?php echo $data['fs'];?>" tabindex="3" required>
    </div>
    <div class="col">
      <input placeholder="ST" type="Text" name="txt_st" value="<?php echo $data['st'];?>" tabindex="3" required>
    </div>
	<div class="col">
      <input placeholder="Total" type="Text" name="txt_total" value="<?php echo $data['total'];?>" tabindex="3" required>
    </div>
	<div class="col1">
	  <textarea placeholder="Comment" name="txt_com" col="2"><?php echo $data['comment'];?></textarea>
	</div> -->
	
    <div class="col1">
      <button name="btn_add" type="submit" id="contact-submit" data-submit="...Sending" style="position: relative;right: 39px;">Submit</button>
      <button name="add_update" type="submit" id="contact-submit" data-submit="...Sending">Modify</button>
	<br>
	<?php if(isset($_GET['status'])&&$_GET['status']==1)
			echo "<font color=green>Data Successfully Insert..</font>";
			
			if(isset($_GET['status'])&&$_GET['status']==2)
			echo "<font color=green>Data Successfully Update..</font>";
			
			if(isset($_GET['status'])&&$_GET['status']==3)
			echo "<font color=red>Wrong click...</font>";

		   
	?></div>
    </fieldset>
  </form>
</div>
</center>
</div>
</div>
<?php include("footer.php")?>
