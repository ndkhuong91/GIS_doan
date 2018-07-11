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

      <?php include "php/database.php" ?>
      <?php include "php/polygon.php" ?>
    

    <!--main content start-->
    
      
    
    
    <section id="main-content">
        <article>
          <div id="map"></div> 
          <div id="legend"> <p>
              <h3>Legend</h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <img src="images/close.png" onclick="removeLegend()"> </p>
          </div>
      </article>
    </section>
  </section>
  
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgYkXf9gKbC23sdJ2fkSkQM_FOsTiDIwc&callback=initMap" async defer></script> 
    <script src="js/mapfunc.js" type="text/javascript"></script>
</body>

</html>
