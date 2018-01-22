<?php 
 
    // Get Post Data
    $data = urldecode($_POST['data']);
       
    $jsonData      = array();
    $jsonTempData  = array();
    $word = "test";  
     for($i=1;$i<4; $i++)
       {
          $jsonTempData = array();
          $jsonTempData['name']         = $word;
          $jsonTempData['number']       = $word;
          $jsonTempData['date_added']   = $word;
           
          $jsonData[] = $jsonTempData;
       }
     
     $outputArr = array();
     $outputArr['Android'] = $jsonData;
      
     // Encode Array To JSON Data
     print_r( json_encode($outputArr));
      
 
 ?>
