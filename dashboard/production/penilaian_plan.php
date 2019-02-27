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
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> <strong>Penilaian Tim - PLAN</strong></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-md-9">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td colspan="2"><strong>Komitmen</strong></td>
                                        </tr>
                                        <tr>
                                            <td>0 - 25</td>
                                            <td>Belum ada komitmen di unit kerja</td>
                                        </tr><tr>
                                            <td>26 - 50</td>
                                            <td>Sudah ada komitmen di unit kerja melalui pembentukan struktur organisasi </td>
                                        </tr><tr>
                                            <td>51 - 75</td>
                                            <td>Sudah  ada komitmen di unit kerja melalui pembentukan struktur organisasi dan membuat program kerja</td>
                                        </tr><tr>
                                            <td>76 - 100</td>
                                            <td>Sudah  ada komitmen di unit kerja melalui pembentukan struktur organisasi, membuat program kerja dan rancangan anggaran</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-3">
                                    <form>
                                        <label> Nilai Komitmen :</label>
                                        <input type="number" class="form-control">
                                        <label> Keterangan :</label>
                                        <textarea class="form-control" rows="4"></textarea><br>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td colspan="2"><strong>SOSIALISASI</strong></td>
                                        </tr>
                                        <tr>
                                            <td>0 - 15</td>
                                            <td>Tidak ada kegiatan sosialisasi 5R </td>
                                        </tr><tr>
                                            <td>16 - 30</td>
                                            <td>Kegiatan sosialisasi telah dilaksanakan tetapi tidak secara periodik </td>
                                        </tr><tr>
                                            <td>31 - 45</td>
                                            <td>Kegiatan sosialisasi telah dilaksanakan  secara periodik sesuai program kerja dan melibatkan seluruh personil kelompok kerja</td>
                                        </tr><tr>
                                            <td>46 - 60</td>
                                            <td>Kegiatan sosialisasi telah dilaksanakan  secara periodik sesuai program kerja dengan melibatkan seluruh personil kelompok kerja dan tercermin dalam sikap kerja</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-3">
                                    <form>
                                        <label> Nilai Sosialisasi :</label>
                                        <input type="number" class="form-control">
                                        <label> Keterangan :</label>
                                        <textarea class="form-control" rows="5"></textarea><br>
                                    </form>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td colspan="2"><strong>Program Kerja</strong></td>
                                        </tr>
                                        <tr>
                                            <td>0 - 22</td>
                                            <td>Program kerja tidak disusun dalam sebuah jadwal </td>
                                        </tr><tr>
                                            <td>23 - 45</td>
                                            <td>Program kerja telah disusun dalam sebuah jadwal dan melibatkan seluruh personil kelompok kerja</td>
                                        </tr><tr>
                                            <td>46 - 68</td>
                                            <td>Program kerja telah disusun dalam sebuah jadwal dengan melibatkan seluruh personil kelompok kerja dan dilaksanakan secara efektif dan efisien</td>
                                        </tr><tr>
                                            <td>69 - 90</td>
                                            <td>Program kerja telah disusun dalam sebuah jadwal dengan melibatkan seluruh personil kelompok kerja dan dilaksanakan secara efektif dan efisien serta dilakukan evaluasi </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-3">
                                    <form>
                                        <label> Nilai Program Kerja :</label>
                                        <input type="number" class="form-control">
                                        <label> Keterangan :</label>
                                        <textarea class="form-control" rows="5"></textarea><br>
                                    </form>
                                </div>
                            </div>
                            <a class="btn btn-default" href="inovasi_detail_terverifikasi.php">Kembali</a>
                            <a class="btn btn-primary" href="inovasi_detail_terverifikasi.php">Selesai</a>
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
