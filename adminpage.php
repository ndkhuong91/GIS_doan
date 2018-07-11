
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="./css/menubar.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
</head>
<body>

    <div class="sidenav">
        <img src="images/gis.png">
        <a href="./index.php">Trang Chủ</a>
        <a href="./php/nhatro.php">Nhà Trọ</a>
        <a href="./php/truonghoc.php">Trường học</a>
        <a href="./php/taikhoan.php">Tài Khoản</a>
        <a href="./logout.php">Đăng Xuất</a>
    </div>

    <div class="main">
        <div class="table-scrol">
            <h1 align="center">Danh sách Nhà Trọ</h1>

            <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


                <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
                    <thead>

                    <tr>

                        <th>Mã Nhà Trọ</th>
                        <th>Chủ Nhà Trọ</th>
                        <th>Số Điện Thoại</th>
                        <th>Thông Tin</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Xóa</th>
                    </tr>
                    </thead>

                    <?php
                    include("database/db_conection.php");
                    $view_users_query="select * from nhatro";//select query for viewing users.
                    $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

                    while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
                    {
                        $nhatro_id=$row[0];
                        $tenchunha=$row[1];
                        $sdt=$row[2];
                        $thongtin=$row[3];
                        $lat=$row[4];
                        $log=$row[5];
                        

                    ?>

                    <tr>
            <!--here showing results in the table -->
                        <td><?php echo $nhatro_id;  ?></td>
                        <td><?php echo $tenchunha;  ?></td>
                        <td><?php echo $sdt;  ?></td>
                        <td><?php echo $thongtin;  ?></td>
                        <td><?php echo $lat;  ?></td>
                        <td><?php echo $log;  ?></td>
                        <td>
                            <a href="delete.php?del=<?php echo $nhatro_id ?>"><button class="btn btn-danger">Delete</button></a>
                            <a href="./php/chitietnhatro.php?idn=<?php echo $nhatro_id ?>"><button class="btn btn-danger">Chitiet</button></a>
                        </td> <!--btn btn-danger is a bootstrap button to show danger-->
                    </tr>

                    <?php } ?>

                </table>
            </div><!-- END table-responsive -->
        </div><!-- END table-scrol -->
    </div><!-- END Main -->
     
</body>
</html> 
