<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/png" href="web icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Be My Valentine</title>
    <link rel="stylesheet" href="css/valentine.css" />
  </head>
  <body>
    <div id="valentineQuestion"><b>Will you be my valentine?</b></div>
    <button class="answerButton" onclick="location.href='thankyou.php'">
      Yes
    </button>
    <button class="answerButton" id="noButton">La27 yaaalah</button>
    <br />
    <img src="please.gif" alt="man waiting response" class="responsive" />

    <script>
      document
        .getElementById("noButton")
        .addEventListener("click", function () { alert("3afaaaaaaaaaaaak"); // Display "3afaaaaaaaaaaaak" in a new line
          var yesButton = document.querySelector(
            'button[onclick*="thankyou.php"]'
          );
          var currentFontSize = parseInt(
            window.getComputedStyle(yesButton).fontSize
          );
          yesButton.style.fontSize = currentFontSize + 10 + "px"; // Increase font size by 5px
        });
    </script>
  </body>
</html>
