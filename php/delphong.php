<?php

include("../database/db_conection.php");
$delete_id=$_GET['del'];
$nhatro_id=$_GET['idx'];
$delete_query="delete  from phong WHERE MaPhong='$delete_id'";//delete query
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
//javascript function to open in the same window
    //echo "<script>window.open('./chitietnhatro.php?idn=$nhatro_id')</script>";
    header('Location: ./chitietnhatro.php?idn='.$nhatro_id);
}

?>