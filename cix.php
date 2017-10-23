<form action="melumat.php" method="POST">
<?php 
$azik=new mysqli("localhost","root","","cvarxiv");
$yes=$azik->query("SELECT * FROM cvaz");
echo "<select name=\"bilm\">";
$relax=$yes->fetch_assoc();
do
{
  echo "<option value=".$relax['ad'].">".$relax['ad']."</option>";
}
while($relax=$yes->fetch_assoc());
echo "</select>";
 ?>
 <input type="submit" value="Melumat">
</form>