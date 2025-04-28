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
    $count = 0;
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card">';
        echo '<img src="' . $row["image_url"] . '" alt="' . $row["name"] . '">';
        echo '<br>';
        echo '<h3>' . $row["name"] . '</h3>';
        echo '<a href="#" onclick="displayRecipe(\'' . $row["name"] . '\')">View Recipe</a>';
        echo '</div>';

        $count++; // Increment the counter

        // Check if the counter is a multiple of 4 (end of a row)
        if ($count % 4 == 0) {
            echo '</div>'; // Close the current row
            echo '<div class="recipe-section">'; // Start a new row

        }
    }
    echo '</div>';

} else {
    echo "No records found";
}

// Close the database connection
$conn->close();
?>





fetch('recipe-details.php?recipe_name=' + recipeName)
.then(response => response.json())
.then(data => {
// Append the fetched recipe details to the new container
uploadedRecipeContainer.innerHTML = `
<img id="recipe-img" src="${data.image_url}" alt="${data.recipe_name}">
<div id="recipe-list">${data.ingredients}</div>
<div id="instructions-list">
    <h3>Instructions:</h3>${data.instructions}
</div>
`;

// Append the new container to the mealPage
mealPage.appendChild(uploadedRecipeContainer);
})
.catch(error => console.error('Error:', error));