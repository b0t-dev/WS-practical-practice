<!DOCTYPE html> 
<html> 
<head> 
<title>UGC NAAC Rating Lookup</title> 
</head> 
<body> 
<h2>Check NAAC Rating for the College</h2> 
<form method="GET"> 
<label>College Name : </label> 
<input type="text" name="college"><br><br> 
<input type="submit" value="Check Rating"> 
<?php 
 
  if (isset($_GET['college'])){ 
     $college = urlencode($_GET['college']); 
     $api_url = "http://localhost/colleges-rating/rating-api.php?college=".$college; 
     $response = file_get_contents($api_url); 
     $data = json_decode($response,true); 
     echo "<h3>Result :</h3>";
 echo "<strong>College Name : </strong>".  htmlspecialchars($data['college']); 
     echo "<br><br>"; 
     echo "<strong>NAAC Ratings : </strong>".  htmlspecialchars($data['rating']); 
     echo "<br><br>";  
  } 
 
?> 
</body> 
</html>
