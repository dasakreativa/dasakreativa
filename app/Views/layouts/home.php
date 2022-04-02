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
        <?=$this->include('layouts/home'); ?>
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