<section>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col">
            <div class="card">
              <div class="card-header text-center"  style="background-color: teal;">
                <h1 class="h4 mb-3 font-weight-normal text-light">LAPORAN SERVIS ELEVATOR</h1>
                <a href="?menu=form-servis-elevator" class="btn btn-outline-twice">Tambah</a>
              </div>

              <div class="card-body">
                <div class="table-responsive table-bordered">
                  <form action="" method="post">
                    <div class="form-group">
                      <table class="table">
                          <tr>
                            <th>Nama Proyek</th>
                            <td><code class="text-center">LP3I</code></td>
                            <th>Tanggal Servis</th>
                            <td>19 Agustus 2018</td>
                            <th rowspan="2" class="text-center">
                                1 Bln
                                <select hidden>
                                  <option value="">2 Mg</option>
                                  <option value="">1 Bln</option>
                                  <option value="">3 Bln</option>
                                  <option value="">6 Bln</option>
                                  <option value="">9 Bln</option>
                                  <option value="">12 Bln</option>
                                </select>
                            </th>
                            <th colspan="2">Tipe Kontrak dan Periode</th>
                            <td colspan="3">AS</td>
                          </tr>

                          <tr>
                            <th>No Proyek</th>
                            <td>E1168I - LOL</td>
                            <th>Servis ke</th>
                            <td>I O</td>
                            <th colspan="2">Lokasi</th>
                            <td colspan="3">Tasikmalaya</td>
                          </tr>

                          <tr>
                            <th>Spesifikasi</th>
                            <td>E11 60 4/4</td>
                            <th>Jam Datang</th>
                            <td>16 : 00</td>
                            <th rowspan="2"></th>
                            <th colspan="2">Leader Tim Servis</th>
                            <td colspan="3">Michael Ujang</td>
                          </tr>
                          <tr>
                            <th>Tipe Kontrol Panel</th>
                            <td><code>SML 1 - 7</code></td>
                            <th>Jam Pulang</th>
                            <td>18 : 00</td>
                            <th colspan="2">No Telp. Leader Tim Service</th>
                            <td colspan="3">080069691000</td>
                          </tr>
                    </table>

                    <table class="table-responsive table-sm">
                            <tr>
                              <th>No.</th>
                              <th colspan="2">Uraian</th>
                              <th>Periode</th>
                              <th>Standar</th>
                              <th colspan="2">Unit No.</th>
                              <th><pre><h6 style="font-weight: bolder; margin-top: 1.5rem;">Keterangan                                                    </h6></pre></th>
                            </tr>

                            <?php
                            $grab = mysql_query("SELECT * FROM tbl_tipe_uraian_lift ");
                                            while ($l = mysql_fetch_array($grab)) {  ?>
                                            <tr>
                                              <th><?php print($l['tipe_uraian']); ?></th> <!-- tipe uraian -->
                                              <th class="text-left" colspan="9"><?php print($l['kategori_uraian']); ?></th>
                                            </tr>
                            <?php
                             $tipe =  $l['tipe_uraian'];
                             $grab1 = mysql_query("SELECT * FROM tbl_tipe_uraian_lift a INNER JOIN tbl_uraian_lift b
                                                   ON a.tipe_uraian = b.tipe_uraian
                                                   WHERE a.tipe_uraian = '$tipe'");
                             while ($l1 = mysql_fetch_array($grab1)) { ?>

                                 <tr>
                                   <td><?php print($l1['id_uraian']); ?></td>
                                   <td class="text-left" colspan="2"><?php print($l1['nama_uraian']); ?></td>
                                   <th><?php print($l1['periode']); ?></th>
                                   <td><?php print($l1['standar']); ?></td>
                                   <td colspan="2">Unit No.</td>
                                   <td colspan="3">Keterangan</td>
                                 </tr>
                						<?php
                  								}
                  							}
                					  ?>
                    </table>

                    <table class="table">
                            <tr>
                              <th rowspan="8" colspan="3"><pre><h6 style="font-weight: bolder;">Catatan PT Helin :







                              </h6></pre></th>
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
                                 <th rowspan="5" colspan="3">Catatan Customer :</th>
                                 <td class="text-left" colspan="8">Tanggal:</td>
                              </tr>

                               <tr>
                                 <th colspan="8" class="text-left" style="font-weight: bolder;">Catatan :</th>
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
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <pre>
<b>Catatan:</b>
*1 : Setelah ganti Wire Rope baru, Check Jarak Run by (CWT, Compens Sheave, Chain)
*2 : Standarnya menggunakan 2 Hammer
*3 : Lingkari yang bermasalah atau coret yang tidak perlu.
            </pre>
          </div>
        </div>
      </div>
    </section>
