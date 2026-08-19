<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Information</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check if all form fields are set
            if (isset($_POST['Username'], $_POST['Street'], $_POST['City'], $_POST['State'], $_POST['Email'], $_POST['Phone'])) {
                // Retrieve data from the form
                $uname = $_POST["Username"];
                $sname = $_POST["Street"];
                $cname = $_POST["City"];
                $stname = $_POST["State"];
                $ename = $_POST["Email"];
                $pname = $_POST["Phone"];

                echo "<h1>Thank you for your information</h1>";
                echo "<p>Your username is: $uname</p>";
                echo "<p>Your street is: $sname</p>";
                echo "<p>Your city is: $cname</p>";
                echo "<p>Your state is: $stname</p>";
                echo "<p>Your email is: $ename</p>";
                echo "<p>Your phone number is: $pname</p>";
            } else {
                // If any of the form fields are missing, display an error message
                echo "<h1>Error: Missing form fields</h1>";
            }
        } else {
            // If the form is not submitted, display an error message
            echo "<h1>Error: Form not submitted</h1>";
        }
    ?>
</body>
</html>
