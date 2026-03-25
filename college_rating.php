<?php 
   header("Content-Type:application/json"); 
   header("Access-Control-Allow-Origin:*"); 
   $conn=new mysqli('localhost','root','','ugc_db'); 
 
   if($conn->connect_error){ 
     echo json_encode(["error"=>"Database connection failed"]); 
    exit; 
   } 
 
   $college=$_GET['college']??''; 
   if(!$college){ 
       echo json_encode(["error"=>"No college name provided"]); 
   } 
   $stmt=$conn->prepare("Select naac_rating from college_ratings where 
college_name=?"); 
   $stmt->bind_param("s",$college); 
   $stmt->execute(); 
   $stmt->bind_result($rating); 
 
   if($stmt->fetch()){ 
       echo json_encode (["college"=>$college,"rating"=>$rating]); 
   } 
   else { 
       echo json_encode(["college"=>$college,"rating"=>$rating]);
 } 
 
   $stmt->close(); 
   $conn->close(); 
 
?>
