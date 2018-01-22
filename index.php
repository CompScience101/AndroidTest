<?php 
 
    // Get Post Data
    $data = urldecode($_POST['data']);
       
    $jsonData      = array();
    $jsonTempData  = array();
    $word = "test";  
     for($i=1;$i<4; $i++)
       {
          $jsonTempData = array();
          $jsonTempData['name']         = $data.$word;
          $jsonTempData['number']       = $data.$word;
          $jsonTempData['date_added']   = $data.$word;
           
          $jsonData[] = $jsonTempData;
       }
     
     $outputArr = array();
     $outputArr['Android'] = $jsonData;
      
     // Encode Array To JSON Data
     print_r( json_encode($outputArr));
      
 
 ?>
