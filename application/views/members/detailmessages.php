<div id="posts">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="post text">
					<div class="alert alert-success">
					<?php
					foreach ($user->result_array() as $rr) {
					?>
						<strong>Percakapan - <?php echo $rr['nama_lengkap'];?></strong>
					<?php
					}
					?>
					</div>
					<div class="hidden-xs col-md-4">
						<div class="list-group">
							<div class="panel panel-success">
								<div class="panel-heading">
									<h3 class="panel-title">Pesan Terbaru</h3>
								</div>
								<div class="panel-body">
									<ul class="menu-message">
										<?php
										foreach ($pesan1->result_array() as $r) {
											$isi = substr($r['isi_pesan'],0,45); 
											$isi = substr($r['isi_pesan'],0,strrpos($isi," "));
							
											if($r['foto'] == ''){
												$foto = "blank.jpg";
											}else{
												$foto = $r['foto'];
											}
										?>
										<li>
											<a href="<?php echo base_url() . "messages/read/" . $r['username'];?>">
											<div class="pull-left">
												
												<img width="40px" height="40px" src="<?php echo base_url();?>asset/foto_user/<?php echo $foto;?>" class="img-circle" alt="User Image">
											</div>
											<h4><?php echo $r['nama_lengkap'];?></h4>
											<p>
												<?php echo $isi . "..";?>
											</p>
											</a>
										</li>
										<?php
										}
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<table style="background:#fff; border-radius:6px;" class="table table-hover animated fadeIn">
						<form action="<?php echo base_url() . "messages/read/" . $this->uri->segment('3');?>" method="POST" id="form_pesan">
						<thead>
						<tr>
							<input type="hidden" name="ci_csrf_token" value="">
							<input name="penerima" type="hidden" value="<?php echo $this->uri->segment('3');?>">
							<td colspan="2" valign="top">
								<textarea id="komentar" name="message" class="required form-control textarea" onkeyup="auto_grow(this)" placeholder="Tuliskan Pesan Disini..." required=""></textarea>
								<br/>
								<input type="submit" class="btn btn-primary btn-sm pull-right" name="submit" value="Kirimkan Pesan"></td>
						</tr>
						</thead>
						<tbody>
						<?php
						foreach ($pesan2->result_array() as $s) {
						if($s['foto'] == ''){
							$foto = "blank.jpg";
						}else{
							$foto = $s['foto'];
						}
						?>
						<tr>
							<td width="80px;">
								<a href="<?php echo base_url() . "members/account/" . $s['username']?>"><img width="70px" src="<?php echo base_url() . "asset/foto_user/" . $foto;?>" class="img-circle img-thumbnail" alt="User Image"></a>
							</td>
							<td style="font-size:14px;" valign="top">
								<a href="<?php echo base_url() . "members/account/" . $s['username']?>"><?php echo $s['nama_lengkap'];?></a><a class="pull-right" href="<?php base_url() . "members/account/" . $s['username']?>"><small style="color:#428bca"><?php echo $s['tanggal'] . " " . $s['jam'];?></small></a><br>
								<small>Mengatakan :</small><br>
								<?php echo str_replace("\\r\\n", "<br/>",$s['isi_pesan']);?>
							</td>
						</tr>
						<?php
						}
						?>
						</tbody>
						</table>
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
</div>