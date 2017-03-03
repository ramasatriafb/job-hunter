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
            <li class="active">Data Perusahaaan</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
          
              <div class="box">
                <div class="box-header">
                  <h2>Perusahaaan</h2>
            
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                        <th>Waktu Create</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                      <tbody>
                     <?php 
                    $no=0;
                    $hal=$this->uri->segment(3);
                    $no=$no+$hal;
                      if(isset($perusahaan)){ 
                      foreach($perusahaan as $data){ 
                      
                      $no++;
                      ?>
                      <tr>
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $data->email; ?> </td>
                    <td> <?php echo $data->nama; ?> </td>
                    <td> <?php echo $data->alamat; ?> </td>
                    <td> <img src="<?php if ($data->foto==null) {
            echo base_url("assets/images/Profil.jpg");
            }else{
             echo base_url("$data->foto") ;
             } ?>" style="width:180px;height:200px;" alt=" " class="img-responsive" /> </td>
               <td> <?php echo $data->waktu_create; ?> </td>
                   
                    <td><a class="btn btn-block btn-danger" href="<?php echo site_url("backend/perusahaan/delete/$data->id"); ?>" onClick="return doconfirm();">
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
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Foto</th>
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