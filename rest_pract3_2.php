<?php 
   header('Content-Type:application/json'); 
   header('Access-Control-Allow-Origin'); 
    
   $host="localhost"; 
   $user ="root"; 
   $pswd = ""; 
   $db = "stock_data"; 
   
   $conn = new mysqli($host,$user,$pswd,$db); 
   if($conn->connect_error){ 
      echo json_encode(["error"=>"Database Connection Failed"]); 
      exit; 
   } 
 
   $sql = "SELECT name,value FROM market_rates"; 
   $result = $conn->query($sql); 
    
   $rates = []; 
   while($row =$result->fetch_assoc()){ 
      $rates[$row['name']] = $row['value']; 
   } 
     
   echo json_encode($rates); 
   $conn->close(); 
?>
