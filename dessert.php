<?php
include('server.php');
if(isset($_POST['Continue'])) {
    if(!empty($_POST['dessertcheckbox'])) {
        foreach($_POST['dessertcheckbox'] as $selected) {
            $dessert = mysqli_real_escape_string($conn, $selected);
            $sql = "INSERT INTO dessertcheckbox (dessertcheckbox) VALUES ('$dessert')";
            mysqli_query($conn, $sql);
        }
        // Redirect to next page after processing form data
        header("Location: activities.php");
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
    <title>Dessert</title>
    <link rel="stylesheet" href="css/dessert.css" />
  </head>
  <body>
   <form method="POST" action="">
    <div id="dessertquestion">Which dessert we eatin ?</div>

    <div class="dessert-selection">
      <div class="dessert-item">
        <img src="food/donuts.jpg" alt="donuts" />
        <label
          ><input type="checkbox" name="dessertcheckbox[]" value="donuts" /> donuts</label
        >
      </div>
      <div class="dessert-item">
        <img src="food/ice cream.jpg" alt="ice cream" />
        <label
          ><input type="checkbox" name="dessertcheckbox[]" value="ice cream" /> ice cream</label
        >
      </div>
      <div class="dessert-item">
        <img src="food/milkshakes.jpg" alt="milkshakes" />
        <label><input type="checkbox" name="dessertcheckbox[]" value="milkshakes" /> milkshakes</label>
      </div>
      <div class="dessert-item">
        <img src="food/starbucks juice.jpg" alt="starbucks juice" />
        <label
          ><input type="checkbox" name="dessertcheckbox[]" value="starbucks juice" /> starbucks juice</label
        >
      </div>
      <div class="dessert-item">
        <img src="food/sweet.jpg" alt="sweet" />
        <label
          ><input type="checkbox" name="dessertcheckbox[]" value="sweet" /> sweet</label
        >
      </div>
      <div class="dessert-item">
        <img src="food/khringo.jpg" alt="khringo" />
        <label
          ><input type="checkbox" name="dessertcheckbox[]" value="khringo" />
          khringo</label
        >
      </div>
    </div>
     <button type="submit" name="Continue" class="button">Continue</button> </button>
  </body>
</html>
