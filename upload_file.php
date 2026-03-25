<?php 
 
   $target_dirs = "uploads/"; 
   $target_file = $target_dirs.basename($_FILES["image"]["name"]); 
   $imageFileType= strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
   $allowed = array("jpg","jpeg","png","gif"); 
 
   if (in_array($imageFileType,$allowed)){ 
 
       if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)){ 
           echo "Image Uploaded : <a href='$target_file'>".basename($_FILES["image"]["name"])."</a>"; 
       }  
       else { 
           echo "Error in Uploading the file."; 
       } 
 
   } 
   else { 
       echo "Image supported type is jpg, jpeg, png and gif"; 
   } 
 
?>
