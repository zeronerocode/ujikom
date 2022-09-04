<!DOCTYPE html>
<html lang="en">

<head>
	<title>Ujikom | Profile</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- ekko-lightbox css -->
	<link rel="stylesheet" href="/assets/css/plugins/ekko-lightbox.css">
	<link rel="stylesheet" href="/assets/css/plugins/lightbox.min.css">
	<!-- vendor css -->
	<link rel="stylesheet" href="/assets/css/style.css">



</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >

				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="/assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
					</div>
				</div>

				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="{{ route('dashboard.siswa') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
                    <li class="nav-item pcoded-hasmenu">
						<a href="{{route('profile')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Profile</span></a>
					</li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="nav-item pcoded-hasmenu">
                            <a :href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();"
                                class="nav-link ">
                                <span class="pcoded-micon">
                                    <i class="feather icon-power"></i>
                                </span>
                                <span class="pcoded-mtext">Logout</span>
                            </a>
                        </li>
                    </form>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="assets/images/logo.png" alt="" class="logo">

					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav me-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close close btn-close position-absolute top-50 end-0 translate-middle" aria-label="Close">
								</button>
							</div>
						</li>
					</ul>
				</div>
	</header>
	<!-- [ Header ] end -->



<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ Main Content ] start -->
		<!-- profile header start -->
		<!-- profile header end -->
		<!-- profile body start -->
		<div class="row">
			<div class="col-md-12 order-md-2">
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Siswa details</h5>
							</div>
							<div class="card-body border-top pro-det-edit collapse show" id="pro-det-edit-2">
								<form method="POST" action="{{route('siswa.update',$siswa)}}">
                                    @csrf
                                    @method('PUT')
									<div class="form-group row align-items-center">
										<label class="col-sm-3 col-form-label font-weight-bolder">Nama Lengkap</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="name" placeholder="Full Name" value="{{$siswa->name}}">
										</div>
									</div>
									<div class="form-group row align-items-center">
										<label class="col-sm-3 col-form-label font-weight-bolder">Jenis Kelamin</label>
										<div class="col-sm-9">
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline1" name="jenis_kelamin" value="laki-laki" class="form-check-input" checked>
												<label class="form-check-label" for="customRadioInline1">laki-laki</label>
											</div>
											<div class="custom-control custom-radio custom-control-inline">
												<input type="radio" id="customRadioInline2" name="jenis_kelamin" value="perempuan" class="form-check-input">
												<label class="form-check-label" for="customRadioInline2">perempuan</label>
											</div>
										</div>
									</div>
                                    <div class="form-group row align-items-center">
										<label class="col-sm-3 col-form-label font-weight-bolder">Nomor Hp</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="hp" placeholder="Nomor Hp" value="{{$siswa->hp}}">
										</div>
									</div>
                                    <div class="form-group row align-items-center">
										<label class="col-sm-3 col-form-label font-weight-bolder">Tempat Lahir</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="{{$siswa->tempat_lahir}}">
										</div>
									</div>
									<div class="form-group row align-items-center">
										<label class="col-sm-3 col-form-label font-weight-bolder">Tanggal Lahir</label>
										<div class="col-sm-9">
											<input type="date" class="form-control" name="tanggal_lahir" value="{{$siswa->tanggal_lahir}}">
										</div>
									</div>
									<div class="form-group row align-items-center">
										<label class="col-sm-3 col-form-label font-weight-bolder">Alamat</label>
										<div class="col-sm-9">
											<textarea class="form-control" name="alamat">{{$siswa->alamat}}</textarea>
										</div>
									</div>
                                    <div class="form-group row align-items-center">
										<label class="col-sm-3 col-form-label font-weight-bolder">Penguji</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="penguji" placeholder="Penguji" value="{{$siswa->penguji}}">
										</div>
									</div>
									<div class="form-group row align-items-center mt-2">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-primary">Save</button>
										</div>
									</div>
								</form>
							</div>
						</div>
			</div>
		</div>
		<!-- profile body end -->
	</div>
</div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="/assets/js/vendor-all.min.js"></script>
    <script src="/assets/js/plugins/bootstrap.min.js"></script>
    <script src="/assets/js/ripple.js"></script>
    <script src="/assets/js/pcoded.min.js"></script>
	<script src="/assets/js/menu-setting.min.js"></script>



<!-- ekko-lightbox Js -->
<script src="/assets/js/plugins/ekko-lightbox.min.js"></script>
<script src="/assets/js/plugins/lightbox.min.js"></script>
<script src="/assets/js/pages/ac-lightbox.js"></script>
<script>
	// [ customer-scroll ] start
	var px = new PerfectScrollbar('.cust-scroll', {
		wheelSpeed: .5,
		swipeEasing: 0,
		wheelPropagation: 1,
		minScrollbarLength: 40,
	});
	// [ customer-scroll ] end
</script>
</body>

</html>
