<!DOCTYPE html>
<html lang="en">

<head>

	<title>Ujikom</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">




</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Sign up</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="floating-label" for="nik">NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik" placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label class="floating-label" for="name">Nama Lengkap</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="floating-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="">
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="Password">Password</label>
                                <input type="password" class="form-control" name="password" id="Password" placeholder="">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password_confirmation" class="floating-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="">
                            </div>
                            <button class="btn btn-primary btn-block mb-4">Sign up</button>
                            <p class="mb-2">Sudah Punya Akun? <a href="{{route('login')}}" class="f-w-400">Signin</a></p>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
