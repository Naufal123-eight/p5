<div class="content-wrapper mt-3">
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg">
					<div class="card card-primary">
						<div class="card-header" style="background-color: #36454f">
							<h5 align="center" class="m-0">TAMBAH DATA PASIEN</h5>
						</div>
						<div class="card-body">
							<form method="POST" action="pages/pendataan/tambah_pendataan_proses.php">
								<div class="row justify-content-center">
									<div class="col-md-6">
										<div class="form-group">
											<label for="no_antri">No Antrian</label>
											<select name="no_antri" id="no_antri" class="form-control">
												<?php 
												include 'config/koneksi.php';
												$noantri = mysqli_query($koneksi, "SELECT * FROM murid");
												while ($data = mysqli_fetch_assoc($noantri)) {													
												?>
												<option value="<?= $data['no_antrian'] ?>"><?= $data['no_antrian'] ?> - <?= $data['nama'] ?></option>
												<?php }?>
											</select>
										</div>				

										<div class="form-group">
											<label for="tinggi">Tinggi Badan</label>
											<input type="number" autocomplete="off" name="tinggi" class="form-control" id="tinggi" placeholder="Masukkan Tinggi Badan!" required="">
										</div>																				

										<div class="form-group">
											<label for="berat">Berat Badan</label>
											<input type="number" autocomplete="off" name="berat" class="form-control" id="berat" placeholder="Masukkan Berat Badan!" required="">
										</div>																				

										<div class="form-group">
											<label for="td">Tekanan Darah</label>
											<input type="text" autocomplete="off" name="td" class="form-control" id="td" placeholder="Masukkan Tekanan Darah!" required="">
										</div>																				

										<div class="form-group">
											<label for="hb">HB</label>
											<input type="number" autocomplete="off" name="hb" class="form-control" id="hb" placeholder="Masukkan HB!">
										</div>																				
										<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i>Simpan</button>&nbsp;
										<button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-sync-alt"></i>Reset</button>&nbsp;
										<a href="index.php?page=data_siswa" class="btn btn-sm btn-danger"><i class="fa fa-reply-all"></i> Kembali</a>
									</div>	
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>