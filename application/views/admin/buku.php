<section class="content">
<div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('approved');?>"></div>

        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Data Buku
                    <small>Buku yang tersedia di perpustakaan</small>
                </h2>
            </div>
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
                                                <td>
                                                    <?php
                                                    if($b->status_buku == "1"){
                                                    echo "Tersedia";
                                                    }else if($b->status_buku == "0"){
                                                    echo "Sedang Dipinjam";
                                                    } ?>
                                                    <td>
                                                    <a href="<?php echo base_url().'dashboard/edit_buku/'.$b->id_buku;?>">
                                                        <button type="button" class="btn bg-amber waves-effect">
                                                            <i class="material-icons">edit</i>
                                                            <span>Edit</span>
                                                        </button>
                                                    </a>
                                                      <button class="btn bg-blue waves-effect" type="button" onclick="hapus(<?php echo $b->id_buku;?>)"><i class="material-icons">delete</i>
                                                            <span>Delete</span></button>
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
    
