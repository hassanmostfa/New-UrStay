<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>UrStay | Luxury apartments</title>	

		<meta name="keywords" content="UrStay by Sayed Khattab" />
		<meta name="description" content="UrStay your Luxury apartments ">
		<meta name="author" content="sayedkhattab.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="home-assets/images/favicon.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="home-assets/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<!-- <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css"> -->

        <!-- Home Stylesheets -->
        <link href="{{ asset('user-assets/css/font-awesome-all.css') }}" rel="stylesheet">
        <link href="{{ asset('user-assets/css/flaticon.css') }}" rel="stylesheet">
        <link href="{{ asset('user-assets/css/owl.css') }}" rel="stylesheet">
        <link href="{{ asset('user-assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('user-assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('user-assets/css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('user-assets/css/nice-select.css') }}" rel="stylesheet">
        <link href="{{ asset('user-assets/css/color.css') }}" rel="stylesheet">
        <link href="{{ asset('user-assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('user-assets/css/responsive.css') }}" rel="stylesheet">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="home-assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="home-assets/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="home-assets/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="home-assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="home-assets/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="home-assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="home-assets/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="home-assets/css/theme.css">
		<link rel="stylesheet" href="home-assets/css/theme-elements.css">
		<link rel="stylesheet" href="home-assets/css/theme-blog.css">
		<link rel="stylesheet" href="home-assets/css/theme-shop.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="home-assets/css/demos/demo-education.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="home-assets/css/skins/skin-education.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="home-assets/css/custom.css">

        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
		<style>

            body {
                font-family: 'almarai', sans-serif !important;

            }
