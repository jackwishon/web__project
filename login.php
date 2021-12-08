<?php

define( 'DB_NAME', 'jwishon1');
define( 'DB_USER', 'jwishon1');
define( 'DB_PASSWORD', 'jwishon1');
define( 'DB_HOST', 'localhost');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("connection failed: ".mysqli_error());

if(isset($_COOKIE["type"]))
{
 header("location:week7.php");
}

$message = '';

if(isset($_POST["week7Login"]))
{
 if(empty($_POST["username"]) || empty($_POST["password"]))
 {
  $message = "<div class='alert alert-danger'>Both Fields are required</div>";
 }
 else
 {
  $query = "
  SELECT * FROM user 
  WHERE username = :username
  ";
  $statement = $conn->prepare($query);
  $statement->execute(
   array(
    'username' => $_POST["username"]
   )
  );
  $count = $statement->rowCount();
  if($count > 0)
  {
   $result = $statement->fetchAll();
   foreach($result as $row)
   {
    if(password_verify($_POST["password"], $row["password"]))
    {
     setcookie("type", $row["id"], time()+3600);
     header("location:week7.php");
    }
    else
    {
     $message = '<div class="alert alert-danger">Wrong Password</div>';
    }
   }
  }
  else
  {
   $message = "<div class='alert alert-danger'>Wrong Username</div>";
  }
 }
}


?>


<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	</head>
	<body>
		<div class="container">
			<div class="panel-body">
				<span><?php echo $message; ?></span>
			</div>

			<form method="post">
				<label>Username</label><br>
					<input type="text" name="username"><br>
				<label>Password</label><br>
					<input type="text" name="password"><br>
				<input type="submit" name="week7Login" value="Submit">
			</form>
		</div>
	</body>
</html>

<?php
/*

include 'config.php';

session_start();

error_reporting(0);


if(isset($_SESSION['username'])) {
    header("Location: recipes.php");
}

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users where username ='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($reult);
        $_SESSION['username'] = $row['username'];
        header("Location: recipes.php");
    } else {
        echo "<script>alert('Incorrect username or password')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	content="width=device-width,initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="style.css" />
	<link 
		rel="stylesheet" 
		href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" 
		crossorigin="anonymous" 
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@500&family=Cairo:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
	<!-- NAVBAR -->
	<nav class="navbar">
		<div class="navbar__container">
			<a href="/" id="navbar__logo">
				<i class="fas fa-glass-martini-alt"></i>
			</a>
			<div class="navbar__toggle" id="mobile-menu">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</div>
			<ul class="navbar__menu">
				<li class="navbar__item">
					<a href="/" class="navbar__links">
					home
					</a>
				</li>
				<li class="navbar__item">
					<a href="/menu.html" class="navbar__links">
					menu
					</a>
				</li>
				<li class="navbar__item">
					<a href="/about.html" class="navbar__links">
					about
					</a>
				</li>
				<li class="navbar__item">
					<a href="/contact.html" class="navbar__links">
					contact
					</a>
				</li>
				<li class="navbar__btn">
					<a href="/" class="button">
					login
					</a>
				</li>
			</ul>
		</div>
    </nav>
    
    <!-- LOGIN FORM -->
    <div class="contact__box">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<!-- USERNAME -->
			<input type="text" class="input-field" placeholder="username" required>
            <!-- PASSWORD -->
            <input type="text" class="input-field" placeholder="password" required>
            <!-- BUTTON -->
            <div class="input-group">
                <button type="button" name="submit" class="form__btn">login</button>
            </div>
        </form>
        
    </div>

	<!-- MAIN -->
	<div class="main">
		<div class="main__container">
			
			<div class="main__img--container">
				<img src="images/pic1.svg" alt="pic" id="main__img">
			</div>
		</div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="footer__container">
            <p>&copy Jack Wishon 2021</p>
        </div>
    </div>

    </div>
	<script src="app.js"></script>
</body>
</html>
*/