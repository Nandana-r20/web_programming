<!DOCTYPE html>

<html>
 <head>
 <title>Factorial</title>
 </head>
 <body>


<h2>FACTORIAL CALCULATION</h2>

<form method="POST">
 Enter a number: <input type="number" name="num" min="0" required>
 <input type="submit" name="submit" value="Calculate"> </form>

<?php
 if (isset($_POST["submit"]))
 { $num = (int)$_POST["num"];
 $fact = 1;
 for ($i = 1; $i <= $num; $i++)
 {
 $fact = $fact * $i;
 }
 echo "<h3>Number: $num</h3>";
 echo "<h3>Factorial: $fact</h3>"; }
 ?>

</body>
 </html>
