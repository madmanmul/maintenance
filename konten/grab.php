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
                      WHERE a.tipe_uraian = '$tipe'");
          while ($l1 = mysql_fetch_array($grab1)) {
            print($l1['id_uraian']);
             print($l1['nama_uraian']);
             print($l1['periode']);
             print($l1['standar']);
             ?>
             <br>
<?php
}

}
?>
