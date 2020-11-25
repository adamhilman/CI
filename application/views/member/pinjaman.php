            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Buku</h3>
                        <p class="animated fadeInDown">
                          Home <span class="fa-angle-right fa"></span> Data Buku
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                        <div class="col-sm-6 text-left padding-0">
                            <h4 class="text-left">Data Buku</h4>
                        </div>
                    </div>
                    <div class="panel-body">                      
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Pinjam</th>
                          <th>Judul Buku</th>
                          <th>Jumlah Buku</th>
                          <th>Tanggal Pinjam</th>
                          <th>Tanggal Kembali</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $no = 1;
                      foreach ($pinjaman as $p){
                        ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td>PJM00<?php echo $p->id_pinjam ?></td>
                          <td><?php echo $p->judul_buku ?></td>
                          <td><?php echo $p->jumlah_pinjam ?></td>
                          <td><?php echo $p->tanggal_pinjam ?></td>
                          <td><?php echo $p->tanggal_kembali ?></td>
                          <td>
                            <?php if ($p->status_peminjaman == '0'){
                              echo "Menunggu Approval Admin";
                            }elseif ($p->status_pengembalian == '0' && $p->status_peminjaman == '1'){
                              echo "Dipinjam";
                            }else{
                              echo "Sudah Dikembalikan";
                            } ?>
                          </td>
                        </tr>
                      <?php } ?>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->
