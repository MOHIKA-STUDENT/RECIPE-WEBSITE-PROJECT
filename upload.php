<!DOCTYPE html>
<html>

<head>
    <title>Recipe Share Page</title>
    <link rel="stylesheet" href="uploadpage.css">

</head>


<body>

    <div id="nav">

        <ul>

            <li><a class="link" href="Privacy.php">Privacy Policy</a></li>
            <li><a class="link" href="About.php">About Us</a></li>
            <li><a class="link" href="home.php">Home</a></li>

        </ul>
    </div>
    <div id="container">
        <h1>Share Your Recipe</h1>
        <form id="recipe-form" method="POST" action="uploadata.php" enctype="multipart/form-data">
            <label for="recipe-name">Recipe Name:</label>
            <textarea type="text" id="recipe-name" name="recipe-name" required></textarea>

            <br><br>

            <label for="ingredients">Ingredients:</label>
            <textarea id="ingredients" name="ingredients" rows="8" cols="30" required></textarea>
            <br><br>

            <label for="instructions">Instructions:</label>
            <textarea id="instructions" name="instructions" rows="15" cols="30" required></textarea>
            <br><br>
            Select image or video to upload:
            <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*, video/*">

            <br>

            <button type="submit" name="submit">Submit Recipe</button>
        </form>
    </div>
    <!-- <div id="message"></div> -->
    <script src="upload.js"></script>
</body>

</html>