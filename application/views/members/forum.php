	<div class="contact--section pd--30-0">
		<div class="container">
			<div class="row">
				<div class="main--content col-md-12 col-sm-12" data-sticky-content="true">
					<div class="sticky-content-inner">
						
						<div class="alert alert-success">
							Forum Diskusi        
							<?php 
							if ($this->session->level <> ''){
							?>
							<a href="<?php echo base_url(); ?>forum/newthread"><button data-toggle="tooltip" data-placement="top" title="" style="float:right; margin-top:-5px" class="btn btn-primary btn-sm" data-original-title="Pastikan sudah melakukan pencarian agar topic anda tidak Repost (ada topic yang sama). Terima kasih.."><i class="fa fa-plus fa-fw"></i> Buat Topic</button></a>   
							<?php
							}
							?>
						</div>
						<div>
							<a style="margin-right:5px" class="btn btn-xs btn-success" href="<?php echo base_url(); ?>forum">All Topic</a> <i class="fa fa-chevron-right fa-fw"></i> <a class="btn btn-xs btn-info" style="margin-right:5px; text-transform:capitalize !important" href="<?php echo base_url(); ?>forum/topic/share">share</a><a class="btn btn-xs btn-info" style="margin-right:5px; text-transform:capitalize !important" href="<?php echo base_url(); ?>forum/topic/tanya">tanya</a><a class="btn btn-xs btn-info" style="margin-right:5px; text-transform:capitalize !important" href="<?php echo base_url(); ?>forum/topic/lowker">lowker</a><a class="btn btn-xs btn-info" style="margin-right:5px; text-transform:capitalize !important" href="<?php echo base_url(); ?>forum/topic/project">project</a>	
						</div>
		
						<table style="background:#fff; border-radius:6px;" class="table tblphpmu table-hover animated fadeIn">
							<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th class="hidden-xs">Oleh</th>
								<th>Dilihat</th>
								<th>Balasan</th>
								<th>Action</th>
							</tr>
							</thead>
							<?php
							  $nomor = $this->uri->segment(4);
							  foreach ($forum->result_array() as $r) {
								 
								if ($r['id_kategori'] == 1){
									$kategori = "<span style='color:green; font-weight:bold;'>[ SHARE ] </span>";
								}elseif($r['id_kategori'] == 2){
									$kategori = "<span style='color:blue; font-weight:bold;'>[ TANYA ] </span>";
								}elseif($r['id_kategori'] == 3){
									$kategori = "<span style='color:red; font-weight:bold;'>[ LOWKER ] </span>";
								}elseif($r['id_kategori'] == 4){
									$kategori = "<span style='color:purple; font-weight:bold;'>[ PROJECT ] </span>";
								}else{
									$kategori = "";
								}
								
								  $nomor++;
								  $baca = $r['dibaca']+1;	
								  $isi_forum =(strip_tags($r['isi_forum'])); 
								  $isi = substr($isi_forum,0,220); 
								  $isi = substr($isi_forum,0,strrpos($isi," ")); 
								  $judul = $r['judul']; 
								  $total_komentar = $this->model_utama->view_where('komentarforum',array('id_forum' => $r['id_forum']))->num_rows();
							?>
							<tbody>
							<tr>
								<td><?php echo $nomor; ?></td>
								<td><a style="color:#000" href="<?php echo base_url()."forum/read/$r[judul_seo]";?>" class="btn-link"><?php echo $kategori . $judul;?></a></td>
								<td class="hidden-xs"><?php echo "$r[nama_lengkap]"; ?></td>
								<td align="center"><?php echo $r['dibaca'];?></td>
								<td align="center"><?php echo $total_komentar; ?></td>
								<td width="5%" align="center">
									<a href="<?php echo base_url()."forum/read/$r[judul_seo]";?>"><button class="btn btn-success btn-sm"><i class="fa fa-comments fa-fw"></i></button></a>
								</td>
								<?php
								if ($r['username'] == $this->session->username){
								?>
								<td width="5%" align="center">
									<a href="<?php echo base_url()."forum/edit/$r[judul_seo]";?>"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square fa-fw"></i></button></a>
								</td>
								<td width="5%" align="center">
									<a href="<?php echo base_url()."forum/delete/$r[judul_seo]";?>"><button class="btn btn-danger btn-sm"><i class="fa fa-trash fa-fw"></i></button></a>
								</td>
								<?php
								}
								?>
							</tr>
							</tbody>
							<?php
							  }
							?>
						</table>
						
									
								<div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
											
									<ul class="pagination float--right">
										<li>
										<?php echo $this->pagination->create_links(); ?>
										</li>
									</ul>
									
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
