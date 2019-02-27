<!DOCTYPE html>
<html lang="en">
 <?php include "head.php"?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
              <?php include  "sidebar.php"?>
          </div>
        </div>
        <?php include "top_navigation.php"?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
              <div class="x_panel">
                <div class="x_content">
                    <table id="datatable" class="table table-hover">
                        <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Tim</th>
                            <th>Judul Inovasi</th>
                            <th>Status Verifikasi</th>
                            <th>Nilai </th>
                            <th>Nilai Juri II</th>
                            <th>Nilai Juri III</th>
                            <th>Nilai Juri IV</th>
                            <th>Dokumen</th>
                            <th>Detail</th>
                            <th>Penilai Juri Lain</th>

                        </tr>
                        <tbody>
                        <tr>
                            <td>12 Januari 2018</td>
                            <td>Budi</td>
                            <td>Ini Judul Inovasi</td>
                            <td><label class="label label-danger" href="daftar_inovasi_selesai.php"><i class="glyphicon glyphicon-exclamation-sign"></i> Belum terverifikasi</label> </td>
                            <td><label class="label label-danger"> - </label></td>
                            <td><label> - </label></td>
                            <td><label> - </label></td>
                            <td><label> - </label></td>
                            <td><a href="" class="btn btn-primary"><i class="glyphicon glyphicon-download-alt"></i> Unduh</a> </td>
                            <td><a href="inovasi_detail.php" class="btn btn-primary"> Lihat</a> </td>
                            <td><a href="penilaian_juri.php" class="btn btn-primary"> Lihat</a> </td>
                        </tr>
                        <tr>
                            <td>12 Januari 2018</td>
                            <td>Budi</td>
                            <td>Ini Judul Inovasi</td>
                            <td><label class="label label-success" href="daftar_inovasi_selesai.php"><i class="glyphicon glyphicon-check"></i> Terverifikasi</label> </td>
                            <td><a class="label label-info" href="penilaian_juri.php">70</a></td>
                            <td><label>80</label></td>
                            <td><label> 77 </label></td>
                            <td><label>80</label></td>
                            <td><a href="" class="btn btn-primary"><i class="glyphicon glyphicon-download-alt"></i> Unduh</a> </td>
                            <td><a href="inovasi_detail_terverifikasi.php" class="btn btn-primary">Lihat</a> </td>
                            <td><a href="penilaian_juri.php" class="btn btn-primary"> Lihat</a> </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
          <?php include  "footer.php"?>
      </div>
    </div>
  <?php include "script.php";?>
	
  </body>
</html>
