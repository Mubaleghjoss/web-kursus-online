<div class="container">
	<div class="row">
		<div class="main--content col-md-8" data-sticky-content="true">
			<div class="sticky-content-inner">
				<div class="post--item post--single post--title-largest pd--30-0">
					<div class="post--img">
					<?php 
						if ($rows['gambar'] !=''){ echo "<a href='#' class='thumb'><img style='width:100%' src='".base_url()."asset/foto_berita/$rows[gambar]' alt='$rows[judul]' /></a>"; }
						
					
					?>
				<div class="post--info">
					<div class="title" style="padding-bottom:4px; color:black;">
						<h2 class="h2"><?php echo $rows['judul'];?></h2>
					</div>
				</div>
				</div>
					<div class="post--content">
						<?php
						echo "$rows[isi_halaman]"; 
						?>
					</div>
				</div>
				<div class="post--social pbottom--30">
							
						</div>
						</div>
				</div>
				<div class="col-md-4 hidden-xs">
					<?php
					$record = $this->model_app->view_where_ordering('halamanstatis',"id_halaman = 1 or id_halaman = 2",'id_halaman','ASC');
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
			</div>
		</div>