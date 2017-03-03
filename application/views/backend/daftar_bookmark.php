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
            <li class="active">Data Bookmark Lowongan Kerja</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
          
              <div class="box">
                <div class="box-header">
                  <h2>Daftar Bookmark Lowongan Kerja</h2>
            
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul Lowongan</th>
                        <th>Nama Perusahaan</th>
                        <th>Nama Pelamar</th>
                        <th>Tanggal Buka Lowongan</th>
                        <th>Tanggal Tutup Lowongan</th>
                     
                      </tr>
                    </thead>
                      <tbody>
                     <?php 
                    $no=0;
                    $hal=$this->uri->segment(3);
                    $no=$no+$hal;
                      if(isset($daftar_bookmark)){ 
                      foreach($daftar_bookmark as $data){ 
                      
                      $no++;
                      ?>
                      <tr>
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $data->judul; ?> </td>
                    <td> <?php echo $data->nama_perusahaan; ?> </td>
                    <td> <?php echo $data->nama_pelamar; ?> </td>
               <td> <?php echo $data->tanggal_buka; ?> </td>
                     <td> <?php echo $data->tanggal_tutup; ?> </td>
              
                 
                 
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
                        <th>Judul Lowongan</th>
                        <th>Nama Perusahaan</th>
                        <th>Nama Pelamar</th>
                        <th>Tanggal Buka Lowongan</th>
                        <th>Tanggal Tutup Lowongan</th>
                     
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