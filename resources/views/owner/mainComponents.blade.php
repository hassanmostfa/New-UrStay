<!doctype html>
<html lang="ar" dir="rtl">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Owner Dashboard</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.compat.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.theme.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/morris/morris.css') }}" />

<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" />

<!-- Skin CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/skins/default.css') }}" />

<!-- Theme Custom CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

<!-- Head Libs -->
<script src="{{ asset('assets/vendor/modernizr/modernizr.js') }}"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">

<!-- map -->
<!-- Include Leaflet CSS and JS -->
<!-- <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script> -->


</head>

	</head>
	<body>

	<style>
		body {
			direction: rtl;
			font-family: 'Almarai', sans-serif;
		}
	</style>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../4.0.0" class="logo">
						<img src="{{asset('home-assets/images/new-logo.png')}}" alt="URSTAY Owner" />
					</a>

					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
				<div class="header-right">

					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group">
							<input type="text" class="form-control" name="q" id="q" placeholder="ابحث هنا ...">
							<button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
						</div>
					</form>

					<span class="separator"></span>

					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
								<i class="bx bx-list-ol"></i>
								<span class="badge">3</span>
							</a>

							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="float-end badge badge-default">3</span>
									جدول المهام
								</div>

								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-1">
												<span class="message float-start">Generating Sales Report</span>
												<span class="message float-end text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>

										<li>
											<p class="clearfix mb-1">
												<span class="message float-start">Importing Contacts</span>
												<span class="message float-end text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>

										<li>
											<p class="clearfix mb-1">
												<span class="message float-start">Uploading something big</span>
												<span class="message float-end text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-1">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
								<i class="bx bx-envelope"></i>
								<span class="badge">4</span>
							</a>

							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-end badge badge-default">230</span>
									الرسائل
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{asset('assets/img/!sample-user.jpg')}}" alt="Joseph Doe Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{asset('assets/img/!sample-user.jpg')}}" alt="Joseph Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="{{asset('assets/img/!sample-user.jpg')}}" alt="Joe Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<!-- <li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="img/!sample-" alt="Joseph Junior" class="rounded-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li> -->
									</ul>

									<hr />

									<div class="text-end">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
								<i class="bx bx-bell"></i>
								<span class="badge">3</span>
							</a>

							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="float-end badge badge-default">3</span>
									التنبيهات
								</div>

								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-thumbs-down bg-danger text-light"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="bx bx-lock bg-warning text-light"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fas fa-signal bg-success text-light"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2021</span>
											</a>
										</li>
									</ul>

									<hr />

									<div class="text-end">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>

					<span class="separator"></span>

					<div id="userbox" class="userbox">
						<a href="#" data-bs-toggle="dropdown">
							<figure class="profile-picture">
								<img src= "{{asset('user-assets/images/hassan.jpg')}}" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</span>
								<span class="role">مالك</span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled p-0 my-2" style="text-align:right !important;>
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="#"><i class="bx bx-user-circle"></i> حسابي</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="bx bx-lock"></i> شاشة القفل</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="{{ route('owner.logout') }}"><i class="bx bx-power-off"></i> تسجيل خروح </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            الروابط
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>

				    <div class="nano">
				        <div class="nano-content p-0 m-0" style="right:-8px!important;">
				            <nav id="menu" class="nav-main" role="navigation">

				                <ul class="nav nav-main p-0">
				                    <li>
				                        <a class="nav-link" href="{{route('owner-dashboard')}}">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>لوحة التحكم</span>
				                        </a>
				                    </li>

				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
										<i class="fa fa-building" aria-hidden="true"></i>
				                            <span>الوحدات</span>
				                        </a>
				                        <ul class="nav nav-children">
										<li class="d-flex align-items-center">
												<a class="nav-link" href="{{route('owner.myUnits')}}">
													<i class="fa fa-angle-double-left" aria-hidden="true"></i>
				                            	وحداتي
				                                </a>
				                            </li>

				                            <li class="d-flex align-items-center">
												<a class="nav-link" href="{{route('owner.addUnit')}}">
													<i class="fa fa-angle-double-left" aria-hidden="true"></i>
				                                    اضافة وحده جديدة
				                                </a>
				                            </li>
				
				                            <li class="d-flex align-items-center">
												<a class="nav-link" href="{{route('owner.updatedUnits')}}">
													<i class="fa fa-angle-double-left" aria-hidden="true"></i>
				                            	 	الوحدات المحدثة
				                                </a>
				                            </li>

				                            <li class="d-flex align-items-center">
												<a class="nav-link" href="{{route('owner.rejectedUnits')}}">
													<i class="fa fa-angle-double-left" aria-hidden="true"></i>
				                            	 	الوحدات المرفوضة
				                                </a>
				                            </li>
				                        </ul>
				                    </li>


				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
										<i class="fa fa-calendar" aria-hidden="true"></i>
				                            <span>الحجوزات</span>
				                        </a>
				                        <ul class="nav nav-children">
										<li class="d-flex align-items-center">
												<a class="nav-link" href="{{route('owner.bookings')}}">
													<i class="fa fa-angle-double-left" aria-hidden="true"></i>
				                            	عمليات الحجز
				                                </a>
				                            </li>

				                            <li class="d-flex align-items-center">
												<a class="nav-link" href="{{route('owner.newBookings')}}">
													<i class="fa fa-angle-double-left" aria-hidden="true"></i>
				                                      الطلبات الجديدة 
				                                </a>
				                            </li>
				                        </ul>
				                    </li>

									
				                    <li>
				                        <a class="nav-link" href="#">
											<i class="bx bx-envelope" aria-hidden="true"></i>
				                            <span>البريد الوارد</span>
											<span class="float-start badge badge-primary">182</span>
				                        </a>
				                    </li>
				                    

				                    <li>
				                        <a class="nav-link" href="mailbox-folder.html">
										<i class="fa fa-cog" aria-hidden="true"></i>
				                            <span>الاعدادات</span></span>
				                        </a>
				                    </li>

				                    <li>
				                        <a class="nav-link" href="#">
										<i class="fa fa-phone" aria-hidden="true"></i>
				                            <span>تواصل معنا</span></span>
				                        </a>
				                    </li>
				                    
				                </ul>

				            </nav>

				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>

				    </div>

				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>@yield('title')</h2>

						<div class="right-wrapper text-end">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="bx bx-home-alt"></i>
									</a>
								</li>

								<li><span>@yield('link_one')</span></li>

								<li><span>@yield('link_two')</span></li>

							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div>
                        @yield('content')
                    </div>
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close d-md-none">
							Collapse <i class="fas fa-chevron-right"></i>
						</a>

						<div class="sidebar-right-wrapper">

							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark"></div>

								<ul>
									<li>
										<time datetime="2021-04-19T00:00+00:00">04/19/2021</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>

							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<!-- <li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li> -->
									<!-- <li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li> -->
									<!-- <li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li> -->
								</ul>
							</div>

						</div>
					</div>
				</div>
			</aside>

		</section>

		<!-- Vendor -->
