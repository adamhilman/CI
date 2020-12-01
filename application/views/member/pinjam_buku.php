    <section class="content">
        <div class="container-fluid">
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <?php foreach ($buku as $b){ ?>
                            <h2>
                                PINJAM BUKU
                                <small>Pinjam buku <?php echo $b->judul_buku;?></small>
                            </h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo base_url(); ?>member/pinjam_buku_aksi" method="post" enctype="multipart/form-data">
                            <?php echo validation_errors(); ?>
                                <input readonly type="hidden" name="id_buku" value="<?php echo $b->id_buku;?>">
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <select disabled class="form-control show-tick" name="kategori">
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
                                                <input readonly name="judul_buku" type="text" class="form-control" value="<?php echo $b->judul_buku;?>">
                                                <label class="form-label">Judul Buku</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input readonly name="pengarang" type="text" class="form-control" value="<?php echo $b->pengarang;?>">
                                                <label class="form-label">Pengarang</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input readonly name="penerbit" type="text" class="form-control" value="<?php echo $b->penerbit;?>">
                                                <label class="form-label">Penerbit</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input readonly name="tahun_terbit" type="date" class="form-control" value="<?php echo $b->tahun_terbit;?>">
                                                <label class="form-label">Tahun Terbit</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input readonly name="isbn" type="text" class="form-control" value="<?php echo $b->isbn;?>">
                                                <label class="form-label">ISBN</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input readonly name="jumlah_buku" type="number" class="form-control" value="<?php echo $b->jumlah_buku;?>">
                                                <label class="form-label">Jumlah Buku</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <div class="form-group form-float">
                                            <div class="form-line">
                                                <input readonly name="lokasi" type="text" class="form-control" value="<?php echo $b->lokasi;?>">
                                                <label class="form-label">Lokasi</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <div class="form-group form-float">
                                            <div class="form-line">
                                                <input readonly name="status_buku" type="text" class="form-control" value="<?php if ($b->status_buku == "1"){
                                                    echo "Tersedia";
                                                }elseif($b->status_buku == "0"){
                                                    echo "Tidak Tersedia";
                                                }
                                                ?>">
                                                
                                                <label class="form-label">Status Buku</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <h4>Gambar Buku</h4>
                                            <div class="form-line">
                                            </div>
                                            <img width=300px height=300px src="<?php echo base_url()."asset/upload/".$b->gambar;?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input readonly name="denda" type="number" class="form-control" value="<?php echo $b->denda;?>">
                                                <label class="form-label">Denda /hari</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="jumlah_pinjam" type="number" class="form-control" value="1">
                                                <label class="form-label">Jumlah Pinjam</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line focused" id="bs_datepicker_container">
                                                <input name="tanggal_pinjam" type="text" class="form-control" placeholder="Tanggal Pinjam">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line focused" id="bs_datepicker_container">
                                                <input name="tanggal_kembali" type="text" class="form-control" placeholder="Tanggal Kembali">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <button type="submit" class="btn bg-orange waves-effect">
                                        <i class="material-icons">save</i>
                                        <span>SUBMIT</span>
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