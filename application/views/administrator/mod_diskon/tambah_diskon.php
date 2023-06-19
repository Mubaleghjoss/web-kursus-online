<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Tambah Diskon</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->haladmin . '/tambah_diskon/',$attributes); 
             
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                   <tbody>
                      <input type='hidden' name='id' value='$rows[id]'>
                      <tr><th scope='row' width='120px'>Tanggal Mulai</th><td><input type='date'  name='tgl_mulai' ></td></tr>
                      <tr><th scope='row'>Tanggal Akhir</th><td><input type='date'  name='tgl_akhir'></td></tr>
                       <tr><th scope='row'>Aktif </th>        <td>"; 
                        echo "<input type='radio' name='f' value='Y' checked> Ya &nbsp; <input type='radio' name='f' value='N'> Tidak"; 
                        
                       echo "</td></tr>
                    </tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='../home'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();