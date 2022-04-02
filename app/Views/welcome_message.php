<?=$this->extend('layouts/home') ?>

<?=$this->section('header-banner') ?>
<div class="container">
	<div id="header-container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<h3 class="title">Dasa Kreativa Studio <u>Hadir</u> Untuk Anda.</h3>
				<p class="subtitle">Selamat menunaikan ibadah puasa, butuh banner nih ya? Yuk langsung pesan saja ke Dasa Kreativa Studio. Dijamin hasil bagus dan memuaskan.</p>

				<a href="javascript:void(0)" class="btn btn-danger">Selengkapnya</a>
			</div>
			<div class="col-md-6">
				<img src="<?=base_url('images/home-image.svg') ?>" alt="Desainer Grafis" class="w-100" />
			</div>
		</div>
	</div>
</div>
<?=$this->endSection() ?>

<?=$this->section('content') ?>
<!-- About Section -->
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-7 order-2 order-md-1 mt-md-0 mt-4">
				<img src="<?=base_url('images/about.svg') ?>" alt="Tentang" class="w-100" />
			</div>
			<div class="col-md-5 mb-md-0 mb-4">
				<p class="sub-lead">Tentang Kami</p>
				<h3 class="lead">Kami Ada Karena Anda</h3>
				<p class="desc">Dasa Kreativa Studio hadir di Kota Ngawi untuk membantu para pelaku usaha UMKM sampai Corporate untuk mengembangkan usahanya, terutama untuk mengubah ekosistem usaha tradisional menjadi digital di era milenial saat ini..</p>

				<a href="/tentang-kami" class="btn btn-warning">Tentang</a>
			</div>
		</div>
	</div>
</section>
<!-- About Section -->

<!-- Services -->
<section id="services">
	<div class="container">
		
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="heading">
					<p class="sub-lead">Solusi Untuk Anda</p>
					<h3 class="lead">Layanan Kami</h3>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-6">
						<a href="" class="service-item">
							<img src="<?=base_url('images/coding.png') ?>" alt="Ngoding" />
							<div class="service-details">
								<h3 class="service-title">Website Development</h3>
								<p class="service-sub">Pengembang situs website sangat penting untuk menunjang digitalisasi usaha anda.</p>
							</div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="" class="service-item">
							<img src="<?=base_url('images/web-design.png') ?>" alt="Ngoding" />
							<div class="service-details">
								<h3 class="service-title">Website Designer</h3>
								<p class="service-sub">Jasa pengembang tampilan untuk sebuah website anda supaya semakin cantik dan kece.</p>
							</div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="" class="service-item">
							<img src="<?=base_url('images/desktop-computer.png') ?>" alt="Ngoding" />
							<div class="service-details">
								<h3 class="service-title">Reparasi Laptop/PC</h3>
								<p class="service-sub">Tak perlu pusing lagi soal error pada Laptop/PC, tinggal sat set beres mazzeeehhh.</p>
							</div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="" class="service-item">
							<img src="<?=base_url('images/paintbrush.png') ?>" alt="Ngoding" />
							<div class="service-details">
								<h3 class="service-title">Jasa Desain Grafis</h3>
								<p class="service-sub">Soal cetak mencetak yuk langsung aja kita cetak dan sat set langsung bisa dipake untuk keperluan anda.</p>
							</div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="" class="service-item">
							<img src="<?=base_url('images/server.png') ?>" alt="Ngoding" />
							<div class="service-details">
								<h3 class="service-title">Maintenance Server/Web</h3>
								<p class="service-sub">Lagi males ngurus website? Atau gak punya waktu buat ngelola? Yuk langsung panggil kami dan kami siap untuk menjaganya.</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
<!-- Services -->
<?=$this->endSection() ?>