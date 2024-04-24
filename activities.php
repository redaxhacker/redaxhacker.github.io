<?php
include('server.php');

if(isset($_POST['Finally'])) {
    if(!empty($_POST['activitycheckbox'])) {
        foreach($_POST['activitycheckbox'] as $selected) {
            $activity = mysqli_real_escape_string($conn, $selected);
            $sql = "INSERT INTO activitycheckbox (activitycheckbox) VALUES ('$activity')";
            mysqli_query($conn, $sql);
        }
        // Redirect to next page after processing form data
        header("Location: lastpage.php");
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
    <title>Activities</title>
    <link rel="stylesheet" href="css/activities.css" />
  </head>
  <body>
   <form method="POST" action="">
    <div id="activityquestion"><b>What are we doing after ?</b></div>
    <div class="activities-selection">
      <div class="activity-item">
        <img src="activities/beach sunset.jpg" alt="beach sunset" />
        <label
          ><input
            type="checkbox"
            name="activitycheckbox[]"
            value="beach sunset"
          />beach sunset</label
        >
      </div>
      <div class="activity-item">
        <img src="activities/yasmina fun park.jpg" alt="yasmina fun park" />
        <label
          ><input
            type="checkbox"
            name="activitycheckbox[]"
            value="yasmina fun park"
          />yasmina fun park</label
        >
      </div>
      <div class="activity-item">
        <img src="activities/cinema.jpg" alt="cinema" />
        <label
          ><input
            type="checkbox"
            name="activitycheckbox[]"
            value="cinema"
          />cinema</label
        >
      </div>
      <div class="activity-item">
        <img src="activities/sindibad.jpg" alt="sindibad" />
        <label
          ><input
            type="checkbox"
            name="activitycheckbox[]"
            value="sindibad"
          />sindibad</label
        >
      </div>
      <div class="activity-item">
        <img src="activities/zoo.jpg" alt="zoo" />
        <label
          ><input
            type="checkbox"
            name="activitycheckbox[]"
            value="zoo"
          />zoo</label
        >
      </div>
      <div class="activity-item">
        <img src="activities/park.jpg" alt="park" />
        <label
          ><input
            type="checkbox"
            name="activitycheckbox[]"
            value="park"
          />park</label
        >
      </div>
    </div>
     <button type="submit" name="Finally" class="button">Finally</button> </button>
  </body>
</html>
