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
						<a href="index.php?page=tambah_pendataan" class="btn btn-primary mb-3"><i class="fa fa-plus-square"></i> Tambah Pendataan Pasien</a>
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>									
									<th>No Antrian</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Tinggi Badan</th>
									<th>Berat Badan</th>
									<th>Tekanan Darah</th>
									<th>HB</th>
									<th class="text-center"><i class="fa fa-cog"></i></th>
								</tr>
							</thead>
							<tbody>
							<?php 
								include "./config/koneksi.php";								
								$query = mysqli_query($koneksi,"SELECT * FROM murid, pendataan WHERE murid.no_antrian = pendataan.no_antrian");
								while($row=mysqli_fetch_array($query))
								{
									?>
									<tr>										
										<td><?php echo $row['no_antrian']; ?></td>
										<td><?php echo $row['nama']; ?></td>
										<td><?php echo $row['jenis_kelamin']; ?></td>
										<td><?php echo $row['tinggi_badan']; ?>cm</td>
										<td><?php echo $row['berat_badan']; ?>kg</td>
										<td><?php echo $row['tekanan_darah']; ?></td>
										<td><?php echo $row['hb']; ?></td>
										<td class="text-center">
											<a href="index.php?page=detail_pendataan&id_detail=<?php echo $row['id_pendataan']; ?>" class="btn btn-sm btn-info m-1"><i class="fa fa-eye"></i></a>
											<a href="index.php?page=ubah_pendataan&id_ubah=<?php echo $row['id_pendataan']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i></a>&nbsp;
											<a href="pages/pendataan/hapus_pendataan.php?id_pendataan=<?php echo $row['id_pendataan']; ?>" class="btn btn-sm btn-danger m-1" title="Hapus" onclick="return confirm('Yakin ingin hapus data ini?')"><i class="fa fa-trash-alt"></i></a>
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

