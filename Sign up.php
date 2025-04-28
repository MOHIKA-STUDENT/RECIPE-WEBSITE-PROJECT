<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Recipe</title>
  <link rel="stylesheet" href="signlog.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


  <script src="validation.js"></script>

</head>

<body>
  <div id="logo">
    SmartRecipe
  </div>

  <div id="nav">
    <ul>

      <li><a class="link" href="login.php"><i id="icon" class="fa-solid fa-circle-user"></i> Login</a></li>
      <li><a class="link" href="Privacy.php">Privacy Policy</a></li>
      <li><a class="link" href="About.php">About Us</a></li>
      <!-- <li><a class="link" href="home.php">Home</a></li> -->
    </ul>
  </div>

  <div id="login">
    <H2>Sign up</H2>
    <hr>
    <br>
    <br>


    <form name="SignUp" action="save.php" method="post" onsubmit="return validateForm()">

      <div id="Register">

        <i class="fa-solid fa-user"></i> Username
        <br>
        <input type="text" placeholder="Enter Your Name" name="Username" required pattern="[A-Za-z]+"
          title="Username must contain only letters">
        <br>
        <i class="fa-solid fa-envelope"></i> Email ID
        <br>
        <input type="email" placeholder="example@gmail.com" name="Email_ID" required pattern=".+@gmail\.com"
          title="Email must be a valid Gmail address">

        <br>
        <div class="password-container">
          <i class="fa fa-lock"></i> Password
          <br>

          <input type="password" placeholder="Password" name="Password" Id="password" required>
          <i class="fa fa-eye password-toggle" onclick="togglePasswordVisibility('password')"></i>
        </div>
        <br>
        <div class="password-container">
          <i class="fa fa-lock"></i> Confirm Password

          <input type="password" placeholder="Password" name="Password" Id="confirmPassword" required>
          <i class="fa fa-eye password-toggle" onclick="togglePasswordVisibility('confirmPassword')"></i>
        </div>
        <span id="passwordError" class="error"></span>
        <br>

        <label>

          <input type="checkbox">Remember Me
        </label>
        <br>
        <br>
        Already have an Account?
        <a href="login.php">Login</a>

      </div>
      <br>
      <br>
      <a href="home.php">
        <button type="submit" placeholder="button" value="submit" name="save">Sign up</button>
      </a>


    </form>
  </div>

</body>

</html>