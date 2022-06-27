<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Smartphone</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png"> 	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">

								<ul class="left" style="margin-left: -52px;">
									<li><a href="index.php">HOME</a></li>
									<li><a class="active" href="rekomendasi.php">REKOMENDASI</a></li>
                                    <li><a href="daftar_laptop.php">DAFTAR LAPTOP</a></li>
                                    <li><a href="#about">TENTANG</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar Laptop Start -->
        <div style="background-color: #efefef">
            <div class="container">
                <div class="section-card" style="padding: 32px 0px 20px 0px">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col s3">
                                </div>
                                <div class="col s6">      
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="row">
                                                <center><h4>Masukan Bobot</h4></center>
                                                <br>
                                                <form class = "col s12" method="POST" action="hasil.php">
                                                    <div class = "row">
                                                        <div class="col s12">

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Kriteria Harga</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="harga">
                                                                    <option value = "" disabled selected style="color: #eceff1;"><i>Kriteria Harga</i></option>
                                                                    <option value = "5">< Rp. 5.000.000</option>
                                                                    <option value = "4">5.000.000 - 7.000.000</option>
                                                                    <option value = "3">8.000.000 - 12.000.000</option>
                                                                    <option value = "2">12.000.000 - 15.000.000</option>
                                                                    <option value = "1">> 15.000.000</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                            <b>RAM</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="ram">
                                                                    <option value = "" disabled selected>Kriteria RAM</option> 
                                                                    <option value = "1">2 Gb</option>
                                                                    <option value = "2">4 Gb</option>
                                                                    <option value = "3">8 Gb</option>
                                                                    <option value = "4">16 Gb</option>
                                                                    <option value = "5">> 32 Gb</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Memori</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="memori">
                                                                    <option value = "" disabled selected>Kriteria Penyimpanan</option>
                                                                    <option value = "1">500 GB HDD</option>
                                                                    <option value = "2">32-256 GB Flash Storage</option>
                                                                    <option value = "3">1 TB HDD</option>
                                                                    <option value = "4">128-256 GB SSD</option>
                                                                    <option value = "5">SSD + 1TB HDD</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>CPU</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="cpu">
                                                                    <option value = "" disabled selected>Kriteria CPU</option>
                                                                    <option value = "1">AMD e-series</option>
                                                                    <option value = "2">AMD A-series</option>
                                                                    <option value = "3">Intel Core i3</option>
                                                                    <option value = "4">Intel Core i5</option>
                                                                    <option value = "5">>= Intel Core i7</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Dimensi Laptop</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="inches">
                                                                    <option value = "" disabled selected>Dimensi Laptop</option>
                                                                    <option value = "1">11 Inches</option>
                                                                    <option value = "2">13.3 Inches</option>
                                                                    <option value = "3">14 Inches</option>
                                                                    <option value = "4">15-16 Inches</option>
                                                                    <option value = "5">>16 Inches</option>
                                                                </select>
                                                            </div>
                                                            
                                                        </div>  
                                                    <center><button type="submit" class="waves-effect waves-light btn" style="margin-bottom:-46px;">Hitung</button></center>	
                                                </form>       
                                            </div>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="col s3">
                                </div>
                            </div>
                        </li>
                    </ul>	     
                </div>
            </div>
        </div>
        <!-- Rekomendasi Laptop End -->

    <!-- Modal Start -->
	<div id="about" class="modal">
        <div class="modal-content">
          <h4>Tentang</h4>
          <p>Sistem Pendukung Keputusan Pemilihan Smartphone ini menggunakan metode TOPSIS.</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px; background-color: white">
      <div class="container">
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Laptop 2022.</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  $(document).ready(function(){
	      $('.parallax').parallax();
          $('select').material_select();
          $('.modal').modal();
	    });
    </script>
</body>
</html>