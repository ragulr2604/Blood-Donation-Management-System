<?php session_start(); ?>
<?php include('dbcon.php');

?>
<?php
if (isset($_POST['userlogin'])) {
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	$query 		= mysqli_query($con, "SELECT * FROM donor WHERE  password='$password' and username='$username'");
	$row		= mysqli_fetch_array($query);
	$num_row 	= mysqli_num_rows($query);

	if ($num_row > 0) {
		$_SESSION['user_id'] = $row['user_id'];
		header('location:index.php');
	} else {
		echo "<script>alert('Invalid username or password')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="assets/css/styles.css">
    
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Sign In</title>
    </head>
    <body>
        <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="assets/img/drop.jpg" alt="">
                </div>

                <div class="login__forms">
                    <form method="post" action="#" class="login__registre" id="login-in">
                        <h1 class="login__title">Sign In</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Username" name="username" class="login__input" required>
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Password" name="password" class="login__input" required>
                        </div>

                        <input type="submit" class="login__button" title="Log In" name="userlogin" value="User Login"></input>
                        
                        <div>
                            <span class="login__account">Don't have an Account ?</span>
                            <a href="registration.php"><span class="login__signin" id="sign-up">Sign Up</span></a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        


        <script src="assets/js/main.js"></script>


    </body>
</html>