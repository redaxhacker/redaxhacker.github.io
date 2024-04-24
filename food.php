<?php
include('server.php');
if(isset($_POST['Continue'])) {
    if(!empty($_POST['foodcheckbox'])) {
        foreach($_POST['foodcheckbox'] as $selected) {
            $food = mysqli_real_escape_string($conn, $selected);
            $sql = "INSERT INTO foodcheckbox (foodcheckbox) VALUES ('$food')";
            mysqli_query($conn, $sql);
        }
        // Redirect to dessert.php after processing form data
        header("Location: dessert.php");
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
    <title>Food Selection</title>
    <link rel="stylesheet" href="css/food.css" />
  </head>
  <body>
   <form method="POST" action="">
    <div id="foodquestion">
      <b>What food would you like to eat?</b>
    </div>

    <div class="food-selection">
      <div class="food-item">
        <img src="food/burger.jpg" alt="Burgers" />
        <label
          ><input type="checkbox" name="foodcheckbox[]" value="Burgers" /> burger </label
        >
      </div>
      <div class="food-item">
        <img src="food/pizza.jpg" alt="pizza" />
        <label
          ><input type="checkbox" name="foodcheckbox[]" value="pizza" /> pizza</label
        >
      </div>
      <div class="food-item">
        <img src="food/tacos.jpeg" alt="tacos" />
        <label
          ><input type="checkbox" name="foodcheckbox[]" value="tacos" /> tacos</label
        >
      </div>
      <div class="food-item">
        <img src="food/penne.jpg" alt="penne" />
        <label><input type="checkbox" name="foodcheckbox[]" value="penne" /> penne</label>
      </div>
      <div class="food-item">
        <img src="food/fried chicken.jpg" alt="fried chicken" />
        <label><input type="checkbox" name="foodcheckbox[]" value="fried chicken" /> fried chicken</label>
      </div>
      <div class="food-item">
        <img src="food/tagine.jpg" alt="tagine" />
        <label><input type="checkbox" name="foodcheckbox[]" value="tagine" /> tagine</label>
      </div>
      <div class="food-item">
        <img src="food/pastitsio.jpg" alt="pastitsio" />
        <label><input type="checkbox" name="foodcheckbox[]" value="pastitsio" /> pastitsio</label>
      </div>
      <div class="food-item">
        <img src="food/chawarma.jpg" alt="chawarma" />
        <label><input type="checkbox" name="foodcheckbox[]" value="chawarma" /> chawarma</label>
      </div>
    </div>
     <button type="submit" name="Continue" class="button">Continue</button> </button> 
  </body>
</html>
