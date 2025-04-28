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

if (isset($_POST["save"])) {
    $Username = $_POST["Username"];
    $Email = $_POST["Email_ID"];
    $Password = $_POST["Password"];

    $sql_query = "INSERT INTO user_info (Username, Email_ID, Password)
                  VALUES ('$Username', '$Email', '$Password')";

    if (mysqli_query($conn, $sql_query)) {

        echo "<script type='text/javascript'> alert('Successfully Registered ! ') 
    </script>";

    } else {
        echo "Error: " . mysqli_error($conn);
    }
    header("location:login.php");
}
mysqli_close($conn);


?>