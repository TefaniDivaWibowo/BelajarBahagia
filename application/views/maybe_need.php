                  <?php
                    $no = 0;
                        foreach($data_hr as $a){
                          $no++;
                          $id   = $a['object_id'];
                    ?>
                    <tr>
                      <td><?= $no;?></td>
                      <td><?= $a['nik'];?></td>
                      <td><?= $a['nama'];?></td>
                      <td><?= $a['position_name'];?></td>
                      <td><?= $a['direktorat'];?></td>
                      <td><?= $a['unit'];?></td>
                      <td><?= $a['sub_unit'];?></td>
                      <td><?= $a['psa'];?></td>
                      <td>Status Naker</td>
                      <td>Status Kedja</td>
                      <td style="text-align: center;"><a href="<?= base_url('index.php/HrPerformance/Detail/'.$a['nik'])?>"><i class="fa fa-bars"></i></a></td>
                      <td style="text-align: center;"><a href="<?= base_url('index.php/HrPerformance/View_Edit/'.$a['nik'])?>"><i class="fa fa-edit"></i></a></td>
                    </tr>
                    <?php
                    }
                  ?>