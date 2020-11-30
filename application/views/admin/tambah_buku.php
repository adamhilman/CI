    <section class="content">
        <div class="container-fluid">
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Data Buku
                            </h2>
                        </div>
                        <div class="body">
                            <form action="<?php echo base_url(); ?>dashboard/tambah_buku_aksi" method="post" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" name="kategori">
                                            <?php foreach ($kategori as $k) { ?>
                                            <option value="<?php echo $k->id_kategori; ?>"><?php echo $k->nama_kategori; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="judul_buku" type="text" class="form-control" >
                                                <label class="form-label">Judul Buku</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="pengarang" type="text" class="form-control" >
                                                <label class="form-label">Pengarang</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="penerbit" type="text" class="form-control" >
                                                <label class="form-label">Penerbit</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-line focused" id="bs_datepicker_container">
                                                <input name="tahun_terbit" type="text" class="form-control" placeholder="Tahun Terbit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="isbn" type="text" class="form-control">
                                                <label class="form-label">ISBN</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="jumlah_buku" type="number" class="form-control">
                                                <label class="form-label">Jumlah Buku</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" name="lokasi">
                                            <option disabled selected>Lokasi</option>
                                            <option value="Rak 1">Rak 1</option>
                                            <option value="Rak 2">Rak 2</option>
                                            <option value="Rak 3">Rak 3</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <select name="status_buku" class="form-control show-tick">
                                            <option value="1">Tersedia</option>
                                            <option value="0">Sedang Dipinjam</option>
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
                                        <i class="material-icons">input</i>
                                        <span>SUBMIT</span>
                                    </button>
                                    <button type="button" onclick="goBack()" class="btn bg-blue waves-effect">
                                        <i class="material-icons">arrow_back</i>
                                        <span>BACK</span>
                                    </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>