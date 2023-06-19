<div id="posts">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="post text">
					<div class="alert alert-success">
						<strong>Invoice - <?php echo $this->session->username;?></strong>
					</div>
					<div class="hidden-xs col-md-3">
						<div class="list-group">
							<div class="panel panel-success">
								<div class="panel-heading">
									<h3 class="panel-title">Invoice Terbaru</h3>
								</div>
								<div class="panel-body">
									<ul class="menu-message">
									<?php
									$x = 1;
									foreach ($invoice->result_array() as $r) { 
									$inv[$x] = $r['id_invoice'];
									$x++;
									echo "<li>
											<a href='". base_url() ."invoice/detail/". $r['id_invoice'] ."'>"; echo "Invoice #" . $r['id_invoice']; echo "<br/>
											Status : <i>". $r['status'] ."</i><div class='pull-right'>" . $r['tgl_invoice'] . "</div>
											"; echo "</a>
										</li>
										";
									}?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-9">
					<?php
					if ($this->uri->segment(3) <= 0 or $this->uri->segment(3) == ""){
						?>
							<iframe src="<?php echo base_url() . "invoice/detailinvoice/" .  $inv[1] . "/" . $this->session->username; ?>" style="width:100%; height: 700px;"></iframe>
						<?php
					}else{
						?>
							<iframe src="<?php echo  base_url() . "invoice/detailinvoice/" . $this->uri->segment(3) . "/" . $this->session->username; ?>" style="width:100%; height: 700px;"></iframe>
						<?php
					} 
					?>
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