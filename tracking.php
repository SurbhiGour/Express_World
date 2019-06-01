<?php 
include "header.php"; 
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
<style> 
    .track{
        position: relative;
        top: 155px;
        box-shadow: 1px 1px 10px #53c5cf;
        width: 50%;
        background: #dee6e857;
    }
        
</style>
<section >
  <center>
  <div class="container"style="background: aliceblue;height: 671px;">
    <div class="track container">

        <div class="form">
          <h1 style="padding: 1px 1px 25px;color: #094f9d;"><b>Enquire Here !!!</b></h1>
          <div id="errormessage"></div>

          <form method="post" name="contact_form" id="contact_form">

              <div class="form-row">

              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>

              </div>

              <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
              </div>

              <div class="form-group">
              <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
              </div>

              <div class="text-center">
                <div id="msg"></div>
              <button type="submit" style="padding: 9px 39px 11px;background: #53c5cf57;font-size: 16px;">Send Message</button>
              </div>

          </form>

        </div>

   </div>
  </div>
  </center>
</section>

 <?php 
include "footer.php"; 
 ?>

<script>
  
  $('form#contact_form').submit(function(e){   
    e.preventDefault(); 
      
          $.ajax({
                 
                  url:'insert_contact.php',
                  type: "POST",
                  data: new FormData(this),
                  contentType:false,
                  processData:false,
                  success: function(data)
                  {                         
                          if(data==1)
                          {
                            $('#msg').html("<div class='alert alert-success'><strong>Enquiry Generated !!! </strong></div>");                            
                             window.setTimeout(function()
                              { 
                                 location.reload();
                                 
                              } ,1500);
                          }

                         else
                         {
                         
                          $('#msg').html("<div class='alert alert-success'><strong>Something Wrong...</strong></div>"); window.setTimeout(function()
                              { 
                                 location.reload();
                              } ,1500);
                         }
                  }
            });      
       
       });

</script>