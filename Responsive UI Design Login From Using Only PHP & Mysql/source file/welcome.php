<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="s.css">
    
    <script src="https://kit.fontawesome.com/71e94864f1.js" crossorigin="anonymous"></script>
</head>
<body >

     <div class="navbar">
        
                     <img src="logo.jpg" class="logo">
                
                <ul>
                    <li><a href="welcome.php">Home</a></li>
                    <li><a href="logout.php">Log in</a></li>
                    <li><a href="login.php">Sign up</a></li>
                    <li><a href="a">Help</a></li>
                    <li> <a href="logout.php">Logout</a></li> 
                    <li><a href="edit.php"><i class="fa-solid fa-user-pen"></i></a></li>
                    
                </ul>
            </div>




            <p><div class="container">
		<form   class="login-email">
            
            
            <div class="input-group">
				<input type="text" placeholder="" name="username" value="NAME:<?php echo $_SESSION['username']; ?>" required>
			</div>
            
            <div class="input-group">
				<input type="text" placeholder="" name="age" value="DOB:19-09-2001">
			</div>
            
            <div class="input-group">
				<input type="text" placeholder="" name="age" value="AGE:21">
			</div>
            <div class="input-group">
				<input type="text" placeholder="" name="gender" value="GENDER:male">
			</div>
            <div class="input-group">
				<input type="text" placeholder="" name="phone no" value="PHONE NO:910734719">
			</div>
            <div class="input-group">
				<input type="text" placeholder="" name="login" value="<?php echo $_SESSION['username']; ?>@gmail.com">
			</div>
            
			<div class="input-group">
				<button name="submit" class="btn">Edit</button>
			</div>
            <a href="logout.php">Logout</a>
		</form>
	</div>

</p>
            

            
		</form>
	</div>


    
    

    
</body>
</html>