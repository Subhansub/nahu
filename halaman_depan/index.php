


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belai Besar Inseminasi Buatan Singosari</title>
    <!-- font -->
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
    <!-- CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
            z-index: 1000;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 18px;
        }
        .navbar a:hover {
            color: #00ff7f;
        }
        .iframe-container {
            margin-top: 60px; /* Agar navbar tidak tertutup */
            height: 100vh;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>


</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-light bg-dark w-100">
                <a class="navbar-brand text-white" href="#">
                    <img src="img/601.png" width="50" height="50" class="d-inline-block align-top" alt="">
                    <img src="img/600.png" width="50" height="50" class="d-inline-block align-top" alt="">
                    <img src="img/602.png" width="50" height="50" class="d-inline-block align-top" alt="">
                </a><br><br><br>
                <ul class="nav justify-content-center "><br><br>
                    <li class="nav-item bg-dark text-white">
                        <a href="halaman_depan/sapi.php" onclick="loadContent('index.php')">Sapi</a>
                        </li>
                        <li class="nav-item bg-dark text-white">
                        <a href="halaman_depan/keunggulan.php" onclick="loadContent('keunggulan.html')">Keunggulan</a>
                        </li>
                        <li class="nav-item bg-dark text-white">
                        <a href="halaman_depan/peran.php" onclick="loadContent('peran.html')">Peran</a>
                        </li>
                </ul>
                <ul class="nav justify-content-right">
                    <li class="nav-item">
                        <a class="nav-link active bg-success text-white" href="register.php">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Iframe untuk menampilkan file yang berbeda -->
        <div class="iframe-container">
            <iframe id="content-frame-1" src="halaman_depan/sapi.php"></iframe>
        </div>
        <div class="iframe-container">
            <iframe id="content-frame-2" src="halaman_depan/keunggulan.php"></iframe>
        </div>
        <div class="iframe-container">
            <iframe id="content-frame-2" src="halaman_depan/peran.php"></iframe>
        </div>

        <script>
            // Fungsi untuk mengubah konten iframe berdasarkan ID
            function loadContent(frameId, file) {
                var frame = document.getElementById(frameId);
                if (frame) {
                    frame.src = file;
                } else {
                    console.error("Iframe dengan ID " + frameId + " tidak ditemukan.");
                }
            }
        
            // Contoh penggunaan
            // loadContent('content-frame-1', 'halaman_depan/sapi.php');
            // loadContent('content-frame-2', 'halaman_depan/keunggulan.php');
        </script>

        <div class="row">
            <div class="col-md-12">
                <br><br><br><br><h1 class="text-center">SELAMAT DATANG DI BBIB SINGOSARI</h1>
                <h5 class=" text-center">Mengenal Lebih Dekat Balai Besar Inseminasi Buatan Singosari</h5><br><br><br><br><br>
                <div class="row">
                    <div class="col-md-6">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/100.webp" hspace="90" style="width: 100%; max-width: 450px; height: auto;" class="d-block w-100 h-100" alt="...">
                                </div>
                            </div>
                                <h4 class="text-center text-red">efweg</h4>
                                <h2 class="text-center">gwgw</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12  text-center">
                                <iframe width="570" height="315" src="https://www.youtube.com/embed/fTESqPGwREo?si=MPIOHZ5auEVbSKb7" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <p class="p-3 mb-5" style="text-align: left;">BBIB Singosari sebagai Badan Layanan Umum yang memiliki tugas utama melakukan Produksi, Pemasaran, Pengujian dan Pemantauan Mutu Semen Ternak Unggul serta Penyusunan dan Penguatan Metode Inseminasi 
                                       Buatan, memiliki berbagai layanan untuk memenuhi kebutuhan masyarakat. Dengan pengalaman lebih dari dua puluh delapan tahun BBIB Singosari telah memproduksi semen beku dari bangsa sapi (Limousin, Simental, Aberdeen Angus, 
                                       Brangus, Brahman, Ongole, Madura, Bali, Friesien Holstein dan Wagyu) dan bangsa kambing (Peranakan Ettawa, Boer, Saanen dan Senduro).
                                    </p>
                            </div>
                        </div>   
                </div>
        </div>


    <div class="row">
        <div class="col-md-12">
                <br><br><h2 class="text-center">YANG ANDA BUTUHKAN</h2>
                <h5 class=" text-center"><u>Klik Info Lebih Detail;</u></h5><br><br><br>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-2">
                <div class="card bg-success text-white">
                    <a  href="https://wbs.pertanian.go.id/">
                    <img class="card-img-top" src="img/500.jpg" alt="Thumbnail 1" height="250">
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card bg-success text-white">
                    <a href="https://bbibsingosari.ditjenpkh.pertanian.go.id/page/ppid-19">
                    <img class="card-img-top" src="img/501.jpg" alt="Thumbnail 2" height="250">
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card bg-success text-white">
                <a href="https://bbibsingosari.ditjenpkh.pertanian.go.id/page/informasi-serta-merta-323">
                    <img class="card-img-top" src="img/502.jpg" alt="Thumbnail 3" height="250">
                    </a>
                </div>
            </div>
            <div class="col-2">
                <div class="card bg-success text-white">
                    <a href="https://sifoya.bbibsingosari.id/">
                    <img class="card-img-top" src="img/503.jpg" alt="Thumbnail 4" height="250">
                    </a>
                    <div></div>
                </div>
            </div>
            <div class="col-2">
                <div class="card bg-success text-white">
                    <a href="https://www.lapor.go.id/instansi/kementerian-pertanian">
                    <img class="card-img-top" src="img/504.jpg" alt="Thumbnail 5" height="250">
                    </a>
                </div>
            </div>
        </div>
    </div><br><br>




            <div class="row">
                <div class="col-md-12">
                        <br><br><h5 class="text-center" style="color: green;">BBIB Singosari menyediakan informasi berisi mengenai detail setiap penjantan, termasuk data genetik,</h5>
                        <h5 class="text-center" style="color: green;">penampilan fisik dan perestasi keturunannya agar para peternak dapat dengan mudah memilih penjantan</h5>
                        <h5 class="text-center" style="color: green;">yang paling sesuai dengan kebutuhan dan tujuan peroduksinya.</h5><br>
                </div>
            </div>
            <div class="row" style="padding: 30px;" margin: auto;>
					<div class="col-md-4">
						<div class="card text-white" style="background-color: #800000; width: 380px; height: 535px;">
							<img class="card-img-top" alt="Bootstrap thumbnail pertama" src="img/1.jpg" height="250"/>
								<div class="card-block">
									<h3 class="card-title text-center">
										Sapi Aceh
									</h3>
                                    <p style="font-size: 15px;">
                                        Sapi aceh adalah sapi lokal dari indonesia yang
                                        berasal dari aceh rata-rata bobot badan dewasa sapi ini adalah
                                        300 hingga 450 kg pada jantan dan 200-300 kg pada betina.
                                        ciri utama sapi aceh adalah memiliki punuk, bertanduk, bernawarna
                                        merah atau coklat. Sapi ini banyak digunakan sebagai sapi potong oleh peternakindonesia
                                    </p><br>
                                    <p align="center">
										<a class="btn btn-warning text-white" href="halaman_belakang/aceh.php?">Detail</a>
									</p>
								</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card text-white" style="background-color: #800000; width: 380px; height: 535px;">
							<img class="card-img-top" alt="Bootstrap Thumbnail Kedua" src="img/4.jpg" height="250"/>
							<div class="card-block">
								<h3 class="card-title text-center">
									Sapi Madura
								</h3>
                                <p style="font-size: 15px;">
                                    Sapi Madura adalah sapi potong asli indonesia yang berasal dari pulau madura. Ciri utama sapi ini adalah berwarna coklat terng, memiliki 
                                    tanduk pendek beragam, memiliki panjang mirip sapi bali dengan panuk yang kecil. keunggulan sapi ini adalah memiliki ketahanan 
                                    terhadap iklim panas, mudah dipelihara dan di kembangkan, serta tahan terhadap berbagai macam penyakit.
                                </p>
								<p align="center">
									<a class="btn btn-warning text-white" href="halaman_belakang/madura.php?tambah">Detail</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card text-white" style="background-color: #800000; width: 380px; height: 535px;">
							<img class="card-img-top" alt="Bootstrap Thumbnail Ketiga" src="img/14.jpg" height="250"/>
							<div class="card-block">
								<h3 class="card-title text-center">
									Sapi Brahman
								</h3>
                                <p style="font-size: 15px;">
                                Sapi Brahman adalah jenis sapi potong yang berasal dari india, ciri-ciri utamanya adalah panuk yang besar, telinga tergantung kebawah dan lancip. 
                                Sapi ini memiliki presentase karkas 45%, bisa tetap dapat bertahan meski dengan kualitas pakan yang buruk. Lebih tahan terhadap serangga karena 
                                kulit yang tebal. Brahman bIsa hidup dengan jangka waktu yang lebih lama, bahkan diatas 15 tahun tetap bisa menghasilkan keturunan.
                                </p>
								<p align="center">
									<a class="text-center btn btn-warning text-white" href="halaman_belakang/brahman.php?tambah">Detail</a>
								</p>
							</div>
						</div>
					</div>
			</div>

            <div class="row" style="padding: 30px;" margin: auto;>
					<div class="col-md-4">
						<div class="card text-white" style="background-color: #800000; width: 380px; height: 350px;">
							<img class="card-img-top" alt="Bootstrap thumbnail pertama" src="img/36.jpg" height="250"/>
								<div class="card-block">
								<h3 class="card-title text-center">
									Sapi Ongole
								</h3>
                                <p align="center">
									<a class="btn btn-warning text-white" href="halaman_belakang/ongole.php">Detail</a>
								</p>
								</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card text-white" style="background-color: #800000; width: 380px; height: 350px;">
							<img class="card-img-top" alt="Bootstrap Thumbnail Kedua" src="img/54.jpg" height="250"/>
							<div class="card-block">
									<h3 class="card-title text-center">
										Sapi Bali
									</h3>
									<p align="center">
										<a class="btn btn-warning text-white" href="halaman_belakang/bali.php?">Detail</a>
									</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card text-white" style="background-color: #800000; width: 380px; height: 350px;">
							<img class="card-img-top" alt="Bootstrap Thumbnail Ketiga" src="img/85.jpg" height="250"/>
							<div class="card-block">
									<h3 class="card-title text-center">
										Angus
									</h3>
                                    <p align="center">
										<a class="text-center btn btn-warning text-white" href="halaman_belakang/angus.php">Detail</a>
									</p>
							</div>
						</div>
					</div>
			</div>

            <div class="row" style="padding: 40px;"  margin: auto;>
					<div class="col-md-3">
						<div class="card text-white" style="background-color: #800000; width: 280px; height: 300px;">
							<img class="card-img-top" alt="Bootstrap thumbnail pertama" src="img/96.jpg" height="200"/>
								<div class="card-block">
								<h3 class="card-title text-center">
								        <h3 class="card-title text-center">
									        Sapi limosin
								        </h3>
                                        <p align="center">
									        <a class="btn btn-warning text-white" href="halaman_belakang/limosin.php">Detail</a>
								        </p>
								</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card text-white" style="background-color: #800000; width: 280px; height: 300px;">							
                            <img class="card-img-top" alt="Bootstrap Thumbnail Kedua" src="img/164.jpg" height="200"/>
							<div class="card-block">
								    <h3 class="card-title text-center">
										Sapi Simental
									</h3>
									<p align="center">
										<a class="btn btn-warning text-white" href="halaman_belakang/simental.php?">Detail</a>
									</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card text-white" style="background-color: #800000; width: 280px; height: 300px;">							
                            <img class="card-img-top" alt="Bootstrap Thumbnail Kedua" src="img/223.jpg" height="200"/>
							<div class="card-block">
								    <h3 class="card-title text-center">
                                    Friesian Holstein
									</h3>
									<p align="center">
										<a class="btn btn-warning text-white" href="halaman_belakang/fh.php?">Detail</a>
									</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card text-white" style="background-color: #800000; width: 280px; height: 300px;">							
                            <img class="card-img-top" alt="Bootstrap Thumbnail Kedua" src="img/242.jpg" height="200"/>
							<div class="card-block">
								    <h4 class="card-title text-center">
										kambing
									</h4>
									<p align="center">
										<a class="btn btn-warning text-white" href="halaman_belakang/kambing.php?">Detail</a>
									</p>
							</div>
						</div>
					</div>
			</div>
    </div>
    </div>
    <footer style="background-color: orange; padding: 100px; font-family: Arial, sans-serif;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div style="margin-bottom: 5px;">
                <img src="logo.png" alt="Logo BBIB Singosari" style="width: 100px;">
                <p>
                    BBIB Singosari<br>
                    Jam Layanan: Senin-Jumat 07.30 - 16.00 WIB<br>
                    JL. BBIB No. 1, Ds. Toyomarto, Kec. Singosari,<br>
                    Malang 65153<br>
                    Jawa Timur Indonesia<br>
                    Telp. (+62341) 458359, 458474, 454331<br>
                    Fax: (+62341) 458359<br>
                    Layanan: +6285895679267<br>
                    Email: bbib.singosari@pertanian.go.id<br>
                    Web: bbibsingosari.ditjenpkh.pertanian.go.id
                </p>
            </div>
            <div>
                <h3>Pengunjung</h3>
                <p>Total Pengunjung</p>
                <p>Hari Ini: 1.820</p>
                <p>Bulan Ini: 129.540</p>
                <p>Tahun Ini: 894.079</p>
            </div>
            <div>
                <h3>Kirim Pesan</h3>
                <form method="post">
                <br><input type="text" name="nama" placeholder="Nama"><br>
                <br><input type="email" name="email" placeholder="Alamat Email"><br>
                <br><input type="tel" name="no_telp" placeholder="No Telp"><br>
                <br><textarea name="pesan" placeholder="Pesan"></textarea><br>
                <br><button type="submit">Kirim Pesan</button>
                    </form>
            </div>

        </div>
    </footer>
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script></body>

</body>
</html>