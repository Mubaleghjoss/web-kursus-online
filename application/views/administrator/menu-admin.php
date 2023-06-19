<section class="sidebar">          <!-- Sidebar user panel -->          <div class="user-panel">            <div class="pull-left image">            <?php $usr = $this
    ->model_app
    ->view_where('users', array(
    'username' => $this
        ->session
        ->username
))
    ->row_array();
if (trim($usr['foto']) == '')
{
    $foto = 'blank.jpg';
}
else
{
    $foto = $usr['foto'];
} ?>            <img src="<?php echo base_url(); ?>/asset/foto_user/<?php echo $foto; ?>" class="img-circle" alt="User Image">            </div>            <div class="pull-left info">              <?php echo "<p>$usr[nama_lengkap]</p>"; ?>              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>            </div>          </div>          <!-- sidebar menu: : style can be found in sidebar.less -->          <ul class="sidebar-menu">            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU <span class='uppercase'><?php echo $this
    ->session->level; ?></span></li>            <li><a href="<?php echo base_url() . "$this->haladmin/"; ?>home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>            <li class="treeview">              <a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Menu Utama</span><i class="fa fa-angle-left pull-right"></i></a>              <ul class="treeview-menu">              <?php $cek = $this
    ->model_app
    ->umenu_akses("identitaswebsite", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/identitaswebsite'><i class='fa fa-circle-o'></i> Identitas Website</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("halamanbaru", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/halamanbaru'><i class='fa fa-circle-o'></i> Halaman Baru</a></li>";
} ?>              </ul>            </li>            
			
<li class="treeview">              <a href="#"><i class="glyphicon glyphicon-pencil"></i> <span>Modul Forum</span><i class="fa fa-angle-left pull-right"></i></a>              <ul class="treeview-menu">              <?php $cek = $this
    ->model_app
    ->umenu_akses("forum", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/listforum'><i class='fa fa-circle-o'></i> Forum</a></li>";
} ?>              </ul>            </li>			<li class="treeview">              <a href="#"><i class="glyphicon glyphicon-pencil"></i> <span>Modul Blog</span><i class="fa fa-angle-left pull-right"></i></a>              <ul class="treeview-menu">              <?php $cek = $this
    ->model_app
    ->umenu_akses("listberita", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/listberita'><i class='fa fa-circle-o'></i> Artikel</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("kategoriberita", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/kategoriberita'><i class='fa fa-circle-o'></i> Kategori Artikel</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("tagberita", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/tagberita'><i class='fa fa-circle-o'></i> Tag Artikel</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("komentarberita", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/komentarberita'><i class='fa fa-circle-o'></i> Komentar Artikel</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("sensorkomentar", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/sensorkomentar'><i class='fa fa-circle-o'></i> Sensor Komentar</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("album", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/album'><i class='fa fa-circle-o'></i> Berita Foto</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("gallery", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/gallery'><i class='fa fa-circle-o'></i> Gallery Berita Foto</a></li>";
} ?>              </ul>            </li>                        <li class="treeview">              <a href="#"><i class="glyphicon glyphicon-play"></i> <span>Modul Video</span><i class="fa fa-angle-left pull-right"></i></a>              <ul class="treeview-menu">              <?php $cek = $this
    ->model_app
    ->umenu_akses("playlist", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/playlist'><i class='fa fa-circle-o'></i> Playlist Video</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("video", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/video'><i class='fa fa-circle-o'></i> Video</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("tagvideo", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/tagvideo'><i class='fa fa-circle-o'></i> Tag Video</a></li>";
} ?>              </ul>            </li>            <li class="treeview">              <a href="#"><i class="glyphicon glyphicon-object-align-left"></i> <span>Modul Web</span><i class="fa fa-angle-left pull-right"></i></a>              <ul class="treeview-menu">              <?php $cek = $this
    ->model_app
    ->umenu_akses("logowebsite", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/logowebsite'><i class='fa fa-circle-o'></i> Logo Website</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("templatewebsite", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/templatewebsite'><i class='fa fa-circle-o'></i> Template Website</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("background", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/background'><i class='fa fa-circle-o'></i> Background Website</a></li>";
} ?>              </ul>            </li>            <li class="treeview">              <a href="#"><i class="glyphicon glyphicon-blackboard"></i> <span>Modul Interaksi</span><i class="fa fa-angle-left pull-right"></i></a>              <ul class="treeview-menu">              <?php $cek = $this
    ->model_app
    ->umenu_akses("agenda", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/agenda'><i class='fa fa-circle-o'></i> Agenda</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("sekilasinfo", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/sekilasinfo'><i class='fa fa-circle-o'></i> Sekilas Info</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("jajakpendapat", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/jajakpendapat'><i class='fa fa-circle-o'></i> Jajak Pendapat</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("download", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/download'><i class='fa fa-circle-o'></i> Download Area</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("alamat", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/alamat'><i class='fa fa-circle-o'></i> Alamat Kontak</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("pesanmasuk", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/pesanmasuk'><i class='fa fa-circle-o'></i> Pesan Masuk</a></li>";
} ?>              </ul>            </li>            <li class="treeview">              <a href="#"><i class="fa fa-users"></i> <span>Modul Users</span><i class="fa fa-angle-left pull-right"></i></a>              <ul class="treeview-menu">              <?php $cek = $this
    ->model_app
    ->umenu_akses("manajemenuser", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/manajemenuser'><i class='fa fa-circle-o'></i> Manajemen User</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("manajemenmodul", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/manajemenmodul'><i class='fa fa-circle-o'></i> Manajemen Modul</a></li>";
} ?>              </ul>            </li>						<li class="treeview">              <a href="#"><i class="fa fa-line-chart"></i> <span>Modul Finance</span><i class="fa fa-angle-left pull-right"></i></a>              <ul class="treeview-menu">              <?php $cek = $this
    ->model_app
    ->umenu_akses("invoice", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/invoice'><i class='fa fa-dollar'></i> Invoice</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("diskon", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/diskon'><i class='fa fa-percent'></i> Diskon</a></li>";
}
$cek = $this
    ->model_app
    ->umenu_akses("pricelist", $this
    ->session
    ->id_session);
if ($cek == 1 or $this
    ->session->level == 'admin')
{
    echo "<li><a href='" . base_url() . "$this->haladmin/pricelist'><i class='fa fa-money'></i> Pricelist</a></li>";
} ?>              </ul>            </li>				
		
<li><a href="<?php echo base_url() . "$this->haladmin/"; ?>edit_manajemenuser/<?php echo $this
    ->session->username; ?>"><i class="fa fa-edit"></i> <span>Edit Profile</span></a></li>            <li><a href="<?php echo base_url() . "$this->haladmin/"; ?>logout"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>          </ul>        </section>
