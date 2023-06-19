<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="post text">
				<div class="alert alert-success">
					Detail Members <?php echo $rows['nama_lengkap']?>
					
				</div>
				<div class="col-md-3">
					<div class="box box-widget widget-user">
						<div class="widget-user-header bg-gray-active"></div>
						<div class="widget-user-image">							
						<?php							
							if($rows['foto'] <> ''){									
								$foto = $rows['foto'];	
								echo"<img style='height:120px; width:120px' class='img-circle' src='../../asset/foto_user/$foto' alt='User Avatar'>";
							}else{
								
								echo"<img style='height:120px; width:120px' class='img-circle' src='../../asset/foto_user/blank.jpg' alt='User Avatar'>";								
							}							
						?>
							
						</div>
					</div>
					<div class="user">
						<div class="user-head text-center">
							<h3><?php echo $rows['nama_lengkap'];?></h3> 
							<h5>Popularitas hari ini
							<hr style="margin:3px">
							<i class="fa fa-star text-yellow"></i><i class="fa fa-star text-yellow"></i><i class="fa fa-star-o text-yellow"></i><i class="fa fa-star-o text-yellow"></i><i class="fa fa-star-o text-yellow"></i><i class="fa fa-star-o text-yellow"></i><i class="fa fa-star-o text-yellow"></i></h5>
							<?php 
							if	($this->session->username == $this->uri->segment('3')){
							?>
							
								<a href="javascript:;" data-toggle="modal" data-target="#myModal2" class="btn btn-success btn-sm btn-block"><i class="fa fa-image fa-sw"></i> Ganti Foto</a>
								<a href="javascript:;" data-toggle="modal" data-target="#myModal3"><button class="btn btn-primary btn-sm btn-block" style="margin-top:3px"><i class="fa fa-edit fa-sw"></i> Edit Profile</button></a>
							<?php
								}else{
								
								if($this->session->level == "admin"){
									if($rows['foto'] == ''){	
								?>
									<a href="<?php echo base_url();?>members/sinkronfoto/<?php echo $this->uri->segment('3') . "/" . urlencode($rows['email']);?>" class="btn btn-primary btn-sm  btn-block"><i class="fa fa-envelope fa-sw"></i> Sinkron Foto</a>
									
								<?php
									}
								}
								?>
								<a href="<?php echo base_url();?>messages/read/<?php echo $this->uri->segment('3');?>" class="btn btn-primary btn-sm  btn-block"><i class="fa fa-envelope fa-sw"></i> Kirimkan Pesan</a>
								<a href="#" class="btn btn-primary btn-sm  btn-block"><i class="fa fa-link fa-sw"></i> Kontribusi File</a>
								<?php
							}
							?>
							<hr></div>
					</div>
				</div>
				<div class="col-md-9 animated fadeIn">
					<div style="margin-top:-20px" class="panel-body">
						<ul id="myTabs" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#tab1" id="tab1-tab" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true"><span class="hidden-xs">Detail Profile</span><span class="visible-xs"><i class="fa fa-user fa-sw"></i></span></a>
							</li>
						</ul>
						<br>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade active in" id="tab1" aria-labelledby="tab1-tab">
								<div class="box-body">
									<dl class="dl-horizontal">
										<dt>No Pendaftaran</dt>
										<dd><?php echo $rows['username'];?></dd>
										<dt>Nama Lengkap</dt>
										<dd><?php echo $rows['nama_lengkap'];?></dd>
										<dt>Alamat Email</dt>
										<?php if($this->session->username == $rows['username'] or $this->session->level == "admin"){
										?>
										<dd><span style="color:red"><?php echo $rows['email'];?></span></dd>
										<dt>No Telpon</dt>
										<dd><?php echo $rows['no_telp']; ?></dd>
										<?php
										}else{
										?>
										<dd><span style="color:red"><i>Tidak Di Publikasikan</i></span></dd>
										<dt>No Telpon</dt>
										<dd><span style="color:red"><i>Tidak Di Publikasikan</i></span></dd>
										<?php
										} ?>
										
										<dt>Jenis Kelamin</dt>
										<dd><?php echo $rows['jkel'];?></dd>
										<dt>Tanggal Lahir</dt>
										<dd><?php echo $rows['tgllahir'];?></dd>
										<dt>Alamat Lengkap</dt>
										<dd><?php echo $rows['alamat'];?></dd>
										
										<hr style="margin-top: 10px; margin-bottom: 10px; border-top: 1px solid #e3e3e3;">
										<dt>Login Terakhir</dt>
										<dd><i><?php echo $rows['last_login'];?></i></dd>
										<dt>Website / Blog</dt>
										<dd><i>
										<?php if ($rows['website'] <> ''){ echo $rows['website'];}?>
										</i></dd>
										<dt>Update Profile</dt>
										<dd><span style="color:red"><?php echo $rows['updateprofile'];?> dari 3 Kali</span><br>
										<small style="color:#000"><i>(Maksimal Update Profile Hanya 3 Kali, ganti foto juga termasuk)</i></small></dd>
										<dt>Status Account</dt>
										<?php 
										if ($rows['level'] == 'premium'){ 
											if (strtotime($rows['expireddate']) < date('Y-m-d')){
												?>
												<dd><span style="color:red;">Free Members (expired premium on <?php echo date('Y-m-d');?>)</span></dd>
												<?php
											}else{
												?>
												<dd><span style="color:green;">Premium Members</span></dd>
												<?php
											}
										}elseif($rows['level'] == 'admin'){
										?>
											<dd><span style="color:green;">Premium Members</span></dd>
										<?php
										}else{ ?>
										<dd><span style="color:red;">Free Members</span></dd>
										<?php } ?>
										<?php if($this->session->username == $rows['username'] or $this->session->level == "admin"){
										?>
										<dt>Tgl Upgrade Premium</dt> <dd><?php echo $rows['upgradedate']; ?></dd>
										<dt>Tgl Expired Premium</dt> <dd><?php echo $rows['expireddate']; ?></dd>
										<dt>Paket Premium terakhir</dt> 
										<?php 
										if ($rows['lastpackage'] == 1) {
											echo "<dd>premium 1 bulan</dd>"; 
										}elseif ($rows['lastpackage'] == 2) {
											echo "<dd>premium 3 bulan</dd>";
										}elseif ($rows['lastpackage'] == 3) {
											echo "<dd>premium 6 bulan</dd>";
										}elseif ($rows['lastpackage'] == 4) {
											echo "<dd>premium 1 tahun</dd>";
										}elseif ($rows['lastpackage'] == 5) {
											echo "<dd>premium 2 tahun</dd>";
										}elseif ($rows['lastpackage'] == 9) {
											echo "<dd>premium permanent</dd>";
										}else{
											echo "<dd>belum pernah upgrade</dd>";
										}
										
										}
										?>
										
										<dt>Waktu Join</dt> 
										<?php
											$date1 = date($rows['startjoin']);
											$date2 = date("Ymd");

											$diff = abs(strtotime($date2) - strtotime($date1));

											$years = floor($diff / (365*60*60*24));
											$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
											$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

											if ($years > 0){
												$join = $years . " Tahun"; 
											}else{
												$join = $months . " Bulan";
											}
										?>
										<dd><?php echo $join; ?> lalu</dd>
										
									</dl>
								</div>
							</div>
							
							
						</div>
					</div>
					<script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };
       function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;
        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };
        request.open('GET', url, true);
        request.send(null);
        request.send(null);
      }
      function doNothing() {}
    </script>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Form Login -->
  <!-- Trigger the modal with a button -->

	<!-- Modal -->
	<?php
	if ($rows['updateprofile'] < 3){
	 $attributes = array('class'=>'form-horizontal','role'=>'form');
	 echo form_open_multipart('members/gantifoto',$attributes); 
	?>
	<div class="modal fade animated bounceIn" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h5 class="modal-title" id="myModalLabel">Ganti Foto Profile?</h5>
        </div><center>
        <div class="modal-body">
              <div class="form-group">
                <center style="color:#8a8a8a">Recomended (200 Kb atau 600 x 600) </center><br>
                  <label for="inputEmail3" class="col-sm-2 control-label">Pilih Foto</label>
                  <div style="background:#fff;" class="input-group col-sm-8">
                      <span class="input-group-addon"><i class="fa fa-image fa-fw"></i></span>
                      <input style="text-transform:lowercase;" type="file" class="form-control" name="f">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-offset-2">
					  <input type="hidden" name="updtprfl" value="<?php echo $rows['updateprofile'];?>">
                      <button type="submit" name="submit" class="btn btn-primary">Upload Foto</button>
                  </div>
              </div>
          </form>
          <div style="clear:both"></div>
        </div>
        </center>
      </div>
    </div>
	</div>
	<?php 
	echo form_close();
    $attributes = array('class'=>'form-horizontal','role'=>'form');
    echo form_open_multipart('members/editprofile',$attributes); 
	?>
	<div class="modal fade animated bounceIn" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h5 class="modal-title" id="myModalLabel">Edit Profile</h5>
        </div>
        <div class="modal-body">
              <div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">Nama Lengkap</label>
							<div style="background:#fff;" class="input-group col-lg-6">
								<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
								<input type="text" class="required form-control" minlength="10" name="nama_lengkap" value="<?php echo $rows['nama_lengkap'];?>"></div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Alamat Email</label>
							<div style="background:#fff;" class="input-group col-lg-6">
								<span class="input-group-addon"><b><i class="fa fa-envelope fa-fw"></i></b></span>
								<input type="text" class="required email form-control" name="email" value="<?php echo $rows['email'];?>"  readonly>
								<label for="alamat_email" generated="true" style="color:red;">&nbsp; alamat email tidak bisa diganti</label></div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Password</label>
							<div style="background:#fff;" class="input-group col-lg-5">
								<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
								<input type="password" class="required number form-control" name="password" minlength="6">
								<label for="alamat_email" generated="true" style="color:red;">&nbsp; kosongkan jika tidak ingin ganti password</label></div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">No Telpon</label>
							<div style="background:#fff;" class="input-group col-lg-5">
								<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
								<input type="text" class="required number form-control" name="no_telp" value="<?php echo $rows['no_telp']; ?>"  minlength="11"></div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Jenis Kelamin</label>
							<div style="background:#fff;" class="input-group col-lg-5">
								<span class="input-group-addon"><i class="fa fa-venus-mars fa-fw"></i></span>
								<select class="required form-control" name="jkel">
									<?php
									if ($rows['jkel'] == 'Perempuan'){
										echo "<option>Laki-laki</option><option selected>Perempuan</option>";
									}else{
										echo "<option selected>Laki-laki</option><option>Perempuan</option>";
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Tanggal Lahir</label>
							<div style="background:#fff;" class="input-group col-lg-5">
								<span class="input-group-addon"><i class="fa fa-calendar-o fa-fw"></i></span>
								<input type="date" name="tgllahir" value="<?php echo $rows['tgllahir']; ?>" class="required form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Website / Blog</label>
							<div style="background:#fff;" class="input-group col-lg-5">
								<span class="input-group-addon"><i class="fa fa-television fa-fw"></i></span>
								<input type="text" name="website" class="required form-control" value="<?php echo $rows['website']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Alamat Lengkap</label>
							<div style="background:#fff;" class="input-group col-lg-8">
								<span class="input-group-addon"><i class="fa fa-hotel fa-fw"></i></span>
								<textarea class="required form-control" name="alamat" style="height:90px" minlength="20"><?php echo $rows['alamat'];?></textarea>
							</div>
						</div>
              <div class="form-group">
                  <div class="col-sm-offset-2">
					  <input type="hidden" name="updtprfl" value="<?php echo $rows['updateprofile'];?>">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
              </div>
          </form>
          <div style="clear:both"></div>
        </div>
      </div>
    </div>
	</div>
	<?php
	echo form_close();
	}else{  ?>
		<div class="modal fade animated bounceIn" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h5 class="modal-title" id="myModalLabel">Peringatan !!!</h5>
        </div><center>
        <div class="modal-body">
              <div class="form-group">
               Mohon Maaf,<br>
               Anda tidak bisa memperbarui profile lagi karena sudah mencapai batas 3x update.<br/>
			   Mohon hubungi administrator (Wildan A.R) jika pembaruan profile anda bersifat urgent.
              </div>
              <div class="form-group">
                 <center>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </center>
              </div>
          </form>
          <div style="clear:both"></div>
        </div>
        </center>
      </div>
    </div>
	</div>
	<?php
	}
	?>
	<!-- Modal -->

<!-- Akhir Form Login -->

