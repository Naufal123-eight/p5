<div class="content-wrapper mt-3">
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg">
					<div class="card card-primary">
						<div class="card-header" style="background-color: #36454f">
							<h5 align="center" class="m-0">UBAH DATA PASIEN</h5>
						</div>
						<div class="card-body">
                            <?php 
                            include "./config/koneksi.php";
                            $id_ubah = $_GET['id_ubah'];
                            $query = mysqli_query($koneksi, "SELECT * FROM murid WHERE no_antrian = $id_ubah");
                            $data = mysqli_fetch_assoc($query);
                            ?>
							<form method="POST" action="pages/siswa/ubah_siswa_proses.php">
								<div class="row align-item-center justify-content-center">
                                <div class="col-md-6">
										<div class="form-group">
											<label for="no_antri">No Antrian</label>
											<input type="number" name="no_antri" class="form-control" id="no_antri" placeholder="Masukkan No Antrian!" value="<?php echo $data['no_antrian']?>" required="" autofocus="">
										</div>				

										<div class="form-group">
											<label for="nama">Nama Lengkap</label>
											<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap!"  value="<?php echo $data['nama']?>" required="">
										</div>
										
										<div class="form-group">
											<label for="jns_kelamin">Jenis Kelamin</label>
											<select name="jns_kelamin" class="form-control" required>
                                                <option value="<?php echo $data['jenis_kelamin']?>"><?php echo $data['jenis_kelamin']?></option>
                                                <option value="Laki-laki">Laki-laki</option>                    
                                                <option value="Perempuan">Perempuan</option>                    
                                            </select>
										</div>
										
										<div class="form-group">
										  <label for="tgl">Tanggal Lahir</label>
										  <input type="date" name="tgl" id="tgl" class="form-control" value="<?php echo $data['tanggal_lahir']?>" required>
										</div>
										<div class="form-group">
										  <label for="umur">Umur</label>
										  <input type="number" name="umur" id="umur" class="form-control" value="<?php echo $data['umur']?>" placeholder="Masukkan Umur" required>
										</div>
										<div class="form-group">
										  <label for="alamat">Alamat</label>										  
										  <textarea name="alamat" id="alamat" class="form-control" rows="3" style="resize: none;" placeholder="Masukkan Alamat!" required><?php echo $data['alamat']?></textarea>										  
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