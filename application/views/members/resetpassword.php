<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="post text">
				<div class="col-md-8">
					<div class="alert alert-success">
						<strong>Members : Reset Password</strong>
					</div>
					<?php
					 $attributes = array('class'=>'form-horizontal','role'=>'form');
					 echo form_open_multipart('login/resetpassword/' . $this->uri->segment(3) . "/" . $this->uri->segment(4) ,$attributes); 
					?>
						<div class="form-group">
							<label for="pass1" class="col-sm-3 control-label">New Password</label>
							<div style="background:#fff;" class="input-group col-lg-6">
								<span class="input-group-addon"><b><i class="fa fa-qrcode fa-fw"></i></b></span>
								<input type="password" class="type new password" name="pass1">
							</div>
							
						</div>
						<div class="form-group">
						<label for="pass2" class="col-sm-3 control-label">Confirm New Password</label>
							<div style="background:#fff;" class="input-group col-lg-6">
								<span class="input-group-addon"><b><i class="fa fa-qrcode fa-fw"></i></b></span>
								<input type="password" class="retype new password" name="pass2">
							</div>
						</div>
						<input type="hidden" name="ses" value="<?php echo $this->uri->segment(3);?>">
						<br/>
						<div style="color:red;">
						<?php
						echo $title;
						?>
						</div>
						<br/>
						<button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
						
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