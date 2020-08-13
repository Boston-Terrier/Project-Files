<!DOCTYPE html>
<html>
<head>
  <link rel= "stylesheet" href= "style_sheet.css">
</head>

<body>

<h3> Action Page </h3>
<!-- Output the information that was entered by the user in 'index.php'-->

<!-- <h5>The input from box 1 is: </h5> -->
  <p> <?php echo "Welcome ";
            echo $_POST["box1"];
            echo " ";
            echo $_POST["box2"]; ?><br> </p>


<h5> & the input from box 3 is: </h5>
  <p> <?php echo $_POST["box3"]; ?> <br> </p>

<h5> & the input from box 4 is: </h5>
  <p> <?php echo $_POST["box4"]; ?> <br> </p>

<!-- Testing out declaring the user input from the fields as variables -->
<?php

  $var1 = $_POST["box1"];
  $var2 = $_POST["box2"];

  #printing the outputs from the form
  echo "*******************************************************<br><br>";
  echo "-- now testing out the python passsing with SQLite integration -- <br><br>";
  #echo "STUFF WITH THE FUNCTION if applicable <br><br>";
  echo shell_exec("python /Users/raeross/Documents/Work/Intern Programming Project/python_func.py $var1 $var2");
  #echo "DATABASE SQLITE STUFF<br><br>";
  echo shell_exec("python /Users/raeross/Documents/Work/Intern Programming Project/python_func.py $var1 $var2");
?>

<!-- REGULAR LINK <p><a href="index.php">Link back to home page</a></p> -->
<p><button onclick="document.location='index.php'">Link back to home page</button></p>

</body>
</html>
