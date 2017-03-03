<?php $this->load->view('backend/header'); ?>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Left side column. contains the logo and sidebar -->
    
<?php $this->load->view('backend/side_nav'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Beranda
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Beranda</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
          <div class="col-xs-12">
           <div class="box box-primary">
                <div class="box-header with-border">
                 <div class="box-body"> <?php echo form_open("backend/dashboard/cari_tahun"); ?>
                  <div class="form-group">
                    <label>Pilih Tahun </label>
                     <select name = "tahun" class="form-control select2" style="width: 50%;">
                     <?php foreach($tahun as $each)
                      {
                          ?>
                          <option value="<?php echo $each->tahun; ?>"><?php echo $each->tahun; ?></option>
                          <?php
                      }
                      ?>
                    </select>
                  <button  type="submit" class="btn btn-primary"><i class=" fa fa-fw fa-search"></i></button>
                    </div>
                   
                </div>
                </form>
               
                  <h3 class="box-title">  <i class="fa fa-bar-chart-o"> Pelamar & Perusahaan Yang Terdaftar <?php echo $now;?></i>
                <div class="box-body">
                  <div id="donut-chart" style="height: 1000px width:1000px;"></div>
                </div><!-- /.box-body-->
                 
              </div><!-- /.box -->
              </div>
             </div><!-- /.row -->
             </section>
      </div><!-- ./box-body -->
                
                
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Main row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- ./wrapper -->
    </body>
<?php $this->load->view('backend/footer'); ?>