<?php  include("header.php");?>
<section id="intro">

    <div id="intro-carousel" class="owl-carousel" >
   <div class="item" style="background-image: url('img/ntwrk.jpeg');"></div>
  <!--    <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div> -->
    </div>


  </section><!-- #intro -->

<?php  include("dbinfo.php");?>
<?php
		if($temp_id = isset($_GET['airway_bno']) ? $_GET['airway_bno'] : '')
		{
			$row=mysqli_query($conn,"SELECT * FROM `report` WHERE airway_bno='$temp_id'");
			$data=mysqli_fetch_array($row);
		}
		else{
			$data['id']="";
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
		}
?>
<div class="the-about-container service-banner">
  <div class="wrap-content-header">
    <div class="gridabout">
      <h2 style="color:white">Tracking</h2>
    </div>
  </div>
</div>
<style>
	.col{
		float:left;
		width:45%;
		padding: 5px 1px 5px 1px;
	}
	
</style>
<div class="container">
  <form id="contact" action="" method="post">
    <h3>Your Tracking</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4><br>
    <fieldset>
	  <div class="col">
        <label>Tracking No</label>
      </div>
      <div class="col">
        <label>
		<?php if($data['connection']=="FEDEX"){ ?>
		<a href="https://www.fedex.com/apps/fedextrack/?action=track&trackingnumber=<?php echo $data['trackno'];?>&cntry_code=ca" target="_blank"/><?php echo $data['trackno'];?></a></label>
		
		<?php }else if($data['connection']=="UPS"){ ?>
		<a href="https://www.ups.com/in?flash=false" target="_blank"/><?php echo $data['trackno'];?></a></label>
		
		<?php }else if($data['connection']=="DHL"){ ?>
		<a href="http://www.dhl.co.in/en/express/tracking.html?AWB=<?php echo $data['trackno'];?>&brand=DHL" target="_blank"/><?php echo $data['trackno'];?></a></label>
		
		<?php }else if($data['connection']=="ARAMEX"){ ?>
		<a href="https://www.aramex.com/track/shipments/" target="_blank"/><?php echo $data['trackno'];?></a></label>

    <?php }else if($data['connection']=="DTDC"){ ?>
    <a href="http://www.dtdc.in/tracking/shipment-tracking.asp/" target="_blank"/><?php echo $data['trackno'];?></a></label>

    <?php }else if($data['connection']=="TNT"){ ?>
    <a href="https://www.tnt.com/express/en_in/site/shipping-tools/tracking.html/" target="_blank"/><?php echo $data['trackno'];?></a></label>
		
		<?php }else{ echo $data['trackno']; }?>
		</label>
      </div>
      <div class="col">
        <label>Date</label>
      </div>
      <div class="col">
        <label><?php echo $data['txt_date'];?></label>
      </div>
      <div class="col">
        <label>Shipper</label>
      </div>
      <div class="col">
        <label><?php echo $data['shipper'];?></label>
      </div>
      <div class="col">
        <label>Connection</label>
      </div>
      <div class="col">
        <label><?php echo $data['connection'];?></label>
      </div>
      <div class="col">
        <label>Weight</label>
      </div>
      <div class="col">
        <label><?php echo $data['weight'];?></label>
      </div>
      <div class="col">
        <label>Destination</label>
      </div>
      <div class="col">
        <label><?php echo $data['destination'];?></label>
      </div>
      <div class="col">
        <label>Receiver</label>
      </div>
      <div class="col">
        <label><?php echo $data['carrier'];?></label>
      </div>
    </fieldset>
  </form>
</div>

</div>
</div>
<?php include("footer.php")?>
