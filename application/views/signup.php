<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Sign Up | Pendataan Pinjaman Buku Perpustakaan</title>
	<!-- Favicon-->
	<link rel="icon" href="<?php echo base_url()?>asset/favicon.ico" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
		type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="<?php echo base_url()?>asset/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?php echo base_url()?>asset/plugins/node-waves/waves.css" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?php echo base_url()?>asset/plugins/animate-css/animate.css" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?php echo base_url()?>asset/css/style.css" rel="stylesheet">
</head>

<body class="signup-page">
	<div class="signup-box">
		<div class="logo">
			<a href="javascript:void(0);">Admin<b>BSB</b></a>
			<small>Admin BootStrap Based - Material Design</small>
		</div>
		<div class="card">
			<div class="body">
				<form id="sign_up" method="POST" action="<?php echo base_url(); ?>login/tambah_anggota_aksi">
					<div class="msg">Register a new membership</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">person</i>
						</span>
						<div class="form-line">
							<input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap"
								required autofocus>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">email</i>
						</span>
						<div class="form-line">
							<input type="email" class="form-control" name="email" placeholder="Email" required>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">lock</i>
						</span>
						<div class="form-line">
							<input type="password" class="form-control" name="password" minlength="6"
								placeholder="Password" required>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">supervised_user_circle</i>
						</span>
						<div class="form-line">
							<select class="form-control show-tick" name="gender">
								<option disabled selected>Jenis Kelamin</option>
								<option value="Laki-laki">Laki - Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">call</i>
						</span>
						<div class="form-line">
							<input type="password" class="form-control" name="no_telp" minlength="6"
								placeholder="No. Telp" required>
						</div>
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">home</i>
						</span>
						<div class="form-line">
							<textarea rows=4 class="form-control" name="alamat"></textarea> </div>
					</div>
					<div class="form-group">
						<input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
						<label for="terms">I read and agree to the <a href="javascript:void(0);">terms of
								usage</a>.</label>
					</div>

					<button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

					<div class="m-t-25 m-b--5 align-center">
						<a href="<?php echo base_url()?>login">You already have a membership?</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Jquery Core Js -->
	<script src="<?php echo base_url()?>asset/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?php echo base_url()?>asset/plugins/bootstrap/js/bootstrap.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?php echo base_url()?>asset/plugins/node-waves/waves.js"></script>

	<!-- Validation Plugin Js -->
	<script src="<?php echo base_url()?>asset/plugins/jquery-validation/jquery.validate.js"></script>

	<!-- Custom Js -->
	<script src="<?php echo base_url()?>asset/js/admin.js"></script>
	<script src="<?php echo base_url()?>asset/js/pages/examples/sign-up.js"></script>
</body>

</html>