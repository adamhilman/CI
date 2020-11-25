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
                          <th>Gambar</th>
                          <th>Judul Buku</th>
                          <th>Pengarang</th>
                          <th>Penerbit</th>
                          <th>Tahun Terbit</th>
                          <th>ISBN</th>
                          <th>Lokasi</th>
                          <th>Status</th>
                          <th>Pilihan</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $no = 1;
                      foreach ($buku as $b){
                        ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><img src="<?php echo base_url().'asset/upload/'.$b->gambar; ?>" width="80" height="80" alt="gambar tidak ada"></td>
                          <td><?php echo $b->judul_buku ?></td>
                          <td><?php echo $b->pengarang ?></td>
                          <td><?php echo $b->penerbit ?></td>
                          <td><?php echo $b->tahun_terbit ?></td>
                          <td><?php echo $b->isbn ?></td>
                          <td><?php echo $b->lokasi ?></td>
                          <td>
                            <?php
                            if($b->status_buku == "1"){
                              echo "Tersedia";
                            }else if($b->status_buku == "0"){
                              echo "Sedang Dipinjam";
                            } ?>
                            <td>
                            <a href="<?php echo base_url().'member/pinjam_buku/'.$b->id_buku;?>">
                            <button type="button" class="btn btn-round btn-primary"><span class="fa fa-book"> Pinjam</span></button>
                            </a>
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
