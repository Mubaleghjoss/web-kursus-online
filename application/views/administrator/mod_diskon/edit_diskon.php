<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Diskon</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->haladmin . '/edit_diskon/',$attributes); 
              $date1 = date('Y-m-d',strtotime($rows['tgl_mulai']));
              $date2 = date('Y-m-d',strtotime($rows['tgl_akhir']));
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                   <tbody>
                      <input type='hidden' name='id' value='$rows[id]'>
                      <tr><th scope='row' width='120px'>Tanggal Mulai</th><td><input type='date'  name='tgl_mulai' value='$date1'></td></tr>
                      <tr><th scope='row'>Tanggal Akhir</th><td><input type='date'  name='tgl_akhir' value='$date2'></td></tr>
                       <tr><th scope='row'>Aktif </th>        <td>"; 
                       if ($rows['aktif']=='Y'){ 
                            echo "<input type='radio' name='f' value='Y' checked> Ya &nbsp; <input type='radio' name='f' value='N'> Tidak"; 
                       }else{ 
                            echo "<input type='radio' name='f' value='Y'> Ya &nbsp; <input type='radio' name='f' value='N' checked> Tidak"; 
                       } 
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