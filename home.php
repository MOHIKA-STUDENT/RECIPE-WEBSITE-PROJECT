<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Recipe</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    <!-- <div id="logo">
        Foodielight
    </div> -->


    <div id="nav">

        <div id="linknav">
            <ul>


                <!-- <li><a class="link" id="l" href="Sign up.php"> <i class="fa-solid fa-circle-user"></i>Sign Up/Login</a>
                </li> -->

                <div class="dropdown">
                    <i id="profileicon" class="fa-solid fa-circle-user"></i>

                    <div class="dropdown-content">
                        <!-- Dropdown items will go here -->

                        <a class="link" href="upload.php">Upload</a>
                        <i id="upload" class="fa-solid fa-upload"></i>
                        <hr>

                        <a class="link" href="#" onclick="logout()">Logout</a>
                        <i id="logout" class="fa">&#xf08b;</i>
                    </div>

                </div>
                <li><a class="link" href="Privacy.php">Privacy Policy</a></li>
                <li><a class="link" href="About.php">About Us</a></li>
                <li></li>


            </ul>
        </div>

        <h2>Welcome to our Foodielight!</h2>
        <br>
        <p>Find the perfect recipe for your meal plan today.</p>


        <header>

            <div class="search-container">
                <input type="text" placeholder="Search for meal..." id="search-input">
                <button type="Search" id="search-btn" onclick="searchMeals()"><i class="fa fa-search"></i></button>
            </div>


        </header>

    </div>

    <!-- ......................Recipes................. -->


    <div id="recipes">


        <div class="recipe-section">
            <div class="card">

                <img id="gajar" src="gajar-halwa.webp" alt="">
                <br>
                <h3> Gajar Halwa</h3>
                <a href="#" onclick="displayRecipe('Gajar Halwa')">View Recipe</a>

            </div>
            <br>
            <div class="card">

                <img id="pav" src="pavbhaji.jpeg" alt="">
                <br>
                <h3> Pav Bhaji</h3>
                <a href="#" onclick="displayRecipe('Pav Bhaji')">View Recipe</a>

            </div>
            <br>
            <div class="card">

                <img id="pulao" src="vegpulao.webp" alt="">
                <br>
                <h3> Veg Pulao</h3>
                <a href="#" onclick="displayRecipe('Veg Pulao')">View Recipe</a>

            </div>
            <br>
            <div class="card">

                <img id="paneer" src="paneer-mutter.jpg" alt="">
                <br>
                <h3> Mutter Paneer</h3>
                <a href="#" onclick="displayRecipe('Mutter Paneer')">View Recipe</a>

            </div>

        </div>

    </div>




    <div id="recipe-rows">
        <div class="recipe-section2">
            <div class="card">

                <img id="noodles" src="noodles.jpg" alt="">
                <br>
                <h3>Manchurian Noodles</h3>
                <a href="#" onclick="displayRecipe('Manchurian Noodles')">View Recipe</a>
            </div>
            <br>

            <div class="card">

                <img id="naan" src="Naan.jpg" alt="">
                <br>
                <h3>Naan</h3>
                <a href="#" onclick="displayRecipe('Naan')">View Recipe</a>
            </div>
            <br>
            <div class="card">

                <img id="dosa" src="dosa.jpg" alt="">
                <br>
                <h3>South Indian Dosa</h3>
                <a href="#" onclick="displayRecipe('South Indian Dosa')">View Recipe</a>
            </div>
            <br>
            <div class="card">

                <img id="pithla" src="pithla.webp" alt="">
                <br>
                <h3>Pithla Bhakri</h3>
                <a href="#" onclick="displayRecipe('Pithla Bhakri')">View Recipe</a>
            </div>
            <br>
        </div>
    </div>
    <div id="recipe-row2">
        <div class="recipe-section3">
            <div class="card">

                <img id="modak" src="modak.jpg" alt="">
                <br>
                <h3>Ukdiche Modak</h3>
                <a href="#" onclick="displayRecipe('Ukdiche Modak')">View Recipe</a>
            </div>
            <br>

            <div class="card">

                <img id="pizza" src="pizza.webp" alt="">
                <br>
                <h3>Pizza</h3>
                <a href="#" onclick="displayRecipe('Pizza')">View Recipe</a>
            </div>
            <br>
            <div class="card">

                <img id="samosa" src="samosa.jpeg" alt="">
                <br>
                <h3>Samosa</h3>
                <a href="#" onclick="displayRecipe('Samosa')">View Recipe</a>
            </div>
            <br>
            <div class="card">

                <img id="misal" src="misal.jpg" alt="">
                <br>
                <h3>Misal Pav</h3>
                <a href="#" onclick="displayRecipe('Misal Pav')">View Recipe</a>
            </div>
        </div>
    </div>

    <div id="meal-page" class="meal-page">
        <button type="button" class="closebtn" id="recipe-close-btn" onclick="hideRecipe()">
            <i class="fas fa-times"></i>
        </button>
        <div class="meal-details-content" id="recipe-details">
            <h2 class="h2" id="recipe-title"></h2>

            <div class="recipe-content">
                <p1>
                    <ul id="recipe-list">
                    </ul>

                    <h3>

                    </h3>
                    <ol id="instructions-list" class="ingredients">
                    </ol>

                </p1>
            </div>

            <img src=" " class="recipe-img" id="recipe-img" alt="">

        </div>
    </div>


    <div id="dynamic-recipes">
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
    </div>

    <script src="recipe.js"></script>
</body>


</html>