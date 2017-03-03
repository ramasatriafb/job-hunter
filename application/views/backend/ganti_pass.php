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
            <li><a href="#">Manajemen User</a></li>
            <li class="active">Data User</li>
          </ol>
        </section>

        <!-- Main content -->
<section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Pilih User Sistem</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                <?php echo form_open("backend/user_administrator/submit_ganti_pass"); ?>
                   
                  <div class="box-body">
                  <span class="text-danger"><?php echo validation_errors(); ?></span>
                  <div class="form-group">
                    <label>Password Lama</label>
                  <input name="pass_lama" class="form-control" type="password" required />
                 </div>
                  <div class="form-group">
                    <label>Password Baru</label>
                  <input name="pass_baru" class="form-control" type="password" required />
                 </div>
                 <div class="form-group">
                    <label>Konfirmasi</label>
                  <input name="konfirmasi" class="form-control" type="password" required />
                 </div>
                  
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
              </div>
              </div>

              </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </body>

<?php $this->load->view('backend/footer'); ?>