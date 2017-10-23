<?php 
$azik=new mysqli("localhost","root","","cvarxiv");
$name=$_POST["name"];
$age=$_POST["age"];
$nation=$_POST["nation"];
$job=$_POST["job"];
$hobby=$_POST["hobby"];
$lang=$_POST["lang"];
$ye="<img src=\"images/";
$ye=$ye.$_FILES['sekil']['name'];
$ye=$ye."\" width=\"200px\" height=\"150px\"";
$yer="C:/WebServers/home/localhost/www/cvye.com/images/";
@copy($_FILES['sekil']['tmp_name'],$yer.$_FILES['sekil']['name']);
$master=$azik->query("INSERT INTO cvaz (ad,yaw,milli,iw,mirt,dil,sekil) VALUES('$name','$age','$nation','$job','$hobby','$lang','$ye')");
 ?>