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

// Get the recipe name from the query parameter
$recipe_name = $_GET['recipe_name'];

// Fetch the recipe details from the `recipes` table
$sql = "SELECT * FROM recipes WHERE name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $recipe_name);
$stmt->execute();
$result = $stmt->get_result();

// Check if the recipe exists
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Prepare the response data
    $data = [
        'image_url' => $row["image_url"],
        'ingredients' => $row["ingredients"],
        'instructions' => $row["instructions"]
    ];

    // Send the response as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    // If the recipe is not found, send an empty response
    header('Content-Type: application/json');
    echo json_encode([]);
}

// Close the database connection
$conn->close();
?>