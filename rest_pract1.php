<?php 
 
   header('Content-Type: application/json'); 
   if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
     if (isset($_GET['username']) && !empty($_GET['username'])) { 
        $username = htmlspecialchars($_GET['username']); 
        $response = [ 
                       'message' => "Welcome.... $username !" 
                    ]; 
     }  
     else { 
        $response = [ 
                      'error' => 'Username parameter is missing' 
                    ]; 
     } 
  
     echo json_encode($response); 
   } 
 
?> 
