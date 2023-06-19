<?php
	$baca = $rows['dibaca']+1;	
	$total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $rows['id_berita'], 'aktif' => 'Y'))->num_rows();
?>	

<div class="container">
			<div class="row">
				<div class="main--content col-md-8" data-sticky-content="true">
					<div class="sticky-content-inner">
						<div class="post--item post--single post--title-largest pd--30-0">
							<div class="post--info">
								<div class="title" style="padding-bottom:4px;">
									<h2 class="h4"><?php echo $rows['judul'];?></h2>
								</div>
								<ul class="nav meta" style="padding-bottom:4px;">
										<a href="#"><?php echo "$rows[nama_lengkap]"; ?></a>
										<a href="#"><?php echo tgl_indo($rows['tanggal']).", $rows[jam]"; ?></a>
										<span><i class="fa fm fa-eye"></i><?php echo $rows['dibaca']; ?></span>
									
								</ul>
							</div>
							<div class="post--img" style="padding-bottom:15px;">
							<?php 
								if ($rows['gambar'] !=''){ echo "<a href='#' class='thumb'><img style='width:100%' src='".base_url()."asset/foto_berita/$rows[gambar]' alt='$rows[judul]' /></a>"; }
								if ($rows['keterangan_gambar'] !=''){ echo "<center><p><i><b>Keterangan Gambar :</b> $rows[keterangan_gambar]</i></p></center><br>"; }
							
								if ($rows['youtube']!=''){
									echo "<h4>Video Terkait:</h4>";
									if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $rows['youtube'], $match)) {
										echo "<iframe width='100%' height='350px' id='ytplayer' type='text/html'
											src='https://www.youtube.com/embed/".$match[1]."?rel=0&showinfo=1&color=white&iv_load_policy=3'
											frameborder='0' allowfullscreen></iframe><div class='garis'></div><br/>";
									} 
								}
							?>
							</div>
							<div class="post--content">
								<?php
								echo "$rows[isi_berita]"; 
								?>
							</div>
						</div>
						<div class="ad--space pd--20-0-40">
							<?php
							$ia = $this->model_utama->view_ordering_limit('iklantengah','id_iklantengah','ASC',8,1)->row_array();
							echo "<a href='$ia[url]' target='_blank'>";
								$string = $ia['gambar'];
								if ($ia['gambar'] != ''){
									if(preg_match("/swf\z/i", $string)) {
										echo "<embed style='margin-top:-10px' src='".base_url()."asset/foto_iklantengah/$ia[gambar]' width='100%' height=90px quality='high' type='application/x-shockwave-flash'>";
									} else {
										echo "<img style='margin-top:-10px; margin-bottom:5px' width='100%' src='".base_url()."asset/foto_iklantengah/$ia[gambar]' title='$ia[judul]' class='center-block'/>";
									}
								}
							echo "</a>";
						?>
						</div>
						<div class="post--tags">
							<ul class="nav">
								<li>
									<span><i class="fa fa-tags"></i></span>
								</li>
									<?php
									$tags = (explode(",",$rows['tag']));
									$hitung = count($tags);
									for ($x=0; $x<=$hitung-1; $x++) {
										if ($tags[$x] != ''){
											echo "<li><a href='".base_url()."tag/detail/$tags[$x]'>$tags[$x]</a></li>";
										}
									}
								?>
								
							</ul>
						</div>
						
					</div>
				</div>
				<?php include "sidebar_kanan.php";  ?>
			</div>
		</div>
