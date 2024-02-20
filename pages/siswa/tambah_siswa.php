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
							<form method="POST" action="pages/siswa/tambah_siswa_proses.php">
								<div class="row justify-content-center">
									<div class="col-md-6">
										<div class="form-group">
											<label for="no_antri">No Antrian</label>
											<input type="number" autocomplete="off" name="no_antri" class="form-control" id="no_antri" placeholder="Masukkan No Antrian!" required="" autofocus="">
										</div>				

										<div class="form-group">
											<label for="nama">Nama Lengkap</label>
											<input type="text" autocomplete="off" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap!" required="">
										</div>										
										
										<div class="form-group">
											<label for="jns_kelamin">Jenis Kelamin</label>
											<select name="jns_kelamin" class="form-control" required>
                                                <option value="Laki-laki">Laki-laki</option>                    
                                                <option value="Perempuan">Perempuan</option>                    
                                            </select>
										</div>
										
										<div class="form-group">
										  <label for="tgl">Tanggal Lahir</label>
										  <input type="date" autocomplete="off" name="tgl" id="tgl" class="form-control" required>
										</div>
										<div class="form-group">
										  <label for="umur">Umur</label>
										  <input type="number" autocomplete="off" name="umur" id="umur" class="form-control" placeholder="Masukkan Umur" required>
										</div>
										<div class="form-group">
										  <label for="alamat">Alamat</label>										  
										  <textarea name="alamat" autocomplete="off" id="alamat" class="form-control" rows="3" style="resize: none;" placeholder="Masukkan Alamat!" required></textarea>
										  
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