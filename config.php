<?php
$conn= mysqli_connect("localhost","root","","yummy") or die(mysqli_error($conn));

if($conn)
{
    echo("database connected successfully!!");
}
else{
    echo("database connection unsuccessful!!");
}

?>
