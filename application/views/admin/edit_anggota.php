    <section class="content">
        <div class="container-fluid">
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Data Anggota
                            </h2>
                        </div>
                        <div class="body">
					<?php foreach($anggota as $a){ ?>
					<?php echo validation_errors(); ?>
                            <form action="<?php echo base_url(); ?>admin/data/anggota/update" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_anggota" value="<?php echo $a->id_anggota;?>">    
                            <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="nama_lengkap" type="text" class="form-control" value="<?php echo $a->nama_anggota;?>">
                                                <label class="form-label">Nama Lengkap</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" name="gender">
                                        <option value="Laki-laki" <?php if ($a->gender == "Laki-laki") echo "selected";?>>Laki - Laki</option>
										<option value="Perempuan" <?php if ($a->gender == "Perempuan") echo "selected";?>>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="no_telp" type="text" class="form-control" value="<?php echo $a->no_telp;?>">
                                                <label class="form-label">No. Telp</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea rows=4 class="form-control" name="alamat"><?php echo $a->alamat;?></textarea>
                                                <label class="form-label">Alamat</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="email" type="text" class="form-control" value="<?php echo $a->email;?>">
                                                <label class="form-label">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="password" type="password" class="form-control">
                                                <label class="form-label">Password</label>
                                            </div>
                                                <small>Biarkan kosong jika tidak reset password</small>
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
                    <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>