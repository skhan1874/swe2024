<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>View Post</title>
	<link rel="stylesheet" type="text/css" href="form_proc.css">
</head>
<body> 
	<h1> Your Post </h1>
	<a href="newpost.html"> Create a Post </a> <br> <br/>
	<?php
    // Connect to the database
    $db = mysqli_connect("studentdb-maria.gl.umbc.edu", "skhan18", "skhan18", "skhan18");

  
    if (mysqli_connect_errno()) {
        exit("Error - could not connect to MySQL");
    }

    // Retrieve diary entries from the database
    $query = "SELECT * FROM post";
    $result = mysqli_query($db, $query);

    // Check if there are any entries
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
         
            echo "<h2>" . htmlspecialchars($row['ptitle']) . "</h2>";
            echo "<p>" . htmlspecialchars($row['comments']) . "</p>";
            echo "<p>Emotions: " . htmlspecialchars($row['emotions']) . "</p>";
            echo "<p>Tags:" . htmlspecialchars($row['tags']) . "</p>";
        
        }
    } else {
        echo "No entries yet.";
    }

   
    mysqli_close($db);
    ?>

	
	</body>
	</html>



if (empty($_POST['delites']) || empty($_POST['thinmints'])) {
    echo "<h1> You need to enter in a number for at least one type of cookie. </h1>";
    echo "<p><a href='girlscout.html'>Go back to order form</a></p>";


} else {
    $delites = $_POST['delites'];
    $thinmints = $_POST['thinmints'];
    $shipping = isset($_POST['regular']) ? "Regular" : "Express";
    $shipping_cost = isset($_POST['regular']) ? 7 : 9;
    $donate_extra = isset($_POST['donate']) ? 5 : 0;

    $total_delites_cost = $delites * 3.5;
    $total_thinmints_cost = $thinmints * 4;
    $total_shipping_cost = $shipping_cost;
    $total_donation = $donate_extra;
    $total_cost = $total_delites_cost + $total_thinmints_cost + $total_shipping_cost + $total_donation;

    echo "<h1> Girl Scout Cookies: Order Confirmation. </h1>";
    echo " <h2> Your order for $delites has been placed. Your order will reach you in 3-7 business days.</h2>";
    echo "<h2> Your order for $thinmints has been placed. Your order will reach you in 3-7 business days. </h2>";
 
    
}
?>
</body>
</html>
