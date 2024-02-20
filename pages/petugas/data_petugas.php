<div class="content-wrapper mt-3">
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg">
					<div class="card card-primary">
						<div class="card-header" style="background-color: #36454f">
							<h5 align="center" class="m-0">DATA PETUGAS</h5>
						</div>
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th class="text-center"><i class="fa fa-list"></i></th>
									<th>Nama Petugas</th>
									<th>Username</th>
									<th>Password</th>
									<th>Level</th>									
								</tr>
							</thead>
							<tbody>
							<?php 
								include "config/koneksi.php";
								$no = 1;
								$query = mysqli_query($koneksi,"SELECT * FROM petugas");
								$query2 = mysqli_query($koneksi,"SELECT * FROM petugas_pendataan");
								while($row=mysqli_fetch_array($query))
								{
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row['nama']; ?></td>
										<td><?php echo $row['username']; ?></td>
										<td><?php echo str_repeat('*', strlen($row['password'])); ?></td>
										<td>Petugas Registrasi</td>
									</tr>
								<?php 
								}

								while($row=mysqli_fetch_array($query2))
								{
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row['nama']; ?></td>
										<td><?php echo $row['username']; ?></td>
										<td><?php echo str_repeat('*', strlen($row['password'])); ?></td>
										<td>Petugas Pendataan</td>
									</tr>
								<?php 
								}
								?>
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

