            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Anggota</h3>
                        <p class="animated fadeInDown">
                          Home <span class="fa-angle-right fa"></span> Data Anggota
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                        <div class="col-sm-6 text-left padding-0">
                            <h4 class="text-left">Data Mahasiswa</h4>
                        </div>
                        <div class="text-right">
                        <a href="<?php echo base_url();?>dashboard/tambah_anggota">
                        <button class="btn ripple-infinite btn-round btn-warning">
                          <div>
                            <span class="fa fa-user-plus">Tambah Mahasiswa</span>
                          </div>
                        </button>
          </a>
                        </div>
                    </div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Email</th>
                          <th>Jenis Kelamin</th>
                          <th>Nomor Telepon</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $no = 1;
                      foreach ($anggota as $a){
                        ?>
                        <tr>
                          <td><?php echo $a->nama_anggota ?></td>
                          <td><?php echo $a->alamat ?></td>
                          <td><?php echo $a->email ?></td>
                          <td><?php echo $a->gender ?></td>
                          <td><?php echo $a->no_telp ?></td>
                            <td>
                            <a href="<?php echo base_url().'dashboard/edit_anggota/'.$a->id_anggota;?>">
                            <button type="button" class="btn btn-round btn-primary"><span class="fa fa-edit"> Edit</span></button>
                            </a>
                            <a href="<?php echo base_url().'dashboard/hapus_anggota/'.$a->id_anggota;?>">
                            <button type="button" class="btn btn-round btn-warning"><span class="fa fa-trash"> Delete</span></button>
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
