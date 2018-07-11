<?php
include("../database/db_conection.php");


if(isset($_POST['themtruong'])){
    
  //$manhatro=$_POST["manhatro"]; 
  //$matruong=$_POST["tenchunha"];
    $tentruong=$_POST["tentruong"];
    $loai=$_POST["loai"];
    $lat=$_POST["lat"];
    $long=$_POST["long"];
    
    if($_FILES['hinhanh']['name'] != NULL){
        if($_FILES['hinhanh']['type'] == "image/jpeg"
        || $_FILES['hinhanh']['type'] == "image/png"){
            if($_FILES['hinhanh']['size'] > 1048576){
                echo "File không được lớn hơn 1mb";
            }else{
                // file hợp lệ, tiến hành upload
                $path = "../images/"; // file sẽ lưu vào thư mục data
                $tmp_name = $_FILES['hinhanh']['tmp_name'];
                $name = $_FILES['hinhanh']['name'];
                $type = $_FILES['hinhanh']['type']; 
                $size = $_FILES['hinhanh']['size']; 
                // Upload file
                move_uploaded_file($tmp_name,$path.$name);
                echo "File uploaded! <br />";
                echo "Tên file : ".$name."<br />";
                echo "Kiểu file : ".$type."<br />";
                echo "File size : ".$size;
                
                $them_query="INSERT INTO truong (MaTruong,TenTruong,HinhAnh,Loai,latitude,longitude) VALUES (NULL, '$tentruong', '$name', '$loai', '$lat', '$long')";
                if($run1=mysqli_query($dbcon,$them_query)){
                    header('Location: ./truonghoc.php');
                  }
                  else{
                    echo "Thêm không thành công";
                  }
           }
        }
    }else{
        $them_query="INSERT INTO truong (MaTruong,TenTruong,HinhAnh,Loai,latitude,longitude) VALUES (NULL, '$tentruong', NULL, '$loai', '$lat', '$long')";
                if($run1=mysqli_query($dbcon,$them_query)){
                header('Location: ./truonghoc.php');
                  }
                  else{
                    echo "Thêm không thành công";
                  }
    }
  
}

if(isset($_POST['themnhatro'])){
    
  //$manhatro=$_POST["manhatro"]; 
  $tenchunha=$_POST["tenchunha"];
    $sdt=$_POST["sdt"];
    $thongtin=$_POST["thongtin"];
    $lat=$_POST["lat"];
    $long=$_POST["long"];
    
    $them_query="INSERT INTO nhatro (MaNhaTro,TenChuNhaTro,SoDienThoai,ThongTin,latitude,longitude) VALUES (NULL, '$tenchunha', '$sdt', '$thongtin', '$lat', '$long')";
    echo $them_query;
  if($run1=mysqli_query($dbcon,$them_query)){
          header('Location: ./nhatro.php');
  }
  else{
    echo "Thêm không thành công";
  }
  
}

if(isset($_POST['capnhat'])){
  $maphong=$_POST["maphong"];
  $songuoi=$_POST["songuoi"];
  $gia=$_POST["gia"];
  $rong=$_POST["chieurong"];
  $dai=$_POST["chieudai"];
  $gac=$_POST["gac"];
  $maylanh=$_POST['maylanh'];
$manhatro=$_POST["manhatro"]; 
    $soluong=$_POST["soluong"];

    
    $capnhat_query="UPDATE phong set SoNguoi='$songuoi', DienTichDai='$dai', DienTichRong='$rong', DonGia='$gia', CoGac='$gac', CoMayLanh='$maylanh', SoLuongPhong='$soluong' where MaPhong='$maphong'";
  if($run1=mysqli_query($dbcon,$capnhat_query)){
          header('Location: ./chitietnhatro.php?idn='.$manhatro);
  }
  else{
    echo "cập nhật không thành công";
  }
  
}

if(isset($_POST['themphong'])){
  //$maphong=$_POST["maphong"];
  $songuoi=$_POST["songuoi"];
  $gia=$_POST["gia"];
  $rong=$_POST["chieurong"];
  $dai=$_POST["chieudai"];
  $gac=$_POST["gac"];
  $maylanh=$_POST['maylanh'];
  $manhatro=$_POST["manhatro"]; 
  $soluong=$_POST["soluong"];
    
    $them_query="INSERT INTO phong (MaPhong,SoNguoi, DienTichDai, DienTichRong, DonGia, CoGac, CoMayLanh, SoLuongPhong, MaNhaTro) VALUES (NULL, '$songuoi', '$dai', '$rong', '$gia', '$gac', '$maylanh', '$soluong', '$manhatro')";
    echo $them_query;
  if($run1=mysqli_query($dbcon,$them_query)){
          header('Location: ./chitietnhatro.php?idn='.$manhatro);
  }
  else{
    echo "Thêm không thành công";
  }
  
}
?>