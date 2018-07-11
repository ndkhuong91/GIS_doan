
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
            <h1 align="center">Thêm Trường Mới</h1>

            <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->
                
                <form  method="post" enctype="multipart/form-data" action="./edit.php"> <!--<===============================-->
                    <div class="form-group">
                            <label >Mã Trường</label>
                            <input class="form-control" name="matruong" type="text" required="required">
                          </div>      
                    
                    <div class="form-group">
                            <label >Tên Trường</label>
                            <input class="form-control" name="tentruong" type="text" required="required" >
                          </div>      
                    <div class="form-group">
                            <label >Hình Ảnh</label>
                            <input class="form-control" name="hinhanh" type="file" size="40px"  >
                          </div>
                          <div class="form-group">
                            <label >Loại</label>
                            <input class="form-control" name="loai" type="text"  required="required" >
                          </div>

                          <div class="form-group">
                            <label >Latitude</label>
                            <!--THAY ĐỔI-->
                            <input class="form-control" name="lat" type="text"  required="required" >
                            <!--<===============================-->
                          </div>

                          <div class="form-group">
                            <label >Longitude</label>
                            <!--THAY ĐỔI-->
                            <input class="form-control" name="long" type="text"  required="required">
                            <!--<===============================-->
                          </div>

                          
                          
                          <button type="submit" class="btn btn-danger" name="themtruong" >Thêm</button>

                        </form>
                
                
                
            </div><!-- END table-responsive -->
        </div><!-- END table-scrol -->
    </div><!-- END Main -->
     
</body>
</html> 
