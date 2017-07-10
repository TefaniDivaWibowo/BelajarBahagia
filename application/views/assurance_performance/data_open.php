<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Open
        <!--<small>advanced tables</small>-->
      </h1>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <!-- /.box-header -->
            <!-- form start -->

            <form method="POST" action="" class="formSearch">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Masukkan Nomor NTE</label>

                  <div class="col-sm-10">
                    <input id="nosn" type="text" name="sn" placeholder="No NTE" class="form-control">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </form>
          </div>

          <div class="box">
            <!--<div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>-->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Serial Number</th>
                  <th>Nama Vendor</th>
                </tr>
                </thead>
                <tbody class="data">
                  <?php
                    $no = 0;
                        foreach($data_sn as $u){
                          $no++;

                    ?>
                    <tr>
                      <td><?= $no;?></td>
                      <td><?= $u['SN'];?></td>
                      <td><?= $u['Nama_Vendor'];?></td>
                    </tr>
                    <?php
                    }
                  ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No.</th>
                  <th>Serial Number</th>
                  <th>Nama Vendor</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->