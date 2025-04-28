<?php
// Include the database connection file
include_once "uploadata.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Get form data
    $recipeName = $_POST['recipe-name'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];

    // Handle file upload (if applicable)
    $image_url = null;
    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['fileToUpload']['name'];
        $file_tmp = $_FILES['fileToUpload']['tmp_name'];
        $upload_dir = 'uploads/'; // Create a directory named 'uploads' in your project
        move_uploaded_file($file_tmp, $upload_dir . $file_name);
        $image_url = $upload_dir . $file_name;
    }

    // Insert data into the "user_data" table
    $sql = "INSERT INTO recipes (name, ingredients, instructions, image_url) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$recipeName, $ingredients, $instructions, $image_url]);

    // Redirect or display a success message

    header("Location: home.php");

    exit();
}
?>




<?php
$host = "localhost"; // Change this to your database host if it's different
$dbname = "user_data"; // Change this to your actual database name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password

try {
    // Create a PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>



<?php
// Include the database connection file
include_once "uploadata.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Get form data
    $recipeName = $_POST['recipe-name'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];

    // Handle file upload (if applicable)
    $image_url = null;
    if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['fileToUpload']['name'];
        $file_tmp = $_FILES['fileToUpload']['tmp_name'];
        $upload_dir = 'uploads/'; // Create a directory named 'uploads' in your project
        move_uploaded_file($file_tmp, $upload_dir . $file_name);
        $image_url = $upload_dir . $file_name;
    }

    // Insert data into the "user_data" table
    $sql = "INSERT INTO recipes (name, ingredients, instructions, image_url) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$recipeName, $ingredients, $instructions, $image_url]);

    // Redirect or display a success message

    header("Location: home.php");

    exit();
}
?>











<?php // Database connection settings
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

// Select all the records from the `recipes` table
$sql = "SELECT * FROM recipes";
$result = $conn->query($sql);

// Display the returned results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Recipe Name: " . $row["name"] . "<br>";
        echo "Ingredients: " . $row["ingredients"] . "<br>";
        echo "Instructions: " . $row["instructions"] . "<br>";
        echo "Image URL: " . $row["image_url"] . "<br><br>";
    }
} else {
    echo "No records found";
}

// Close the database connection
$conn->close();
?>











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

// Select all the records from the `recipes` table
$sql = "SELECT * FROM recipes";
$result = $conn->query($sql);

// Display the returned results as cards
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card">';
        echo '<img src="' . $row["image_url"] . '" alt="' . $row["name"] . '">';
        echo '<br>';
        echo '<h3>' . $row["name"] . '</h3>';
        echo '<a href="#" onclick="displayRecipe(\'' . $row["name"] . '\')">View Recipe</a>';
        echo '</div>';
    }
} else {
    echo "No records found";
}

// Close the database connection
$conn->close();
?>