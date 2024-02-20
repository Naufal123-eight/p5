<div class="content-wrapper mt-3">
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg">
					<div class="card card-primary">
						<div class="card-header" style="background-color: #36454f">
							<h5 align="center" class="m-0">DETAIL PASIEN</h5>
						</div>
						<div class="card-body">
							<?php 
								include "./config/koneksi.php";
								$id_detail = $_GET['id_detail'];
								$query = mysqli_query($koneksi, "SELECT * FROM murid WHERE no_antrian = $id_detail");
								$row=mysqli_fetch_array($query)
							?>
							<table class="table table-bordered table-striped table-hover"id="example1">
								<thread>
									<tr>
										<td style="width: 20%">No Antrian</td>
										<td><?php echo $row['no_antrian']; ?></td>
									</tr>
									<tr>
										<td style="width: 20%">Nama Lengkap</td>
										<td><?php echo $row['nama']; ?></td>
									</tr>
									<tr>
										<td>Tanggal Lahir</td>
										<td><?php echo $row['tanggal_lahir']; ?></td>
									</tr>
									<tr>
										<td>Umur</td>
										<td><?php echo $row['umur']; ?> tahun</td>
									</tr>
									<tr>
										<td>Alamat</td>
										<td><?php echo $row['alamat']; ?></td>
									</tr>
								</thread>
							</table>
							<br>
							<a href="index.php?page=data_siswa" class="btn btn-sm btn-danger"><i class="fa fa-reply-all"></i> Kembali</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

