<!DOCTYPE html>
<html>
<head>
  <link rel= "stylesheet" href= "style_sheet.css">
</head>

<body>
<h2>Registration Page</h2>
<h3> Form in HTML </h3>

<!-- Need to add user input validation -->
<!-- Now it ensures that the input is 3~10 chars -->
<!-- Sign-in button -->
<p> Generic form begins here </p>

<form action="/action_page.php" method="post">
  <label for="box1">First Name:</label><br>
  <input type="text" id="box1" name="box1" value="" pattern=".{3,10}" required><br>
  <label for="box2">Last Name:</label><br>
  <input type="text" id="box2" name="box2" value="" pattern=".{3,10}" required><br><br>
  <!-- special formatting for email? -->
  <label for="box2">Email:</label><br>
  <input type="text" id="box3" name="box3" value="" pattern=".{3,10}" required><br><br>
  <label for="box2">Password:</label><br>
  <input type="text" id="box4" name="box4" value="" pattern=".{3,10}" required><br><br>
  <input type="reset" value="Clear">
  <input type="submit" value="Submit">
</form>

<p> ************************************************** </p>
<!-- Register button -->
<!-- I was testing out if it would be better to create a Register button or use the form submit--> 

<!-- <p><button onclick="document.location='action_page.php'">Finish Registration</button></p> -->


</body>
</html>