<script src="{{ asset('assets/vendor/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
<script src="{{ asset('assets/vendor/popper/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/vendor/common/common.js') }}"></script>
<script src="{{ asset('assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
<script src="{{ asset('assets/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

<!-- Specific Page Vendor -->
<script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-appear/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrapv5-multiselect/js/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.js') }}"></script>
<script src="{{ asset('assets/vendor/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('assets/vendor/flot.tooltip/jquery.flot.tooltip.js') }}"></script>
<script src="{{ asset('assets/vendor/flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('assets/vendor/flot/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('assets/vendor/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset('assets/vendor/raphael/raphael.js') }}"></script>
<script src="{{ asset('assets/vendor/morris/morris.js') }}"></script>
<script src="{{ asset('assets/vendor/gauge/gauge.js') }}"></script>
<script src="{{ asset('assets/vendor/snap.svg/snap.svg.js') }}"></script>
<script src="{{ asset('assets/vendor/liquid-meter/liquid.meter.js') }}"></script>
<script src="{{ asset('assets/vendor/jqvmap/jquery.vmap.js') }}"></script>
<script src="{{ asset('assets/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
<script src="{{ asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>
<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>
<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>
<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>
<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>
<script src="{{ asset('assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('assets/js/theme.js') }}"></script>

<!-- Theme Custom -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('assets/js/theme.init.js') }}"></script>

