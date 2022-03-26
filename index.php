
<?php 
if(isset($_POST['btn'})){
$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password']


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X_UX_Compatible"constant="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>name</h1>
<h1>email</h1>
<h1>password</h1>

<form action="#" method="POST">
  <label> name:</label><br>
  <input type="text"  name="name" ><br>
  <label >email</label><br>
  <input type="text" name="email"><br><br>
  <label >password</label><br>
  <input type="password" name="lname"><br><br>
  <input type="submit" value="Submit data" name="btn">
</form> 

</body>
</html>