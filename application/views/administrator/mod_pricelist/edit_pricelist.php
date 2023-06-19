<?php 
    echo "<div class='col-md-12'>
              <div class='box box-info'>
                <div class='box-header with-border'>
                  <h3 class='box-title'>Edit Pricelist</h3>
                </div>
              <div class='box-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->haladmin . '/edit_pricelist/',$attributes); 
             
          echo "<div class='col-md-12'>
                  <table class='table table-condensed table-bordered'>
                   <tbody>
                      <input type='hidden' name='id' value='$rows[id_harga]'>
                      <tr><th scope='row' width='120px'>Harga</th><td><input id='harga' type='number'  name='a' value='$rows[harga]' onblur='harganett()' onchange='harganett()'></td></tr>
                      <tr><th scope='row' width='120px'>Deskripsi</th><td><input type='text'  name='b' value='$rows[deskripsi]'></td></tr>
                      <tr><th scope='row' width='120px'>Jumlah Bulan</th><td><input type='number'  name='i' value='$rows[jum_bulan]'></td></tr>
                      <tr><th scope='row'>Diskon </th>        <td>"; 
                       if ($rows['diskon']=='Y'){ 
                            echo "<input type='radio' name='c' value='Y' checked> Ya &nbsp; <input type='radio' name='c' value='N'> Tidak"; 
                       }else{ 
                            echo "<input type='radio' name='c' value='Y'> Ya &nbsp; <input type='radio' name='c' value='N' checked> Tidak"; 
                       } 
                       echo "</td></tr>
					  <tr><th scope='row'>Aktif </th>        <td>"; 
                       if ($rows['aktif']=='Y'){ 
                            echo "<input type='radio' name='d' value='Y' checked> Ya &nbsp; <input type='radio' name='d' value='N'> Tidak"; 
                       }else{ 
                            echo "<input type='radio' name='d' value='Y'> Ya &nbsp; <input type='radio' name='d' value='N' checked> Tidak"; 
                       } 
                       echo "</td></tr>
                      <tr><th scope='row' width='120px'>Jumlah Diskon</th><td><input id='diskon' type='number'  name='e' value='$rows[jum_diskon]' onblur='harganett()' onchange='harganett()'></td></tr>
                      <tr><th scope='row' width='120px'>Harga Nett</th><td><input id='nett' type='number'  name='f' value='$rows[nett]' readonly></td></tr>
             		</tbody>
                  </table>
                </div>
              
              <div class='box-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Update</button>
                    <a href='../home'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div></div>";
            echo form_close();