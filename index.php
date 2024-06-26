<?php
        include'template/header.php';
        include'template/sidebar.php';
        ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <?php
                include'template/navbar.php';
                ?>
        <!-- End of Topbar -->
        <div class="container m-3">
            <a href="/tugas"><i class="fa fa-home"></i></a> <b class="text-primary">HOME</b>
            <center>
                <h3>DASHBOARD</h3>
            </center>

            <div class="d-flex justify-content-center p-3 gap">
                <a href="dosen" class="btn btn-primary mb-4 ">
                    <div class="image d-grid">
                        <img src="gambar/joget.gif" class="img" width="150" alt="gambar">
                        <br>
                        Data Dosen
                    </div>
                </a>
                <a href="mahasiswa" class="btn btn-primary mb-4 ">
                    <div class="image d-grid">
                        <img src="gambar/3e2cfee2eb4ed31f4325598ee53ece71.gif" class="img" width="170" alt="gambar">
                        <br>
                        Data Mshsiswa
                    </div>
                </a>
                <a href="matkul" class="btn btn-primary mb-4 ">
                    <div class="image d-grid">
                        <img src="gambar/3e2cfee2eb4ed31f4325598ee53ece71.gif" class="img" width="170" alt="gambar">
                        <br>
                        Data Matkul
                    </div>
                </a>
                <a href="krs" class="btn btn-primary mb-4 ">
                    <div class="image d-grid">
                        <img src="gambar/Gambar Gif - Download Animasi Bergerak Gratis - JAGAD ID.gif" class="img"
                            width="150" alt="gambar">
                        <br>
                        Data KRS
                    </div>
                </a>
            </div>

            <div class="d-flex justify-content-between">
        <img src="gambar/kipas.gif" class="img" width="150" alt="gambar">
        <img src="gambar/ngoding.gif" class="img" width="150" alt="gambar">
            </div>
        </div>
        <!-- End of Main Content -->

        <?php
         include 'template/footer.php'
         ?>

        <style>
        img {
            border-radius: 8px;
            margin-top: 8px;
            margin-bottom: 8px;
        }

        .gap {
            gap: 2em;
        }
        </style>