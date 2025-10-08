<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Siswa</title>
    <!-- Bootstrap DatePicker Css -->
    <link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" />
    <style>
        @media screen and (max-width: 576px) {
            .hp {
                display: none;
            }
        }
    </style>
</head>

<body>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url(); ?>assets/User/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Profil Siswa</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pendaftaran <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">

                <div class="col-md-12 d-flex">

                    <div class="bg-light align-self-stretch box p-4 " style="border-radius: 1%;">
                        <div class="col-md-12 text-center heading-section ftco-animate">
                            <h2 class="mb-4 hp"><span>FORM </span>PROFIL <span>SISWA</span></h2><br>
                        </div>
                        <?php $attributes = array('method' => 'post'); ?>
                        <?php echo form_open_multipart('siswa/profile', $attributes); ?>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group" style="margin-bottom: 1.8rem;">
                                    <div class="form-line">
                                        <center>
                                            <?php if(isset($profile['foto']) && !empty($profile['foto'])): ?>
                                            <img id="previewFoto" src="<?= base_url(); ?>assets/upload/foto/<?= $profile['foto'] ?>" alt="" style="min-height:220px;max-height:220px;min-width:340px;max-width:340px;">
                                            <?php else: ?>
                                            <img id="previewFoto" src="<?= base_url(); ?>assets/upload/foto/default.jpg" alt="" style="min-height:220px;max-height:220px;min-width:340px;max-width:340px;">
                                            <?php endif; ?>
                                        </center>
                                        <center><input type="file" id="inputFoto" name="foto" onchange="previewImage(this)" accept="image/jpeg,image/png,image/jpg"></center>
                                        <center><p style="font-weight: bold; text-align: center; margin-top: 10px;">Ukuran size foto maksimal 4 MB</p></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 style="color:#5f666c;font-size:18px;">Nama Lengkap :</h5>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group" style="margin-bottom: 1.8rem;">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?= (isset($profile['nama']))  ? $profile['nama'] : ""; ?>" name="nama">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 style="color:#5f666c;font-size:18px;">Nomor Hp :</h5>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group" style="margin-bottom: 1.8rem;">
                                    <div class="form-line">
                                        <input type="number" class="form-control" placeholder="No HP" name="no_hp" value="<?= (isset($profile['no_hp']))  ? $profile['no_hp'] : ""; ?>" required autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 style="color:#5f666c;font-size:18px;">Tempat Lahir :</h5>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group" style="margin-bottom: 1.8rem;">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Tempat Lahir" value="<?= (isset($profile['tempat_lahir']))  ? $profile['tempat_lahir'] : ""; ?>" name="tempat_lahir" required autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 style="color:#5f666c;font-size:18px;">Tanggal Lahir :</h5>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group" style="margin-bottom: 1.8rem;">
                                    <div class="form-line">
                                        <input type="text" class="form-control datepicker" placeholder="Tanggal Lahir" value="<?= (isset($profile['tanggal_lahir']))  ? $profile['tanggal_lahir'] : ""; ?>" name="tanggal_lahir" required autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 style="color:#5f666c;font-size:18px;">Umur :</h5>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group" style="margin-bottom: 1.8rem;">
                                    <div class="form-line">
                                        <input type="number" readonly id="umur" class="form-control" placeholder="Umur" value="<?= (isset($profile['umur']))  ? $profile['umur'] : ""; ?>" name="umur" required autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 style="color:#5f666c;font-size:18px;">Asal Sekolah Menengah Pertama :</h5>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group" style="margin-bottom: 1.8rem;">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Asal Sekolah Menengah Pertama" value="<?= (isset($profile['asal_sekolah']))  ? $profile['asal_sekolah'] : ""; ?>" name="asal_sekolah" required autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 style="color:#5f666c;font-size:18px;">Jenis Kelamin :</h5>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group" style="margin-bottom: 1.8rem;">
                                    <div class="form-line">
                                        <select name="jenis_kelamin" id="asd" class="form-control">
                                            <option value="" selected="" disabled="">-- Pilih Jenis Kelamin --</option>
                                            <?php foreach ($jenis_kelamin as $jenis) : ?>
                                                <?php if ($profile['jenis_kelamin'] == $jenis['value']) : ?>
                                                    <option value="<?= $jenis['value']; ?>" selected> <?= $jenis['nama']; ?> </option>
                                                <?php else : ?>
                                                    <option value="<?= $jenis['value']; ?>"> <?= $jenis['nama']; ?> </option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 style="color:#5f666c;font-size:18px;">Alamat :</h5>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group" style="margin-bottom: 1.8rem;">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="<?= (isset($profile['alamat']))  ? $profile['alamat'] : ""; ?>" placeholder="Alamat" name="alamat" required autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <center><input type="submit" name="submit" value="EDIT PROFILE" class="btn btn-primary" style="font-weight: light; width: 250px; height: 55px; font-size: 20px;"></center>
                            </div>
                        </div>

                        </form>
                        <br>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Bootstrap DatePicker Js -->
    <script src="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url(); ?>assets/AdminBsb/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Your additional JavaScript or scripts here -->
    <script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#previewFoto').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>

</html>