<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>LIhat dan Balas Pesan Masuk</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->haladmin . '/detail_pesanmasuk/'.$rows['id_hubungi'],$attributes); 
          echo "<div class='col-md-12'>";
                    if (isset($_POST['submit'])){
                       echo "<div class='alert alert-success alert-dismissible fade in' role='alert'> 
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>×</span></button> <strong>Success!</strong> - Email success Terkirim ke $_POST[b].
                              </div>";
                    }
                  echo "<table class='table table-condensed table-bordered'>
                  <tbody>
					<tr><th width='120px' scope='row'>Email Pengirim</th>
					<td><select name='pengirim' class='form-control' required>";
					foreach ($sender->result_array() as $p){
						echo "<option value='". $p['id_sender'] ."'>".$p['email_sender']."</option>";
					} 
				  echo "</select></td>
					</tr>
                    <tr><th width='120px' scope='row'>Penerima</th> 
						<td><select name='penerima' class='form-control' required>
								<option value='1'>Belum verifikasi</option>	
								<option value='2'>Free Members</option>	
								<option value='3'>Expired Members</option>	
								<option value='4'>Not permanent Members</option>	
								<option value='5'>All Members</option>	
						</select></td>
					</tr>
                    <tr><th width='120px' scope='row'>Subjek Pesan</th>   <td><input type='text' class='form-control' name='subjek' value='$rows[subjek]' ></td></tr>
                    <tr><th scope='row'>Isi Pesan</th>                    <td><textarea class='form-control' name='isi' style='height:120px'></textarea></td></tr>
                    
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Kirimkan Balasan</button>
                    <a href='../home'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();