<!DOCTYPE html> 
<html> 
<head> 
<title>PHP Image Upload</title> 
</head> 
<body> 
<h2>UPLOAD IMAGE</h2> 
<form action="upload-api.php" method="POST" enctype="multipart/form-data"> 
<input type="file" name="image" accept="image/*" required> 
<br><br> 
<input type="submit" value="Upload"> 
</form>
</body> 
</html> 
