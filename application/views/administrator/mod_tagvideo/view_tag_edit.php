<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Tag Video</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->haladmin . '/edit_tagvideo',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value='$rows[id_tag]'>
                    <tr><th width='120px' scope='row'>Nama Tag</th>    <td><input type='text' class='form-control' name='a' value='$rows[nama_tag]' required></td></tr>
					<tr><th scope='row'>Ganti Cover</th>          <td><input type='file' class='form-control' name='c'><hr style='margin:5px'>";
                                                                   if ($rows['gambar']!=''){ echo " Gambar Saat ini : <a target='_BLANK' href='".base_url()."asset/img_playlist/$rows[gambar]'>$rows[gambar]</a>"; } echo "</td></tr>
                    
				  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='../home'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();