<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="post text">
				<div class="alert alert-success">
					<strong>Buat Topic Baru</strong>
				</div>
				<?php 
				$attributes = array('class'=>'form-horizontal','role'=>'form');
				echo form_open_multipart('forum/newthread',$attributes); 
				?>
				<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
						<div class="col-sm-5">
							<div style="background:#fff;" class="input-group col-sm-7">
								<span class="input-group-addon"><i class="fa fa-th fa-fw"></i></span>
								<select class="required form-control" name="a">
									<option value="" selected="">- Pilih Kategori -</option>
									<option value="1">SHARE</option>
									<option value="2">TANYA</option>
									<option value="3">LOWKER</option>
									<option value="4">PROJECT</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
						<div class="col-sm-9">
							<div style="background:#fff;" class="input-group col-sm-8">
								<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
								<input type="text" class="required form-control" name="b" minlength="20"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Isi Topic</label>
						<div class="col-sm-10">
							<div style="background:#fff;" class="input-group col-lg-12">
								<span class="input-group-addon"><i class="fa fa-hotel fa-fw"></i></span>
								<textarea class="required form-control" name="c" style="height:180px"></textarea>							<br/>							*NB : Jika anda ingin taruh attachment upload saja di hosting lain seperti 4shared, mediafire, dll. atau ingin attach screenshoot berupa gambar, silahkan upload di <a href="https://prnt.sc/">https://prnt.sc/</a> kemudian taruh (paste) link hasil uploadnya ke dalam isi topic.					
							</div>
						</div>
					</div>					<br/>
					<br>
					<div class="form-group">
						<div class="col-sm-offset-2">
							<button type="submit" name="submit" class="btn btn-primary btn-sm">Kirimkan Topic</button>
						</div>
					</div>
				<?php
					echo form_close();
				?>
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