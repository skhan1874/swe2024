<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create a Post</title>
</head>
<body>
    <h1>Here is your post</h1>

  <?php
// Connect to the database
$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "skhan18", "skhan18", "skhan18");

// Check for errors when connecting to the database
if (mysqli_connect_errno()) {
    exit("Error - could not connect to MySQL: " . mysqli_connect_error());
}

// Check if all fields are filled
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["ptitle"]) || empty($_POST["comments"]) || empty($_POST["emotions"]) || empty($_POST["tags"])) {
        echo "<p>You have not entered all the information. Please fill out the required fields.</p>";
        echo "<a href='newpost.html'>Go back</a>";
    } else {
        // Prevent HTML injections
        $ptitle = htmlspecialchars($_POST['ptitle']);
        $comments = htmlspecialchars($_POST['comments']);
        $emotions = htmlspecialchars($_POST['emotions']);
        $tags = htmlspecialchars($_POST['tags']);

        // Prevent SQL injection
        $ptitle = mysqli_real_escape_string($db, $ptitle);
        $comments = mysqli_real_escape_string($db, $comments);
        $emotions = mysqli_real_escape_string($db, $emotions);
        $tags = mysqli_real_escape_string($db, $tags);

        // Construct SQL query
        $constructed_query = "INSERT INTO post (ptitle, comments, emotions, tags) VALUES ('$ptitle', '$comments', '$emotions', '$tags')";

        // Execute query
        $result = mysqli_query($db, $constructed_query);
        if ($result) {
            echo "Entry successfully submitted.";
        } else {
            echo "Error: " . mysqli_error($db);
        }
    }
}

// Close database connection
mysqli_close($db);
?>
