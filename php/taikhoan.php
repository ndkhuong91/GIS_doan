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
            <h1 align="center">Tài Khoản Người Dùng</h1>

            
            <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


            <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
            <thead>

                <tr>

                    <th>Mã Người Dùng</th>
                    <th>Tên Tài Khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Xóa Tài Khoản</th>
                </tr>
            </thead>

                <?php
                include("../database/db_conection.php");
                $view_users_query="select * from nguoidung";//select query for viewing users.
                $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

                while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
                {
                    $user_id=$row[0];
                    $user_name=$row[1];
                    $user_pass=$row[2];



                ?>

                <tr>
        <!--here showing results in the table -->
                    <td><?php echo $user_id;  ?></td>
                    <td><?php echo $user_name;  ?></td>
                    <td><?php echo $user_pass;  ?></td>
                    <td><a href="../delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
                </tr>

                <?php } ?>

            </table>
            </div><!-- END table-responsive -->
        </div><!-- END table-scrol -->
    </div><!-- END Main -->
     
</body>
</html> 
