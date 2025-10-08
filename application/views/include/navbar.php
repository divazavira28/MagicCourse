<style>
    .dropdown-item:hover {
        background-color: #6c757d !important;
        color: white !important;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
        font-weight: 700; /* Ketebalan teks normal */
    }

    .navbar-brand img {
        max-width: 100px; /* Sesuaikan dengan lebar yang diinginkan */
        max-height: 75px; /* Sesuaikan dengan tinggi yang diinginkan */
        margin-right: 20px; /* Jarak antara gambar dan teks */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="<?= base_url('home'); ?>" style="color: #007bff;">
            <img src="<?= base_url('assets/Logo/logo_navbar.png'); ?>" alt="Magic Course Logo">
            Magic Course
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="<?= base_url(); ?>" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="<?= base_url('home/tentang'); ?>" class="nav-link">Tentang</a></li>
                <li class="nav-item"><a href="<?= base_url('home/kelas'); ?>" class="nav-link">Kelas</a></li>
                <li class="nav-item"><a href="<?= base_url('home/kontak'); ?>" class="nav-link">Kontak</a></li>
                <?php if ($this->session->userdata('is_user_login')) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Hi, <?= $this->session->userdata('username'); ?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url('siswa/profile'); ?>">Profil</a>
                            <a class="dropdown-item" href="<?= base_url('siswa/riwayat'); ?>">History Kelas</a>
                            <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Logout</a>
                        </div>
                    </li>
                <?php else : ?>
                    <li class="nav-item"><a href="<?= base_url('auth/login'); ?>" class="nav-link">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->