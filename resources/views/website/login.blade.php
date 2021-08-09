<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title>تسجيل الدخول وانشاء حساب</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css') }}" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <link href="{{asset('assets/css/pages/login/login-2.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="icon" href="{{ asset('assets/media/logos/logo1.png') }}" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-static page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-2  d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside order-2 order-lg-1 d-flex flex-row-auto position-relative overflow-hidden">
                <!--begin: Aside Container-->
                <div class="d-flex flex-column-fluid flex-column justify-content-between py-9 px-7 py-lg-13 px-lg-35">
                    <!--begin::Logo-->
                    <a href="/" class="text-center">
                        <img src="{{asset('assets/media/logos/logo1.png')}}" class="max-h-85px" alt="" />
                    </a>
                    <!--end::Logo-->


                    <ul class="nav nav-tabs nav-tabs-line mb-5 justify-content-center">
                        <li class="nav-item pr-5 ">
                            <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1">
                                <span class="nav-icon mr-3"><i class="flaticon2-user icon-lg"></i></span>
                                <span class="nav-text display-4">متدرب</span>
                            </a>
                        </li>
                        <li class="nav-item mr-8 pl-5">
                            <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2">
                                <span class="nav-icon mr-3"><i class="flaticon2-website icon-lg"></i></span>
                                <span class="nav-text display-4"> شركة</span>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade show active login-signin1-on" id="kt_tab_pane_1" role="tabpanel"
                            aria-labelledby="kt_tab_pane_2">
                            <!--begin::Aside body-->
                            <div class="d-flex flex-column-fluid flex-column flex-center">
                                <!--begin::Signin-->
                                <div class="login-form login-signin1">
                                    <!--begin::Form-->
                                    <form class="form" novalidate="novalidate" id="kt_login_signin1_form">
                                        <!--begin::Title-->
                                        <div class="text-center pb-8">
                                            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">تسجيل
                                                دخول كمتدرب</h2>
                                            <span class="text-muted font-weight-bold font-size-h4">أو
                                                <a href="" class="text-primary font-weight-bolder"
                                                    id="kt_login_signup1">انشاء حساب متدرب</a></span>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">البريد
                                                الإلكتروني</label>
                                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg"
                                                type="text" name="username" autocomplete="off" />
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <div class="d-flex justify-content-between mt-n5">

                                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">كلمة
                                                    المرور</label>

                                                <a href="javascript:;"
                                                    class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5"
                                                    id="kt_login_forgot1">هل نسيت كلمة المرور؟ </a>
                                            </div>
                                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg"
                                                type="password" name="password" autocomplete="off" />
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Action-->
                                        <div class="text-center pt-2">
                                            <button id="kt_login_signin1_submit"
                                                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">تسجيل
                                                دخول</button>
                                        </div>
                                        <!--end::Action-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Signin-->
                                <!--begin::Signup-->
                                <div class="login-form login-signup1 pt-11">
                                    <!--begin::Form-->
                                    <form class="form" novalidate="novalidate" id="kt_login_signup1_form">
                                        <!--begin::Title-->
                                        <div class="text-center pb-5">
                                            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">انشاء
                                                حساب متدرب</h2>
                                            <p class="text-muted font-weight-bold font-size-h4">أدخل بياناتك لإنشاء
                                                حسابك</p>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Form group-->
                                        <div class="row form-group text-right">
                                            <div class="col-lg-4">
                                                <input
                                                    class="form-control form-control-solid h-auto px-6 py-7 rounded-lg font-size-h6"
                                                    type="text" placeholder="الاسم الأول" name="firstname"
                                                    autocomplete="off" />
                                            </div>
                                            <div class="col-lg-4">
                                                <input
                                                    class="form-control form-control-solid h-auto px-6 py-7 rounded-lg font-size-h6"
                                                    type="text" placeholder="الاسم الثاني" name="secname"
                                                    autocomplete="off" />
                                            </div>
                                            <div class="col-lg-4">
                                                <input
                                                    class="form-control form-control-solid h-auto px-6 py-7 rounded-lg font-size-h6"
                                                    type="text" placeholder="اسم العائلة" name="lastname"
                                                    autocomplete="off" />
                                            </div>
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <input
                                                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                                type="email" placeholder="البريد الإلكتروني" name="email"
                                                autocomplete="off" />
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <input
                                                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                                type="password" placeholder="كلمة المرور" name="password"
                                                autocomplete="off" />
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <input
                                                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                                type="password" placeholder="تأكيد كلمة المرور" name="cpassword"
                                                autocomplete="off" />
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <label class="checkbox mb-0">
                                                <input type="checkbox" name="agree" /> أنا أوافق على
                                                <a href="#"> سياسة وشروط الإستخدام </a>.
                                                <span></span></label>
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                                            <button type="button" id="kt_login_signup1_submit"
                                                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">تسجيل</button>
                                            <button type="button" id="kt_login_signup1_cancel"
                                                class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">إلغاء</button>
                                        </div>
                                        <!--end::Form group-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Signup-->
                                <!--begin::Forgot-->
                                <div class="login-form login-forgot1 pt-11">
                                    <!--begin::Form-->
                                    <form class="form" novalidate="novalidate" id="kt_login_forgot1_form">
                                        <!--begin::Title-->
                                        <div class="text-center pb-8">
                                            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">
                                                هل نسي كلمة المرور؟</h2>
                                            <p class="text-muted font-weight-bold font-size-h4">أدخل البريد الإلكتروني لإعادة تعيين كلمة المرور</p>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <input
                                                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                                type="email" placeholder="البريد الإلكتروني" name="email"
                                                autocomplete="off" />
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                                            <button type="button" id="kt_login_forgot1_submit"
                                                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">تأكيد</button>
                                            <button type="button" id="kt_login_forgot1_cancel"
                                                class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">إلغاء</button>
                                        </div>
                                        <!--end::Form group-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Forgot-->
                            </div>
                            <!--end::Aside body-->

                        </div>
                        <div class="tab-pane fade login-signin2-on" id="kt_tab_pane_2" role="tabpanel"
                            aria-labelledby="kt_tab_pane_2">
                            <!--begin::Aside body-->
                            <div class="d-flex flex-column-fluid flex-column flex-center">
                                <!--begin::Signin-->
                                <div class="login-form login-signin2">
                                    <!--begin::Form-->
                                    <form class="form" novalidate="novalidate" id="kt_login_signin2_form">
                                        <!--begin::Title-->
                                        <div class="text-center pb-8">
                                            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">تسجيل
                                                دخول كشركة تدريب</h2>
                                            <span class="text-muted font-weight-bold font-size-h4">أو
                                                <a href="" class="text-primary font-weight-bolder"
                                                    id="kt_login_signup2">انشاء حساب لشركة تدريب</a></span>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">البريد
                                                الإلكتروني</label>
                                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg"
                                                type="text" name="username" autocomplete="off" />
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <div class="d-flex justify-content-between mt-n5">
                                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">كلمة
                                                    المرور</label>
                                                <a href="javascript:;"
                                                    class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5"
                                                    id="kt_login_forgot2">هل نسيت كلمة المرور؟</a>
                                            </div>
                                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg"
                                                type="password" name="password" autocomplete="off" />
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Action-->
                                        <div class="text-center pt-2">
                                            <button id="kt_login_signin2_submit"
                                                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">تسجيل
                                                دخول</button>
                                        </div>
                                        <!--end::Action-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Signin-->
                                <!--begin::Signup-->
                                <div class="login-form login-signup2 pt-11">
                                    <!--begin::Form-->
                                    <form class="form" novalidate="novalidate" id="kt_login_signup2_form">
                                        <!--begin::Title-->
                                        <div class="text-center pb-8">
                                            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">انشاء
                                                حساب لشركة تدريب</h2>
                                            <p class="text-muted font-weight-bold font-size-h4">أدخل البيانات اللازمة
                                                لإنشاء الحساب</p>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <input
                                                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                                type="text" placeholder="اسم الشركة\المؤسسة" name="fullname"
                                                autocomplete="off" />
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <input
                                                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                                type="email" placeholder="البريد الإلكتروني" name="email"
                                                autocomplete="off" />
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <input
                                                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                                type="password" placeholder="كلمة المرور" name="password"
                                                autocomplete="off" />
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <input
                                                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                                type="password" placeholder="تأكيد كلمة المرور" name="cpassword"
                                                autocomplete="off" />
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <label class="checkbox mb-0">
                                                <input type="checkbox" name="agree" /> أنا أوافق على
                                                <a href="#"> سياسة وشروط الإستخدام </a>.
                                                <span></span></label>
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                                            <button type="button" id="kt_login_signup2_submit"
                                                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">تسجيل</button>
                                            <button type="button" id="kt_login_signup2_cancel"
                                                class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">إلغاء</button>
                                        </div>
                                        <!--end::Form group-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Signup-->
                                <!--begin::Forgot-->
                                <div class="login-form login-forgot2 pt-11">
                                    <!--begin::Form-->
                                    <form class="form" novalidate="novalidate" id="kt_login_forgot2_form">
                                        <!--begin::Title-->
                                        <div class="text-center pb-8">
                                            <h2 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">
                                                هل نسيت كلمة المرور؟</h2>
                                            <p class="text-muted font-weight-bold font-size-h4">أدخل البريد الإلكتروني لإعادة تعيين كلمة المرور</p>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <input
                                                class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                                type="email" placeholder="البريد الإلكتروني" name="email"
                                                autocomplete="off" />
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group d-flex flex-wrap flex-center pb-lg-0 pb-3">
                                            <button type="button" id="kt_login_forgot2_submit"
                                                class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">تأكيد</button>
                                            <button type="button" id="kt_login_forgot2_cancel"
                                                class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">إلغاء</button>
                                        </div>
                                        <!--end::Form group-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Forgot-->
                            </div>
                            <!--end::Aside body-->
                        </div>
                    </div>


                    <!--begin: Aside footer for desktop-->
                    <div class="text-center">
                        <button type="button"
                            class="btn btn-light-primary font-weight-bolder px-8 py-4 my-3 font-size-h6">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:assets/media/svg/social-icons/google.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none">
                                    <path
                                        d="M19.9895 10.1871C19.9895 9.36767 19.9214 8.76973 19.7742 8.14966H10.1992V11.848H15.8195C15.7062 12.7671 15.0943 14.1512 13.7346 15.0813L13.7155 15.2051L16.7429 17.4969L16.9527 17.5174C18.879 15.7789 19.9895 13.221 19.9895 10.1871Z"
                                        fill="#4285F4" />
                                    <path
                                        d="M10.1993 19.9313C12.9527 19.9313 15.2643 19.0454 16.9527 17.5174L13.7346 15.0813C12.8734 15.6682 11.7176 16.0779 10.1993 16.0779C7.50243 16.0779 5.21352 14.3395 4.39759 11.9366L4.27799 11.9466L1.13003 14.3273L1.08887 14.4391C2.76588 17.6945 6.21061 19.9313 10.1993 19.9313Z"
                                        fill="#34A853" />
                                    <path
                                        d="M4.39748 11.9366C4.18219 11.3166 4.05759 10.6521 4.05759 9.96565C4.05759 9.27909 4.18219 8.61473 4.38615 7.99466L4.38045 7.8626L1.19304 5.44366L1.08875 5.49214C0.397576 6.84305 0.000976562 8.36008 0.000976562 9.96565C0.000976562 11.5712 0.397576 13.0882 1.08875 14.4391L4.39748 11.9366Z"
                                        fill="#FBBC05" />
                                    <path
                                        d="M10.1993 3.85336C12.1142 3.85336 13.406 4.66168 14.1425 5.33717L17.0207 2.59107C15.253 0.985496 12.9527 0 10.1993 0C6.2106 0 2.76588 2.23672 1.08887 5.49214L4.38626 7.99466C5.21352 5.59183 7.50242 3.85336 10.1993 3.85336Z"
                                        fill="#EB4335" />
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            تسجيل دخول بحساب جوجل
                        </button>
                    </div>
                    <!--end: Aside footer for desktop-->
                </div>
                <!--end: Aside Container-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="content order-1 order-lg-2 d-flex flex-column w-100 pb-0" style="background-color: #B1DCED;">
                <!--begin::Title-->
                <div
                    class="d-flex flex-column justify-content-center text-center pt-lg-20 pt-md-5 pt-sm-5 px-lg-0 pt-5 px-7">
                    <h3 class="display4 font-weight-bolder mلا-7 text-primary">نقطة إنطلاق
                    </h3>
                    <p class="font-weight-bolder font-size-h2-md font-size-lg text-dark opacity-70">
                        مكانك الأمثل للوصول لأماكن وفرص التدريب
                        <br />وبدأ حياتك المهنية والعملية</p>
                </div>
                <!--end::Title-->
                <!--begin::Image-->
                <div class="content-img d-flex bgi-no-repeat bgi-position-y-bottom bgi-position-x-center"
                    style="background-image: url({{asset('assets/media/svg/illustrations/login-visual-2.svg')}});">
                </div>
                <!--end::Image-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/js/pages/widgets.js') }}"></script>
    <!--end::Page Scripts-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/crud/datatables/extensions/buttons.js') }}"></script>
    <script src="{{ asset('assets/js/pages/custom/login/login-general.js')}}"></script>
</body>
<!--end::Body-->

</html>