<!-- Examples -->
<script src="{{ asset('assets/js/examples/examples.dashboard.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const steps = document.querySelectorAll('.step');
    const nextButtons = document.querySelectorAll('.next-btn');
    const prevButtons = document.querySelectorAll('.prev-btn');
	
    nextButtons.forEach(button => {
        button.addEventListener('click', function() {
            const currentStep = this.closest('.step');
            const nextStepId = this.getAttribute('data-next-step');
            const nextStep = document.getElementById('step-' + nextStepId);

            currentStep.style.display = 'none';
            nextStep.style.display = 'block';
        });
    });

    prevButtons.forEach(button => {
        button.addEventListener('click', function() {
            const currentStep = this.closest('.step');
            const prevStepId = this.getAttribute('data-prev-step');
            const prevStep = document.getElementById('step-' + prevStepId);

            currentStep.style.display = 'none';
            prevStep.style.display = 'block';
        });
	});
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // When zone is selected, fetch related governorates
    document.getElementById('zone').addEventListener('change', function() {
        var zoneId = this.value;
        var zoneName = this.options[this.selectedIndex].getAttribute('data-name');

        // Set zone name in hidden input
        document.getElementById('selected_zone_name').value = zoneName;

        fetch(`/owner/get-governorates/${zoneId}`)
            .then(response => response.json())
            .then(data => {
                var governorateSelect = document.getElementById('governorate');
                governorateSelect.innerHTML = '<option value="" disabled selected>اختر المحافظة</option>';
                data.forEach(governorate => {
                    governorateSelect.innerHTML += `<option value="${governorate.id}" data-name="${governorate.name}">${governorate.name}</option>`;
                });
                // Reset city and district
                document.getElementById('city').innerHTML = '<option value="" disabled selected>اختر المدينة</option>';
                document.getElementById('district').innerHTML = '<option value="" disabled selected>اختر الحي</option>';
            })
            .catch(error => console.error('Error fetching governorates:', error));
    });

    // When governorate is selected, fetch related cities
    document.getElementById('governorate').addEventListener('change', function() {
        var governorateId = this.value;
        var governorateName = this.options[this.selectedIndex].getAttribute('data-name');

        // Set governorate name in hidden input
        document.getElementById('selected_governorate_name').value = governorateName;

        fetch(`/owner/get-cities/${governorateId}`)
            .then(response => response.json())
            .then(data => {
                var citySelect = document.getElementById('city');
                citySelect.innerHTML = '<option value="" disabled selected>اختر المدينة</option>';
                data.forEach(city => {
                    citySelect.innerHTML += `<option value="${city.id}" data-name="${city.name}">${city.name}</option>`;
                });
                // Reset district
                document.getElementById('district').innerHTML = '<option value="" disabled selected>اختر الحي</option>';
            })
            .catch(error => console.error('Error fetching cities:', error));
    });

    // When city is selected, fetch related districts
    document.getElementById('city').addEventListener('change', function() {
        var cityId = this.value;
        var cityName = this.options[this.selectedIndex].getAttribute('data-name');

        // Set city name in hidden input
        document.getElementById('selected_city_name').value = cityName;

        fetch(`/owner/get-districts/${cityId}`)
            .then(response => response.json())
            .then(data => {
                var districtSelect = document.getElementById('district');
                districtSelect.innerHTML = '<option value="" disabled selected>اختر الحي</option>';
                data.forEach(district => {
                    districtSelect.innerHTML += `<option value="${district.id}" data-name="${district.name}">${district.name}</option>`;
                });
            })
            .catch(error => console.error('Error fetching districts:', error));
    });

    // When district is selected, set the district name in hidden input
    document.getElementById('district').addEventListener('change', function() {
        var districtName = this.options[this.selectedIndex].getAttribute('data-name');
        document.getElementById('selected_district_name').value = districtName;
    });

	// console.log(zoneName);
	// console.log(governorateName);
	// console.log(cityName);
	// console.log(districtName);	
});
</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    var categorySelect = document.getElementById('category');
    var subcategorySelect = document.getElementById('subcategory');
    var subSubcategorySelect = document.getElementById('sub_subcategory');

    var categoryNameInput = document.getElementById('category_name');
    var subcategoryNameInput = document.getElementById('subcategory_name');
    var subSubcategoryNameInput = document.getElementById('sub_subcategory_name');

    // When category is selected, fetch related subcategories and set the hidden input
    categorySelect.addEventListener('change', function() {
        var categoryId = this.value;
        var categoryName = this.options[this.selectedIndex].text;

        categoryNameInput.value = categoryName;  // Store category name in hidden input

        // Fetch related subcategories
        fetch(`/owner/get-subcategories/${categoryId}`)
            .then(response => response.json())
            .then(data => {
                subcategorySelect.innerHTML = '<option value="" disabled selected>Select a Subcategory</option>';
                subSubcategorySelect.innerHTML = '<option value="" disabled selected>Select a Sub-Subcategory</option>';
                
                data.forEach(subcategory => {
                    subcategorySelect.innerHTML += `<option value="${subcategory.id}" data-name="${subcategory.name}">${subcategory.name}</option>`;
                });
            })
            .catch(error => console.error('Error fetching subcategories:', error));
    });

    // When subcategory is selected, fetch related sub-subcategories and set the hidden input
    subcategorySelect.addEventListener('change', function() {
        var subcategoryId = this.value;
        var subcategoryName = this.options[this.selectedIndex].text;

        subcategoryNameInput.value = subcategoryName;  // Store subcategory name in hidden input

        // Fetch related sub-subcategories
        fetch(`/owner/get-sub-subcategories/${subcategoryId}`)
            .then(response => response.json())
            .then(data => {
                subSubcategorySelect.innerHTML = '<option value="" disabled selected>Select a Sub-Subcategory</option>';
                
                data.forEach(subSubcategory => {
                    subSubcategorySelect.innerHTML += `<option value="${subSubcategory.id}" data-name="${subSubcategory.name}">${subSubcategory.name}</option>`;
                });
            })
            .catch(error => console.error('Error fetching sub-subcategories:', error));
    });

    // When sub-subcategory is selected, set the hidden input for sub-subcategory name
    subSubcategorySelect.addEventListener('change', function() {
        var subSubcategoryName = this.options[this.selectedIndex].text;
        subSubcategoryNameInput.value = subSubcategoryName;  // Store sub-subcategory name in hidden input
    });
});
</script>




<!-- JavaScript for handling rooms images preview -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    function previewImages(input, previewContainer) {
        const files = input.files;
        previewContainer.innerHTML = ''; // Clear previous previews

        if (files) {
            Array.from(files).forEach(file => {
                const reader = new FileReader();

                reader.onload = function (e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '150px';
                    img.style.margin = '10px';
                    img.classList.add('img-fluid');

                    previewContainer.appendChild(img);
                };

                reader.readAsDataURL(file);
            });
        }
    }

    // Handle main property image previews
    document.getElementById('image').addEventListener('change', function () {
        previewImages(this, document.getElementById('main_image_preview'));
    });

    // Handle room image previews
    document.getElementById('rooms_images').addEventListener('change', function () {
        previewImages(this, document.getElementById('room_image_preview'));
    });

	// Handle Kitchen images previews
	document.getElementById('kitchen_images').addEventListener('change', function () {
		previewImages(this, document.getElementById('kitchen_image_preview'));
	});

	// Handle Pool images previews
	document.getElementById('pool_images').addEventListener('change', function () {
		previewImages(this, document.getElementById('pool_image_preview'));
	});

	// Handle Bathroom images previews
	document.getElementById('bathroom_images').addEventListener('change', function () {
		previewImages(this, document.getElementById('bathroom_image_preview'));
	});

	// Handle Building images previews
	document.getElementById('building_images').addEventListener('change', function () {
		previewImages(this, document.getElementById('building_image_preview'));
	});

	// Handle Facilities images previews
	document.getElementById('facilities_images').addEventListener('change', function () {
		previewImages(this, document.getElementById('facilities_image_preview'));
	});

	// Handle Aditional Images previews
	document.getElementById('additional_images').addEventListener('change', function () {
		previewImages(this, document.getElementById('additional_image_preview'));
	});

});
</script>

