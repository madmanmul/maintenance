<nav class="navbar navbar-expand-md navbar-dark" style="background-color: teal;">
          <!-- Brand -->
          <a href="index.php" class="navbar-brand">LP3I</a>

          <!-- Toggler/collapsibe Button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php
          if ($_SESSION['hak'] == "admin") {
           ?>
           <ul class="navbar-nav">
                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                    <!-- Links -->
                    <li class="nav-item">
                      <a class="nav-link" href="?menu=dasbor">Dasbor</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"  hidden>
                    Pengguna
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="?menu=users">Semua Pengguna</a>
                      <a class="dropdown-item" href="?menu=tambah-user">Tambah Pengguna</a>
                    </div>
                    </li>

                   <li class="nav-item">
                          <a class="nav-link" href="?menu=kategori"  hidden>Kategori</a>
                    </li>

                    <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="barang.html" id="navbardrop" data-toggle="dropdown">
                            Laporan
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="?menu=laporan-servis-elevator">Laporan Servis Elevator</a>
                            <a class="dropdown-item" href="?menu=laporan-servis-elevator">Laporan Servis AC</a>
                          </div>
                    </li>

                    <li class="nav-item">
                          <a class="nav-link" href="?menu=notifikasi"  hidden>Notifikasi</a>
                    </li>

                    <li class="nav-item">
                          <a class="nav-link" href="?menu=log-user"  hidden>Catatan Log Pengguna</a>
                    </li>
                  </ul>
              </div>
          </ul>

        <?php
         if (!empty($_SESSION['hak'])) {
         ?>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
              <li class="nav-item">
                  <a class="nav-link text-twice" href="?menu=logout">KELUAR</a>
              </li>
        </ul>
        <?php
         } // tutup if hak = admin
         else { ?>
         <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
              <li class="nav-item">
                  <a class="nav-link text-twice" href="?menu=login">MASUK</a>
              </li>
        </ul>
      <?php } //else ?>

      <?php
       } // tutup if hak = admin
        else {
       ?>
             <ul class="navbar-nav">
                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                    <!-- Links -->
                    <li class="nav-item">
                      <a class="nav-link" href="?menu=dasbor">Dasbor</a>
                    </li>
              </ul>


        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
              <li class="nav-item">
                  <a class="nav-link text-twice" href="?menu=login">MASUK</a>
              </li>

        </ul>
        <?php
      } //tutup else ?>
    </nav>

    <br>
