<?php

include ("dbinfo.php");
// $conn = mysqli_connect("localhost","root","","test");


// $con=mysql_connect("localhost","root","");
// $conn=mysql_select_db("test",$con);  

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
          
                $airway = "";
                if(isset($Row[0])) {
                    $airway = mysqli_real_escape_string($conn,$Row[0]);
                }
                
                $date = "";
                if(isset($Row[1])) {
                    $date = mysqli_real_escape_string($conn,$Row[1]);
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


                
                if (!empty($airway) || !empty($date) || !empty($shipper) || !empty($conntn) || !empty($wt) || !empty($dest) || !empty($trackno) || !empty($carrier)) {
                    $query = "insert into report(airway_bno,date,shipper,connection,weight,destination,trackno,carrier) values('".$airway."','".$date."','".$shipper."','".$conntn."','".$wt."','".$dest."','".$trackno."','".$carrier."')";
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

<!-- $query=mysqli_query($conn,"INSERT INTO `report`(`airway_bno`,`date`,`shipper`,`connection`,`weight`,`destination`,`trackno`,`carrier`,`record_date`) VALUES('$airway','$date','$shipper','$conntn','$wt','$dest','$trackno','$carrier',CURDATE())")or die(mysqli_error($conn)); -->

<!-- $query=mysqli_query($conn,"INSERT INTO `report`(
`airway_bno`,
`date`,
`shipper`,
`connection`,
`weight`,
`destination`,
`trackno`,
`carrier`,
`record_date`) 

VALUES(
'$airway',
'$date',
'$shipper',
'$conntn',
'$wt',
'$dest',
'$trackno',
'$carrier',
CURDATE())")
or die(mysqli_error($conn));
            //exit(); -->