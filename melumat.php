<?php 
$azik=new mysqli("localhost","root","","cvarxiv");
$a=$_POST['bilm'];
$term=$azik->query("SELECT * FROM cvaz WHERE ad='$a'");
$nar=$term->fetch_assoc();
echo "<center>";
echo "<p>Bu insanin sekili:".$nar['sekil']."</p>";
echo "<p>Adi:".$nar['ad']."</p>";
echo "<p>Yawi:".$nar['yaw']."</p>";
echo "<p>Milliyeti:".$nar['milli']."</p>";
echo "<p>Istediyi iw:".$nar['iw']."</p>";
echo "<p>Bacariqlari:".$nar['mirt']."</p>";
echo "<p>Dil bilikleri:".$nar['dil']."</p>";
echo "</center>";
 ?>