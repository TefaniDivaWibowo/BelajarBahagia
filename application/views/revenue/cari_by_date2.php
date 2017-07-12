<?php
$connection = $dbcon = pg_connect("host='localhost' user='postgres' password='inti' dbname='data_project'");
/*if (!$connection) {
print('Connection Failed');
exit;}
else { print('Connection Success');
}*/

/*$proses_edit=mysqli_query($konek,"update admin set nama_admin='$nama_admin', username='$username' $pass where id_admin='$id_admin'");
      if($proses_edit){
            exit ("<script>alert('Sukses Update'); location.href='?page=admin';</script>");
      } else {
            echo "Gagal edit";
      }*/
if(!empty($_POST['pilih'])){

$sql = "update data_psb set rekon='ok' where id_rev IN '";

            // Loop to store and display values of individual checked checkbox.

            $i = count($_POST['pilih']);
            $a = 1; foreach($_POST['pilih'] as $selected){
            if($i==$a){
            // echo "<script>alert('".$selected."')</script>";
            echo $selected;
            $b = $selected;
            } else{
            // echo "<script>alert('".$selected.",')</script>";
            echo $selected . ",";
            $c = $selected . ",";
            $data1 = array();
                array_push($data1, $c);
            } $a++;
            }
            // echo "<script>alert('".$data1 . $b.",')</script>";
"'";
            }
