<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "servis";

$konek =mysql_connect($host, $username, $password);
mysql_select_db($db);

$grab = mysql_query("SELECT * FROM tbl_tipe_uraian_lift ");
                while ($l = mysql_fetch_array($grab)) {
                    print($l['tipe_uraian']);
                    print($l['kategori_uraian']);
?>
                    <br>
<?php
$tipe =  $l['tipe_uraian'];

$grab1 = mysql_query("SELECT * FROM tbl_tipe_uraian_lift a INNER JOIN tbl_uraian_lift b
                      ON a.tipe_uraian = b.tipe_uraian
                      WHERE a.tipe_uraian = '$tipe' && b.id_uraian < 3");
          $l1 = mysql_fetch_array($grab1);
          $l10 = mysql_fetch_array($grab1);
            print($l1['id_uraian']);
             print($l1['nama_uraian']);
             print($l1['periode']);
             print($l1['standar']);
?>

             <br>

<?php
          print($l10['id_uraian']);
          print($l10['nama_uraian']);
          print($l10['periode']);
          print($l10['standar']);
 ?>
 <br>
<?php

$grab2 = mysql_query("SELECT * FROM tbl_tipe_uraian_lift a INNER JOIN tbl_uraian_lift b
                      ON a.tipe_uraian = b.tipe_uraian
                      WHERE a.tipe_uraian = '$tipe' && b.id_uraian = 3");
         $l2 = mysql_fetch_array($grab2);
                 print($l2['id_uraian']);
                 print($l2['nama_uraian']);
                 print($l2['periode']);
                 print($l2['standar']);
?>
                          <br>
<?php
$grab3 = mysql_query("SELECT * FROM tbl_tipe_uraian_lift a INNER JOIN tbl_uraian_lift b
                      ON a.tipe_uraian = b.tipe_uraian
                      WHERE a.tipe_uraian = '$tipe' && b.id_uraian BETWEEN 4 AND 10");
         for ($i=0; $i <8 ; $i++) {
           $l3 = mysql_fetch_array($grab3);
                   print($l3['id_uraian']);
                   print($l3['nama_uraian']);
                   print($l3['periode']);
                   print($l3['standar']);
?>
                          <br>
<?php
}


}
?>
