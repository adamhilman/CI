<section class="content">
    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('approved');?>"></div>
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Data Peminjam
                    <small>Daftar peminjam buku perpustakaan</small>
                </h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Peminjam
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?php echo base_url();?>dashboard/tambah_buku">--</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table id="data_peminjam" class="js-sweetalert table table-bordered table-striped table-hover" >
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Kode Pinjam</th>
                                        <th>Judul Buku</th>
                                        <th>Jumlah Buku</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Status Peminjaman</th>
                                        <th>Status Pengembalian</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Pinjam</th>
                                            <th>Judul Buku</th>
                                            <th>Jumlah Buku</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Status Peminjaman</th>
                                            <th>Status Pengembalian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
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
                                                }else{
                                                echo "Approved";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php if ($p->status_pengembalian == '0' && $p->status_peminjaman == '0'){
                                                echo "Belum di Approve";
                                                }elseif ($p->status_pengembalian == '0' && $p->status_peminjaman == '1'){
                                                echo "Belum Dikembalikan";
                                                }else{
                                                echo "Sudah Dikembalikan";
                                                } ?>
                                            </td>
                                            <td>
                                                <?php if ($p->status_peminjaman == '0'){?>
                                                <a href="<?php echo base_url().'dashboard/approve_pinjaman/'.$p->id_pinjam;?>">
                                                <button type="button" class="btn btn-round btn-primary"><span class="fa fa-check-square-o"> Approve Pinjaman</span></button>
                                                </a>
                                                <?php }else{ ?>
                                                <a href="<?php echo base_url().'dashboard/kembalikan_pinjaman/'.$p->id_pinjam;?>">
                                                <button type="button" class="btn btn-round btn-warning"><span class="fa fa-mail-forward"> Dikembalikan</span></button>
                                                </a>
                                                <?php } ?>
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
            <!-- #END# Exportable Table -->
        </div>
    </section>
    
