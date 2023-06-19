<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="post text">
				<div class="col-md-8">
					<div class="alert alert-success">
						<strong>Register Members Area</strong>
					</div>
					<?php
					 $attributes = array('class'=>'form-horizontal','role'=>'form');
					 echo form_open_multipart('register',$attributes); 
					?>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">Nama Lengkap</label>
							<div style="background:#fff;" class="input-group col-lg-6">
								<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
								<input type="text" class="required form-control" minlength="10" name="nama_lengkap"></div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Alamat Email</label>
							<div style="background:#fff;" class="input-group col-lg-6">
								<span class="input-group-addon"><b><i class="fa fa-envelope fa-fw"></i></b></span>
								<input type="text" class="required email form-control" name="email">
								<label for="alamat_email" generated="true" style="color:green;">&nbsp; harus pakai alamat @gmail.com</label></div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Password</label>
							<div style="background:#fff;" class="input-group col-lg-5">
								<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
								<input type="password" class="required number form-control" name="password" minlength="6" required></div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">No Telpon</label>
							<div style="background:#fff;" class="input-group col-lg-5">
								<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
								<input type="text" class="required number form-control" name="no_telp" minlength="11" required>
								<label for="alamat_email" generated="true" style="color:green;">&nbsp; (nomor Whatsapp aktif)
								</label></div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Jenis Kelamin</label>
							<div style="background:#fff;" class="input-group col-lg-5">
								<span class="input-group-addon"><i class="fa fa-venus-mars fa-fw"></i></span>
								<select class="required form-control" name="jk" required>
									<option>Laki-laki</option>
									<option>Perempuan</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Tanggal Lahir</label>
							<div style="background:#fff;" class="input-group col-lg-5">
								<span class="input-group-addon"><i class="fa fa-calendar-o fa-fw"></i></span>
								<input type="date" name="tgllahir" class="required form-control" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Website / Blog</label>
							<div style="background:#fff;" class="input-group col-lg-5">
								<span class="input-group-addon"><i class="fa fa-television fa-fw"></i></span>
								<input type="text" name="website" class="required form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Alamat Lengkap</label>
							<div style="background:#fff;" class="input-group col-lg-8">
								<span class="input-group-addon"><i class="fa fa-hotel fa-fw"></i></span>
								<textarea class="required form-control" name="alamat" style="height:90px" minlength="20" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3">
								<?php if ($pesan <> ''){ echo "<p><b>Pesan error : </b><span style='color:red;'>". $pesan ."</span></p>"; } ?>
								<br/>
								 Dengan mengeklik tombol Mendaftar, Berarti Anda telah menyetujui <a href="http://members.lokomedia.web.id/page/statis/syarat-dan-ketentuan">syarat dan Ketentuan</a> kami dan bahwa Anda telah membaca <a href="http://members.lokomedia.web.id/page/statis/kebijakan-privasi">Kebijakan Data</a> kami, termasuk Penggunaan Kuki...
								<hr>
								<button type="submit" name="submit" value="submit" class="btn btn-primary">Daftar Sekarang !!!</button>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div>
				<div class="col-md-4 hidden-xs">				
				<?php				
				foreach($record as $r){					
					$isi_halaman =(strip_tags($r['isi_halaman'])); 					
					$isi = substr($isi_halaman,0,220); 					
					$isi = substr($isi_halaman,0,strrpos($isi," ")); 				
					?>
					<div class="list-group">
						<a href="<?php echo base_url() . "halaman/detail/" . $r['judul_seo'] ?>" class="list-group-item "><h4 class="list-group-item-heading"><?php echo $r['judul']; ?></h4>
						<p class="list-group-item-text">
							<?php echo $isi; ?>
						</p>
						</a>
					</div>				
				<?php
				}
				?>
				</div>
				<style>
                            .foo { 
                                position: fixed;
                                bottom: 0;
                                width: 1170px;
                                text-align: center;
                                padding: 0px 0 10px;
                                margin-bottom: 0px;
                            }
				</style>
			</div>
		</div>
	</div>
</div>