<!--Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard COGS
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
          <!-- <div class="box box-info"> -->
            <!-- /.box-header -->
            <!-- form start -->

              <!-- <div class="box-body">
                <div class="form-group">
                
                  <label for="inputEmail3" class="col-sm-1 control-label" style="padding-top: 7px;">BULAN</label>

                  <form method="POST" action="" >
                    <div class="col-sm-4">
                      <div class="form-group">
                        <select class="form-control select2" style="width: 100%;"> -->
                          <!--<option selected="selected"></option>-->
                          
                            <!-- /*$monthName  = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                            for ($i=0; $i < count($monthName); $i++) { 
                              $mn   = 1 + $i;
                              if ($mn == date("m")) {
                                echo "<option selected value=". $mn .">" . $monthName[$i] . "</option>";
                              }
                              else {
                                echo "<option value=". $mn .">" . $monthName[$i] . "</option>";
                              }
                            }*/
                            //date("F Y"); -->
                          
                        <!-- </select>
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <input type="submit" name="submit" class="btn btn-primary" value="Search" >
                    </div>
                  </form>
                </div>
              </div> -->
              <!-- /.box-body -->
              <!-- /.box-footer -->
          <!-- </div> -->
            <!-- /.box-header -->
            <!-- form start -->


          <div class="box">
            <div id="chartdiv"></div>  
          </div>
          
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">COGS FIBER ZONE JATIM II YTD <?= date("F Y")?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="text-align: center;">AREA</th>
                  <th style="text-align: center;">COGS</th>
                  <th style="text-align: center;">REVENUE</th>
                  <th style="text-align: center;">NET INCOME</th>
                  <th style="text-align: center;">TARGET YTD <?= date("Y")?></th>
                  <th style="text-align: center;">PERSENTASE (%)</th>
                </tr>
                <?php
                  foreach ($target as $b) {
                    $number   = $b['target'];
                    $onesix   = 1000000;
                    $semfin   = $number * $onesix;
                    $final    = number_format($semfin,2,",",".");
                    /*$datatarget   = array();
                    array_push($datatarget, $final);

                    echo "<pre>";
                    print_r($datatarget);
                    echo "</pre>";*/  

                    $array1[]   = $final;
                    $array2[]   = $semfin;
                  }

                  $net  = [];
                  $cfz2 = 0;
                  $rfz2 = 0;
                  $ifz2 = 0;
                  $tfz2 = 0;
                  $p    = 0;
                  $kali = 100;
                  $i    = 0;
                  foreach($fz2_ytd_rev as $key=>$value){
                    
                    $totalrev   = $value->rev;
                    $negone   = -1;
                    $finalrev   = $totalrev * $negone;
                    if($value->area == $fz2_ytd_cogs[$key]->area){
                      array_push($net,($finalrev-$fz2_ytd_cogs[$key]->cogs));
                    }
                      $cogs     = $fz2_ytd_cogs[$key]->cogs;
                      $fcogs    = number_format($cogs,2,",",".");
                      $frev     = number_format($finalrev,2,",",".");
                      $netin    = number_format($net[$key],2,",",".");

                      echo "<tr>
                            <td>";
                      echo $value->area;
                      echo "</td>
                            <td style='text-align: center;'>";
                      echo $fcogs;
                      echo "</td>
                            <td style='text-align: center;'>";
                      echo $frev;
                      echo "</td>
                            <td style='text-align: center;'>";
                      echo $netin;
                      echo "</td>
                           <td style='text-align: center;'>";                 
                      echo $array1[$i];

                      /*for ($i=0; $i < count($net); $i++) { 
                        echo "Net Income: " . $net[$i] . "<hr>";
                      }*/

                      $persentase   = round(($frev/$array1[$i])*$kali);

                      echo "</td>
                           <td style='text-align: center;'>";                 
                      echo $persentase . "%";
                      echo "</td>
                           </tr>";

                      $cfz2  += $cogs;
                      $rfz2  += $finalrev;
                      $ifz2  += $net[$key];
                      $tfz2  += $array2[$i];

                      $i++;
                  }
                ?>
                <tr>
                  <td>FIBER ZONE JATIM 2</td>
                  <td style="text-align: center;"><?= 
                    $c  = number_format($cfz2,2,",",".");
                    $c;
                  ?></td>
                  <td style="text-align: center;"><?= 
                    $r  = number_format($rfz2,2,",",".");
                    $r;
                  ?></td>
                  <td style="text-align: center;"><?= 
                    $i  = number_format($ifz2,2,",",".");
                    $i;
                  ?></td>
                  <td style="text-align: center;"><?= 
                    $t  = number_format($tfz2,2,",",".");
                    $t;
                  ?></td>
                  <td style="text-align: center;">
                    <?=
                      $persen   = round(($rfz2/$tfz2)*$kali) . "%";
                    ?>
                  </td>
                </tr>
              </table>
            </div>
          </div>

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper

