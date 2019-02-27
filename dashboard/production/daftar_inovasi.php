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
                        <h2>Daftar Inovasi - Tim XYZ<small></small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="judul">Judul<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="judul" name="judul" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="area-implementasi">Area Implementasi<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="area-implementasi" name="area-implementasi" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status-implementasi">Status Implementasi <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="select2_single form-control" tabindex="-1">
                                        <option></option>
                                        <option value="0">Belum Terimplementasi</option>
                                        <option value="1">Sudah Terimplemetasi</option>
                                        <option value="2">Akan Terimplemtasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal-implementasi">Tanggal pelaksanaan inovasi<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <div class='input-group date' id='myDatepicker2'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Ide<small>Deskripsi</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form class="form-horizontal form-label-left input_mask">
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="deskripsi">Deskripsi<span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                    <textarea  id="deskripsi" name="deskripsi" required="required" class="form-control col-md-7 col-xs-12" rows="7">
                                    </textarea> </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="latar-belakang">Latar Belakang<span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <textarea type="text" id="latar-belakang" name="latar-belakang" required="required" class="form-control col-md-7 col-xs-12" rows="8"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="tujuan-inovasi">Tujuan Inovasi<span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                    <textarea type="text" id="tujuan-inovasi" name="tujuan-inovasi" required="required" class="form-control col-md-7 col-xs-12" rows="7">
                                    </textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

<!--                saving cost-->
                <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Nilai<small>(Rp)</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form class="form-horizontal form-label-left input_mask">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="saving">Saving (Rp)<span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                       <input type="number" id="saving" name="saving" required="required" class="form-control col-md-7 col-xs-12" placeholder="Rp . . . ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="opp_cost">Opp Cost (Rp)<span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <input type="number" id="opp_cost" name="opp_cost" required="required" class="form-control col-md-7 col-xs-12" placeholder="Rp . . . ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="revenue ">Revenue  (Rp)<span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <input type="number" id="revenue" name="revenue" required="required" class="form-control col-md-7 col-xs-12" placeholder="Rp . . . ">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<!--                saving cost-->
                <div class="col-md-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Dokumen<small></small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left input_mask">
                                <div class="form-group">
                                    <label class="col-md-12 col-sm-12 col-xs-12 pull-left" for="keterangan">Keterangan<span class="required">*</span>
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea type="text" id="keterangan" name="keterangan" required="required" class="form-control col-md-7 col-xs-12" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 col-sm-12 col-xs-12 pull-left" for="dokumen">Unggah Dokumen (.pdf)<span class="required">*</span>
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="file" id="dokumen" name="dokumen" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 col-sm-12 col-xs-12 pull-left" for="dokumen_pendukung">Unggah Dokumen Pendukung (.zip/.rar)<span class="required">*</span>
                                    </label>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="file" id="dokumen_pendukung" name="dokumen_pendukung" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <a href="" class="btn btn-warning">Download Template</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pull-right">
                <button class="btn btn-default">Batal</button>
                <a class="btn btn-primary" href="daftar_inovasi_selesai.php">Submit Ide</a>
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
