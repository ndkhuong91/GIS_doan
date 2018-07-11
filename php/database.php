<?php      
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "htttdl";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) ;

  if($connection === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }else{
      //echo "Success!";
  }
     

  /*$sql = "CREATE TABLE mytable (username VARCHAR(30) NOT NULL, password VARCHAR(30) NOT NULL)";
  $sql1 = "Insert into mytable(username, password) values ('ttngoan','ngoanpass')";
  $sql2 = "Select * from mytable";
  $sql3 = "Drop table mytable";*/

  $sql3 = "Select * from truong";
  $sql9 = "Select * from nhatro";

  /*$ret = $connection->query($sql6);
  $i=0;
  if ( $ret == TRUE) {
         echo "Sql  ".$sql6." successfully";
  } else {
      echo "Error sql: " . $connection->error;
  } */ 

  $ret_1 = $connection->query($sql9);
  $php_array_nhatro = array();
  $j=0;
  if ( $ret_1 == TRUE) {
        //echo "Sql  ".$sql3." successfully";
        //echo '<table border="1" cellspacing="2" cellpadding="2">';
        //echo '<tr> <td> Mã Trường </td> <td> Tên Trường </td> <td> Hình ảnh </td> <td> Latitude </td><td> Longitude </td><td> Icon</td></tr>';
        while($myrow_1 = mysqli_fetch_row($ret_1)){
            $php_array_nhatro[$j][0] = $myrow_1[0];
            $php_array_nhatro[$j][1] = $myrow_1[1];
            $php_array_nhatro[$j][2] = $myrow_1[2];
            $php_array_nhatro[$j][4] = $myrow_1[4];
            $php_array_nhatro[$j][5] = $myrow_1[5];
            $j = $j+1;
           // printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$myrow_1[0],$myrow_1[1], $myrow_1[2], $myrow_1[3], $myrow_1[4], $myrow_1[5]);
        }  
    } else {
        echo "Error sql: " . $connection->error;
    }
  $ret = $connection->query($sql3);
  $php_array_truong = array();
  $i=0;
    if ( $ret == TRUE) {
        //echo "Sql  ".$sql3." successfully";
        //echo '<table border="1" cellspacing="2" cellpadding="2">';
        //echo '<tr> <td> Mã Trường </td> <td> Tên Trường </td> <td> Hình ảnh </td> <td> Latitude </td><td> Longitude </td><td> Icon</td></tr>';
        while($myrow = mysqli_fetch_row($ret)){
            $php_array_truong[$i][0] = $myrow[0];
            $php_array_truong[$i][1] = $myrow[1];
            $php_array_truong[$i][2] = $myrow[2];
            $php_array_truong[$i][3] = $myrow[3];
            $php_array_truong[$i][4] = $myrow[4];
            $php_array_truong[$i][5] = $myrow[5];
            $i = $i+1;
            //printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$myrow[0],$myrow[1], $myrow[2], $myrow[3], $myrow[4], $myrow[5]);
        }  
    } else {
        echo "Error sql: " . $connection->error;
    }

    $connection->close();
    
?>
<script type="text/javascript"><?php
    $truong = json_encode($php_array_truong);
    $nhatro = json_encode($php_array_nhatro);

    echo "var truong = ". $truong . ";\n";
    echo "var nhatro = ". $nhatro . ";\n";
  ?>
</script>



