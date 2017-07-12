<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Import dan Export Excel dengan PHPExcel, Codeigniter</title>

        <link rel="stylesheet" href="<?= base_url() ?>/assets/style.css" />
    </head>
    <body>

        <div id="container">
            <h1>Import dan Export Excel dengan PHPExcel, Codeigniter</h1>

            <div id="body">
                <p>Import Data Excel</p>
                <code><?= anchor('import/', 'Import') ?></code>

                <p>Export Data Excel</p>
                <code><?= anchor('export/', 'Export') ?></code>
                
                <p>Create Signature</p>
                <code><?= anchor('signature/', 'Create') ?></code>
                
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kontak</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--$no = 1; foreach ($select as $row):
                            $no++ 
                            $row->nama
                            $row->alamat
                            $row->kontak
                            endforeach

                            echo (!$select ? 'Tidak Ada Data!!' : 'Ada '.$_numrow.' Baris Data.')-->
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>                         
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <code class="text-right"><?= anchor('auth/logout', 'Logout') ?></code>
            </div>

            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
        </div>

    </body>
</html>