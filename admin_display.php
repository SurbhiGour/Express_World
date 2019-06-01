<?php  include("header_admin.php");?>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>

<link rel="stylesheet" type="text/css" href="datatables/media/css/jquery.dataTables.min.css">    <link rel="stylesheet" type="text/css" href="datatables/media/css/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>

<style>
.col{
		float:left;
		width: 20%;
		padding: 5px 25px 5px 5px;
	}
</style>


<?php

include ("dbinfo.php");
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

if (isset($_POST["import"]))
{
   
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'upload/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
           
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
              // echo($Row);
          
                $airway = "";
                if(isset($Row[0])) {
                    $airway = mysqli_real_escape_string($conn,$Row[0]);
                }
                
                $txt_date = "";
                if(isset($Row[1])) {
                    $txt_date = mysqli_real_escape_string($conn,$Row[1]);
                }

                $shipper = "";
                if(isset($Row[2])) {
                    $shipper = mysqli_real_escape_string($conn,$Row[2]);
                }
                
                $conntn = "";
                if(isset($Row[3])) {
                    $conntn = mysqli_real_escape_string($conn,$Row[3]);
                }

                $wt = "";
                if(isset($Row[4])) {
                    $wt = mysqli_real_escape_string($conn,$Row[4]);
                }
                
                $dest = "";
                if(isset($Row[5])) {
                    $dest = mysqli_real_escape_string($conn,$Row[5]);
                }

                $trackno = "";
                if(isset($Row[6])) {
                    $trackno = mysqli_real_escape_string($conn,$Row[6]);
                }
                
                $carrier = "";
                if(isset($Row[7])) {
                    $carrier = mysqli_real_escape_string($conn,$Row[7]);
                }

                $date = "";
                if(isset($Row[8])) {
                    $date = mysqli_real_escape_string($conn,$Row[8]);
                }



                
                if (!empty($airway) || !empty($txt_date) || !empty($shipper) || !empty($conntn) || !empty($wt) || !empty($dest) || !empty($trackno) || !empty($carrier) || !empty($date))
                 {

                   
                 // $query=mysqli_query($conn,"INSERT INTO `report`(`airway_bno`,`date`,`shipper`,`connection`,`weight`,`destination`,`trackno`,`carrier`) VALUES('".$airway."','".$date."','".$shipper."','".$conntn."','".$wt."','".$dest."','".$trackno."','".$carrier."')")or die(mysqli_error($conn));

                    $query = "insert into report(airway_bno,txt_date,shipper,connection,weight,destination,trackno,carrier,record_date) values('".$airway."','".$txt_date."','".$shipper."','".$conntn."','".$wt."','".$dest."','".$trackno."','".$carrier."','".$date."')";
                    $result = mysqli_query($conn, $query);
                
                    if (! empty($result)) {
                        $type = "success";
                        $message = "Excel Data Imported into the Database";
                    } else {
                        $type = "error";
                        $message = "Problem in Importing Excel Data";
                    }
                }
             }
        
         }
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
?>




<style>    


.outer-container {
  background: #F0F0F0;
  border: #e0dfdf 1px solid;
  padding: 40px 20px;
  border-radius: 2px;
}

.btn-submit {
  background: #333;
  border: #1d1d1d 1px solid;
    border-radius: 2px;
  color: #f0f0f0;
  cursor: pointer;
    padding: 5px 20px;
    font-size:0.9em;
}

.tutorial-table {
    margin-top: 40px;
    font-size: 0.8em;
  border-collapse: collapse;
  width: 100%;
}

.tutorial-table th {
    background: #f0f0f0;
    border-bottom: 1px solid #dddddd;
  padding: 8px;
  text-align: left;
}

.tutorial-table td {
    background: #FFF;
  border-bottom: 1px solid #dddddd;
  padding: 8px;
  text-align: left;
}

#response {
    padding: 10px;
    margin-top: 10px;
    border-radius: 2px;
    display:none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
</style>

<?php include ("dbinfo.php");  ?>
<center>
<div class="container"style="background: aliceblue;height: auto;">
<h3 style="position: relative;right: 36px;color: #094f9d;font-size: 30px;"><b>Display Tracking Detail</b></h3><br>

