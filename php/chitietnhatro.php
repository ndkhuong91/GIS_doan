<?php
    $nhatro_id=$_GET['idn'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="../css/menubar.css" rel="stylesheet"/>
    <link href="../css/detail.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="../bootstrap-3.2.0-dist\css\bootstrap.css">
</head>
<body>
        
    <div class="sidenav">
        
        <?php include "../menu/menu.php" ?>
    </div>

    <div class="main">
        <div class="table-scrol">
            <h1 align="center">Danh sách Phòng</h1>
            <div class="add-new">
                <a href="./addtk.php?idx=<?php echo $nhatro_id ?>"><button class="btn btn-danger">Thêm mới</button></a>
            </div>
            <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


                <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
                <thead>

                    <tr>

                        <th>Mã Phòng</th>
                        <th>Số Người Ở</th>
                        <th>Chiều Dài</th>
                        <th>Chiều Rộng</th>
                        <th>Giá</th>
                        <th>Có Gác</th>
                        <th>Máy Lạnh</th>
                        <th>Số Lượng Phòng</th>
                        <th>Sửa</th>
                    </tr>
                </thead>

            <?php
                include("../database/db_conection.php");
                
                $nhatro_query="select * from phong WHERE MaNhaTro='$nhatro_id'";//delete query
                $run=mysqli_query($dbcon,$nhatro_query);//here run the sql query.

                while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
                {
                    $phong_id=$row[0];
                    $songuoi=$row[1];
                    $dai=$row[2];
                    $rong=$row[3];
                    $gia=$row[4];
                    $gac=$row[5];
                    $maylanh=$row[6];
                    $soluong=$row[7];

            ?>

                <tr>
        <!--here showing results in the table -->
                    <td><?php echo $phong_id;  ?></td>
                    <td><?php echo $songuoi;  ?></td>
                    <td><?php echo $dai;  ?></td>
                    <td><?php echo $rong;  ?></td>
                    <td><?php echo $gia;  ?></td>
                    <td><?php echo $gac;  ?></td>
                    <td><?php echo $maylanh;  ?></td>
                    <td><?php echo $soluong;  ?></td>
                    <td>
                        <a href="./delphong.php?del=<?php echo $phong_id ?>&idx=<?php echo $nhatro_id ?>"><button class="btn btn-danger">Delete</button></a> 
                        
                        <a href="./editphong.php?edit=<?php echo $phong_id ?>&idx=<?php echo $nhatro_id ?>"><button id="myBtn" class="btn btn-danger">Edit</button></a>
                    </td> <!--btn btn-danger is a bootstrap button to show danger-->
                </tr>

            <?php } ?>

                </table>
            </div><!-- END table-responsive -->
        </div><!-- END table-scrol -->
    </div><!-- END Main -->
     
    
    
    <div id="myModal" class="modal">

  <!-- Dialog BOX -->
  
    
    
</body>
</html> 

