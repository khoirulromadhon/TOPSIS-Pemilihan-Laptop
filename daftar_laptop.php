<?php 
session_start();
include('koneksi.php');
?>

<?php 
	if(isset($_POST["tambah_laptop"])){
		$brands 	   = $_POST["brands"];
		$produks    = $_POST["produks"];
		$hargas	   = $_POST["hargas"];
		$rams       = $_POST["rams"];
		$memorys    = $_POST["memorys"];
		$cpus 	   = $_POST["cpus"];
		$inchess    = $_POST["inchess"];
		
		$harga_angka = $ram_angka = $memory_angka = $cpu_angka = $inches_angka = 0;

		if($hargas > 10000000){
			$harga_angka = 5;
		} 
		elseif($hargas >= 9000000 && $hargas <= 10000000){
			$harga_angka = 4;
		}
		elseif($hargas >=7000000 && $hargas <= 8000000){
			$harga_angka = 3;
		}
		elseif($hargas >= 5000000 && $hargas <= 6000000){
			$harga_angka = 2;
		}
		elseif($hargas >= 3000000 && $hargas<=4000000){
			$harga_angka = 1;
		}


		if($rams > 8){
			$ram_angka = 5;
		}
		elseif($rams == 8){
			$ram_angka = 4;
		}
		elseif($rams == 4){
			$ram_angka = 3;
		}
		elseif($rams == 3){
			$ram_angka = 2; 
		}
		elseif($rams == 2){
			$ram_angka = 1;
		}


		if($memorys == "500 GB HDD"){
			$memory_angka = 1;
		}
		elseif($memorys == "32-256 GB Flash Storage"){
			$memory_angka = 2;
		}
		elseif($memorys == "1 TB HDD"){
			$memory_angka = 3;
		}
		elseif($memorys == "128-256 GB SSD"){
			$memory_angka = 4;
		}
		elseif($memorys == "SSD + 1TB HDD"){
			$memory_angka = 5;
		}


		if($cpus == "AMD e-series"){
			$cpu_angka = 1;
		}
		elseif($cpus == "AMD A-series"){
			$cpu_angka = 2;
		}
		elseif($cpus == "Intel Core i3"){
			$cpu_angka = 3;
		}
		elseif($cpus == "Intel Core i5"){
			$cpu_angka = 4;
		}
		elseif($cpus == ">= Intel Core i7"){
			$cpu_angka = 5;
		}


		if($inchess <= 12){
			$inches_angka = 1;
		}
		elseif($inchess == 13.3){
			$inches_angka = 2;
		}
		elseif($inchess == 14){
			$inches_angka = 3;
		}
		elseif($inchess >= 15 && $inchess <= 16){
			$inches_angka = 4;
		}
		elseif($inchess >= 16){
			$inches_angka = 5;
		}

		$sql = "INSERT INTO `data_laptop` (`id`,`brand` ,`produk`, `harga`, `ram`, `memory`, `cpu`, `inches`, `harga_angka`, `ram_angka`, `memory_angka`, `cpu_angka`, `inches_angka`) 
				VALUES (NULL, :brand ,:produk, :harga, :ram, :memory, :cpu, :inches, :harga_angka, :ram_angka, :memory_angka, :cpu_angka, :inches_angka)";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':brand', $brands);
		$stmt->bindValue(':produk', $produks);
		$stmt->bindValue(':harga', $hargas);
		$stmt->bindValue(':ram', $rams);
		$stmt->bindValue(':memory', $memorys);
		$stmt->bindValue(':cpu', $cpus);
		$stmt->bindValue(':inches', $inchess);
		$stmt->bindValue(':harga_angka', $harga_angka);
		$stmt->bindValue(':ram_angka', $ram_angka);
		$stmt->bindValue(':memory_angka', $memory_angka);
		$stmt->bindValue(':cpu_angka', $cpu_angka);
		$stmt->bindValue(':inches_angka', $inches_angka);
		$stmt->execute();
	}

	if(isset($_POST["hapus_laptop"])){
		$id_hapus_laptop = $_POST['id_hapus_laptop'];
		$sql_delete = "DELETE FROM `data_laptop` WHERE `id_laptop` = :id_hapus_laptop";
		$stmt_delete = $db->prepare($sql_delete);
		$stmt_delete->bindValue(':id_hapus_laptop', $id_hapus_laptop);
		$stmt_delete->execute();
		$query_reorder_id=mysqli_query($selectdb,"ALTER TABLE data_laptop AUTO_INCREMENT = 1");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Laptop</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Data Table -->
	<link rel="stylesheet" type="text/css" href="assets/dataTable/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="assets/dataTable/jquery.dataTables.min.js"></script>

</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">
								<ul class="left" style="margin-left: -52px;">
									<li><a href="index.php">HOME</a></li>
									<li><a href="rekomendasi.php">REKOMENDASI</a></li>
									<li><a class="active" href="daftar_laptop.php">DAFTAR LAPTOP</a></li>
									<li><a href="#about">TENTANG</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar laptop Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 40px 0px 20px 0px;">
				<ul>
				    <li>
						<div class="row">
						<div class="card">
								<div class="card-content">
									<center><h4 style="margin-bottom: 0px; margin-top: -8px;">Daftar Laptop</h4></center>
									<table id="table_id" class="hover dataTablesCustom" style="width:100%">
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>No </center></th>
													<th><center>Nama laptop</center></th>
													<th><center>Harga laptop</center></th>
													<th><center>RAM laptop</center></th>
													<th><center>Memori laptop</center></th>
													<th><center>cpu laptop</center></th>
													<th><center>inches laptop</center></th>
													<th><center>Hapus</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM data_laptop");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo $no; ?></center></td>
													<td><center><?php echo $data['brand'] , " ", $data['produk'] ?></center></td>
													<td><center><?php echo "Rp. ", $data['harga'] ?></center></td>
													<td><center><?php echo $data['ram']," GB" ?></center></td>
													<td><center><?php echo $data['memory'] ?></center></td>
													<td><center><?php echo $data['cpu'] ?></center></td>
													<td><center><?php echo $data['inches']," Inches" ?></center></td>
													<td>
														<center>
															<form method="POST">
																<input type="hidden" name="id_hapus_laptop" value="<?php echo $data['id'] ?>">
																<button type="submit" name="hapus_laptop" style="height: 32px; width: 32px;" class="btn-floating btn-small waves-effect waves-light red"><i style="line-height: 32px;" class="material-icons">remove</i></button>
															</form>
														</center>
													</td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
									
							</div>
							<a href="#tambah" class="btn-floating btn-large waves-effect waves-light teal btn-float-custom"><i class="material-icons">add</i></a>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar laptop End -->

	<!-- Daftar laptop Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 1px 20% 24px 20%;">
				<ul>
				    <li>
						<div class="row">
							<div class="card">
								<div class="card-content" style="padding-top: 10px;">
									<center><h5 style="margin-bottom: 10px;">Analisa Laptop</h5></center>
									<table class="responsive-table">
									
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>Alternatif</center></th>
													<th><center>C1 (Cost)</center></th>
													<th><center>C2 (Benefit)</center></th>
													<th><center>C3 (Benefit)</center></th>
													<th><center>C4 (Benefit)</center></th>
													<th><center>C5 (Benefit)</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM data_laptop");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo "A",$no ?></center></td>
													<td><center><?php echo $data['harga_angka'] ?></center></td>
													<td><center><?php echo $data['ram_angka'] ?></center></td>
													<td><center><?php echo $data['memory_angka'] ?></center></td>
													<td><center><?php echo $data['cpu_angka'] ?></center></td>
													<td><center><?php echo $data['inches_angka'] ?></center></td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
							</div>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar laptop End -->

	<!-- Modal Start -->
	<div id="tambah" class="modal" style="width: 40%; height: 100%;">
		<div class="modal-content">
			<div class="col s6">
					<div class="card-content">
						<div class="row">
							<center><h5 style="margin-top:-8px;">Masukan Laptop</h5></center>
							<form method="POST" action="">
								<div class = "row">
									<div class="col s12">

										<div class="col s6" style="margin-top: 10px;">
											<b>Brand Produk</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="brands" type="text" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Nama Produk</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="produks" type="text" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Harga</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="hargas" type="number" required>
										</div>
										
										<div class="col s6" style="margin-top: 10px;">
										<b>RAM</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="rams">
												<!-- <option value = "" disabled selected>Kriteria RAM</option>  -->
												<option value = "2">2 Gb</option>
												<option value = "3">3 Gb</option>
												<option value = "4">4 Gb</option>
												<option value = "8">8 Gb</option>
												<option value = "9">>8 Gb</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Memori</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="memorys">
												<!-- <option value = "" disabled selected>Kriteria Penyimpanan</option> -->
												<option value = "500 GB HDD">500 GB HDD</option>
												<option value = "32-256 GB Flash Storage">32-256 GB Flash Storage</option>
												<option value = "1 TB HDD">1 TB HDD</option>
												<option value = "128-256 GB SSD">128-256 GB SSD</option>
												<option value = "SSD + 1TB HDD">SSD + 1TB HDD</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>cpu</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="cpus">
												<option value = "AMD e-series">AMD e-series</option>
												<option value = "AMD A-series">AMD A-series</option>
												<option value = "Intel Core i3">Intel Core i3</option>
												<option value = "Intel Core i5">Intel Core i5</option>
												<option value = ">= Intel Core i7">>= Intel Core i7</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>inches</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="inchess">
												<!-- <option value = "" disabled selected>Kriteria inches</option> -->
												<option value = "11">11 Inches</option>
												<option value = "13.3">13.3 Inches</option>
												<option value = "14">14 Inches</option>
												<option value = "15.5">15-16 Inches</option>
												<option value = "18">>16 Inches</option>
											</select>
										</div>

									</div>  
								</div> 
								<center><button name="tambah_laptop" type="submit" class="waves-effect waves-light btn teal" style="margin-top: 0px;">Tambah</button></center>	
							</form>
						</div>
					</div>
				</div>
			</div>
		<div style="height: 0px; "class="modal-footer">
          <a style="margin-top: -30px;" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
	</div>
	<!-- Modal End -->

	<!-- Modal Start -->
	<div id="about" class="modal">
		<div class="modal-content">
			<h4>Tentang</h4>
			<p>Sistem Pendukung Keputusan Pemilihan Laptop ini menggunakan metode TOPSIS.</p>
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
		$('.modal').modal();
		$('#table_id').DataTable({
    		"paging": false
		});
	    });
	</script>
</body>
</html>