<?php

include("database/db_conection.php");
$delete_id=$_GET['del'];
$table_name=$_GET['tbname'];
$delete_query="delete  from nguoidung WHERE id='$delete_id'";//delete query
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('adminpage.php?deleted=id has been deleted','_self')</script>";
}

?>