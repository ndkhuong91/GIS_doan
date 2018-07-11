<?php
	$string = file_get_contents("json/binhthuy.json");
	$json_binhthuy = json_decode($string, true);
	/*foreach(  $json_binhthuy['geometries'][0]['coordinates'][0][0] as $cood ){
			echo "</br>";
			echo $cood[0]."   ";
			echo $cood[1];
	}*/
	$string = file_get_contents("json/cairang.json");
	$json_cairang = json_decode($string, true);
	$string = file_get_contents("json/codo.json");
	$json_codo = json_decode($string, true);
	$string = file_get_contents("json/omon.json");
	$json_omon = json_decode($string, true);
	$string = file_get_contents("json/ninhkieu.json");
	$json_ninhkieu = json_decode($string, true);
	$string = file_get_contents("json/phongdien.json");
	$json_phongdien = json_decode($string, true);
	$string = file_get_contents("json/thoilai.json");
	$json_thoilai = json_decode($string, true);
	$string = file_get_contents("json/thotnot.json");
	$json_thotnot = json_decode($string, true);
	$string = file_get_contents("json/vinhthanh.json");
	$json_vinhthanh = json_decode($string, true);
	

?>

<?php 
    $my_file = 'file.txt';
    $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
    $data = 'New data line 1';
    fwrite($handle, $data);
    $new_data = "\n".'New data line 2';
    fwrite($handle, $new_data);
?>

<script type="text/javascript"><?php
    $binhthuy_coor = json_encode($json_binhthuy['geometries'][0]['coordinates'][0][0]);
    echo "var binhthuy = ". $binhthuy_coor . ";\n";
    $cairang_coor = json_encode($json_cairang['geometries'][0]['coordinates'][0][0]);
    echo "var cairang = ". $cairang_coor . ";\n";
    $codo_coor = json_encode($json_codo['geometries'][0]['coordinates'][0][0]);
    echo "var codo = ". $codo_coor . ";\n";
    $omon_coor = json_encode($json_omon['geometries'][0]['coordinates'][0][0]);
    echo "var omon = ". $omon_coor . ";\n";
    $ninhkieu_coor = json_encode($json_ninhkieu['geometries'][0]['coordinates'][0][0]);
    echo "var ninhkieu = ". $ninhkieu_coor . ";\n";
    $phongdien_coor = json_encode($json_phongdien['geometries'][0]['coordinates'][0][0]);
    echo "var phongdien = ". $phongdien_coor . ";\n";
    $thoilai_coor = json_encode($json_thoilai['geometries'][0]['coordinates'][0][0]);
    echo "var thoilai = ". $thoilai_coor . ";\n";
    $thotnot_coor = json_encode($json_thotnot['geometries'][0]['coordinates'][0][0]);
    echo "var thotnot = ". $thotnot_coor . ";\n";
    $vinhthanh_coor = json_encode($json_vinhthanh['geometries'][0]['coordinates'][0][0]);
    echo "var vinhthanh = ". $vinhthanh_coor . ";\n";
  ?>
</script>