@media (max-width: 767px) {
			.header-nav-features .btn {
				display: none;
			}
			.custom-slider-text-1 {
        margin-top: 70px;
        font-size: 40px;
    }
		}
		</style>
		
		

	</head>
		<body style="font-family: 'almarai', sans-serif;">

			<div class="body">
				<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 70, 'stickyHeaderContainerHeight': 70}" dir="rtl">
					<div class="header-body header-body-bottom-border border-top-0">
						<div class="header-container container">
							<div class="header-row">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<div class="header-logo">
											<a href="#">
												<img src="home-assets/images/new-logo.png" class="img-fluid" width="200" height="85" alt="" />
											</a>
										</div>
									</div>
								</div>
								<div class="header-column">
									<div class="header-row justify-content-end">
										<div class="header-nav header-nav-links">
											<div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
												<nav class="collapse">
													<ul class="nav nav-pills" id="mainNav">
														<li>
															<a href="#" class="nav-link">من نحن</a>
														</li>
														<li>
															<a href="#" class="nav-link">الوحدات</a>
														</li>
														<li>
															<a href="#" class="nav-link">الخدمات</a>
														</li>
														<li>
															<a href="#" class="nav-link">تواصل معنا</a>
														</li>
													</ul>
												</nav>
											</div>
										</div>
										<div class="header-nav-features header-nav-features-no-border">
											<a href="{{ route('owner.login') }}" data-hash data-hash-offset="0" data-hash-offset-lg="70" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="background-color: #efeff1 !important; color: #e43c59; border-radius: 5px;">أضف عقارك</a>
											<a href="{{ route('user-login') }}" data-hash data-hash-offset="0" data-hash-offset-lg="70" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="border-radius: 5px;">الدخول أو إنشاء حساب</a>
										</div>
										
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
				

				<div role="main" class="main">

					<div class="custom-bg-color-grey-1" dir="rtl">
						<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover show-dots-xs nav-style-1 nav-arrows-thin nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" 
							data-plugin-options="{'autoplay': false, 'autoplayTimeout': 7000}" 
							data-dynamic-height="['calc(100vh - 135px)','calc(100vh - 135px)','calc(100vh - 161px)','calc(100vh - 161px)','calc(100vh - 161px)']" 
							style="height: calc(100vh - 135px);">
							
							<div class="owl-stage-outer">
								<div class="owl-stage">
									<div class="owl-item position-relative overflow-hidden">
										<div class="background-image-wrapper custom-bg-color-grey-1 position-absolute top-0 left-0 right-0 bottom-0" 
											data-appear-animation="kenBurnsToLeft" 
											data-appear-animation-duration="30s" 
											data-plugin-options="{'minWindowWidth': 0}" 
											data-carousel-onchange-show 
											style="background-image: url(home-assets/img/demos/education/slides/slide-1-bg.jpg); background-size: cover; background-position: 100% 100%;">
										</div>
					
										<!-- استخدام صف وأعمدة لضمان توزيع النص والصورة -->
										<div class="container h-100 r-relative z-index-1">
											<div class="row h-100 align-items-center">
												<!-- العمود الخاص بالنص -->
												<div class="col-12 col-lg-6">
													<div class="text-end custom-slider-text-block">
														<h3 class="text-color-secondary font-weight-extra-bold mb-4 custom-slider-text-1 appear-animation" 
															data-appear-animation="fadeInUpShorter" 
															data-appear-animation-delay="800"
                                                            style = "font-size: 40px !important;"
                                                            >
                                                
															<!-- سجل عقارك معنا -->
                                                            ضيف عقارك معنا وخلي الباقي علينا
														</h3>
														
														<p class="text-color-default font-weight-semi-bold mb-3 text-5 appear-animation" 
														data-appear-animation="fadeInUpShorter" 
														data-appear-animation-delay="1000" 
														style="padding-top: 20px; font-size: 20px !important; text-align: justify;">
															<!-- اكتشف أسهل طريقة لإدارة وتأجير عقاراتك مع UrStay. منصتنا توفر أدوات سلسة وخدمات قيمة لمساعدة مالكي العقارات على تحقيق أقصى استفادة من إمكانيات التأجير، لضمان تجربة خالية من المتاعب لك ولضيوفك. -->
                                                            يور ستاي منصة سعودية تفهمك و تقدم لك اليوم أسهل الطرق في إدارة وتأجير عقاراتك اليومية. 
														</p>
														<div>
															<a href="{{ route('user-login') }}" data-hash data-hash-offset="0" data-hash-offset-lg="70" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="border-radius: 5px;">الدخول أو إنشاء حساب</a>
															<a href="{{ route('owner.login') }}" data-hash data-hash-offset="0" data-hash-offset-lg="70" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="background-color: #efeff1 !important; color: #e43c59; border-radius: 5px;">أضف عقارك</a>

														</div>
														
													</div>
												</div>
					
												<!-- العمود الخاص بالصورة -->
												<div class="col-12 col-lg-6 d-flex justify-content-end">
													<img src="Home-assets/img/demos/education/slides/slide-1-1.png" 
														class="img-fluid custom-slider-el-1 appear-animation" 
														data-appear-animation="fadeInUpShorter" 
														data-appear-animation-delay="600" 
														alt="UrStay" 
														style="max-width: 75%; align-self: flex-start;" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="bg-light" dir="rtl">
						<div class="container py-4">
							<div class="row pb-2 mb-1">
								<div class="col-md-3 mb-4 mb-md-0">
									<div class="feature-box feature-box-steps">
										<div class="feature-box-icon bg-color-quaternary feature-box-icon-extra-large appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250">
											<img class="icon-animated" width="45" height="45" src="home-assets/img/demos/education/icons/property-svgrepo-com.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
										</div>
										<div class="feature-box-info appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="150">
											<p class="mt-2 pt-1 mb-0 text-1 p-relative top-5 text-uppercase">نقدم لك في UrStay</p>
											<h4 class="mb-0 text-color-secondary">إدارة كاملة لعقارك</h4>
										</div>
									</div>
								</div>
								<div class="col-md-3 mb-4 mb-md-0">
									<div class="feature-box feature-box-steps">
										<div class="feature-box-icon bg-color-quaternary feature-box-icon-extra-large appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="500">
											<img class="icon-animated" width="45" height="45" src="home-assets/img/demos/education/icons/customer-service-help-svgrepo-com.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
										</div>
										<div class="feature-box-info appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="300">
											<p class="mt-2 pt-1 mb-0 text-1 p-relative top-5 text-uppercase">نقدم لك في UrStay</p>
											<h4 class="mb-0 text-color-secondary">خدمة عملاء متميزة</h4>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="feature-box feature-box-steps">
										<div class="feature-box-icon bg-color-quaternary feature-box-icon-extra-large appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="750">
											<img class="icon-animated" width="45" height="45" src="home-assets/img/demos/education/icons/security-safe-svgrepo-com.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
										</div>
										<div class="feature-box-info appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="450">
											<p class="mt-2 pt-1 mb-0 text-1 p-relative top-5 text-uppercase">نقدم لك في UrStay</p>
											<h4 class="mb-0 text-color-secondary">عمليات نظامية وآمنة</h4>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="feature-box feature-box-steps">
										<div class="feature-box-icon bg-color-quaternary feature-box-icon-extra-large appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1000">
											<img class="icon-animated" width="45" height="45" src="home-assets/img/demos/education/icons/world-svgrepo-com.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
										</div>
										<div class="feature-box-info appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="550">
											<p class="mt-2 pt-1 mb-0 text-1 p-relative top-5 text-uppercase">نقدم لك في UrStay</p>
											<h4 class="mb-0 text-color-secondary">انتشار حول العالم</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

                            <!-- service-section -->
                            <section class="service-section bg-color-1" style="margin-top: 120px; direction: rtl;">
                                <div class="pattern-layer" style="background-image: url(user-assets/images/shape/shape-1.png);"></div>
                                <div class="auto-container">
                                    <div class="title-inner clearfix">
                                        <div class="sec-title light text-right">
                                            <span>تأجير الشقق المفروشة</span>
                                            <h2>وش يميزنا في يور ستاي؟ كل شي عندنا غير </h2>
                                        </div>
                                        <div class="text">
                                            <p style="text-align: right;">من خلال عرضك لوحدتك في منصة يور ستاي نقدم لك  : </p>
                                        </div>
                                    </div>
                                    <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one" style="direction: ltr;">
                                        <div class="service-block-one">
                                            <div class="inner-box">
                                                <figure class="image-box"><a href="#"><img src="user-assets/images/service/service-1.jpg" alt=""></a></figure>
                                                <div class="lower-content">
                                                    <div class="icon-box">
                                                        <div class="icon"><i class="icon-icon11"></i></div>
                                                    </div>
                                                    <div class="text">
                                                        <h3><a href="#">عمولة  اقل</a></h3>
                                                        <p>استمتع بخدماتنا مع عمولة أقل لتوفير المزيد من المال دون التنازل عن الجودة.</p>
                                                    </div>
                                                    <!-- <div class="link"><a href="#">احجز الآن</a></div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-block-one">
                                            <div class="inner-box">
                                                <figure class="image-box"><a href="#"><img src="user-assets/images/service/service-2.jpg" alt=""></a></figure>
                                                <div class="lower-content">
                                                    <div class="icon-box">
                                                        <div class="icon"><i class="icon-icon5"></i></div>
                                                    </div>
                                                    <div class="text">
                                                        <h3><a href="#">ادارة كاملة لعقارك</a></h3>
                                                        <p>احصل على إدارة كاملة لعقارك بكل احترافية وراحة بال</p>
                                                    </div>
                                                    <!-- <div class="link"><a href="#">احجز الآن</a></div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-block-one">
                                            <div class="inner-box">
                                                <figure class="image-box"><a href="#"><img src="user-assets/images/service/service-3.jpg" alt=""></a></figure>
                                                <div class="lower-content">
                                                    <div class="icon-box">
                                                        <div class="icon"><i class="icon-icon4"></i></div>
                                                    </div>
                                                    <div class="text">
                                                        <h3><a href="#">التفاوض مع العميل</a></h3>
                                                        <p>استفد من خاصية التفاوض المباشر مع العميل لتحقيق أفضل الصفقات.</p>
                                                    </div>
                                                    <!-- <div class="link"><a href="#">احجز الآن</a></div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-block-one">
                                            <div class="inner-box">
                                                <figure class="image-box"><a href="#"><img src="user-assets/images/service/service-3.jpg" alt=""></a></figure>
                                                <div class="lower-content">
                                                    <div class="icon-box">
                                                        <div class="icon"><i class="icon-icon3"></i></div>
                                                    </div>
                                                    <div class="text">
                                                        <h3><a href="#">سهولة قبول الطلبات</a></h3>
                                                        <p>تمتع بنظام سهل ومرن لقبول طلبات الضيوف بسرعة وكفاءة.</p>
                                                    </div>
                                                    <!-- <div class="link"><a href="#">احجز الآن</a></div> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="service-block-one">
                                            <div class="inner-box">
                                                <figure class="image-box"><a href="#"><img src="user-assets/images/service/service-3.jpg" alt=""></a></figure>
                                                <div class="lower-content">
                                                    <div class="icon-box">
                                                        <div class="icon"><i class="icon-icon10"></i></div>
                                                    </div>
                                                    <div class="text">
                                                        <h3><a href="#">اكواد الخصم</a></h3>
                                                        <p>استخدم أكواد الخصم الخاصة بنا للحصول على توفيرات مميزة على خدماتك.</p>
                                                    </div>
                                                    <!-- <div class="link"><a href="#">احجز الآن</a></div> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="service-block-one">
                                            <div class="inner-box">
                                                <figure class="image-box"><a href="#"><img src="user-assets/images/service/service-3.jpg" alt=""></a></figure>
                                                <div class="lower-content">
                                                    <div class="icon-box">
                                                        <div class="icon"><i class="icon-icon2"></i></div>
                                                    </div>
                                                    <div class="text">
                                                        <h3><a href="#">تعطيل الاستقبال</a></h3>
                                                        <p>يمكنك تعطيل استقبال الضيوف في أي وقت بسهولة ومرونة تامة.</p>
                                                    </div>
                                                    <!-- <div class="link"><a href="#">احجز الآن</a></div> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="service-block-one">
                                            <div class="inner-box">
                                                <figure class="image-box"><a href="#"><img src="user-assets/images/service/service-3.jpg" alt=""></a></figure>
                                                <div class="lower-content">
                                                    <div class="icon-box">
                                                        <div class="icon"><i class="icon-icon13"></i></div>
                                                    </div>
                                                    <div class="text">
                                                        <h3><a href="#">الانتشار عبر وسائل التواصل الاجتماعي</a></h3>
                                                        <p>من خلال يور ستاي، يمكنك نشر عقارك على جميع مواقع التواصل الاجتماعي بسهولة وبضغطة زر.</p>
                                                    </div>
                                                    <!-- <div class="link"><a href="#">احجز الآن</a></div> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="service-block-one">
                                            <div class="inner-box">
                                                <figure class="image-box"><a href="#"><img src="user-assets/images/service/service-3.jpg" alt=""></a></figure>
                                                <div class="lower-content">
                                                    <div class="icon-box">
                                                        <div class="icon"><i class="icon-icon4"></i></div>
                                                    </div>
                                                    <div class="text">
                                                        <h3><a href="#">الصيانة وشركات النظافة</a></h3>
                                                        <p>ومن خلال عروضنا مع شركاء النجاح، نوفر لك أفضل خدمات النظافة والصيانة لوحدتك بأعلى جودة وأسعار تنافسية.</p>
                                                    </div>
                                                    <!-- <div class="link"><a href="#">احجز الآن</a></div> -->
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="cta-text centred">
                                        <p>تبحث عن شقة مفروشة للإيجار؟ نحن نوفر لك الحل!</p>
                                        <h3>استخدم موقعنا الالكتروني<i class="icon-mob"></i> <a href="#"></a> أو <a href="#"><span>حمل التطبيق الآن</span></a></h3>
                                    </div>
                                </div>
                            </section>
                            <!-- service-section end -->
        
					<section class="section custom-bg-color-grey-1 border-0 m-0" id="courses">
						<div class="container position-relative my-4">
							<div class="row mb-4">
								<div class="col text-center">
									<div class="overflow-hidden">
										<h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-3-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">اختر ما يتاسبك من بين جميع مدن المملكة</h2>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500">
									<div class="owl-carousel owl-theme nav-style-1 nav-outside nav-font-size-lg custom-nav-secondary mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 2}, '1200': {'items': 4}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20}">
										<!-- Repeat this block for each property -->
										<div>
											<div class="card custom-card-courses border-radius-0">
												<div class="p-relative">
													<a href="#" class="text-color-secondary" title="">
														<img class="card-img-top border-radius-0" src="home-assets/img/demos/education/courses/course-1.jpg" alt="" />
													</a>
												</div>
												<div class="card-body">
													<div class="d-flex justify-content-between" style="direction: rtl;">
														<h4 class="mb-0 text-color-secondary"><a href="#" class="text-color-secondary" title="">الرياض</a></h4>
														<span class="text-primary text-4">20 وحدة</span>
													</div>
												</div>
											</div>
										</div>
										<!-- Repeat end -->
									</div>
								</div>
							</div>
							<div class="row pt-2">
								<div class="col text-center">
									<a href="#" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 mt-4 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350">مشاهدة المزيد</a>
								</div>
							</div>
						</div>
					</section>
										
					<section class="section custom-bg-color-grey-1 border-0 m-0" id="courses">
						<div class="container position-relative my-4">
							<div class="row mb-4">
								<div class="col text-center">
									<div class="overflow-hidden">
										<h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-3-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">أحدث العقارات المضافة</h2>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500">
									<div class="owl-carousel owl-theme nav-style-1 nav-outside nav-font-size-lg custom-nav-secondary mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 2}, '1200': {'items': 3}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20}">
										<!-- كل عنصر في الكاروسل يمثل عقار -->
										 @foreach ($units as $unit)
										<div>
											<div class="card custom-card-courses border-radius-0">
												<div class="p-relative">
													<a href="#" class="text-color-secondary" title="">
													@php
														$images = json_decode($unit->image, true); // Decode JSON images
													@endphp
													@if (!empty($images) && is_array($images))
														<div id="unitCarousel" class="carousel slide" data-bs-ride="carousel">
															<div class="carousel-inner">
																@foreach ($images as $index => $image)
																	<div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
																		<img src="{{ asset($image) }}" class="d-block w-100" alt="Unit Image" style="height: 300px; object-fit: cover;">
																	</div>
																@endforeach
															</div>
														</div>
													@else
														<img src="https://via.placeholder.com/300x200?text=No+Image" class="img-fluid w-100" alt="No Image Available">
													@endif
													</a>
												</div>
												<div class="card-body" style="direction: rtl;">
													<h4 class="mb-3 text-color-secondary"><a href="{{route('user.unitDetails', $unit->id)}}" class="text-color-secondary" title="">{{$unit->title}}</a></h4>
													<p class="mb-0 text-1 p-relative top-5">{{$unit->location}}</p>
													<div class="text-2">
														<span class="d-inline-block pe-2"><i class="fas fa-bed text-primary"></i> {{$unit->rooms}} غرف نوم </span>
														<span class="d-inline-block pe-2"><i class="fas fa-bath text-primary"></i> {{$unit->bathrooms}} حمامات</span>
													</div>
												</div>
											</div>
										</div>
										@endforeach
										<!-- يمكن تكرار هذا العنصر لكل عقار يجب عرضه -->
									</div>
								</div>
							</div>
							<div class="row pt-2">
								<div class="col text-center">
									<a href="#" class="btn btn-secondary font-weight-bold btn-px-5 btn-py-3 mt-4 mb-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350">مشاهدة المزيد</a>
								</div>
							</div>
						</div>
					</section>
					

                    <section class="container my-5">
        <h2 class="text-center mb-4" style="font-weight: bold; color:#e43c59; font-size: 30px">الأسئلة الشائعة</h2>
        
        <div class="accordion" id="faqAccordion">
            <!-- Question 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        كيف أقدر أسجل كالمضيف؟
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        يور ستاي هي خدمة مبتكرة تتيح لك إدارة ونشر عقارك بسهولة عبر الإنترنت، مع خيارات إضافية مثل النظافة والصيانة.
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        وش أنواع العقارات اللي أقدر أعرضها في يور ستاي؟
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        يمكنك نشر عقارك بضغطة زر واحدة عبر لوحة التحكم الخاصة بك، التي تتيح لك مشاركة عقارك على جميع منصات التواصل الاجتماعي بسهولة.
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        لازم أكون مالك للعقار؟
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        يمكنك تعطيل استقبال الضيوف من خلال الإعدادات في أي وقت وبكل سهولة.
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        كيف يتم تحويل المبالغ لي؟
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        يتم تحويل المبالغ إليك عبر حسابك البنكي الذي قمت بتحديده عند التسجيل، مع ضمان أمان وسرية المعاملات.
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        ما هي أنواع الوحدات اللي نعرضها؟
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        يمكنك عرض مجموعة متنوعة من الوحدات، بما في ذلك الشقق والفيلات والمنازل، وذلك حسب توافرها في النظام.
                    </div>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        كيف أحصل على خصم شركات النظافة؟
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        يمكنك الحصول على خصومات على خدمات النظافة من خلال العروض الترويجية التي نقدمها بالتعاون مع شركات النظافة المعتمدة.
                    </div>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        مين هو مشرف العقار؟
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        مشرف العقار هو الشخص المسؤول عن إدارة وصيانة العقار، والتأكد من تطبيق المعايير والشروط المحددة.
                    </div>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        كم العمولة؟
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        تعتمد العمولة على نوع الخدمة والعرض المقدم، ويمكنك الاطلاع على التفاصيل الدقيقة في قسم الرسوم على موقعنا.
                    </div>
                </div>
            </div>

            <!-- Question 9 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        وش الإجراءات إذا الضيف أتلف شي من ممتلكات الوحدة؟
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        في حالة تلف أي ممتلكات، يمكنك التواصل معنا عبر خدمة العملاء، وسنتخذ الإجراءات اللازمة لضمان تعويضك بشكل مناسب.
                    </div>
                </div>
            </div>
        </div>
    </section>


					<section class="section section-background custom-section-background-2 bg-color-light border-0 m-0" style="background-image: url(home-assets/img/demos/education/backgrounds/background-2.jpg); background-position: 0 100%; background-repeat: no-repeat; background-size: contain;">
						<div class="container position-relative my-4">

							<div class="custom-element custom-element-pos-3 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="200">
								<div class="opacity-2" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 3000}">
									<img class="icon-animated" width="157" height="157" src="home-assets/img/demos/education/elements/element-1.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
								</div>
							</div>

							<div class="row justify-content-end mb-4">
								<div class="col-lg-6 py-4" style="direction: rtl;">

									<div class="row">
										<div class="col">
											<div class="feature-box feature-box-style-5">
												<div class="feature-box-info">
													<div class="overflow-hidden">
														<h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-2 pb-1 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">حمل تطبيق UrStay</h2>
													</div>
													<p class="text-3-5 line-height-9 mb-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="100">واكتشف العديد من المميزات الرائعة التي تحلق بعقارك الى الانتشار والتوسع</p>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="feature-box feature-box-style-5">
												<div class="feature-box-info">
													<div class="overflow-hidden">
														<h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-2 pb-1 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">تطبيق المُضيف </h2>
													</div>
													<!-- <p class="text-3-5 line-height-9 mb-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">ادارة عقارك بالكامل من التطبيق باستخدام احدث التقنيات</p> -->
													<!-- أزرار تحميل التطبيق -->
													<div class="mt-3">
														<a href="#" target="_blank">
															<img src="home-assets/images/appstore.svg" alt="App Store" width="120" height="40" />
														</a>
														<a href="#" target="_blank">
															<img src="home-assets/images/googleplay.svg" alt="Google Play Store" width="135" height="40" />
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col">
											<div class="feature-box feature-box-style-5">
												<div class="feature-box-info">
													<div class="overflow-hidden">
														<h2 class="text-color-secondary font-weight-semi-bold text-6 line-height-1 mb-2 pb-1 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">تطبيق الضيوف</h2>
													</div>
													<!-- <p class="text-3-5 line-height-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="300">خدمات بلا حدود وعمليات حجز آمنة ومضمونة من شركة يور ستاي</p> -->
													<!-- أزرار تحميل التطبيق -->
													<div class="mt-3">
														<a href="#" target="_blank">
															<img src="home-assets/images/appstore.svg" alt="App Store" width="120" height="40" />
														</a>
														<a href="#" target="_blank">
															<img src="home-assets/images/googleplay.svg" alt="Google Play Store" width="135" height="40" />
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									

								</div>
							</div>
						</div>
					</section>

				</div>

				<footer id="footer" class="footer-reveal bg-color-secondary border-0 mt-3" dir="rtl">
					<div class="container py-5">
						<div class="row py-5">
							<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
								<a href="#" class="d-inline-block mb-3">
									<img alt="UrStay" width="115" height="30" src="home-assets/images/footer-logo.png">
								</a>
								<ul class="social-icons social-icons-clean social-icons-icon-light">
									<li>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
									</li>
								</ul>
								<p class="text-3 mt-4 mb-0 line-height-8 text-color-tertiary opacity-6">UrStay © 2024<br> جميع الحقوق محفوظة</p>
							</div>
							<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
								<h4 class="font-weight-bold text-5">عن الشركة</h4>
								<ul class="list list-unstyled text-color-tertiary opacity-6">
									<li class="mb-1">UrStay</li>
									<li class="mb-1">123 شارع UrStay, الجناح 100</li>
									<li class="mb-1">هاتف: <a href="tel:1234567890" class="text-decoration-none text-color-tertiary text-color-hover-primary">123-456-7890</a></li>
									<li>بريد إلكتروني: <a href="mailto:email@domain.com" class="text-decoration-none text-color-tertiary text-color-hover-primary">contact@urstay.com</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
								<h4 class="font-weight-bold text-5">تصفح</h4>
								<ul class="list list-unstyled opacity-6">
									<li class="mb-1"><a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- الرئيسية</a></li>
									<li class="mb-1"><a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- من نحن</a></li>
									<li class="mb-1"><a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- الشقق</a></li>
									<li class="mb-1"><a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- تواصل معنا</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
								<h4 class="font-weight-bold text-5">الدعم</h4>
								<ul class="list list-unstyled opacity-6">
									<li class="mb-1"><a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- الأسئلة الشائعة</a></li>
									<li class="mb-1"><a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- فتح تذكرة</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-lg-2 mb-4 mb-lg-0">
								<h4 class="font-weight-bold text-5">المزيد</h4>
								<ul class="list list-unstyled opacity-6">
									<li class="mb-1"><a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- شروط الاستخدام</a></li>
									<li><a href="#" class="text-decoration-none text-color-tertiary text-color-hover-primary link-hover-style-1">- سياسة الخصوصية</a></li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
				
			</div>

			<!-- Vendor -->
			<script src="home-assets/vendor/plugins/js/plugins.min.js"></script>
			<script src="home-assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>

			<!-- Theme Base, Components and Settings -->
			<script src="home-assets/js/theme.js"></script>

			<!-- Theme Custom -->
			<script src="home-assets/js/custom.js"></script>

			<!-- Theme Initialization Files -->
			<script src="home-assets/js/theme.init.js"></script>


            
   <!-- jQuery plugins for Home -->
   <script src="{{ asset('user-assets/js/popper.min.js') }}"></script>
   <script src="{{ asset('user-assets/js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('user-assets/js/owl.js') }}"></script>
   <script src="{{ asset('user-assets/js/wow.js') }}"></script>
   <script src="{{ asset('user-assets/js/validation.js') }}"></script>
   <script src="{{ asset('user-assets/js/jquery.fancybox.js') }}"></script>
   <script src="{{ asset('user-assets/js/appear.js') }}"></script>
   <script src="{{ asset('user-assets/js/scrollbar.js') }}"></script>
   <script src="{{ asset('user-assets/js/jquery.nice-select.min.js') }}"></script>

<!-- main-js -->
<script src="{{ asset('user-assets/js/script.js') }}"></script>

		</body>
</html>
