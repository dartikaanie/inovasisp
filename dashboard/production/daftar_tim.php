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
                    <h2>Daftar Tim <small></small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form action="daftar_inovasi.php" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-tim">Nama Tim<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="nama-tim" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="departemen">Departemen<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="last-name" name="departemen" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="departemen">Kategori<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                               <select class="form-control">
                                   <option>TPP TBG-Raw mill </option>
                                   <option>TPP Kiln-packer </option>
                                   <option>Management</option>
                                   <option>PBB </option>
                                   <option>APA</option>
                                   <option>SS </option>
                                   <option>5R / 5P</option>
                                   <option>PKM</option>
                                   <option>GKM </option>
                               </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="anggota">Anggota<span class="required">*</span>
                            </label>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10"/>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-1">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status<span class="required">*</span>
                                </label>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-3">
                                <select class="form-control col-md-4 col-xs-6">
                                    <option>Fasilitator</option>
                                    <option>Ketua</option>
                                    <option>Anggota</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <button class="btn btn-primary col-md-3 col-xs-6"> + </button>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="inisiasi">Inisiasi<span class="required">*</span>
                            </label>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <select class="form-control col-md-4 col-xs-6">
                                    <option>Budi</option>
                                    <option>Andi</option>
                                </select>
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button type="submit" class="btn btn-success" href="daftar_inovasi.php">Daftar</button>
                            </div>
                        </div>
                    </form>
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
