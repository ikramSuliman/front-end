<?php
include('../db.php');
if(count($_POST)>0) {
mysqli_query($con,"UPDATE users set id='" . $_POST['id'] . "', username='" 
. $_POST['username'] . "', password='" . $_POST['password'] . 
"', email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
$message ="<script src='aaa.js'></script>";
}

$result = mysqli_query($con,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<!-- <link href='logincss.css' rel='stylesheet' type='text/css'> -->

<title>Users Data</title>
</head>
<body>
<div   class="login" >
<form name="frmUser" method="post" action="">
<h2 class="active"> Edite Data: </h2>
<div><?php if(isset($message)) { echo $message; } ?>
</div>

<a href="manage.php">Employee List</a>
</div>
<span>ID:</span>
<!-- <input class="text" type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>"> -->
<input class="text" type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
<span>Username:</span>
<input class="text" type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>">
<br>
<span>Password:</span>
<input class="text" type="password" name="password" class="txtField" value="<?php echo $row['password']; ?>">
<br>
<span>Email:</span>
<input  class="text" type="email" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
<input onclick="showAlert()" class="signin" type="submit" name="sign_in" value="Submit" class="buttom">

</form>
</div>
</body>
</html>