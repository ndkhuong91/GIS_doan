<?php

include("../database/db_conection.php");
$delete_id=$_GET['del'];
$nhatro_id=$_GET['idx'];

$delete_phong="delete  from phong WHERE MaNhaTro='$delete_id'";
$run1=mysqli_query($dbcon,$delete_phong);
$delete_query="delete  from nhatro WHERE MaNhaTro='$delete_id'";//delete query

$run2=mysqli_query($dbcon,$delete_query);
if($run1 && $run2)
{
//javascript function to open in the same window
    //echo "<script>window.open('./chitietnhatro.php?idn=$nhatro_id')</script>";
    header('Location: ./nhatro.php');
}

?>