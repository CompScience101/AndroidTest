<?php 
    // Purpose: built for Restful Webservice Call And Get And Parse JSON Data Android Example
    // reference: https://androidexample.com/Restful_Webservice_Call_And_Get_And_Parse_JSON_Data-_Android_Example/index.php?view=article_discription&aid=101&aaid=123

    // Get Post Data
    $data = urldecode($_POST['data']);
       
    $jsonData      = array();
    $jsonTempData  = array();
    $word = "test";  
     for($i=1;$i<4; $i++)
       {
          $jsonTempData = array();
          $jsonTempData['name']         = $data.$i.$word;
          $jsonTempData['number']       = $data.$i.$word;
          $jsonTempData['date_added']   = $data.$i.$word;
           
          $jsonData[] = $jsonTempData;
       }
     
     $outputArr = array();
     $outputArr['Android'] = $jsonData;
      
     // Encode Array To JSON Data
     print_r( json_encode($outputArr));
      
 
 ?>
