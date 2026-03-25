<?php 
  $response = file_get_contents("http://localhost/MarketShare/api.php"); 
  $data = json_decode($response,true); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>Share Trading Dashboard</title> 
</head> 
<body> 
<h1>Live Rate Sharing</h1> 
<ul> 
<li><strong>NSE INDEX : </strong> Rupees (₹) :<?php echo $data['NSE']; 
?></li><br><br> 
<li><strong>BSE INDEX : </strong>Rupees (₹) : <?php echo $data['BSE']; 
?></li><br><br> 
<li><strong>GOLD INDEX : </strong>Rupees (₹) : <?php echo $data['GOLD']; ?> per 
10g</li><br><br> 
</ul> 
<p>NITHYA VELLAIKKANU BHANUMATI (TCS2425097)</p> 
</body> 
</html>
