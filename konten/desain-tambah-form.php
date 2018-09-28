<?php
if (isset($_POST['simpan'])) {

  //start : for tbl_servis
  $nama_proyek = $_POST['nama_proyek'];
  $no_proyek = $_POST['no_proyek'];
  $spesifikasi = $_POST['spesifikasi'];
  $tipe_ctrl_panel = $_POST['tipe_ctrl_panel'];
  $tgl_servis = $_POST['tgl_servis'];
  $servis_ke= $_POST['servis_ke'];
  $jam_dtg = $_POST['jam_dtg'];
  $jam_plg = $_POST['jam_plg'];
  $tipe_kontrak = $_POST['tipe_kontrak'];
  $lokasi = $_POST['lokasi'];
  $leader = $_POST['leader'];
  $no_telp_leader = $_POST['no_telp_leader'];
  $note_pt_helin = $_POST['note_pt_helin'];
  $note_customer = $_POST['note_customer'];
  // finish : for tbl_servis

  // tbl_detail_servis
  $nilai = $_POST['nilai_servis'];
  $keterangan =$_POST['keterangan'];

  mysql_query("INSERT INTO tbl_servis_lift VALUES (
    NULL, '$nama_proyek', $no_proyek, '$spesifikasi',
    '$tipe_ctrl_panel', '$tgl_servis', '$servis_ke',
    '$jam_dtg', '$jam_plg', '$tipe_kontrak', '$lokasi',
    '$leader', '$no_telp_leader', '$note_pt_helin', '$note_customer'
  )");

  mysql_query("INSERT INTO tbl_detail_servis_lift VALUES (
    NULL, NULL, '$nilai', '$keterangan'
  )");
  $mesej = "<div class='alert alert-success'>Sukses! ☺</div>";
}
 ?>

