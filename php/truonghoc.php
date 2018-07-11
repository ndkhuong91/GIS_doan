<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="../css/menubar.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="../bootstrap-3.2.0-dist\css\bootstrap.css">
</head>
<body>

    <div class="sidenav">
        <?php include "../menu/menu.php" ?>
    </div>

    <div class="main">
        <div class="table-scrol">
            <h1 align="center">Danh sách Trường Học</h1>
            <div class="add-new">
                <a href="./addtruong.php"><button class="btn btn-danger">Thêm mới</button></a>
            </div>
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


            <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
            <thead>

            <tr>

                <th>Mã Trường</th>
                <th>Tên Trường</th>
                <th>Hình Ảnh</th>
                <th>Loại</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Xóa</th>
            </tr>
            </thead>

                <?php
                include("../database/db_conection.php");
                $view_users_query="select * from truong";//select query for viewing users.
                $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

                while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
                {
                    $truong_id=$row[0];
                    $ten=$row[1];
                    $hinhanh=$row[2];
                    $loai=$row[3];
                    $lat=$row[4];
                    $logi=$row[5];
                ?>

                <tr>
<!--here showing results in the table -->
                    <td><?php echo $truong_id;  ?></td>
                    <td><?php echo $ten;  ?></td>
                    <td><img src="../images/<?php echo $hinhanh;  ?>" height="70px" width="70px"></td>
                    <td><?php echo $loai;  ?></td>
                    <td><?php echo $lat;  ?></td>
                    <td><?php echo $logi;  ?></td>
                    <td><a href="../delete.php?del=<?php echo $truong_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
                </tr>

                <?php } ?>

                </table>
            </div><!-- END table-responsive -->
        </div><!-- END table-scrol -->
    </div><!-- END Main -->
     
</body>
</html> 
