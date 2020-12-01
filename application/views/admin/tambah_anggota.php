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
                            <form action="<?php echo base_url(); ?>admin/data/anggota/tambah/submit" method="post" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="nama_lengkap" type="text" class="form-control" >
                                                <label class="form-label">Nama Lengkap</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <select class="form-control show-tick" name="gender">
                                            <option disabled selected>Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki - Laki</option>
										    <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="no_telp" type="text" class="form-control" >
                                                <label class="form-label">No. Telp</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea rows=4 class="form-control" name="alamat"></textarea>
                                                <label class="form-label">Alamat</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input name="email" type="text" class="form-control">
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