<div class="content-wrapper mt-3">
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg">
					<div class="card card-primary">
						<div class="card-header" style="background-color: #36454f">
							<h5 align="center" class="m-0">DATA PASIEN</h5>
						</div>
						<div class="card-body">
						<a href="index.php?page=tambah_siswa" class="btn btn-primary mb-3"><i class="fa fa-plus-square"></i> Tambah Pasien</a>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>									
									<th>No Antrian</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Tanggal Lahir</th>
									<th>Umur</th>
									<th>Alamat</th>
									<th class="text-center"><i class="fa fa-cog"></i></th>
								</tr>
							</thead>
							<tbody>
							<?php 
								include "./config/koneksi.php";								
								$query = mysqli_query($koneksi,"SELECT * FROM murid");
								while($row=mysqli_fetch_array($query))
								{
									?>
									<tr>										
										<td><?php echo $row['no_antrian']; ?></td>
										<td><?php echo $row['nama']; ?></td>
										<td><?php echo $row['jenis_kelamin']; ?></td>
										<td><?php echo $row['tanggal_lahir']; ?></td>
										<td><?php echo $row['umur']; ?> tahun</td>
										<td><?php echo $row['alamat']; ?></td>										
										<td class="text-center">
											<a href="index.php?page=detail_siswa&id_detail=<?php echo $row['no_antrian']; ?>" class="btn btn-sm btn-info m-1"><i class="fa fa-eye"></i></a>
											<a href="index.php?page=ubah_siswa&id_ubah=<?php echo $row['no_antrian']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a>&nbsp;
											<a href="pages/siswa/hapus_siswa.php?no_antrian=<?php echo $row['no_antrian']; ?>" class="btn btn-sm btn-danger m-1" title="Hapus" onclick="return confirm('Yakin ingin hapus data ini?')"><i class="fa fa-trash-alt"></i></a>
										</td>
									</tr>
							<?php } ?>
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

