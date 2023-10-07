<html>
<body>
<?php

$a1=$_GET["t1"];
$a2=$_GET["t2"];
$a3=$_GET["t3"];
$con=mysqli_connect("localhost","root","") or die("<br> failed to connect".mysql_error());
$db=mysqli_select_db($con,"reg2") or die(mysql_error());
$cmd="insert into registration value ('$a1', '$a2','$a3')";
$ins=mysqli_query($con,$cmd);
$f=mysqli_affected_rows($con);
if($f>0)
{
    echo"success";
}
else
{
    echo"not success";
}
?>
</body>
</html>