<hr>
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
                <div class="col-lg-4" style="position: relative;top: -24px;">
                   <h4>Import Excel File into Datatable </h4>
                </div>
                <div class="col-lg-4"style="position: relative;top: -24px;">
                  <label>Choose ExcelFile</label>
                 <input type="file" name="file" id="file" accept=".xls,.xlsx" style="position: relative;left: 30px;">
                </div>
                <div class="col-lg-4"style="position: relative;top: -24px;">
                <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
                </div>
        </form>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?> </div>
<hr>



<form id="" action="" method="post" enctype="multipart/form-data" style="height: auto;" >
<fieldset>
	<div class="col">
		<label>Select Date Range</label>
    </div>
	<div class="col">
      <input id="setdate" type="date" class="form-control" name="txt_issue" placeholder="Issue Date" >
    </div>
	<div class="col">
      <input id="setdate" type="date" class="form-control" name="txt_due" placeholder="Due Date" >
    </div>
	<div class="col">
      <button name="btn_view" type="submit" id="contact-submit" data-submit="...Sending">View</button>
    </div>
</fieldset>


<div style="overflow-x: scroll;overflow-y: scroll;height: auto;">
    <table width="100%" id="example" class="display">
	<thead>
            <tr style="background-color:#c9e1ec;">
              <th>ID</th> 
			  <th>AWB No</th> 
              <th>Date</th>  
			  <th>Shipper</th>	
			  <th>Receiver</th>
              <th>Weight</th>
			  <th>Destination</th> 
			  <th>Connection</th>				  
			  <th>TrackNo</th>
			  <th>Record Date</th>
        <!-- <th>Document</th>  -->
        <th>Edit</th> 
			  <th>Delete</th> 
            </tr>
			</thead>
			<tbody>
            <?php 

			if(isset($_POST['btn_view']))
			{
				$issue=$_POST['txt_issue'];
				$due=$_POST['txt_due'];
				$qry=mysqli_query($conn,"SELECT * FROM `report` WHERE record_date >= '$issue' AND record_date <= '$due'")or die(mysqli_error($conn));
			}
      else
      {
				$qry=mysqli_query($conn,"SELECT * FROM `report`")or die(mysqli_error($conn));
			}
				$count=1;
				while($row=mysqli_fetch_array($qry))
			{?>
        <tr>
        <td><?php echo $count++;?></td>
        <td><?php echo $row['airway_bno'];?></td>
			  <td><?php echo $row['txt_date'];?></td>
        <td><?php echo $row['shipper'];?></td>
			  <td><?php echo $row['carrier'];?></td>
			  <td><?php echo $row['weight'];?></td>
			  <td><?php echo $row['destination'];?></td>
			  <td><?php echo $row['connection'];?></td>
			  <td><?php echo $row['trackno'];?></td>
			  <td><?php echo $row['record_date'];?></td>
        <!-- <td><?php echo $row['document'];?></td> -->
        <td><?php echo "<a href='admin_add.php?temp_id=".$row['id']."'><i class='fa fa-edit fa-fw'></i></a>"; ?> </td>
			  <td><?php echo "<a href='delete_code.php?dc_id=".$row['id']."' onClick=\"javascript:return confirm('are you sure you want to delete this?');\"><i class='fa fa-times fa-fw'></i></a>"; ?></td>
            </tr>
            <?php }?>
			</tbody>
    </table>
</div>		
</form>

</div>
</center>
<?php include("footer.php")?>

<script type="text/javascript" src="datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="datatables/media/js/dataTables.bootstrap.min.js"></script>


 <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"> </script>
    
<script type="text/javascript">
  $(document).ready(function() {
   
          $('#example').DataTable({

"lengthMenu": [ 5, 10, 20, 50, 100 ],

              "scrollX": true,
              "dom": 'lBfrtip',
              "buttons": [
                            {
                            
                              extend: 'excelHtml5',
                              text: '<i class="fa fa-file-excel-o"></i>',
                              titleAttr: 'Excel'
                             
                            },     
                         ]
 
   
  });
$("[data-toggle=tooltip]").tooltip();
 
var table=$('#example').DataTable();

      table
      .order([[0,'desc']])
      .draw(false);

  });
</script>

