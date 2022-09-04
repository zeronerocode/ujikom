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
	{{-- <link rel="stylesheet" href="assets/css/plugins/ekko-lightbox.css"> --}}
	{{-- <link rel="stylesheet" href="assets/css/plugins/lightbox.min.css"> --}}
	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">



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
						<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
					</div>
				</div>

				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
						<a href="{{ route('dashboard.siswa') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
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
		<div class="user-profile user-card mb-4">
			<div class="card-header border-0 p-0 pb-0">
				<div class="cover-img-block">
					<!-- <img src="assets/images/profile/cover.jpg" alt="" class="img-fluid"> -->
					<div class="overlay"></div>
					<div class="change-cover">
						<div class="dropdown">
							<a class="drp-icon dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon feather icon-camera"></i></a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#"><i class="feather icon-upload-cloud me-2"></i>upload new</a>
								<a class="dropdown-item" href="#"><i class="feather icon-image me-2"></i>from photos</a>
								<a class="dropdown-item" href="#"><i class="feather icon-film me-2"></i> upload video</a>
								<a class="dropdown-item" href="#"><i class="feather icon-trash-2 me-2"></i>remove</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body py-0">
				<div class="user-about-block m-0">
					<div class="row">
						<div class="col-md-4 text-center mt-n5">
							<div class="change-profile text-center">
								<div class="dropdown w-auto d-inline-block">
									<a class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<div class="profile-dp">
											<div class="position-relative d-inline-block">
												<img class="img-radius img-fluid wid-100" src="assets/images/user/avatar-5.jpg" alt="User image">
											</div>
											<div class="overlay">
												<span>change</span>
											</div>
										</div>
									</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#"><i class="feather icon-upload-cloud me-2"></i>upload new</a>
										<a class="dropdown-item" href="#"><i class="feather icon-image me-2"></i>from photos</a>
										<a class="dropdown-item" href="#"><i class="feather icon-shield me-2"></i>Protact</a>
										<a class="dropdown-item" href="#"><i class="feather icon-trash-2 me-2"></i>remove</a>
									</div>
								</div>
							</div>
							<h5 class="mb-1">{{$profile->name}}</h5>
						</div>
						<div class="col-md-8 mt-md-4">
							<div class="row">
								<div class="col-md-6">
									<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-globe me-2 f-18"></i> {{$profile->nik}} </a>
									<div class="clearfix"></div>
									<a href="mailto:demo@domain.com" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-mail me-2 f-18"></i>{{$profile->email}}</a>
									<div class="clearfix"></div>
									<a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-phone me-2 f-18"></i>{{$profile->hp}}</a>
								</div>
								<div class="col-md-6">
									<div class="media">
										<i class="feather icon-map-pin me-2 mt-1 f-18"></i>
										<div class="flex-grow-1">
											<p class="mb-0 text-muted"> {{$profile->alamat}} </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- profile header end -->

		<!-- profile body start -->
		<div class="row">
			<div class="col-md-12 order-md-2">
						<div class="card">
							<div class="card-body d-flex align-items-center justify-content-between">
								<h5 class="mb-0">Personal details</h5>
								<a href="{{route('edit.profile')}}" class="btn btn-primary btn-sm rounded m-0 float-end" aria-controls="pro-det-edit-1 pro-det-edit-2">
									<i class="feather icon-edit"></i>
                                </a>
							</div>
							<div class="card-body border-top pro-det-edit" id="pro-det-edit-1">
								<form>
									<div class="form-group row align-items-center">
										<label class="col-sm-3 col-form-label font-weight-bolder">Nama Lengkap</label>
										<div class="col-sm-9">
											{{$profile->name}}
										</div>
									</div>
									<div class="form-group row align-items-center">
										<label class="col-sm-3 col-form-label font-weight-bolder">Jenis Kelamin</label>
										<div class="col-sm-9">
											{{$profile->jenis_kelamin}}
										</div>
									</div>
                                    <div class="form-group row align-items-center">
										<label class="col-sm-3 col-form-label font-weight-bolder">Tempat Lahir</label>
										<div class="col-sm-9">
											{{$profile->tempat_lahir}}
										</div>
									</div>
									<div class="form-group row align-items-center">
										<label class="col-sm-3 col-form-label font-weight-bolder">Tanggal Lahir</label>
										<div class="col-sm-9">
											{{$profile->tanggal_lahir}}
										</div>
									</div>
									<div class="form-group row align-items-center">
										<label class="col-sm-3 col-form-label font-weight-bolder">Alamat</label>
										<div class="col-sm-9">
											<p class="mb-0 text-muted">{{$profile->alamat}}
                                            </p>
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
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
	<script src="assets/js/menu-setting.min.js"></script>



<!-- ekko-lightbox Js -->
{{-- <script src="assets/js/plugins/ekko-lightbox.min.js"></script> --}}
{{-- <script src="assets/js/plugins/lightbox.min.js"></script>
<script src="assets/js/pages/ac-lightbox.js"></script> --}}
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
