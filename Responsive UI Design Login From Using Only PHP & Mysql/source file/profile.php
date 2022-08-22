<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

    <title>Welcome</title>
    
</head>
<body >
<div class="container">
		<form   class="login-email">
            <p class="login-text" style="font-size: 0.5rem; font-weight: 800;"><?php echo "<h1 >welcome " . $_SESSION['username'] . "</h1>"; ?></p>
			<br>
            
            <div class="input-group">
				<input type="text" placeholder="" name="username" value="<?php echo $_SESSION['username']; ?>" required>
			</div>
            
            <div class="input-group">
				<input type="text" placeholder="" name="age" value="19-09-2001">
			</div>
            
            <div class="input-group">
				<input type="text" placeholder="" name="age" value="21">
			</div>
            <div class="input-group">
				<input type="text" placeholder="" name="gender" value="male">
			</div>
            <div class="input-group">
				<input type="text" placeholder="" name="phone no" value="910734719">
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

    
    
    

    
</body>
</html>