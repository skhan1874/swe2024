<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Here is your food information</title>
</head>
<body>
<h1> Here is your food information </h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if all fields are filled
    if (empty($_POST["Name"]) || empty($_POST["Food_Item"]) || empty($_POST["Cuisine"]) || empty($_POST["Allergy_information"])) {
        echo "<p>You have not entered all the information. Please fill out the required fields.</p>";
        echo "<a href='foodform.html'>Go back</a>";
    } else {
        // Check if the name contains only letters
        $name = $_POST["Name"];
        if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
            echo "<p>Name should contain only letters.</p>";
            echo "<a href='foodform.html'>Go back</a>";
        } else {
            // Check if the food item contains only letters
            $foodItem = $_POST["Food_Item"];
            if (!preg_match("/^[a-zA-Z\s]*$/", $foodItem)) {
                echo "<p>Food item should contain only letters.</p>";
                echo "<a href='foodform.html'>Go back</a>";
            } else {
                // Display collected data
                $name = $_POST["Name"];
                $foodItem = $_POST["Food_Item"];
                $cuisine = $_POST["Cuisine"];
                $allergyInformation = $_POST["Allergy_information"];
                
                echo "<h2>Food information</h2>";
                echo "<p>Name: $name</p>";
                echo "<p>Food item: $foodItem</p>";
                echo "<p>Cuisine: $cuisine</p>";
                echo "<p>Allergy information: $allergyInformation</p>";
                echo "<p>Thank you!</p>";
            }
        }
    }
} else {
    echo "<p>Please submit the form.</p>";
    echo "<a href='foodform.html'>Go back</a>";
}
?>

</body>
</html>

