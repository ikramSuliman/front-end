<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='logincss.css' rel='stylesheet' type='text/css'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    include ('conn.php');

    // if(isset($_POST['sign_in'])){
    //     $username = $_POST['name'];
    //     $password = $_POST['password'];
    //     $email = $_POST['email'];
        
    //     $sql="SELECT * FROM users WHERE name=? and password=? and email=?";
    //     $sql=mysqli_prepare($con,$sql);
    //     mysqli_stmt_bind_param($sql,'sss',$username,$password,$email);
    //     mysqli_stmt_execute($sql);
        
    //     $result=mysqli_stmt_get_result($sql);
    //     if($result->num_rows>0){
    //        // echo 'done';
    //         echo "Name: " . $_POST['name'] . "<br>";
    //         echo "password: " . $_POST['password'] . "<br>";
    //         echo "Email: " . $_POST['email'] . "<br><br>";
    //     }else{
    //         echo 'falid';
    //     }
        
    //     }
    //     mysqli_close($con);
    ?>
<div class="login">
    <h2 class="active"> sign in </h2>

    <!-- <h2 class="nonactive"> sign up </h2> -->
    <form>
        <input type="text" class="text" name="name">
        <span>Username:</span>

        <br>
        
        <br>

        <input type="password" class="text" name="password">
        <span>Password:</span>
        <br>

        <input type="email" class="text" name="email">
        <span>Email:</span>
        <br>

        <input type="checkbox" id="checkbox-1-1" class="custom-checkbox" />
        <label for="checkbox-1-1">Keep me Signed in</label>
        
        <button class="signin" name="sign_in">
        Sign In
        </button>
        <hr>
        <a href="regester.php" class="dnthave">Don’t have an account? Sign up</a>

    </form>

    </div>
    <?php
    include('a.html')
				?>
</body>
</html>
