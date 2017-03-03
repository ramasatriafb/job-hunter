<?php $this->load->view('backend/header'); ?>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Left side column. contains the logo and sidebar -->
    
<?php $this->load->view('backend/side_nav'); ?>

  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User
            <small>Super Administrator</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Pilihan</a></li>
            <li class="active">Data User Administrator</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
          
              <div class="box">
                <div class="box-header">
                  <h2>Manajemen User Administrator</h2>
             <div class="col-xs-2"><tr><td><a href="<?php echo site_url('backend/user_administrator/tambah_user'); ?>"class="btn btn-block btn-primary">Tambah</a></td></tr></div> 
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Hak Akses</th>
                        <th>Waktu Create</th>
                        
                        <th>Action</th>
                      </tr>
                    </thead>
                      <tbody>
                     <?php 
                    $no=0;
                    $hal=$this->uri->segment(3);
                    $no=$no+$hal;
                      if(isset($user_admin)){ 
                      foreach($user_admin as $data){ 
                      
                      $no++;
                      ?>
                      <tr>
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $data->nama; ?> </td>
                    <td> <?php echo $data->email; ?> </td>
                    <td> <?php echo $data->role; ?></td>
                    <td> <?php echo $data->waktu_create; ?> </td>
                    <td><a class="btn btn-block btn-primary btnx-s" href="<?php $status='Disactivated'; echo site_url("backend/user_manajemen/update_status/$data->id_role/$status"); ?>"><i class="fa fa-fw fa-edit"></i> </a><a class="btn btn-block btn-danger" href="<?php echo site_url("backend/user_manajemen/delete/$data->id_role/$data->id_admin"); ?>" onClick="return doconfirm();">
                <i class=" fa fa-fw fa-remove"></i> </a> </td>
                 
                </tr>
                     <?php
                    }
                    }
                    ?>
                    <script>
function doconfirm()
{
    job=confirm("Apakah Anda yakin untuk menghapus data ini ?");
    if(job!=true)
    {
        return false;
    }
}
</script>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                       <th>Email</th>
                        <th>Hak Akses</th>
                        <th>Waktu Create</th>
                      <th>Action</th>
                        </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      </div><!-- /.content-wrapper -->

      <!-- ./wrapper -->
    </body>
<?php $this->load->view('backend/footer'); ?>