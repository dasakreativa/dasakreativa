<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="description" content="Dasa Kreativa Studio merupakan bagian dari Dasa Kreativa Group yang menyediakan jasa pengembang situs web, desain grafis dan juga reparasi hardware software laptop atau PC." />
	<meta name="author" content="Dasa Kreativa Group" />

	<!-- Main Title and Favicon -->
	<title>Dasa Kreativa Studio</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

	<!-- Font Google Loader -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Overpass:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet" />

	<!-- Main Style -->
	<link rel="stylesheet" href="<?=base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" href="<?=base_url('css/global.css') ?>" />
	<link rel="stylesheet" href="<?=base_url('css/home.css') ?>" />

	<link rel="stylesheet" href="<?=base_url('vendor/fontawesome/css/all.min.css') ?>" />

</head>
<body>

    <!-- Header Main -->
	<header id="masthead">
        <nav class="fixed-top bg-white border-bottom" id="mastnav">
            <div class="container px-0 px-md-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <a class="navbar-brand" href="<?=base_url() ?>">
                        <img src="<?=base_url('images/brands/dks/logo-color.svg') ?>" alt="Dasa Kreativa Studio" height="30px" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto align-items-md-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tentang Kami</a>
                            </li>
                            <li class="nav-item dropdown megamenu">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownServices" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Layanan
                                </a>
                                <div class="dropdown-menu mb-3 mb-md-0" aria-labelledby="dropdownServices">
                                    <div class="dropdown-inner">
                                        
                                        <div class="service">
                                            <div class="service-left">
                                                <h3>Layanan Kami</h3>
                                                <div class="d-none d-md-none d-lg-block">
                                                    <p>Silahkan pilih beberapa layanan dari kami untuk keperluan anda.</p>
                                                    <p>Sekiranya layanan kami tidak dapat memenuhi kebutuhan anda, silahkan ajukan penawaran kepada kami.</p>
                                                    <a href="javascript:void(0)" class="btn btn-light">Klik Disini!</a>
                                                </div>
                                            </div>
                                            <div class="service-right">
                                                <div class="row">
                                                    <div class="col-lg-4 col-6">
                                                        <div class="service-widget">
                                                            <h6 class="title">Pengembang Website</h6>
                                                            <ul class="service-list">
                                                                <li><a href="javascrip:void(0)">Company Profile</a></li>
                                                                <li><a href="javascrip:void(0)">Maintenancer</a></li>
                                                                <li><a href="javascrip:void(0)">System Management</a></li>
                                                                <li><a href="javascrip:void(0)">Sistem Informasi</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="service-widget">
                                                            <h6 class="title">Maintenancer Server</h6>
                                                            <ul class="service-list">
                                                                <li><a href="javascrip:void(0)">Install Ulang</a></li>
                                                                <li><a href="javascrip:void(0)">Pengelolaan Server</a></li>
                                                                <li><a href="javascrip:void(0)">Perbaikan Bug</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-6">
                                                        <div class="service-widget">
                                                            <h6 class="title">Desain Grafis</h6>
                                                            <ul class="service-list">
                                                                <li><a href="javascrip:void(0)">Desain Logo</a></li>
                                                                <li><a href="javascrip:void(0)">Desain Banner</a></li>
                                                                <li><a href="javascrip:void(0)">Desain Pamflet</a></li>
                                                                <li><a href="javascrip:void(0)">Desain Stiker</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="service-widget">
                                                            <h6 class="title">Desain Website</h6>
                                                            <ul class="service-list">
                                                                <li><a href="javascrip:void(0)">UI/UX</a></li>
                                                                <li><a href="javascrip:void(0)">Landing Page</a></li>
                                                                <li><a href="javascrip:void(0)">Template HTML</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-6">
                                                        <div class="service-widget">
                                                            <h6 class="title">Perbaikan Laptop</h6>
                                                            <ul class="service-list">
                                                                <li><a href="javascrip:void(0)">Install Ulang</a></li>
                                                                <li><a href="javascrip:void(0)">Ganti Part</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="btn-group btn-group-sm w-100">
                                    <a class="btn btn-primary" href="https://my.dasakreativa.web.id">Portal Area</a>
                                    <a class="btn btn-outline-primary" href="https://my.dasakreativa.web.id/register">Mendaftar</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>

        <?=$this->renderSection('header-banner'); ?>
	</header>
    <!-- Header Main -->

    <!-- Main Content -->
	<main id="content">
		<?=$this->renderSection('content'); ?>
	</main>
    <!-- Main Content -->

    <!-- Main Footer -->
    <footer class="footer footer-main" id="footer-wrapper">
        <div class="footer-inner" id="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <img src="<?=base_url('images/brands/dkg/logo-white-color.svg') ?>" class="w-100 mb-4 d-block" alt="Dasa Kreativa Group" />

                        <ul class="alamat-dan-kontak">
                            <li>Jl. Trunojoyo No. 149B, Margomulyo, Ngawi 63217, Jawa Timur.</li>
                            <li><a href="https://wa.me/6285702847778">(+62) 857-0284-7778</a></li>
                            <li><a href="mailto:admin@dasakreativa.web.id">admin@dasakreativa.web.id</a></li>
                            <li><a href="mailto:dasakreativa@gmail.com">dasakreativa@gmail.com</a></li>
                        </ul>

                        <div class="d-flex">
                            <img src="<?=base_url('images/brands/dks/logo-white.svg') ?>" alt="Dasa Kreativa Studio" class="mr-3 w-50" />
                            <a class="ml-3 w-50" href="https://www.programerndeso.my.id"><img src="<?=base_url('images/brands/pgd/logo-white.svg') ?>" alt="Programmer Ndeso" /></a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <div class="footer-widget">
                                    <h3 class="title">Tentang Kami</h3>
                                    <ul class="footer-list">
                                        <li><a href="/tentang-kami">Tentang Kami</a></li>
                                        <li><a href="/syarat-dan-ketentuan">Syarat dan Ketentuan Layanan</a></li>
                                        <li><a href="/kebijakan-privasi">Kebijakan Privasi</a></li>
                                        <li><a href="/karir">Karir</a></li>
                                        <li><a href="https://blog.dasakreativa.web.id">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="footer-widget">
                                    <h3 class="title">Layanan Kami</h3>
                                    <ul class="footer-list">
                                        <li><a href="javascript:void(0)">Website Development</a></li>
                                        <li><a href="javascript:void(0)">Website Design</a></li>
                                        <li><a href="javascript:void(0)">Desain Grafis</a></li>
                                        <li><a href="javascript:void(0)">Reparasi Laptop</a></li>
                                        <li><a href="javascript:void(0)">Server Maintenancer</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer-widget">
                                    <h3 class="title">Special Thanks To</h3>
                                    <a href="https://www.instagram.com/mafiaeducationngawi">
                                        <img src="<?=base_url('images/brands/mae/logo-white.svg') ?>" class="w-100 mb-4 d-block" alt="Dasa Kreativa Group" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-inner" id="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left">
                        <p class="m-0">Hak Cipta 2021-<?=date('Y') ?> <a href="/">Dasa Kreativa Group</a>.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <p class="m-0">Illustration License <a href="/lisensi-ilustrasi">Here</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Main Footer -->

    <!-- Main Script -->
	<script src="<?=base_url('vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?=base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>