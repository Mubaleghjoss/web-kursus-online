<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="post text">
				<div class="col-md-8">
					<div class="alert alert-success">
						<strong>Members : Forget Password</strong>
					</div>
					<?php
					 $attributes = array('class'=>'form-horizontal','role'=>'form');
					 echo form_open_multipart('login/lupapassword',$attributes); 
					?>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">Alamat Email</label>
							<div style="background:#fff;" class="input-group col-lg-6">
								<span class="input-group-addon"><b><i class="fa fa-envelope fa-fw"></i></b></span>
								<input type="text" class="required email form-control" name="email">
							</div>
						</div>
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