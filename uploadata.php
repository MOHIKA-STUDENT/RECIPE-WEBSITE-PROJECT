<?php
// Database connection settings
$host = "localhost";
$dbname = "user_data";
$username = "root";
$password = "";

// Create a new database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user input from the form
$recipe_name = $_POST['recipe-name'];
$ingredients = $_POST['ingredients'];
$instructions = $_POST['instructions'];

// Handle file upload (if applicable)
$image_url = '';
if (isset($_FILES['image_url']) && $_FILES['image_url']['error'] === UPLOAD_ERR_OK) {
    $file_name = $_FILES['image_url']['name'];
    $file_tmp = $_FILES['image_url']['tmp_name'];
    $upload_dir = 'uploads/'; // Create a directory named 'uploads' in your project
    $image_url = $upload_dir . $file_name;
    move_uploaded_file($file_tmp, $upload_dir . $file_name);
}

// Insert the user input into the `recipes` table
$sql = "INSERT INTO recipes (name, ingredients, instructions, image_url) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $recipe_name, $ingredients, $instructions, $image_url);
$stmt->execute();

// Redirect the user to the home page
header("Location: home.php");
exit();
?>