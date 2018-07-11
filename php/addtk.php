<?php
    $nhatro_id=$_GET['idx'];
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
        <!--
        <img src="../images/gis.png">
        <a href="./nhatro.php">Nhà Trọ</a>
        <a href="./truonghoc.php">Trường học</a>
        <a href="./taikhoan.php">Tài Khoản</a>
        <a href="../logout.php">Đăng Xuất</a>-->
        <?php include "../menu/menu.php" ?>
    </div>

    <div class="main">
        <div class="table-scrol">
            <h1 align="center">Thêm Phòng Trọ Mới</h1>

            <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->
                
                <form  method="post" enctype="multipart/form-data" action="./edit.php"> <!--<===============================-->
                    <div class="form-group">
                            <label >Mã Nhà Trọ</label>
                            <input class="form-control" name="manhatro" type="text" required="required" id="manhatro" value="<?php echo $nhatro_id; ?>">
                          </div>      
                    <div class="form-group">
                    <div class="form-group">
                            <label >Mã phòng</label>
                            <input class="form-control" name="maphong" type="text" required="required" id="maphong" disabled>
                          </div>      
                    <div class="form-group">
                            <label >Số người</label>
                            <input class="form-control" name="songuoi" type="text" required="required" id="songuoi" >
                          </div>
                          <div class="form-group">
                            <label >Chiều dài</label>
                            <input class="form-control" name="chieudai" type="text"  required="required" id="chieudai" >
                          </div>

                          <div class="form-group">
                            <label >Chiều rộng</label>
                            <!--THAY ĐỔI-->
                            <input class="form-control" name="chieurong" type="text"  required="required" id="chieurong" >
                            <!--<===============================-->
                          </div>

                          <div class="form-group">
                            <label >Gia</label>
                            <!--THAY ĐỔI-->
                            <input class="form-control" name="gia" type="number"  required="required" id="gia" >
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
                              
                                  
                                    echo '<input type="radio" name="gac" value="1" >  Có gác ';
                                    echo '<input type="radio" name="gac" value="0">   Không gác ';         
                                 
                              
                                  ?>
                          </div>

                          <div class="form-group">
                            <label >Máy lạnh</label> <br>
                            <!--THAY ĐỔI-->
                              <?php
                                  
                                    echo '<input type="radio" name="maylanh" value="1">  Có ';
                                    echo '<input type="radio" name="maylanh" value="0">   Không ';                      
                                                            
                                  ?>
                            <!--<===============================-->
                          </div>
                          
                          <button type="submit" class="btn btn-danger" name="themphong" >Thêm</button>

                        </form>
                
                
                
            </div><!-- END table-responsive -->
        </div><!-- END table-scrol -->
    </div><!-- END Main -->
     
</body>
</html> 
