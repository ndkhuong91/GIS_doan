<?php

include("../database/db_conection.php");
$edit_id=$_GET['edit'];
$nhatro_id=$_GET['idx'];
$nhatro_query="select * from phong WHERE MaPhong='$edit_id'";//delete query
                $run=mysqli_query($dbcon,$nhatro_query);//here run the sql query.

                while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
                {
                    $phong_id=$row[0];
                    $songuoi=$row[1];
                    $dai=$row[2];
                    $rong=$row[3];
                    $gia = $row[4];
                    $gac=$row[5];
                    $maylanh=$row[6];
                    $soluong=$row[7];
                }





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
            <h1 align="center">Cập Nhật Thông Tin</h1>

            <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->
                
                <form  method="post" enctype="multipart/form-data" action="./edit.php"> <!--<===============================-->
                    <div class="form-group">
                            <label >Mã Nhà Trọ</label>
                            <input class="form-control" name="manhatro" type="text" required="required" id="manhatro" value="<?php echo $nhatro_id; ?>" contenteditable="true">
                          </div>      
                    <div class="form-group">
                    <div class="form-group">
                            <label >Mã phòng</label>
                            <input class="form-control" name="maphong" type="text" required="required" id="maphong" value="<?php echo $edit_id; ?>" contenteditable="true">
                          </div>      
                    <div class="form-group">
                            <label >Số người</label>
                            <input class="form-control" name="songuoi" type="text" required="required" id="songuoi" value="<?php echo $songuoi; ?>">
                          </div>
                          <div class="form-group">
                            <label >Chiều dài</label>
                            <input class="form-control" name="chieudai" type="text"  required="required" id="chieudai" value="<?php echo $dai; ?>">
                          </div>

                          <div class="form-group">
                            <label >Chiều rộng</label>
                            <!--THAY ĐỔI-->
                            <input class="form-control" name="chieurong" type="text"  required="required" id="chieurong" value="<?php echo $rong; ?>">
                            <!--<===============================-->
                          </div>

                          <div class="form-group">
                            <label >Gia</label>
                            <!--THAY ĐỔI-->
                            <input class="form-control" name="gia" type="number"  required="required" id="gia" value="<?php echo $gia; ?>">
                            <!--<===============================-->
                          </div>
                        <div class="form-group">
                            <label >Số lượng phòng</label>
                            <!--THAY ĐỔI-->
                            <input class="form-control" name="soluong" type="number"  required="required" id="soluong" value="<?php echo $soluong; ?>">
                            <!--<===============================-->
                          </div>

                          <div class="form-group">
                            <label >Có gác</label> <br>
                            <!--THAY ĐỔI-->
                              <?php
                              if($gac == 1){
                                  
                                    echo '<input type="radio" name="gac" value="1" checked>  Có gác';
                                    echo '<input type="radio" name="gac" value="0">   Không gác';                      
                              }
                              else{
                                  echo '<input type="radio" name="gac" value="1" >  Có gác';
                                 echo '<input type="radio" name="gac" value="0" checked>   Không gác'; 
                              }
                                  ?>
                          </div>

                          <div class="form-group">
                            <label >Có máy lạnh</label> <br>
                            <!--THAY ĐỔI-->
                              <?php
                              if($maylanh == 1){
                                  
                                    echo '<input type="radio" name="maylanh" value="1" checked>  Có';
                                    echo '<input type="radio" name="maylanh" value="0">   Không';                      
                              }
                              else{
                                  echo '<input type="radio" name="maylanh" value="1" >  Có ';
                                 echo '<input type="radio" name="maylanh" value="0" checked>   Không'; 
                              }
                                  ?>
                            <!--<===============================-->
                          </div>
                          
                          <button type="submit" class="btn btn-danger" name="capnhat" >Cập nhật</button>

                        </form>
                
                
                
            </div><!-- END table-responsive -->
        </div><!-- END table-scrol -->
    </div><!-- END Main -->
     
</body>
</html> 
