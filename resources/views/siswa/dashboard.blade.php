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
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Student</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">School</a></li>
                            <li class="breadcrumb-item"><a href="#!">Student</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- subscribe start -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user-graduate f-36 text-c-purple"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Jumlah Siswa</h6>
                                <h2 class="m-b-0">{{$total}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-check-square f-36 text-c-green"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Siswa Lulus</h6>
                                <h2 class="m-b-0">{{$lulus}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-times-circle f-36 text-c-red"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Siswa Tidak Lulus</h6>
                                <h2 class="m-b-0">{{$tidak}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Account summary</h5>
                    </div>
                    <div class="card-body">
                        <div id="summary-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Student List </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>NIK</th>
                                        <th>Email</th>
                                        <th>Hp</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Penguji</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($siswas as $siswa)
                                    <tr>
                                        <td>{{$siswa->name}}</td>
                                        <th>{{$siswa->nik}}</th>
                                        <td>{{$siswa->email}}</td>
                                        <td>{{$siswa->hp}}</td>
                                        <td>{{$siswa->jenis_kelamin}}</td>
                                        <td>{{$siswa->tanggal_lahir}}</td>
                                        <td>{{$siswa->alamat}}</td>
                                        <td>{{$siswa->penguji}}</td>
                                        <td>
                                            @if($siswa->status === "Lulus")
                                                <button type="submit" class="btn btn-info btn-sm">Lulus</button>
                                            @elseif($siswa->status === "Tidak Lulus")
                                                <button type="submit" class="btn btn-danger btn-sm"> Tidak Lulus</button>
                                            @else

                                            <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-success btn-sm">Edit</a>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('lulus', $siswa->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-info btn-sm">Lulus</button>
                                            </form>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('tidaklulus', $siswa->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-danger btn-sm"> Tidak Lulus</button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty
                                        <p>Belum ada data</p>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
        </div>
        <!-- [ Main Content ] end -->
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

    <script src="assets/js/plugins/apexcharts.min.js"></script>



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

<script>
    // [ operation-processed ] start
    $(function() {
        var options = {
            chart: {
                height: 250,
                type: 'area',
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            colors: ["#ff5252", "#4680ff"],
            fill: {
                type: 'solid',
                opacity: 0.2,
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#fff",
                strokeColor: ["#ff5252", "#4680ff"],
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            series: [{
                name: 'Lulus',
                data: [40, 75, 20, 45, 30, 50, 30]
            }, {
                name: 'Tidak Lulus',
                data: [90, 40, 60, 20, 10, 0, 0]
            }],

            xaxis: {
                type: 'datetime',
                categories: ["2017","2018","2019","2020","2021","2022"],
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            }
        }
        var chart = new ApexCharts(
            document.querySelector("#summary-chart"),
            options
        );
        chart.render();
    });
    // [ operation-processed ] end
    // [ proj-earning ] start
    $(function() {
        var options = {
            chart: {
                type: 'bar',
                height: 310,
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: false,
                },
            },
            dataLabels: {
                enabled: false,
            },
            colors: ["#fff"],
            plotOptions: {
                bar: {
                    color: '#fff',
                    columnWidth: '60%',
                }
            },
            fill: {
                type: 'solid',
                opacity: 1,
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54, 25, 66, 41, 89, 63, 54, 25, 66, 41, 89, 63, 25, 44, 12, 36]
            }],
            xaxis: {
                crosshairs: {
                    width: 1
                },
                labels: {
                    show: false,
                },
            },
            yaxis: {
                labels: {
                    style: {
                        color: '#fff',
                    }
                },
            },
            grid: {
                borderColor: '#ffffff85',
                padding: {
                    bottom: 0,
                    left: 10,
                }
            },
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Total absent'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#absent-chart"), options);
        chart.render();
    });
    // [ proj-earning ] end
    // Full calendar
</script>

</body>

</html>
