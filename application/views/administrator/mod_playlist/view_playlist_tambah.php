<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Playlist</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->haladmin . '/tambah_playlist',$attributes); 
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Playlist</th>   <td><input type='text' class='form-control' name='a'></td></tr>
                    <tr><th scope='row'>Level Membership</th>         <td><select name='l' class='form-control'><option>Free</option><option>Premium</option></select></td></tr>
                    <tr><th scope='row'>Deskripsi</th>         		  <td><textarea name='p' class='form-control'></textarea></td></tr>
					<tr><th scope='row'>Cover</th>                    <td><input type='file' class='form-control' name='b'></td></tr>
                    <tr><th scope='row'>Tag</th>                    <td><div class='checkbox-scroll'>";
						foreach ($tag as $tag){
							echo "<span style='display:block;'><input type=checkbox value='$tag[tag_seo]' name=f[]> $tag[nama_tag] &nbsp; &nbsp; &nbsp; </span>";
						}
                    echo "</div></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='../home'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();
