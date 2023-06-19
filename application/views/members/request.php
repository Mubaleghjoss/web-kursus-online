<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="post text">
				<div class="col-md-8">
					<div class="alert alert-success">
						<strong>Request Project Website</strong>
					</div>
					<?php
					 $attributes = array('class'=>'form-horizontal','role'=>'form');
					 echo form_open_multipart('request',$attributes); 
					?>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">Judul</label>
							<div style="background:#fff;" class="input-group col-lg-6">
								<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
								<input type="text" class="required form-control" minlength="10" name="judul">
								misal : pembuatan website instansi kota denpasar, atau perbaikan web, dsb..
							</div>
							
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Deskripsi</label>
							<div style="background:#fff;" class="input-group col-lg-8">
								<span class="input-group-addon"><i class="fa fa-hotel fa-fw"></i></span>
								<textarea class="required form-control" name="deksripsi" style="height:90px" minlength="20"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Lama Pengerjaan</label>
							<div style="background:#fff;" class="input-group col-lg-5">
								<span class="input-group-addon"><i class="fa fa-venus-mars fa-fw"></i></span>
								<select class="required form-control" name="lama">
									<option>1 minggu</option>
									<option>2 minggu</option>
									<option>3 minggu</option>
									<option>1 bulan</option>
									<option>1,5 bulan</option>
									<option>2 bulan</option>
								</select>
							</div>
							estimasi waktu yang diharapkan
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Budget</label>
							<div style="background:#fff;" class="input-group col-lg-5">
								<span class="input-group-addon">Rp</i></span>
								<input type="text" class="required number form-control" name="no_telp" minlength="11"></div>
						</div>
						
						<div class="form-group">
							<div class="col-sm-offset-3">
								<?php if ($pesan <> ''){ echo "<p><b>Pesan error : </b><span style='color:red;'>". $pesan ."</span></p>"; } ?>
								<hr>
								<button type="submit" name="submit" value="submit" class="btn btn-primary">Daftar Sekarang !!!</button>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div>
				<div class="col-md-4 hidden-xs">
					<div class="list-group">
						<a href="http://members.lokomedia.web.id/page/statis/syarat-dan-ketentuan" class="list-group-item "><h4 class="list-group-item-heading">Syarat dan Ketentuan</h4>
						<p class="list-group-item-text">
							Syarat &amp; Ketentuan berikut berlaku dan mengatur seluruh bagian dari members.lokomedia.web.id. Mohon dibaca dengan teliti sebelum Anda mendaftarkan diri dan berpartisipasi di members.lokomedia.web.id. Produk...
						</p>
						</a>
					</div>
					<div class="list-group">
						<a href="http://members.lokomedia.web.id/page/statis/aturan-main" class="list-group-item "><h4 class="list-group-item-heading">Aturan Main</h4>
						<p class="list-group-item-text">
							Dengan Bergabung di Members Area lokomedia.web.id maka Anda harus mematuhi semua aturan apa pun yang tersedia di dalam layanan kami, oleh karena itu para pengguna diharapkan untuk mengikuti semua aturan...
						</p>
						</a>
					</div>
					<div class="list-group">
						<a href="http://members.lokomedia.web.id/page/statis/tentang-komunitas" class="list-group-item "><h4 class="list-group-item-heading">Tentang Komunitas</h4>
						<p class="list-group-item-text">
							Selamat datang di komunitas members Lokomedia private training web development. Komunitas ini awalnya dibuat sebagai sarana komunikasi peserta kursus kami di kota Padang, dan tanpa disangka-sangka...
						</p>
						</a>
					</div>
					<div class="list-group">
						<a href="http://members.lokomedia.web.id/page/statis/kebijakan-privasi" class="list-group-item "><h4 class="list-group-item-heading">Kebijakan Privasi</h4>
						<p class="list-group-item-text">
							Dengan Adanya kebijakan privasi ini adalah komitmen dan bukti nyata dari kami untuk melindungi dan menghargai hak pribadi Anda agar setiap informasi yang Anda sampaikan atau Anda dapatkan hanya...
						</p>
						</a>
					</div>
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