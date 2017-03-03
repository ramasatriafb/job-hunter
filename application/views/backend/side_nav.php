 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
               <li class="treeview">
              <a href="<?php echo site_url('backend/dashboard'); ?>">
                <i class="fa fa-dashboard"></i> <span>Beranda</span> 
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs"></i>
                <span>Pilihan</span>
                 <i class="fa fa-angle-left pull-right"></i>
               </a>
                <ul class="treeview-menu">
                <li><a href="<?php echo site_url('backend/user_manajemen'); ?>"><i class="fa fa-circle-o"></i> User </a></li>
               <li><a href="<?php echo site_url('backend/user_administrator'); ?>"><i class="fa fa-circle-o"></i> User Administrator </a></li>
                <li><a href="<?php echo site_url('backend/user_administrator/ganti_pass'); ?>"><i class="fa fa-circle-o"></i> Ganti Password </a></li>
              </ul>
              </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Data Master</span>
                 <i class="fa fa-angle-left pull-right"></i>
               </a>
                <ul class="treeview-menu">
                <li><a href="<?php echo site_url('backend/pelamar'); ?>"><i class="fa fa-circle-o"></i> Pelamar</a></li>
                <li><a href="<?php echo site_url('backend/perusahaan'); ?>"><i class="fa fa-circle-o"></i> Perusahaan</a></li>
                
              </ul>
              </li>
             <li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Data Transaksi</span>
                <i class="fa fa-angle-left pull-right"></i>
               </a>
                <ul class="treeview-menu">
               <li><a href="<?php echo site_url('backend/daftar_lamaran'); ?>"><i class="fa fa-circle-o"></i> Daftar Lamaran </a></li>
                <li><a href="<?php echo site_url('backend/daftar_bookmark'); ?>"><i class="fa fa-circle-o"></i> Daftar Bookmark </a></li>
              </ul>
              </li>
            </ul>
        </section>
        <!-- /.sidebar -->
      </aside>