<section>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col">
            <div class="card">
              <div class="card-header text-center" style="background-color: teal;">
                <h1 class="h4 mb-3 font-weight-normal text-light">LAPORAN SERVIS ELEVATOR</h1>
              </div>

              <div class="card-body">
                <?php print $mesej; ?>
                <div class="table-responsive table-bordered">
                  <form action="" method="post" id="form-lift">
                    <div class="form-group">
                      <table class="table">
                          <tr>
                            <th>Nama Proyek</th>
                            <th><input type="text" name="nama_proyek" class="form-control" placeholder="" ><br></th>
                            <th>Tanggal Servis</th>
                            <th><input type="date" name="tgl_servis" class="form-control" placeholder="" ></th>
                            <th rowspan="2"  class="text-center">
                                <select class="form-control" name="" form="form-lift">
                                  <option>2 Mg</option>
                                  <option>1 Bln</option>
                                  <option>3 Bln</option>
                                  <option>6 Bln</option>
                                  <option>9 Bln</option>
                                  <option>12 Bln</option>
                                </select>
                            </th>
                            <th>Tipe Kontrak dan Periode</th>
                            <th><input type="text" name="tipe_kontrak" class="form-control" placeholder="" ></th>
                          </tr>

                          <tr>
                            <th>No Proyek</th>
                            <th><input type="text" name="no_proyek" class="form-control" placeholder="" ></th>
                            <th>Servis ke</th>
                            <th><input type="text" name="servis_ke" class="form-control" placeholder="" ></th>
                            <th>Lokasi</th>
                            <th><input type="text" name="lokasi" class="form-control" placeholder="" ></th>
                          </tr>

                          <tr>
                            <th>Spesifikasi</th>
                            <th><input type="text" name="spesifikasi" class="form-control" placeholder="" ></th>
                            <th>Jam Datang</th>
                            <th><input type="time" name="jam_dtg" class="form-control" placeholder="" ></th>
                            <th rowspan="2"></th>
                            <th>Leader Tim Servis</th>
                            <th><input type="text" name="leader" class="form-control" placeholder="" ></th>
                          </tr>
                          <tr>
                            <th>Tipe Kontrol Panel</th>
                            <th><input type="text" name="tipe_ctrl_panel" class="form-control" placeholder="" ></th>
                            <th>Jam Pulang</th>
                            <th><input type="time" name="jam_plg" class="form-control" placeholder="" ></th>
                            <th>No Telp. Leader Tim Service</th>
                            <th><input type="text" name="no_telp_leader" class="form-control" placeholder="" ></th>
                          </tr>
                      </table>

                      <table class="table-sm">
                            <tr>
                              <th>No.</th>
                              <th colspan="2">Uraian</th>
                              <th>Periode</th>
                              <th>Standar</th>
                              <th>Unit No.</th>
                              <th><pre><h6 style="font-weight: bolder; margin-top: 1.5rem;">Keterangan                                                    </h6></pre></th>
                            </tr>

                            <?php
                            $grab = mysql_query("SELECT * FROM tbl_tipe_uraian_lift ");
                                            while ($l = mysql_fetch_array($grab)) {  ?>
                            <tr>
                              <th><?php print($l['tipe_uraian']); ?></th> <!-- tipe uraian -->
                              <th class="text-left" colspan="6"><?php print($l['kategori_uraian']); ?></th>
                            </tr>

                            <?php
                            $tipe =  $l['tipe_uraian'];
                            $grab1 = mysql_query("SELECT * FROM tbl_tipe_uraian_lift a INNER JOIN tbl_uraian_lift b
                                                  ON a.tipe_uraian = b.tipe_uraian
                                                  WHERE a.tipe_uraian = '$tipe'");
                                      while ($l1 = mysql_fetch_array($grab1)) { ?>
                            <tr>
                              <td class="text-center "><?php print($l1['id_uraian']); ?></td>
                              <td colspan="2" class="text-left"><?php print($l1['nama_uraian']); ?></td>
                              <th><?php print($l1['periode']) ?></th>
                              <td><?php print($l1['standar']) ?></td>
                              <th class="text-center">
                                <select class="form-control" form="form-lift">
                                  <option>A</option>
                                  <option>B</option>
                                  <option>C</option>
                                  <option>D</option>
                                </select>
                              </th>
                              <td colspan="3" ><input name="keterangan" class="form-control" type="text"></td>
                            </tr>
                            <?php

                            /* the problem is abi hoyong nampilkeun ieu
                                (no. 3 teh tipe inputna alim siga nu sanes (ku option)
                                hoyong ku text)
                                tanpa menampilkan no.3 yang keluar saat looping while */
                                
                            if ($l1['id_uraian'] == 3) { // start : if nilai volt?>
                              <tr>
                                <td class="text-center "><?php print($l1['id_uraian']); ?></td>
                                <td colspan="2" class="text-left"><?php print($l1['nama_uraian']); ?></td>
                                <th><?php print($l1['periode']) ?></th>
                                <td><?php print($l1['standar']) ?></td>
                                <th><input name="nilai" class="form-control" type="text" value="V"></th>
                                <td colspan="3" ><input name="keterangan" class="form-control" type="text"></td>
                              </tr>
                            <?php
                          } // end : nilai volt
                             ?>



                        <?php
                         }
                      }
                        ?>
                   </table>

                   <table>
                     <table class="table">
                             <tr>
                               <th rowspan="8" colspan="3"><pre><h6 style="font-weight: bolder;">Catatan PT Helin :
                                  <input class="form-control" name="note_pt_helin" style="height: 15rem;"></h6></pre></th>
                               <th colspan="8" class="text-center">Menyetujui</th>
                             </tr>

                             <tr class="text-center">
                               <th rowspan="7" colspan="2">Leader</th>
                               <th rowspan="7" colspan="2">Depot</th>
                               <th rowspan="7" colspan="2">Zone Manager</th>
                               <th rowspan="7" colspan="2">Customer</th>
                             </tr>


                               <tr>                          </tr>
                               <tr>                          </tr>
                               <tr>                          </tr>
                               <tr>                          </tr>
                               <tr>                          </tr>
                               <tr>                          </tr>
                               <tr>                          </tr>
                               <tr>                          </tr>
                               <tr>
                                  <th rowspan="5" colspan="3">Catatan Customer :
                                    <input class="form-control" name="note_pt_helin" style="height: 15rem;">
                                  </th>
                                  <td class="text-left" colspan="8">Tanggal :</td>
                               </tr>

                                <tr>
                                  <th colspan="8" class="text-left">Catatan :</th>
                                </tr>

                                <tr class="text-sm-left">
                                  <th colspan="8"><h6><pre style="font-weight: bolder;">White: PT. HELIN Finance Sheet             Yellow: PT. HELIN Main Sheet


Blue: PT. HELIN Finance Sheet              Red: PT. HELIN Finance Sheet
                                  </pre></h6></th>
                                </tr>

                                <tr>
                                  <td colspan="8"><pre style="font-weight: bolder;">(*) A = Baik     B = Perlu Perhatian     C = Rusak ; Repair     D = Ganti Segera (Urgent)</pre></td>
                                </tr>
                   </table>

                    </div>

                    <div class="form-group">
                      <button name="simpan" type="submit" class="btn btn-xs btn-twice text-center">TAMBAH</button>
                      <a href="?menu=laporan-servis-elevator" class="btn btn-outline-twice justify-content-end">Kembali</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
