<?php  include("header.php");?>
<!-- <section id="intro" style="height: 36vh;">

    <div id="intro-carousel"  >
   <div class="item" style="background-image: url('img/tr.jpg');"></div>
  
    </div>


  </section> -->
<div class="admin-baner" >
  <div class="wrap-content-header">
      <div class="gridabout">
      <h2 style="color:white">Admin Panel</h2>
    </div>
    </div>
</div>
<style>
.txtpass{
	width: 50%;
    padding: 6px 8px;
}
#contact1 {
    background: #F9F9F9;
    padding: 60px 66px 37px 68px;
    margin-bottom: 3%;
    position: relative;
    width: 40%;
    top: 91px;
    box-shadow: 1px 1px 10px #53c5cf; 
}
#contact1 input[type="text"],#contact1 input[type="password"], #contact1 input[type="email"], #contact1 input[type="tel"], #contact1 input[type="url"], #contact1 textarea,#contact1 input[type="date"] {
  width:100%;
  border:1px solid #CCC;
  background:#FFF;
  margin:0 0 10px;
  padding:10px;
  color:black;
}
#contact1 button[type="submit"],#contact2 button[type="submit"], #contact3 button[type="submit"]  {
  cursor:pointer;
  width:100px;
  border:none;
  background:#094f9d;
  color:#FFF;
  margin: 1px 1px 1px 10px;
  padding:10px;
  font-size:15px;
}

#contact1 button[type="submit"]:hover, #contact2 button[type="submit"]:hover ,#contact3 button[type="submit"]:hover  {
  background:#09C;
  -webkit-transition:background 0.3s ease-in-out;
  -moz-transition:background 0.3s ease-in-out;
  transition:background-color 0.3s ease-in-out;
}
</style>
<center>
<div class="col-lg-12 container" style="background: aliceblue;height: 535px;" >
  <form id="contact1" action="code.php" method="post">
    <h3><b>Admin</b> Login</h3>
    <br>
    <fieldset>
      <input placeholder="Username" type="Text" name="username" tabindex="2" class="txtpass" required>
    </fieldset>
    <fieldset>
      <input placeholder="Password" type="password" name="password" tabindex="3" class="txtpass" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
		<?php if(isset($_GET['status'])&&$_GET['status']==1)
			   echo "<font color=red>Invalid Username Or Password..</font>";
		?>
  </form>
</div>
<br>
<br>
<br>
</center>
</div>
</div>

<?php include("footer.php")?>

