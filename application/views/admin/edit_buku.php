    <section class="content">
        <div class="container-fluid">
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <?php foreach ($buku as $b){ ?>
                            <h2>
                                EDIT DATA
                                <small>Edit data buku <?php echo $b->judul_buku;?></small>
                            </h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo base_url(); ?>dashboard/update_buku" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_buku" value="<?php echo $b->id_buku;?>">
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" name="kategori">
                                            <?php foreach ($kategori as $k) { ?>
                                            <option value="<?php echo $k->id_kategori; ?>" <?php if ($b->id_kategori == $k->id_kategori){
                                                echo "SELECTED";
                                            }?>><?php echo $k->nama_kategori; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="judul_buku" type="text" class="form-control" value="<?php echo $b->judul_buku;?>">
                                                <label class="form-label">Judul Buku</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="pengarang" type="text" class="form-control" value="<?php echo $b->pengarang;?>">
                                                <label class="form-label">Pengarang</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="penerbit" type="text" class="form-control" value="<?php echo $b->penerbit;?>">
                                                <label class="form-label">Penerbit</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="tahun_terbit" type="date" class="form-control" value="<?php echo $b->tahun_terbit;?>">
                                                <label class="form-label">Tahun Terbit</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="isbn" type="text" class="form-control" value="<?php echo $b->isbn;?>">
                                                <label class="form-label">ISBN</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="jumlah_buku" type="number" class="form-control" value="<?php echo $b->jumlah_buku;?>">
                                                <label class="form-label">Jumlah Buku</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" name="lokasi">
                                            <option value="Rak 1" <?php if ($b->lokasi == 'Rak 1'){echo "SELECTED";}?>>Rak 1</option>
                                            <option value="Rak 2" <?php if ($b->lokasi == 'Rak 2'){echo "SELECTED";}?>>Rak 2</option>
                                            <option value="Rak 3" <?php if ($b->lokasi == 'Rak 3'){echo "SELECTED";}?>>Rak 3</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="status_buku" class="form-control show-tick">
                                            <option value="1" <?php if ($b->status_buku == '1'){echo "SELECTED";}?>>Tersedia</option>
                                            <option value="0" <?php if ($b->status_buku == '0'){echo "SELECTED";}?>>Sedang Dipinjam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="gambar_buku">
                                                <label class="form-label">Jumlah Buku</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <button type="submit" class="btn bg-orange waves-effect">
                                        <i class="material-icons">save</i>
                                        <span>SAVE</span>
                                    </button>
                                    <button type="button" onclick="goBack()" class="btn bg-blue waves-effect">
                                        <i class="material-icons">arrow_back</i>
                                        <span>BACK</span>
                                    </button>
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>