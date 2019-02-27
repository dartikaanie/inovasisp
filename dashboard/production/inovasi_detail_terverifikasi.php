<!DOCTYPE html>
<html lang="en">
<?php include "head.php" ?>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <?php include "sidebar.php" ?>
            </div>
        </div>
        <?php include "top_navigation.php" ?>
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> <strong>Deskripsi Tim </strong></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-striped">
                                <tr>
                                    <td>Ketua tim</td>
                                    <td>: Ini nama ketua </td>
                                </tr>
                                <tr>
                                    <td>Fasilitator</td>
                                    <td>: Ini nama fasilitator </td>
                                </tr>
                                <tr>
                                    <td>Anggota</td>
                                    <td>: Ini nama Anggota <br>  Ini nama Anggota <br>  Ini nama Anggota </td>
                                </tr>
                                <tr>
                                    <td>Inisiator</td>
                                    <td>: Ini nama inisiator</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> <strong>Status Verifikasi Tim </strong></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <label class="label label-success" style="font-size: larger"><i class="glyphicon glyphicon-ok"></i>  Berkas Terverifikasi</label>
                            <br> <br>
                            Tim sudah bisa dilakukan penilaian
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> <strong>Deskripsi Inovasi </strong></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-striped">
                                <tr>
                                    <td>Judul</td>
                                    <td>: Ini Judul </td>
                                </tr>
                                <tr>
                                    <td>Area Implementasi</td>
                                    <td>: Ini Area implementasi </td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>: Ini Deskripsi </td>
                                </tr>
                                <tr>
                                    <td>Latar belakang</td>
                                    <td>: Ini Latar belakang </td>
                                </tr>
                                <tr>
                                    <td>Tujuan inovasi</td>
                                    <td>: Ini tujuan inovasi </td>
                                </tr>
                                <tr>
                                    <td>Saving</td>
                                    <td>: Rp 0000000 </td>
                                </tr>
                                <tr>
                                    <td>Opp. Cost</td>
                                    <td>: Rp 00000000 </td>
                                </tr>
                                <tr>
                                    <td>Revenue</td>
                                    <td>: Rp 000000000 </td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>: Rp 0000000 </td>
                                </tr>
                                <tr>
                                    <td>Status Implementasi</td>
                                    <td>: Ini Status Implementasi </td>
                                </tr>
                                <tr>
                                    <td>Tanggal pelaksanaan inovasi</td>
                                    <td>: 12-01-2018 </td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>: Ini keterangan </td>
                                </tr>
                                <tr>
                                    <td>Dokumen</td>
                                    <td>: Judl_inovasi.pdf </td>
                                </tr>
                                <tr>
                                    <td>Dokumen Pendukung</td>
                                    <td>: Judl_inovasi.zip </td>
                                </tr>
                            </table>

                            <a class="btn btn-warning" href="daftar_inovasi.php"><i class="glyphicon glyphicon-download-alt"></i>  Dokumen inovasi</a>
                            <a class="btn btn-primary" href="index.php"><i class="glyphicon glyphicon-download-alt"></i>  Dokumen Pendukung</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            Penilaian Tim
                        </div>
                        <div class="x_content">
                           <table class="table table-bordered">
                                <tr><td><strong>Plan</strong></td>
                                    <td><a href="penilaian_plan.php" class="btn btn-primary btn-xs">Nilai</a></td>
                                </tr>
                                <tr>
                                    <td>Komitmen</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>Sosialisasi</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>Program Kerja</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>Sub Total</td>
                                    <td><strong>: 00</strong></td>
                                </tr>
                                <tr><td><strong>Do</strong></td>
                                    <td>80 <a href="penilaian.php" class="btn btn-warning btn-xs pull-right ">Ubah</a></td>
                                </tr>
                                <tr>
                                    <td>Ringkas (R1)</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>Rapi (R2)</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>Resik (R3)</td>
                                    <td>: </td>
                                </tr>

                                <tr>
                                    <td>Sub Total</td>
                                    <td><strong>: 80</strong></td>
                                </tr>
                                <tr><td><strong>Check</strong></td>
                                    <td><a href="penilaian.php" class="btn btn-primary btn-xs">Nilai</a></td>
                                </tr>
                                <tr>
                                    <td>Rawat (R4)</td>
                                    <td>: </td>
                                </tr>
                                <tr>
                                    <td>Pencapaian Benefit Per Cycle</td>
                                    <td>: </td>
                                </tr><tr><td><strong>Action</strong></td>
                                   <td><a href="penilaian.php" class="btn btn-primary btn-xs">Nilai</a></td>
                               </tr>
                                <tr>
                                    <td>Rajin (R5)</td>
                                    <td>: </td>
                                </tr>

                                <tr>
                                    <td>Sub Total</td>
                                    <td><strong>: 00</strong></td>
                                </tr>
                               <tr>
                                   <td><strong>GRAND TOTAL</strong></td>
                                   <td><strong>: 80</strong></td>
                               </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
    <?php include "footer.php" ?>
</div>
</div>
<?php include "script.php";?>

</body>
</html>
