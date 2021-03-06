  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url();?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">COMMERCE</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i> 
            <span>LOP</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li><a href="<?= base_url('index.php/lop/importlop')?>"><i class="fa fa-circle-o"></i> Upload Data LOP</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> 
            <span>Rekon PSB</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li><a href="<?= base_url('index.php/rekon/show_data')?>"><i class="fa fa-circle-o"></i> Data Rekon</a></li>
            <li><a href="<?= base_url('index.php/rekon/import2pms2n')?>"><i class="fa fa-circle-o"></i> Upload 2P MS2N</a></li>
            <li><a href="<?= base_url('index.php/rekon/import3pms2n')?>"><i class="fa fa-circle-o"></i> Upload 3P MS2N</a></li>
            <li><a href="<?= base_url('index.php/Revenue')?>"><i class="fa fa-circle-o"></i> Upload Rekon SO</a></li>
            <li><a href="<?= base_url('index.php/rekon/importsc')?>"><i class="fa fa-circle-o"></i> Upload Starclick</a></li>
          </ul>
        </li>


        <!-- <li class="treeview">
          <a href="base_url('index.php/Dashboard')">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li> -->


        <li class="header">FINANCE</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i> <span>COGS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('index.php/COGS/dashboard');?>"><i class="fa fa-circle-o"></i> Dashboard COGS</a></li>
            <li class="treeview">
              <a href="">
                <i class="fa fa-circle-o"></i> <span>Evaluasi COGS</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('index.php/COGS/evaluasi');?>"><i class="fa fa-circle-o"></i> COGS Year to Date/Month</a></li>
                <li><a href="<?=base_url('index.php/COGS/cogs_klasifikasi_all')?>"><i class="fa fa-circle-o"></i> COGS per Pengeluaran</a></li>
              </ul>
            </li>
            <li><a href="<?=base_url('index.php/COGS/rev');?>"><i class="fa fa-circle-o"></i> Evaluasi Revenue</a></li>
            <li><a href="<?=base_url('index.php/COGS/import');?>"><i class="fa fa-circle-o"></i> Import Data COGS</a></li>
            <li><a href="<?=base_url('index.php/COGS/input');?>"><i class="fa fa-circle-o"></i> Input Target COGS</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-usd"></i>
            <span>Revenue</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Assurance
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('index.php/Revenue/data_ass')?>"><i class="fa fa-circle-o"></i> Data Assurance
                  </a></li>
                <li><a href="<?= base_url('index.php/Revenue/form_ass')?>"><i class="fa fa-circle-o"></i> Form Assurance</a></li>
                <li><a href="<?= base_url('index.php/RevTarget/target_ass')?>"><i class="fa fa-circle-o"></i> Update Target Rev</a></li>
              </ul>
            </li>
            <li><a href=""><i class="fa fa-circle-o"></i> Data
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('index.php/revenue/all_rekon')?>"><i class="fa fa-circle-o"></i> All Data
                  </a></li>
                <li><a href="<?= base_url('index.php/revenue/rekon')?>"><i class="fa fa-circle-o"></i> Data Sudah Rekon</a></li>
                <li><a href="<?= base_url('index.php/RevTarget/target_ass')?>"><i class="fa fa-circle-o"></i> Update Target Rev</a></li>
              </ul>
            </li>
            <li><a href="<?= base_url('index.php/Revenue')?>"><i class="fa fa-circle-o"></i> Home
            </a>
            </li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Infrastructure Service
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Maintenance Access
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= base_url('index.php/Revenue/data_main_access')?>"><i class="fa fa-circle-o"></i> Data Maintenance Access</a></li>
                    <li><a href="<?= base_url('index.php/Revenue/form_main_access')?>"><i class="fa fa-circle-o"></i> Form Maintenance Access</a></li>
                    <li><a href="<?= base_url('index.php/RevTarget/target_main_access')?>"><i class="fa fa-circle-o"></i> Update Target Rev</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Gamas & QE
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= base_url('index.php/Revenue/data_gamas')?>"><i class="fa fa-circle-o"></i> Data Gamas & QE</a></li>
                    <li><a href="<?= base_url('index.php/Revenue/form_gamas')?>"><i class="fa fa-circle-o"></i> Form Gamas & QE</a></li>
                    <li><a href="<?= base_url('index.php/RevTarget/target_gamas')?>"><i class="fa fa-circle-o"></i> Update Target Rev</a></li>
                  </ul>
                </li>
              </ul>            
              </li>
            <li><a href=""><i class="fa fa-circle-o"></i> Infrastructure Delivery
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
              <ul class="treeview-menu">
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Migration
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= base_url('index.php/Revenue/data_migrasi')?>"><i class="fa fa-circle-o"></i> Data Migration</a></li>
                    <li><a href="<?= base_url('index.php/Revenue/form_migrasi')?>"><i class="fa fa-circle-o"></i> Form Migration</a></li>
                  </ul>
                </li>
                <li><a href="<?= base_url('index.php/RevTarget/target_mig')?>"><i class="fa fa-circle-o"></i> Update Target Rev</a></li>
              </ul>
            </li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Maintenance Infra Sup
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('index.php/Revenue/data_mainis')?>"><i class="fa fa-circle-o"></i> Data Maintenance Infra Sup
                  </a></li>
                <li><a href="<?= base_url('index.php/Revenue/form_mainis')?>"><i class="fa fa-circle-o"></i> Form Maintenance Infra Sup</a></li>
                <li><a href="<?= base_url('index.php/RevTarget/target_mainis')?>"><i class="fa fa-circle-o"></i> Update Target Rev</a></li>
              </ul>
            </li>
            <li><a href=""><i class="fa fa-circle-o"></i> Provisioning Indihome
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('index.php/Revenue/prov/data_prov')?>"><i class="fa fa-circle-o"></i> Data Provisioning</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Import Data PSB</a></li> —>
                <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Search
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="<?= base_url('index.php/SearchRev/cari_by_date')?>"><i class="fa fa-circle-o"></i> All Data by Date</a></li>
                        <li><a href="<?= base_url('index.php/SearchRev/cari_by_div')?>"><i class="fa fa-circle-o"></i> All Data by Division</a></li>
                        <li><a href="<?= base_url('index.php/SearchRev/cari_ba')?>"><i class="fa fa-circle-o"></i> Search BA</a></li>
                        <li><a href="<?= base_url('index.php/SearchRev/cari_ba')?>"><i class="fa fa-circle-o"></i> Search Data PS</a></li>
                      </ul>
                </li>
              </ul>
            </li>
            <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Search
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= base_url('index.php/SearchRev/cari_by_date')?>"><i class="fa fa-circle-o"></i> All Data by Date</a></li>
                    <li><a href="<?= base_url('index.php/SearchRev/cari_by_div')?>"><i class="fa fa-circle-o"></i> All Data by Division</a></li>
                    <li><a href="<?= base_url('index.php/SearchRev/cari_ba')?>"><i class="fa fa-circle-o"></i> Search BA</a></li>
                  </ul>
            </li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Service Delivery
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
              <ul class="treeview-menu">
                </li><li><a href="<?= base_url('index.php/Revenue/data_sd')?>"><i class="fa fa-circle-o"></i> Data Service Delivery</a></li>
                </li><li><a href="<?= base_url('index.php/Revenue/form_hem')?>"><i class="fa fa-circle-o"></i> HEM</a></li>
                </li><li><a href="<?= base_url('index.php/Revenue/form_nodeb')?>"><i class="fa fa-circle-o"></i> Node B</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Prog Optimization PT2
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= base_url('index.php/Revenue/form_pt2')?>"><i class="fa fa-circle-o"></i> Form PT2</a></li>
                    <li><a href="<?= base_url('index.php/RevTarget/target_pt2')?>"><i class="fa fa-circle-o"></i> Input Target Rev</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Prog Optimization PT3
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= base_url('index.php/Revenue/form_pt3')?>"><i class="fa fa-circle-o"></i> Form PT3</a></li>
                    <li><a href="<?= base_url('index.php/RevTarget/target_pt3')?>"><i class="fa fa-circle-o"></i> Input Target Rev</a></li>
                  </ul>
              </ul> 
            </li>
          </ul>
        </li>
        
        <li class="header">HUMAN RESOURCE</li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-user"></i> <span>HR Performance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url('index.php/HrPerformance/')?>"><i class="fa fa-circle-o"></i> Dashboard PBS</a></li>
            <li class="treeview">
              <a href="">
                <i class="fa fa-circle-o"></i> <span>Import Data</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('index.php/HrPerformance/import');?>"><i class="fa fa-circle-o"></i> Import Data HR</a></li>
                <li><a href="<?=base_url('index.php/HrPerformance/importhr_wper');?>"><i class="fa fa-circle-o"></i> Import Data HR 2</a></li>
                <li><a href="<?=base_url('index.php/HrPerformance')?>"><i class="fa fa-circle-o"></i> Import Data PBS</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="">
                <i class="fa fa-circle-o"></i> <span>Kontrak Management</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('index.php/HrPerformance/input_kontrak_sm');?>"><i class="fa fa-circle-o"></i> Site Manager</a></li>
                <li><a href="<?=base_url('index.php/HrPerformance/input_kontrak_tl')?>"><i class="fa fa-circle-o"></i> Team Leader</a></li>
              </ul>
            </li>
            <li><a href="<?=base_url('index.php/HrPerformance/')?>"><i class="fa fa-circle-o"></i> List Data HR</a></li>
            <li><a href="<?=base_url('index.php/HrPerformance/')?>"><i class="fa fa-circle-o"></i> Mapping SM to TL</a></li>
            <li class="treeview">
              <a href="">
                <i class="fa fa-circle-o"></i> <span>Report HR</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('index.php/COGS/evaluasi');?>"><i class="fa fa-circle-o"></i> Performance SM</a></li>
                <li><a href="<?=base_url('index.php/COGS/cogs_klasifikasi')?>"><i class="fa fa-circle-o"></i> Performance TL</a></li>
                <li><a href="<?=base_url('index.php/COGS/cogs_klasifikasi')?>"><i class="fa fa-circle-o"></i> Performance Teknisi</a></li>
                <li><a href="<?=base_url('index.php/COGS/cogs_klasifikasi')?>"><i class="fa fa-circle-o"></i> Trend Performansi Individu</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="header">OPERATIONAL PERFORMANCE</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Prov Performance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>          
          <ul class="treeview-menu">
            <li><a href="<?= base_url('index.php/prov/data_prov')?>"><i class="fa fa-circle-o"></i> Data Provisioning</a></li>
            <!-- <li><a href="#"><i class="fa fa-circle-o"></i> Import Data PSB</a></li> -->
            <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Search
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?= base_url('index.php/prov/cari_ps')?>"><i class="fa fa-circle-o"></i> Search Data PS</a></li>
                    <li><a href="<?= base_url('index.php/prov/cari_ps')?>"><i class="fa fa-circle-o"></i> Search For Upload BA</a></li>
                  </ul>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-wrench"></i> 
            <span>Assrc Performance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Open Ticket
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('index.php/AssurancePerformance/import_open')?>"><i class="fa fa-circle-o"></i> Import Data Open Ticket</a></li>
                <li><a href="<?=base_url('index.php/AssurancePerformance/data_open')?>"><i class="fa fa-circle-o"></i> Data Open Ticket</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Report Open Ticket
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="<?=base_url('index.php/AssurancePerformance/report_month_open')?>"><i class="fa fa-circle-o"></i> Month</a></li>
                    <li><a href="<?=base_url('index.php/AssurancePerformance/report_ytd_open')?>"><i class="fa fa-circle-o"></i> Year to Date</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Close Ticket
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('index.php/AssurancePerformance/import_close')?>"><i class="fa fa-circle-o"></i> Import Data Close Ticket</a></li>
                <li><a href="<?=base_url('index.php/AssurancePerformance/data_close')?>"><i class="fa fa-circle-o"></i> Data Close Ticket</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Report Close Ticket
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Month</a></li>
                    <li><a href="<?=base_url('index.php/AssurancePerformance/report_ytd_close')?>"><i class="fa fa-circle-o"></i> Year to Date</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="">
                <i class="fa fa-circle-o"></i> <span>Report</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('index.php/COGS/evaluasi');?>"><i class="fa fa-circle-o"></i> Trend GGN per Teritory</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="<?=base_url("index.php/SearchSN/");?>">
            <i class="fa fa-search"></i> <span>Search NTE</span>
          </a>
          <!--<ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>-->
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Slide Show</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <!--<li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>-->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>