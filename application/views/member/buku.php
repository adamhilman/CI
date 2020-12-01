<section class="content">
<div class="flash-data" data-sukses="<?php echo $this->session->flashdata('sukses');?>"></div>

        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Data Buku
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="<?php echo base_url();?>admin/data/buku/tambah">Tambah Buku</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="js-sweetalert table table-bordered table-striped table-hover" id="data_buku">
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
                                            <th>Denda /hari</th>
                                            <th>Status</th>
                                            <th>Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Judul Buku</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>ISBN</th>
                                            <th>Lokasi</th>
                                            <th>Denda /hari</th>
                                            <th>Status</th>
                                            <th>Pilihan</th>
                                        </tr>
                                    </tfoot>
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
                                                <td><?php echo $b->denda ?></td>
                                                <td>
                                                    <?php
                                                    if($b->status_buku == "1"){
                                                    echo "Tersedia";
                                                    }else if($b->status_buku == "0"){
                                                    echo "Sedang Dipinjam";
                                                    } ?>
                                                    <td><a href="<?php echo base_url().'user/data/buku/pinjam/'.$b->id_buku;?>">
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
            <!-- #END# Exportable Table -->
        </div>
    </section>
    
