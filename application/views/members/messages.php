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
											<h4><?php echo $r['nama_lengkap'];?><small><i class="fa fa-clock-o"></i> <?php echo $r['tanggal'];?></small></h4>
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