<!DOCTYPE html>
<html>
<head>
  <link rel= "stylesheet" href= "style_sheet.css">
</head>

<body>

<h1> INDEX PAGE </h1>
<h3> Form in HTML </h3>

<!-- Need to add user input validation -->
<!-- Now it ensures that the input is 3~10 chars -->
<!-- Sign-in button -->
<p> Generic form begins here </p>

<form action="/action_page.php" method="post">
  <label for="box1">Email:</label><br>
  <input type="text" id="box1" name="box1" value="" pattern=".{3,10}" required><br>
  <label for="box2">Password:</label><br>
  <input type="text" id="box2" name="box2" value="" pattern=".{3,10}" required><br><br>
  <input type="reset" value="Clear">
  <input type="submit" value="Submit">
</form>


<p> ************************************************** </p>
<!-- Register button -->
<p><button onclick="document.location='register.php'">Register</button></p>

</body>
</html>