<!-- map -->
<!-- <script>
    // Ensure map initialization happens after DOM is fully loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Add a delay to ensure smooth rendering of the map
        setTimeout(function() {
            // Initialize the map and set the view to a default location (e.g., Cairo)
            const map = L.map('map').setView([30.0444, 31.2357], 13);

            // Load and display tile layer from OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            let marker;

            // Event listener for map clicks
            map.on('click', function(e) {
                const lat = e.latlng.lat;
                const lng = e.latlng.lng;

                // Place or update marker
                if (marker) {
                    marker.setLatLng(e.latlng);
                } else {
                    marker = L.marker(e.latlng).addTo(map);
                }

                // Update input fields for latitude and longitude
                document.getElementById('latitude').value = lat;
                document.getElementById('longitude').value = lng;

                // Call Nominatim reverse geocoding API to get the address details
                fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&zoom=10&addressdetails=1&accept-language=ar`)
                    .then(response => response.json())
                    .then(data => {
                        const address = data.address;
                        console.log('Full Address Data:', address);  // Log the full address data for debugging

                        // Extracting address components and updating respective input fields
                        document.getElementById('address').value = data.display_name;  // Full address
                        document.getElementById('country').value = address.country || '';  // Country
                        document.getElementById('state').value = address.state || '';  // State/Province
                        document.getElementById('city').value = address.city || address.town || address.village || '';  // City or town
                        document.getElementById('postcode').value = address.postcode || '';  // Postal code
                    })
                    .catch(error => console.error('Error with reverse geocoding:', error));
            });
        }, 500);  // Delay of 500ms to ensure the map renders smoothly
    });
    </script> -->



    // Function to get the address from the clicked location
    function geocodeLatLng(location) {
        geocoder.geocode({ location: location }, (results, status) => {
            if (status === "OK") {
                if (results[0]) {
                    // Set the address value to the input field
                    document.getElementById('address').value = results[0].formatted_address;
                } else {
                    window.alert("No results found");
                }
            } else {
                window.alert("Geocoder failed due to: " + status);
            }
        });
    }

    // Initialize the map when the page is loaded
    window.onload = initMap;
</script>


<!-- JavaScript for handling facility selection -->
<script>
    // Array of room facilities items
    const roomFacilitiesItems = ["غرفة نوم", "مسبح", "مجلس", "مطبخ", "دورة مياه"];
    let selectedRoomItems = []; // Array to store selected items

    // Function to create room facilities item cards
    function createRoomItemCards() {
        const roomItemsContainer = document.getElementById('roomFacilitiesItems');
        roomFacilitiesItems.forEach(item => {
            const card = document.createElement('div');
            card.classList.add('selected-item', 'm-2', 'p-2');
            card.style.cursor = 'pointer';
            card.innerHTML = `<span>${item}</span>`;
            card.onclick = () => toggleRoomSelection(card, item);
            roomItemsContainer.appendChild(card);
        });
    }

    // Function to toggle item selection
    function toggleRoomSelection(card, item) {
        const selectedRoomContainer = document.getElementById('selectedRoomContainer');
        if (selectedRoomItems.includes(item)) {
            // If already selected, remove from array
            selectedRoomItems = selectedRoomItems.filter(i => i !== item);
            card.style.backgroundColor = 'transparent';
            card.style.color = '#e43c59';

            // Remove hidden input for the deselected item
            const inputToRemove = document.querySelector(`input[value="${item}"]`);
            if (inputToRemove) {
                selectedRoomContainer.removeChild(inputToRemove);
            }
        } else {
            // If not selected, add to array and change background
            selectedRoomItems.push(item);
            card.style.backgroundColor = '#e43c59';
            card.style.color = 'white';

            // Add hidden input for the newly selected item
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'facilities[]'; // Correct name here
            hiddenInput.value = item;
            selectedRoomContainer.appendChild(hiddenInput);
        }

        // Update the array log for debugging
        console.log(selectedRoomItems);
    }

    // Initialize room item cards
    createRoomItemCards();
</script>

<script>
    // Function to create a new facility input field with a remove button
    function createFacilityInput() {
        const facilityInputsContainer = document.getElementById('facilityInputsContainer');

        // Create a div to hold the input and remove button (in the same row)
        const facilityDiv = document.createElement('div');
        facilityDiv.classList.add('input-group', 'mb-2');

        // Create the input field
        const facilityInput = document.createElement('input');
        facilityInput.type = 'text';
        facilityInput.name = 'facilities[]';  // Facilities array input name
        facilityInput.placeholder = 'ادخل المرفق الذي تريده';
        facilityInput.classList.add('form-control');

        // Create the remove button (inside an input-group-append div)
        const removeBtnDiv = document.createElement('div');
        removeBtnDiv.classList.add('input-group-append');

        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.innerText = 'ازالة';
        removeBtn.classList.add('btn', 'btn-danger');

        // Add event listener to remove the input when the remove button is clicked
        removeBtn.onclick = () => {
            facilityInputsContainer.removeChild(facilityDiv);
        };

        // Append the remove button to the input-group-append div
        removeBtnDiv.appendChild(removeBtn);

        // Append the input field and remove button div to the facility div
        facilityDiv.appendChild(facilityInput);
        facilityDiv.appendChild(removeBtnDiv);

        // Append the entire facility div to the container
        facilityInputsContainer.appendChild(facilityDiv);
    }

    // Add event listener to the "Add Facility" button
    document.getElementById('addFacilityBtn').addEventListener('click', createFacilityInput);
</script>

<!-- JavaScript for handling kitchen item selection -->
<script>
    // Array of kitchen items
    const kitchenItems = ["ثلاجة", "غلاية", "فرن", "فريزر", "اله قهوة", "اواني طهي", "مايكروويف"];
    let selectedItems = []; // Array to store selected items

    // Function to create kitchen item cards
    function createKitchenItemCards() {
        const kitchenItemsContainer = document.getElementById('kitchenItems');
        kitchenItems.forEach(item => {
            const card = document.createElement('div');
            card.classList.add('selected-item', 'm-2', 'p-2');
            card.style.cursor = 'pointer';
            card.innerHTML = `<span>${item}</span>`;
            card.onclick = () => toggleSelection(card, item);
            kitchenItemsContainer.appendChild(card);
        });
    }

    // Function to toggle item selection
    function toggleSelection(card, item) {
        if (selectedItems.includes(item)) {
            // If already selected, remove from array and reset background
            selectedItems = selectedItems.filter(i => i !== item);
            card.style.backgroundColor = 'transparent';
			card.style.color = '#e43c59';
        } else {
            // If not selected, add to array and change background
            selectedItems.push(item);
            card.style.backgroundColor = '#e43c59';
			card.style.color = 'white';
        }
        // Update hidden input value with selected items
        document.getElementById('kitchen').value = selectedItems.join(', ');
		console.log(selectedItems);
		
    }

    // Initialize kitchen item cards
    createKitchenItemCards();
	
</script>

<script>
    // Function to create a new kitchen input field with a remove button
    function createKitchenInput() {
        const kitchenInputsContainer = document.getElementById('kitchenInputsContainer');

        // Create a div to hold the input and remove button (in the same row)
        const kitchenDiv = document.createElement('div');
        kitchenDiv.classList.add('input-group', 'mb-2');

        // Create the input field
        const kitchenInput = document.createElement('input');
        kitchenInput.type = 'text';
        kitchenInput.name = 'kitchen[]';  // Kitchen array input name
        kitchenInput.placeholder = 'ادخل المرفق الذي تريده';
        kitchenInput.classList.add('form-control');

        // Create the remove button (inside an input-group-append div)
        const removeBtnDiv = document.createElement('div');
        removeBtnDiv.classList.add('input-group-append');

        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.innerText = 'ازالة';
        removeBtn.classList.add('btn', 'btn-danger');

        // Add event listener to remove the input when the remove button is clicked
        removeBtn.onclick = () => {
            kitchenInputsContainer.removeChild(kitchenDiv);
        };

        // Append the remove button to the input-group-append div
        removeBtnDiv.appendChild(removeBtn);

        // Append the input field and remove button div to the kitchen div
        kitchenDiv.appendChild(kitchenInput);
        kitchenDiv.appendChild(removeBtnDiv);

        // Append the entire kitchen div to the container
        kitchenInputsContainer.appendChild(kitchenDiv);
    }

    // Add event listener to the "Add Kitchen Item" button
    document.getElementById('addKitchenBtn').addEventListener('click', createKitchenInput);
</script>


<!-- JavaScript for handling bathroom item selection -->
<script>
    // Array of bathroom facilities items
    const bathroomFacilitiesItems = [
        "بانيو", "دش", "جاكوزي", "رداء حمام", "سليبر", "شامبو", "صابون", "مناديل"
    ];

    let selectedBathroomItems = []; // Array to store selected items

    // Function to create bathroom item cards
    function createBathroomItemCards() {
        const bathroomItemsContainer = document.getElementById('bathroomFacilitiesItems');
        bathroomFacilitiesItems.forEach(item => {
            const card = document.createElement('div');
            card.classList.add('selected-item', 'm-2', 'p-2');
            card.style.cursor = 'pointer';
            card.style.color = '#e43c59'; // Default color for unselected
            card.innerHTML = `<span>${item}</span>`;
            card.onclick = () => toggleBathroomSelection(card, item);
            bathroomItemsContainer.appendChild(card);
        });
    }

    // Function to toggle item selection
    function toggleBathroomSelection(card, item) {
        const selectedBathroomContainer = document.getElementById('selectedBathroomContainer');
        if (selectedBathroomItems.includes(item)) {
            // If already selected, remove from array
            selectedBathroomItems = selectedBathroomItems.filter(i => i !== item);
            card.style.backgroundColor = 'transparent';
            card.style.color = '#e43c59';

            // Remove hidden input for the deselected item
            const inputToRemove = document.querySelector(`input[value="${item}"]`);
            if (inputToRemove) {
                selectedBathroomContainer.removeChild(inputToRemove);
            }
        } else {
            // If not selected, add to array and change background
            selectedBathroomItems.push(item);
            card.style.backgroundColor = '#e43c59';
            card.style.color = 'white';

            // Check if the hidden input already exists
            if (!document.querySelector(`input[value="${item}"]`)) {
                // Add hidden input for the newly selected item
                const hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'bathroom_facilities[]'; // Add array notation here
                hiddenInput.value = item;
                selectedBathroomContainer.appendChild(hiddenInput);
            }
        }
        console.log(selectedBathroomItems); // Debugging log, remove in production
		console.log(selectedBathroomItems);
		
    }

    // Initialize bathroom item cards
    createBathroomItemCards();
</script>


<script>
    // Function to create a new bathroom facility input field with a remove button (in Arabic)
    function createBathroomFacilityInput() {
        const bathroomFacilitiesInputsContainer = document.getElementById('bathroomFacilitiesInputsContainer');

        // Create a div to hold the input and remove button (in the same row)
        const bathroomFacilityDiv = document.createElement('div');
        bathroomFacilityDiv.classList.add('input-group', 'mb-2');

        // Create the input field
        const bathroomFacilityInput = document.createElement('input');
        bathroomFacilityInput.type = 'text';
        bathroomFacilityInput.name = 'bathroom_facilities[]';  // Bathroom facilities array input name
        bathroomFacilityInput.placeholder = 'أدخل مرفق الذي تريده ...';
        bathroomFacilityInput.classList.add('form-control');

        // Create the remove button (inside an input-group-append div)
        const removeBtnDiv = document.createElement('div');
        removeBtnDiv.classList.add('input-group-append');

        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.innerText = 'إزالة';
        removeBtn.classList.add('btn', 'btn-danger');

        // Add event listener to remove the input when the remove button is clicked
        removeBtn.onclick = () => {
            bathroomFacilitiesInputsContainer.removeChild(bathroomFacilityDiv);
        };

        // Append the remove button to the input-group-append div
        removeBtnDiv.appendChild(removeBtn);

        // Append the input field and remove button div to the bathroom facility div
        bathroomFacilityDiv.appendChild(bathroomFacilityInput);
        bathroomFacilityDiv.appendChild(removeBtnDiv);

        // Append the entire bathroom facility div to the container
        bathroomFacilitiesInputsContainer.appendChild(bathroomFacilityDiv);
    }

    // Add event listener to the "إضافة مرفق حمام" button
    document.getElementById('addBathroomFacilityBtn').addEventListener('click', createBathroomFacilityInput);
</script>

<!-- Javascript for additional facilities -->
<script>
    // Array of additional facilities items
    const additionalFacilitiesItems = [
        "العاب اطفال", "اضاءة اضافية", "بروجيكتور", "بلايستشن", "بلكونة", 
        "تليفزيون", "سماعات", "ركن شواء", "صالة طعام", "غرفة تجهيز عروس", 
        "غرفة سائقين", "غرفة سينما", "قسمين", "قسمين متصلة بينهم باب", 
        "قسمين منفصلة", "كرسي مساج", "مسبح عام للنساء", "مسبح عام مشترك", 
        "ملحق خارجي", "موقد حطب"
    ];

    let selectedAdditionalItems = []; // Array to store selected items

    // Function to create additional item cards
    function createAdditionalItemCards() {
        const additionalItemsContainer = document.getElementById('additionalFacilitiesItems');
        additionalFacilitiesItems.forEach(item => {
            const card = document.createElement('div');
            card.classList.add('selected-item', 'm-2', 'p-2');
            card.style.cursor = 'pointer';
            card.innerHTML = `<span>${item}</span>`;
            card.onclick = () => toggleAdditionalSelection(card, item);
            additionalItemsContainer.appendChild(card);
        });
    }

    // Function to toggle item selection
    function toggleAdditionalSelection(card, item) {
        const selectedAdditionalContainer = document.getElementById('selectedAdditionalContainer');
        if (selectedAdditionalItems.includes(item)) {
            // If already selected, remove from array
            selectedAdditionalItems = selectedAdditionalItems.filter(i => i !== item);
            card.style.backgroundColor = 'transparent';
            card.style.color = '#e43c59';

            // Remove hidden input for the deselected item
            const inputToRemove = document.querySelector(`input[value="${item}"]`);
            if (inputToRemove) {
                selectedAdditionalContainer.removeChild(inputToRemove);
            }
        } else {
            // If not selected, add to array and change background
            selectedAdditionalItems.push(item);
            card.style.backgroundColor = '#e43c59';
            card.style.color = 'white';

            // Add hidden input for the newly selected item
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'additional_facilities[]'; // Correct name here
            hiddenInput.value = item;
            selectedAdditionalContainer.appendChild(hiddenInput);
        }
    }
	console.log(selectedAdditionalItems);
	

    // Initialize additional item cards
    createAdditionalItemCards();
</script>

<script>
    // Function to create a new additional facility input field with a remove button (in Arabic)
    function createAdditionalFacilityInput() {
        const additionalFacilitiesInputsContainer = document.getElementById('additionalFacilitiesInputsContainer');

        // Create a div to hold the input and remove button (in the same row)
        const additionalFacilityDiv = document.createElement('div');
        additionalFacilityDiv.classList.add('input-group', 'mb-2');

        // Create the input field
        const additionalFacilityInput = document.createElement('input');
        additionalFacilityInput.type = 'text';
        additionalFacilityInput.name = 'additional_facilities[]';  // Additional facilities array input name
        additionalFacilityInput.placeholder = 'أدخل مرفق إضافي';
        additionalFacilityInput.classList.add('form-control');

        // Create the remove button (inside an input-group-append div)
        const removeBtnDiv = document.createElement('div');
        removeBtnDiv.classList.add('input-group-append');

        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.innerText = 'إزالة';
        removeBtn.classList.add('btn', 'btn-danger');

        // Add event listener to remove the input when the remove button is clicked
        removeBtn.onclick = () => {
            additionalFacilitiesInputsContainer.removeChild(additionalFacilityDiv);
        };

        // Append the remove button to the input-group-append div
        removeBtnDiv.appendChild(removeBtn);

        // Append the input field and remove button div to the additional facility div
        additionalFacilityDiv.appendChild(additionalFacilityInput);
        additionalFacilityDiv.appendChild(removeBtnDiv);

        // Append the entire additional facility div to the container
        additionalFacilitiesInputsContainer.appendChild(additionalFacilityDiv);
    }

    // Add event listener to the "إضافة مرفق إضافي" button
    document.getElementById('addAdditionalFacilityBtn').addEventListener('click', createAdditionalFacilityInput);
</script>


<!-- Javascript for advantages items -->
<script>
    // Array of advantages items
const advantagesItems = [
    "مصاعد", "اطلالة علي الجبل", "اطلالة علي الحديقة", "اطلالة علي البحر", 
    "انترنت", "دخول ذاتي", "شاطئ خاص", "شلال علي الجبل", "مدخل سيارة", 
    "مكتب امن"
];

let selectedAdvantagesItems = []; // Array to store selected items

// Function to create advantages item cards
function createAdvantagesItemCards() {
    const advantagesItemsContainer = document.getElementById('advantagesItems');
    advantagesItems.forEach(item => {
        const card = document.createElement('div');
        card.classList.add('selected-item', 'm-2', 'p-2');
        card.style.cursor = 'pointer';
        card.innerHTML = `<span>${item}</span>`;
        card.onclick = () => toggleAdvantagesSelection(card, item);
        advantagesItemsContainer.appendChild(card);
    });
}

// Function to toggle item selection
function toggleAdvantagesSelection(card, item) {
    const selectedAdvantagesContainer = document.getElementById('selectedAdvantagesContainer');
    if (selectedAdvantagesItems.includes(item)) {
        // If already selected, remove from array
        selectedAdvantagesItems = selectedAdvantagesItems.filter(i => i !== item);
        card.style.backgroundColor = 'transparent';
        card.style.color = '#e43c59';

        // Remove hidden input for the deselected item
        const inputToRemove = document.querySelector(`input[value="${item}"]`);
        if (inputToRemove) {
            selectedAdvantagesContainer.removeChild(inputToRemove);
        }
    } else {
        // If not selected, add to array and change background
        selectedAdvantagesItems.push(item);
        card.style.backgroundColor = '#e43c59';
        card.style.color = 'white';

        // Add hidden input for the newly selected item
        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'advantages[]'; // Add array notation here
        hiddenInput.value = item;
        selectedAdvantagesContainer.appendChild(hiddenInput);
    }
	console.log(selectedAdvantagesItems);
	
}

// Initialize advantages item cards
createAdvantagesItemCards();
</script>

<script>
    // Function to create a new advantage input field with a remove button (in Arabic)
    function createAdvantageInput() {
        const advantagesInputsContainer = document.getElementById('advantagesInputsContainer');

        // Create a div to hold the input and remove button (in the same row)
        const advantageDiv = document.createElement('div');
        advantageDiv.classList.add('input-group', 'mb-2');

        // Create the input field
        const advantageInput = document.createElement('input');
        advantageInput.type = 'text';
        advantageInput.name = 'advantages[]';  // Advantages array input name
        advantageInput.placeholder = 'أدخل ميزة';
        advantageInput.classList.add('form-control');

        // Create the remove button (inside an input-group-append div)
        const removeBtnDiv = document.createElement('div');
        removeBtnDiv.classList.add('input-group-append');

        const removeBtn = document.createElement('button');
        removeBtn.type = 'button';
        removeBtn.innerText = 'إزالة';
        removeBtn.classList.add('btn', 'btn-danger');

        // Add event listener to remove the input when the remove button is clicked
        removeBtn.onclick = () => {
            advantagesInputsContainer.removeChild(advantageDiv);
        };

        // Append the remove button to the input-group-append div
        removeBtnDiv.appendChild(removeBtn);

        // Append the input field and remove button div to the advantage div
        advantageDiv.appendChild(advantageInput);
        advantageDiv.appendChild(removeBtnDiv);

        // Append the entire advantage div to the container
        advantagesInputsContainer.appendChild(advantageDiv);
    }

    // Add event listener to the "إضافة ميزة" button
    document.getElementById('addAdvantageBtn').addEventListener('click', createAdvantageInput);
</script>

<!-- Javascript for rooms and bathrooms -->
<script>
        // Get the input element
        const roomsInput = document.getElementById('rooms');
		const bathroomsInput = document.getElementById('bathrooms');
        // Get the span element where the value will be displayed
        const noOfRoomsSpan = document.getElementById('no_of_rooms');

        // Add an input event listener
        roomsInput.addEventListener('input', function() {
            // Get the current value of the input
            const roomsValue = roomsInput.value;
            // Update the span with the current input value
            noOfRoomsSpan.textContent = roomsValue; // Update the span text
            // Log the value to the console (optional)
            console.log('عدد الغرف:', roomsValue);
        });

		// Add an input event listener
		bathroomsInput.addEventListener('input', function() {
			// Get the current value of the input
			const bathroomsValue = bathroomsInput.value;
			// Update the span with the current input value
			noOfBathroomsSpan.textContent = bathroomsValue; // Update the span text
			// Log the value to the console (optional)
			console.log('عدد الحمامات:', bathroomsValue);
		});
    </script>


<script>
    document.getElementById('increment-rooms').addEventListener('click', function() {
        let rooms = document.getElementById('rooms');
        rooms.value = parseInt(rooms.value) + 1;
		const noOfRoomsSpan = document.getElementById('no_of_rooms');
		noOfRoomsSpan.textContent = rooms.value;
		console.log(rooms.value);
		
    });

    document.getElementById('decrement-rooms').addEventListener('click', function() {
        let rooms = document.getElementById('rooms');
        if (rooms.value > 0) {
            rooms.value = parseInt(rooms.value) - 1;
			const noOfRoomsSpan = document.getElementById('no_of_rooms');
			noOfRoomsSpan.textContent = rooms.value;
			console.log(rooms.value);
        }
    });


	

    document.getElementById('increment-single-beds').addEventListener('click', function() {
        let singleBeds = document.getElementById('no_of_single_beds');
        singleBeds.value = parseInt(singleBeds.value) + 1;
    });

    document.getElementById('decrement-single-beds').addEventListener('click', function() {
        let singleBeds = document.getElementById('no_of_single_beds');
        if (singleBeds.value > 0) {
            singleBeds.value = parseInt(singleBeds.value) - 1;
        }
    });

    document.getElementById('increment-master-beds').addEventListener('click', function() {
        let masterBeds = document.getElementById('no_of_master_beds');
        masterBeds.value = parseInt(masterBeds.value) + 1;
    });

    document.getElementById('decrement-master-beds').addEventListener('click', function() {
        let masterBeds = document.getElementById('no_of_master_beds');
        if (masterBeds.value > 0) {
            masterBeds.value = parseInt(masterBeds.value) - 1;
        }
    });

	// Table Chairs Increment and Decrement
    document.getElementById('increment-table-chairs').addEventListener('click', function() {
        let tableChairs = document.getElementById('table_chairs');
        tableChairs.value = parseInt(tableChairs.value) + 1;
    });

    document.getElementById('decrement-table-chairs').addEventListener('click', function() {
        let tableChairs = document.getElementById('table_chairs');
        if (tableChairs.value > 0) {
            tableChairs.value = parseInt(tableChairs.value) - 1;
        }
	});

	// Bathrooms Increment and Decrement
    document.getElementById('increment-bathrooms').addEventListener('click', function() {
        let bathrooms = document.getElementById('bathrooms');
        bathrooms.value = parseInt(bathrooms.value) + 1;
		const noOfBathroomsSpan = document.getElementById('no_of_bathrooms');
		noOfBathroomsSpan.textContent = bathrooms.value;

    });

    document.getElementById('decrement-bathrooms').addEventListener('click', function() {
        let bathrooms = document.getElementById('bathrooms');
        if (bathrooms.value > 0) {
            bathrooms.value = parseInt(bathrooms.value) - 1;
			const noOfBathroomsSpan = document.getElementById('no_of_bathrooms');
			noOfBathroomsSpan.textContent = bathrooms.value;
        }
    });
</script>


<script>
    function toggleFileInput() {
        var fileInputDiv = document.getElementById('fileInput');
        var yesOption = document.querySelector('input[name="has_mot_permission"][value="1"]');
        
        if (yesOption.checked) {
            fileInputDiv.style.display = 'block';
        } else {
            fileInputDiv.style.display = 'none';
        }
    }
</script>


<script>
    $(document).ready(function () {
        // Initially, only show div1 and make it active
        $(".content-div").hide(); // Hide all divs
        $("#div1").show().addClass('active-div'); // Show the first one by default and make it active
        $("#btn1").addClass('active'); // Mark the first button as active

        // Function to switch active div and active button
        function toggleDiv(divId, buttonId) {
            $(".content-div").hide().removeClass('active-div'); // Hide all divs and remove the active background
            $(divId).show().addClass('active-div'); // Show the selected div and add the active background

            $(".btn").removeClass('active'); // Remove active class from all buttons
            $(buttonId).addClass('active'); // Add active class to the clicked button
        }

        // Show div1 when btn1 is clicked
        $("#btn1").click(function () {
            toggleDiv("#div1", "#btn1");
        });

        // Show div2 when btn2 is clicked
        $("#btn2").click(function () {
            toggleDiv("#div2", "#btn2");
        });

        // Show div3 when btn3 is clicked
        $("#btn3").click(function () {
            toggleDiv("#div3", "#btn3");
        });
    });
</script>


<style>
        /* Make all divs initially hidden */
        .content-div {
            display: none;
        }

        /* Add custom background color for the active div */
        .active-div {
            padding: 20px;
            border-radius: 8px;
        }

        /* Change the appearance of active buttons */
        .btn.active {
            background-color: #0d6efd !important; /* Primary color for active button */
            color: white !important;
        }
    </style>
    <style>
        /* Make all divs initially hidden */
        .content-div {
            display: none;
        }

        /* Add custom background color for the active div */
        .active-div {
            padding: 20px;
            border-radius: 8px;
        }

        /* Change the appearance of active buttons */
        .btn.active {
            background-color: #0d6efd !important; /* Primary color for active button */
            color: white !important;
        }
    </style>


	</body>
</html>
