<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "user_data";
$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    echo "Not Connected to the Database";
} else {
    echo "Connected Successfully";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST["Email_ID"];
    $Password = $_POST["Password"];

    $sql_query = "SELECT * FROM user_info
     WHERE Email_ID='$Email' AND Password='$Password'";
    $result = mysqli_query($conn, $sql_query);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        echo "<script type='text/javascript'> alert('Login Successful!')</script>";
        $_SESSION['login_message'] = "Logged in successfully";
        // Redirect to home.php or any other page
        header("location: home.php");

    } else {
        echo "<script type='text/javascript'> alert('Invalid Email ID or Password!')</script>";
    }
}

mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Recipe</title>
    <link rel="stylesheet" href="signlog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">



</head>

<body>
    <div id="logo">
        SmartRecipe
    </div>
    <div id="nav">

        <ul>
            <li><a class="link" href="Sign up.php"><i id="icon" class="fa-solid fa-circle-user"></i>Sign Up</a></li>
            <li><a class="link" href="Privacy.php">Privacy Policy</a></li>
            <li><a class="link" href="About.php">About Us</a></li>

        </ul>
    </div>

    <div id="login">
        <H2>Login</H2>
        <hr>
        <br>
        <br>



        <form name="Login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


            <div id="Register">

                <i class="fa-solid fa-envelope"></i> Email ID
                <br>
                <input type="email" placeholder="example@gmail.com" name="Email_ID" required pattern=".+@gmail\.com"
                    title="Email must be a valid Gmail address">


                <br>
                <div class="password-container">
                    <i class="fa fa-lock"></i>Password
                    <br>
                    <input type="password" placeholder="Password" name="Password" Id="password" required>
                    <i class="fa fa-eye password-toggle" onclick="togglePasswordVisibility('password')"></i>
                </div>
                <br>
                <a href="#">Forgot Password</a>
            </div>
            <br>
            <br>


            <a href="home.php"> <button type="Submit" placeholder="button" value="Submit">Login
                </button>
            </a>


        </form>
    </div>

    <script src="validation.js"></script>
</body>