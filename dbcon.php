<?php

$server ="localhost";
$user="root";
$password="";
$db="ajl";

$con =mysqli_connect($server,$user,$password,$db);

if($con)
{
    ?>
    <script>
    alert("Connection Successful");
</script>
<?php
}else{
    ?>
    <script>
    alert("NO Connection ");
</script>
<?php
}

?>