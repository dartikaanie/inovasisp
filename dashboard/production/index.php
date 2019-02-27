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
                   <div class="x_title">
                       <h2>Status Inovasi</h2>
                       <div class="clearfix"></div>
                   </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <td>Tim</td>
                                    <td>: ini nama Tim</td>
                                </tr>

                                <tr>
                                    <td>Judul inovasi</td>
                                    <td>: ini judul Inovasi</td>
                                </tr>
                            </table>
                            </div>
                        </div>

                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Pesan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>20 Januari 2018</td>
                                <td><label class="label label-success">Terverifikasi</label></td>
                                <td>ini pesan</td>
                            </tr>
                            <tr>
                                <td>18 Januari 2018</td>
                                <td><label class="label label-warning">Verifikasi ditolak</label></td>
                                <td>ini pesan kenapa belum diverifikasi</td>
                            </tr>
                            <tr>
                                <td>12 Januari 2018</td>
                                <td><label class="label label-danger">Belum Terverifikasi</label></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


          <div class="row">
              <div class="x_panel">
                   <a class="btn btn-info pull-right" href="daftar_tim.php"> + Daftar Inovasi</a>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                        Daftar inovasi yang pernah diikuti
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Tim</th>
                            <th>Judul Inovasi</th>
                            <th>Status</th>
                            <th>Reward</th>
                            <th>Lihat</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>12 Januari 2019</td>
                            <td>Budi</td>
                            <td>Ini Judul Inovasi</td>
                            <td>Ketua</td>
                            <td><label class="label label-warning">-</label> </td>
                            <td><a class="btn btn-info btn-xs" href="daftar_inovasi_selesai.php">lihat</a> </td>
                        </tr>
                        <tr>
                            <td>10 Januari 2018</td>
                            <td>Budi</td>
                            <td>Ini Judul Inovasi</td>
                            <td>Ketua</td>
                            <td><label class="label label-info">SILVER</label> </td>
                            <td><a class="btn btn-info btn-xs">lihat</a> </td>
                        </tr>
                        <tr>
                            <td>12 Januari 2017</td>
                            <td>Budi</td>
                            <td>Ini Judul Inovasi</td>
                            <td>Ketua</td>
                            <td><label class="label label-info">SILVER</label> </td>
                            <td><a class="btn btn-info btn-xs">lihat</a> </td>
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
