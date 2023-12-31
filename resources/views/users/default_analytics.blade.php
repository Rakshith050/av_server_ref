@include("inc.header")


<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc.topbar")

            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card w-100 bg-lightblue p-lg-5 p-4 border-0 rounded-lg d-block float-left">

                                <h2 class="display1-size display2-md-size d-inline-block float-left mb-0 text-grey-900 fw-700"><span class="font-xssss fw-600 text-grey-500 d-block mb-2 ml-1">Welcome back</span> Hi, Admin.</h2>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12 ">
                            <div class="card w-100 p-1 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-7">
                                            <h4 class="fw-700 text-success font-xssss mt-0 mb-0 ">+45%</h4>
                                            <h2 class="text-grey-900 fw-700 display1-size mt-2 mb-2 ls-3 lh-1">4563 </h2>
                                            <h4 class="fw-700 text-grey-500 font-xsssss ls-3 text-uppercase mb-0 mt-0"> UNITS SALE</h4>
                                        </div>
                                        <div class="col-5 text-left">
                                            <div id="chart-users-blue"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 ">
                            <div class="card w-100 p-1 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-7">
                                            <h4 class="fw-700 text-success font-xssss mt-0 mb-0 ">-27%</h4>
                                            <h2 class="text-grey-900 fw-700 display1-size mt-2 mb-2 ls-3 lh-1">3325 </h2>
                                            <h4 class="fw-700 text-grey-500 font-xsssss ls-3 text-uppercase mb-0 mt-0"> UNITS SALE</h4>
                                        </div>
                                        <div class="col-5 text-left">
                                            <div id="chart-users-blue1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 ">
                            <div class="card w-100 p-1 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-7">
                                            <h4 class="fw-700 text-success font-xssss mt-0 mb-0 ">-15%</h4>
                                            <h2 class="text-grey-900 fw-700 display1-size mt-2 mb-2 ls-3 lh-1">4455 </h2>
                                            <h4 class="fw-700 text-grey-500 font-xsssss ls-3 text-uppercase mb-0 mt-0"> UNITS SALE</h4>
                                        </div>
                                        <div class="col-5 text-left">
                                            <div id="chart-users-blue2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfx"></div>

                        <div class="col-xl-4 col-lg-12 ">
                            <div class="card w-100 p-3 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                <div id="chart-earnings-by-item"></div>
                                <div class="row mt-2">
                                    <div class="col-6 mb-1 text-center">
                                        <h2 class="font-xl text-grey-900 fw-700 ls-lg">4403</h2>
                                        <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase"><span class="mr-2 bg-facebook btn-round-xss d-inline-block mt-0 rounded-circle"></span> this week</h4>
                                    </div>
                                    <div class="col-6 mb-1 text-center">
                                        <h2 class="font-xl text-grey-900 fw-700 ls-lg">5432</h2>
                                        <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase"><span class="mr-2 bg-instagram btn-round-xss d-inline-block mt-0 rounded-circle"></span> this month</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 ">
                            <div class="card w-100 p-3 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-12 p-0 mt-0">
                                            <div id="chart-round-center"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 ">
                            <div class="card w-100 p-3 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                <div id="chart-multipleitem"></div>
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <h2 class="font-lg text-grey-900 fw-700 ls-lg">44%</h2>
                                        <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase">Week</h4>
                                    </div>
                                    <div class="col-4 text-center">
                                        <h2 class="font-lg text-grey-900 fw-700 ls-lg">55%</h2>
                                        <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase">Month</h4>
                                    </div>
                                    <div class="col-4 text-center">
                                        <h2 class="font-lg text-grey-900 fw-700 ls-lg">67%</h2>
                                        <h4 class="text-grey-500 d-flex justify-content-center fw-600 ls-lg font-xsssss text-uppercase">Day</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-12">
                            <div class="card w-100 p-5 border-0 mt-4 rounded-lg bg-white shadow-xs overflow-hidden">
                                <div id="chart-candlestick"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="middle-sidebar-right right-scroll-bar">
                    <div class="middle-sidebar-right-content">

                        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
                            <div class="card-body p-2 d-block text-center bg-no-repeat bg-image-topcenter" style="background-image: url(images/user-pattern.png);">
                                <a href="#" class="position-absolute right-0 mr-4"><i class="feather-edit text-grey-500 font-xs"></i></a>
                                <figure class="avatar ml-auto mr-auto mb-0 mt-2 w90"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right shadow-sm rounded-circle w-100"></figure>
                                <div class="clearfix"></div>
                                <h2 class="text-black font-xss lh-3 fw-700 mt-3 mb-1">Hendrix Stamp</h2>
                                <h4 class="text-grey-500 font-xssss mt-0"><span class="d-inline-block bg-success btn-round-xss m-0"></span> Available</h4>
                                <div class="clearfix"></div>
                                <div class="col-12 text-center mt-4 mb-2">
                                    <a href="#" class="p-0 ml-1 btn btn-round-md rounded-xl bg-lightblue"><i class="text-current ti-comment-alt font-sm"></i></a>
                                    <a href="#" class="p-0 ml-1 btn btn-round-md rounded-xl bg-lightblue"><i class="text-current ti-lock font-sm"></i></a>
                                    <a href="#" class="p-0 btn p-2 lh-24 w100 ml-1 ls-3 d-inline-block rounded-xl bg-current font-xsssss fw-700 ls-lg text-white">FOLLOW</a>
                                </div>
                                <ul class="list-inline border-0 mt-4">
                                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">500+ <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Connections</span></h4></li>
                                    <li class="list-inline-item text-center mr-4"><h4 class="fw-700 font-md">88.7 k <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Follower</span></h4></li>
                                    <li class="list-inline-item text-center"><h4 class="fw-700 font-md">1,334 <span class="font-xsssss fw-500 mt-1 text-grey-500 d-block">Followings</span></h4></li>
                                </ul>

                                <div class="col-12 pl-0 mt-4 text-left">
                                    <h4 class="text-grey-800 font-xsss fw-700 mb-3 d-block">My Skill <a href="#"><i class="ti-angle-right font-xsssss text-grey-700 float-right "></i></a></h4>
                                    <div class="carousel-card owl-carousel owl-theme overflow-visible nav-none">
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/100x100.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/100x100.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/100x100.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/100x100.png" alt="icon" class="p-3"></a></div>
                                        <div class="item"><a href="#" class="btn-round-xxxl border bg-greylight"><img src="https://via.placeholder.com/100x100.png" alt="icon" class="p-3"></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card theme-light-bg overflow-hidden rounded-xxl border-0 mb-3">
                            <div class="card-body d-flex justify-content-between align-items-end p-4">
                                <div>
                                    <h4 class="font-xsss text-grey-900 mb-2 d-flex align-items-center justify-content-between mt-2 fw-700">
                                        Dark Mode
                                    </h4>
                                </div>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input dark-mode-switch" id="darkmodeswitch">
                                    <label class="custom-control-label bg-success" for="darkmodeswitch"></label>
                                </div>

                            </div>
                        </div>

                        <div class="card overflow-hidden subscribe-widget p-3 mb-3 rounded-xxl border-0">
                            <div class="card-body d-block text-left">
                                <h1 class="text-grey-800 font-xl fw-900 mb-4 lh-3">Sign up for our newsletter</h1>
                                <form action="#" class="mt-3">
                                    <div class="form-group icon-input">
                                        <i class="ti-email text-grey-500 font-sm"></i>
                                        <input type="text" class="form-control mb-2 bg-greylight border-0 style1-input pl-5" placeholder="Enail address">
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="">
                                        <label class="text-grey-500 font-xssss" for="blankCheckbox">By checking this box, you confirm that you have read and are agreeing to our terms of use regarding.</label>
                                    </div>
                                </form>
                                <ul class="d-flex align-items-center justify-content-between mt-3">
                                    <li><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                    <li><a href="#" class="btn-round-md bg-pinterest"><i class="font-xs ti-pinterest text-white"></i></a></li>
                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
                <button class="btn btn-circle text-white btn-neutral sidebar-right">
                    <i class="ti-angle-left"></i>
                </button>
            </div>
        </div>
        <!-- main content -->
        <div class="app-footer border-0 shadow-lg">
            <a href="default.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="default-follower.html" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="default-live-stream.html" class="nav-content-bttn" data-tab="chats"><i class="feather-layout"></i></a>
            <a href="#" class="nav-content-bttn sidebar-layer"><i class="feather-layers"></i></a>
            <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/50x50.png" alt="user" class="w30 shadow-xss"></a>
        </div>

        <div class="app-header-search">
            <form class="search-form">
                <div class="form-group searchbox mb-0 border-0 p-1">
                    <input type="text" class="form-control border-0" placeholder="Search...">
                    <i class="input-icon">
                        <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon>
                    </i>
                    <a href="#" class="ml-1 mt-1 d-inline-block close searchbox-close">
                        <i class="ti-close font-xs"></i>
                    </a>
                </div>
            </form>
        </div>

    </div>






    @include("inc.footer")


</body>

</html>
