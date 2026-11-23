<form method="GET">
Num:<input typ"text" name="n">
<input type="submit" value="check">
</form>

<?php
if(isset($_GET['n'])){
$n=$_GET['n'];
if($n%2==0){
echo"$n is even";
}else{
echo"$n is odd";
}
}
?>
