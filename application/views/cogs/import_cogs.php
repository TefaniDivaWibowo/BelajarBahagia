  <style type="text/css">
    .file-upload {
      position: relative;
      display: inline-block;
    }

    .file-upload__label {
      display: block;
      padding: 1em 2em;
      color: #fff;
      background: #222;
      border-radius: .4em;
      transition: background .3s;
      
      &:hover {
         cursor: pointer;
         background: #000;
      }
    }
        
    .file-upload__input {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        font-size: 1;
        width:0;
        height: 100%;
        opacity: 0;
    }
  </style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Import File Data COGS
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-angle-left"></i> Kembali</a></li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="callout callout-danger">
        <h4>Perhatian!</h4>
        <p>1. Jadikan setiap tanggal menjadi "Date Format" dan setiap angka yang ada menjadi "Number Format" (tanpa titik ataupun koma diantara angka)</p>
        <p>2. Urutan dari kolom yang harus dipenuhi, yaitu: Reference; Account; Nama Akun; Gab Akun & CC; BA; Cost Center; Profit Center; Direktorat (TB); OSM (TB); GM/PM (TB); UNIT (TB); Area; Group Akun; Group; Posting Key; Document Type; Posting Period; Document Date; Document Number; Assignment; Posting Date; Document Currency; Amount in doc/ cur/; Amount in Local Currency; Text; Klasifikasi; Account; Cost Center; Portofolio; Trading Partner</p>
        <br>
        <p></p>
      </div>

      <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Import File</h3>
          </div>
          <div class="box-body">
            <form action="<?=base_url('index.php/HrPerformance/importfile')?>" method="post" enctype="multipart/form-data">
                <input type="file" name="fileUpload" id="fileUpload">
                <hr>
                <div class="file-upload">
                  <label for="upload" class="btn btn-primary btn-block">Upload</label>
                  <input id="upload" class="btn file-upload__input btn-block" type="submit" >
            </div>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
    </section>
  </div>