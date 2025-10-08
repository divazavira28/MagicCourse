<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(<?= base_url(); ?>assets/User/images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h1 class="mb-4">MAGIC COURSE</h1>
                    <?php if ($this->session->userdata('is_user_login') == true) : ?>
                        <p><a href="<?= base_url(); ?>home/form" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
                    <?php elseif ($this->session->userdata('is_admin_login') == true) : ?>
                        <p><a href="<?= base_url(); ?>admin/dashboard" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
                    <?php else : ?>
                        <p><a href="<?= base_url(); ?>auth/login" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url(<?= base_url(); ?>assets/User/images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h1 class="mb-4">Persiapkan Ujian Nasional <span> Untuk Anak Anda</span></h1>
                    <?php if ($this->session->userdata('is_user_login') == true) : ?>
                        <p><a href="<?= base_url(); ?>home/form" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
                    <?php elseif ($this->session->userdata('is_admin_login') == true) : ?>
                        <p><a href="<?= base_url(); ?>admin/dashboard" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
                    <?php else : ?>
                        <p><a href="<?= base_url(); ?>auth/login" class="btn btn-secondary px-4 py-3 mt-3">Daftar Sekarang</a></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
        <div class="row justify-content-center no-gutters">
            <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-teacher"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Guru Bersertifikat</h3>
                        <p>Semua Guru yang mengajar bersertifikat resmi</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-reading"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Pendidikan khusus</h3>
                        <p>Pendidikan khusus untuk anak Sekolah Menengah Pertama</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <!-- Center the welcome section -->
        <div class="row justify-content-center">
            <div class="col-md-8 wrap-about py-5 wrap-about bg-light mx-auto">
                <div class="text px-4 ftco-animate text-center">
                    <h2 class="mb-4">Selamat datang di Magic Course</h2>
                    <p>Magic Course adalah sebuah lembaga pendidikan non formal yang diperuntukan untuk anak Sekolah Menengah Pertama (SMP) yang akan menempuh Ujian 
                        Nasional (UN).</p>
                    <p>Diharapkan keberadaan Magic Course dapat menjadi mitra terbaik bagi orang tua dan sekolah dalam
                        program membantu belajar siswa.</p>
                    <p class="text-center"><a href="<?= base_url(); ?>Home/tentang" class="btn btn-secondary px-4 py-3">Read More</a></p>
                </div>
            </div>
        </div>
       

<section class="ftco-section" style="padding: 4em 0 !important">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Daftar</span> Kelas</h2>
            </div>
        </div>
        <div class="row">
            <?php $i = 1;
            foreach ($kelas as $kel) : ?>
                <div class="col-md-6 col-lg-3 ftco-animate mb-4">
                    <div class="pricing-entry bg-light pb-4 text-center">
                        <div>
                            <h3 class="mb-3"><?= $kel['judul_kelas'] ?></h3>
                            <p class="subheading"><span>Class day:</span> <?= $kel['jadwal_kelas'] ?></p>
                            <p class="subheading"><span>Class time:</span> <?= $kel['waktu_kelas'] ?></p>
                            <p><span class="price">Rp. <?= number_format($kel['harga_kelas']) ?></span></p>
                        </div>
                        <div class="img" style="background-image: url(<?= base_url(); ?>assets/User/images/bg_<?= $i++; ?>.jpg);"></div>
                        <div class="px-4">
                            <p><?= $kel['deskripsi_kelas'] ?></p>
                        </div>
                        <?php if ($this->session->userdata('is_user_login') == true) : ?>
                            <p class="button text-center">
                                <a href="<?= base_url('home/form/' . $kel['id_kelas']) ?>" class="btn btn-primary px-4 py-3">Ambil Kursus</a>
                            </p>
                        <?php elseif ($this->session->userdata('is_admin_login') == true) : ?>
                            <p class="button text-center"><a href="<?= base_url('admin/dashboard') ?>" class="btn btn-primary px-4 py-3">Ambil Kursus</a></p>
                        <?php else : ?>
                            <p class="button text-center"><a href="<?= base_url('auth/login') ?>" class="btn btn-primary px-4 py-3">Ambil Kursus</a></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

