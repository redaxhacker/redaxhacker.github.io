<?php
include('server.php');

if(isset($_POST['submit'])) {
    // Check if the date is selected
    if(isset($_POST['selecteddate'])) {
        $selecteddate = mysqli_real_escape_string($conn, $_POST['selecteddate']);
        
        // Insert the selected date into the database
        $sql = "INSERT INTO selecteddate (selecteddate) VALUES ('$selecteddate')";
        mysqli_query($conn, $sql);
        
        // Redirect to food.php after processing form data
        header("Location: food.php");
        exit(); // Make sure to exit to prevent further script execution
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/png" href="web icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Date</title>
    <link rel="stylesheet" href="css/date.css" />
</head>
<body>
<h1 title="choose a date">Are you free on ...</h1>
<form class="form-group" method="POST" action="">
    <label>Which day: (select a date)</label>
    <div>
        <input type="date" name="selecteddate" /> <!-- Add name attribute -->
        <button class="button" type="submit" name="submit"> <!-- Add name attribute -->
            submit
        </button>
    </div>
</form>
</body>
</html>


