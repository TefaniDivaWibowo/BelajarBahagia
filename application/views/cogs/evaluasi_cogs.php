<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Evaluasi COGS
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
          <!-- <div class="box box-info"> -->
            <!-- /.box-header -->
            <!-- form start -->

              <div class="box-body">
                <div class="form-group">
                
                  <!-- <label for="inputEmail3" class="col-sm-1 control-label" style="padding-top: 7px;">BULAN</label> -->
                  <form method="POST" action="" >
                    <div class="col-sm-3">
                      <div class="form-group">
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">All Area</option>
                          <option selected="selected">Jember</option>
                          <option selected="selected">Kediri</option>
                          <option selected="selected">Madiun</option>
                          <option selected="selected">Malang</option>
                          <option selected="selected">Pasuruan</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Year to Date</option>
                            <?php
                            $monthName  = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                            for ($i=0; $i < count($monthName); $i++) {
                              echo "<option value=". $mn .">" . $monthName[$i] . "</option>";
                            }
                            //date("F Y");
                            ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <input type="submit" name="submit" class="btn btn-primary" value="Search" >
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
          <!-- </div> -->
            <!-- /.box-header -->
            <!-- form start -->
                  <?php
                    foreach ($cogs_klasifikasi as $a) {
                      $area         = $a['area'];
                    }
                  ?>

        <div class="col-md-4">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Fiber Zone Jatim 2 - <?=$area;?></h3>
            </div>
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Klasifikasi</th>
                  <th>Jumlah Pengeluaran</th>
                </tr>
                  <?php
                    $viewtotal  = 0;
                    $grandtotal = 0;
                    foreach ($cogs_klasifikasi as $a) {
                      $klasifikasi  = $a['klasifikasi'];
                      $total        = $a['total'];
                      $viewtotal    = number_format($total,2,",",".");

                       echo "<tr>
                            <td>";
                      echo $klasifikasi;
                      echo "</td>
                            <td>";
                      echo $viewtotal;
                      echo "</td>
                           </tr>";

                      $grandtotal   += $total;
                    }
                  ?>
                <tr>
                  <th>Grand Total</th>
                  <th>
                    <?php
                      $viewgrand    = number_format($grandtotal,2,",",".");
                      echo $viewgrand;
                    ?>
                  </th>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div id="chartdiv_evaluasi"></div>
        </div>

      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper