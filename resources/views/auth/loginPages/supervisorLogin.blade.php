<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>تسجيل دخول مشرف عقاري</title>
<meta name="author" content="Sayed Khattab">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Fav Icon -->
<link rel="icon" href="user-assets/images/favicon.png" type="image/png">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- Stylesheets -->
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">

<style>
    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .login-card {
        width: 100%;
        max-width: 450px;
        background: white;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        direction: rtl;
    }
    .login-card h1 {
        text-align: center;
        margin-bottom: 2rem;
        font-size: 1.5rem;
        font-weight: 700;
        color: #88394E;
    }
    .login-card .form-control {
        height: 45px;
        margin-bottom: 1rem;
    }
    .login-card .form-check-label {
        margin-right: 1.25rem;
    }
    .login-card .btn-primary {
        background: #88394E;
        border-color: #88394E;
        height: 45px;
        font-size: 1rem;
        font-weight: 600;
    }
    .login-card .btn-primary:hover {
        background: #a94562;
        border-color: #a94562;
    }
    .login-card p {
        text-align: center;
        margin-top: 1.5rem;
    }
    .login-card p a {
        color: #88394E;
        text-decoration: underline;
    }
</style>

</head>
<body>


    <div class="boxed_wrapper">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

        <!-- main header -->
        <header class="main-header style-one">
            <!-- header-top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="top-inner clearfix">
                        <ul class="info pull-left clearfix">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation">
                                    <li><a href="{{ route('user-login') }}" style="color: white; font-weight: 800;">دخول المستخدمين</a></li>   
                                    <li class="dropdown"><a href="#" style="color: white;">تواصل معنا</a></li>  
                                    <li class="dropdown"><a href="#" style="color: white;">من نحن</a></li> 
                                </ul>
                            </div>
                        </ul>
                        <div class="right-column pull-right clearfix">
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                            <div class="dropdown-box clearfix">
                                <div class="language">
                                    <a href="#" class="link" onclick="changeLanguage('en')">العربية</a>
                                    <ul>
                                        <li><a href="#" onclick="changeLanguage('ar')">English</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- header-lower -->
            <div class="auto-container">
                <div class="header-lower">
                    <div class="outer-box" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="menu-right-content" style="order: 1;">
                            <div class="btn-box"><a href="{{ route('userRegister') }}" class="theme-btn-one"><span class="btn-shape"></span>انضم الينا</a></div>
                        </div>
                        <div class="menu-area" style="order: 2;">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                            </nav>
                        </div>
                        <div class="logo-box" style="order: 3;">
                            <figure class="logo"><a href="/"><img src="user-assets/images/logo.png" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="header-lower">
                        <div class="outer-box" style="display: flex; justify-content: space-between; align-items: center; top: 0px !important;">
                            <div class="menu-right-content" style="order: 1;">
                                <div class="btn-box"><a href="{{ route('userRegister')}}" class="theme-btn-one"><span class="btn-shape"></span>انضم الينا</a></div>
                            </div>
                            <div class="menu-area" style="order: 2;">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <i class="icon-bar"></i>
                                    <i class="icon-bar"></i>
                                    <i class="icon-bar"></i>
                                </div>
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    </div>
                                </nav>
                            </div>
                            <div class="logo-box" style="order: 3;">
                                <figure class="logo"><a href="/"><img src="user-assets/images/logo.png" alt=""></a></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <div class="login-container">
            <div class="login-card">
                <h1> تسجيل دخول مشرف عقاري</h1>
                <form method="post" action="{{ route('supervisorLoginAction') }}">
                    @csrf
                    @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">خطأ!</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li><span class="block sm:inline">{{ $error }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="email" style="display: block; text-align: right;">البريد الالكتروني</label>
                        <input type="email" name="email" id="email" class="form-control text-left" placeholder="name@company.com" required>
                    </div>
                    <div class="form-group">
                        <label for="password" style="display: block; text-align: right;">كلمة المرور</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
                    </div>
                    <!-- <div class="form-group form-check">
                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                        <label class="form-check-label" for="remember">تذكرني لاحقا</label>
                    </div> -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary w-100">سجل الدخول</button>
                    </div>
                    <p>ليس لديك حساب حتي الان؟ <a href="{{ route('supervisor.register') }}">انشأ حسابك</a></p>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <footer class="main-footer" style="direction: rtl;">
            <div class="auto-container">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="#"><img src="user-assets/images/footer-logo.png" alt=""></a></figure>
                                <p style="text-align: right;">اكتشف مجموعة من الشقق المفروشة في المدن الرئيسية في السعودية مع URSTAY. مثالية للإقامات القصيرة والطويلة الأجل.</p>
                                <ul class="social-links clearfix" style="float: right;">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>ما نقدمه</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="#">شقق فاخرة</a></li>
                                        <li><a href="#">أجنحة عائلية</a></li>
                                        <li><a href="#">شقق استوديو</a></li>
                                        <li><a href="#">الإسكان للشركات</a></li>
                                        <li><a href="#">إقامات طويلة</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>عن UrStay</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="#">من نحن</a></li>
                                        <li><a href="#">خدماتنا</a></li>
                                        <li><a href="#">المواقع</a></li>
                                        <li><a href="#">فريقنا</a></li>
                                        <li><a href="#">شهادات العملاء</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>تواصل معنا</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info clearfix">
                                        <li>الرياض، المملكة العربية السعودية</li>
                                        <li><a href="tel:+966500000000">(+966) 500 000 000</a></li>
                                        <li><a href="mailto:support@urstay.com">support@urstay.com</a></li>
                                        <li>ساعات العمل: الأحد - الخميس: 9 صباحاً إلى 6 مساءً</li>
                                        <li>الجمعة مغلق</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="footer-bottom centred">
                    <div class="auto-container">
                        <div class="copyright">
                            <p>جميع الحقوق محفوظة 2024 لشركة UrStay&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><span>خريطة الموقع</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><span>الشروط والأحكام</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->

        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="far fa-long-arrow-up"></span>
        </button>
    </div>

    <script>
        function changeLanguage(lang) {
            console.log("Changing language to: " + lang);
            $.ajax({
                url: '/language/' + lang,
                type: 'GET',
                success: function (data) {
                    console.log("Language changed successfully, reloading page.");
                    window.location.reload();
                },
                error: function (error) {
                    console.error('Error changing language:', error);
                }
            });
        }
    </script>

    <!-- jQuery plugins -->
    <script src="{{ asset('user-assets/js/jquery.js') }}"></script>
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
