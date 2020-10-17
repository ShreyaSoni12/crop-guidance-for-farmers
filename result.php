<?php include 'database.php';

$id=$_POST['id'];
$pwd=$_POST['pwd'];

$result = mysqli_query($connect, "select * from login_creds where EMAIL = '$id' and PASSWORD = '$pwd';");

if (mysqli_num_rows($result) > 0) {
  // echo "Login Successful";

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Friend</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="wrapper">
        <nav class="navbar">
            <img class="logo" src="logo.jpg">
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="about.html" target="_blank">About</a></li>
                <li><a href="services.html" target="_blank">Services</a></li>
                <li><a href="contact.html" target="_blank">Contact</a></li>
                <li><a href="schemes.html" target="_blank">Schemes</a></li>
            </ul>
        </nav>
        <p> you are logged in successfully.</p>
        <div class="center">
             <h1>Welcome To The World Of Agriculture</h1>
            <div class="afterlogin">
                <h3>Go to the services bar and enjoy the resources made especially for you!</h3>           

            </div>
        </div>

    </div>
</body>
</html>

<?php 

}
else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Friend</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="wrapper">
        <nav class="navbar">
            <img class="logo" src="logo.jpg">
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="about.html" target="_blank">About</a></li>
                <li><a href="services.html" target="_blank">Services</a></li>
                <li><a href="contact.html" target="_blank">Contact</a></li>
                <li><a href="schemes.html" target="_blank">Schemes</a></li>
            </ul>
        </nav>
        <div class="center">
            <h1>Welcome To The World Of Agriculture</h1>
            <h2>Your Username/Password is not correct. Try again.</h2>
            <div class="buttons">
                <a href="login1.php">
                    <input type="submit" value="Login/Signup">
                </a>
            </div>
            
        </div>

    </div>
</body>
</html>
<?php

}

?>
