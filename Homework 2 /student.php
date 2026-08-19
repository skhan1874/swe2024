<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Here is your Campus ID</title>
</head>
<body>
    <h1>Here is your Campus ID</h1>

    <?php 
    if (
        isset($_POST["Student_name"]) && !empty($_POST["Student_name"]) &&
        isset($_POST["Campus_ID"]) && !empty($_POST["Campus_ID"])
    ) {
        $studentName = $_POST["Student_name"];
        $campusID = $_POST["Campus_ID"];

        // Check if student name contains only letters
        if (!preg_match("/^[a-zA-Z\s]+$/", $studentName)) {
            echo "<p>Names should only include letters. Please go back.</p>";
            echo "<a href='studentform.html'>Go back</a>";
        } elseif (!preg_match("/^\d{2}[a-zA-Z]{4}$/", $campusID)) {
            // Check if campus ID is in the correct format
            echo "<p>Campus ID was incorrect. Go back and re-enter name and campus ID.</p>";
            echo "<a href='studentform.html'>Go back</a>";
        } else {
            // Both student name and campus ID are valid
            echo "<p>Campus ID was in correct format.</p>";
            echo "<p>Student Name: $studentName</p>";
            echo "<p>Campus ID: $campusID</p>";
        }
    } else {
        echo "<p>Please enter both student name and campus ID.</p>";
    }
    ?>
</body>
</html>
