<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'E-Coince') }}</title>

          <!--  Social tags      -->
        <meta name="keywords" content="Online Auction, ECoince, E-coince, Make Money Online, Bid Auction, Hyip, Investment, Invest, Bitcoin">
        <meta name="description" content="E-COINCE is an online peer to peer platform in which members buy and sell their virtual currency called COINS , 1 COIN is equivalent to 1ZAR.">
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="investment">
        <meta name="twitter:site" content="@ecoince">
        <meta name="twitter:title" content="ECoince">
        <meta name="twitter:description" content="E-COINCE is an online peer to peer platform in which members buy and sell their virtual currency called COINS , 1 COIN is equivalent to 1ZAR.">
        <meta name="twitter:creator" content="e-coince">
        <meta name="twitter:image" content="https:e-coince.com"> 
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link href="../assets/css/material-dashboard.min.css?v=2.1.0" rel="stylesheet" /> 

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/material-dashboard.min.css?v=2.1.0') }}">
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="">
        <div class="wrapper ">
            <div class="sidebar" data-color="rose" data-background-color="black" data-image="{{ asset('assets/img/sidebar-1.jpg')}}">
                <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
    
            Tip 2: you can also add an image using data-image tag
        -->
                <div class="logo">
                    <a href="https://e-coince.com" class="simple-text logo-mini">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                    <a href="https://e-coince.com" class="simple-text logo-normal">
                        E-COINCE
                    </a>
                </div>
                <div class="sidebar-wrapper">
                    <div class="user">
                        <div class="photo">
                            <img src="../assets/img/avatar.png" />
                        </div>
                        <div class="user-info">
                            <a data-toggle="collapse" href="#collapseExample" class="username">
                                <span>
                                    {{Auth::user()->username}}
                                    <b class="caret"></b>
                                </span>
                            </a>
                            <div class="collapse" id="collapseExample">
                                <ul class="nav">                            
                                    <li class="nav-item">
                                        <a class="nav-link" href="/profile">
                                            <span class="sidebar-mini"> EP </span>
                                            <span class="sidebar-normal"> Edit Profile </span>
                                        </a>
                                    </li>                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav">
                        <li class="nav-item active ">
                            <a class="nav-link" href="/dashboard">
                                <i class="material-icons">dashboard</i>
                                <p> Dashboard </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/auction">
                                <i class="material-icons">account_balance</i>
                                <span class="sidebar-normal"> Auction </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/investments">
                                <i class="material-icons">account_balance_wallet</i>
                                <span class="sidebar-normal"> My Investments </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/bids">
                                <i class="material-icons">payments</i>
                                <span class="sidebar-normal">Bids</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/bank-details">
                                <i class="material-icons">developer_board</i>
                                <span class="sidebar-normal"> Bank Details </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/bonus">
                                <i class="material-icons">favorite</i>
                                <span class="sidebar-normal"> Bonus </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/referrals">
                                <i class="material-icons">people</i>
                                <span class="sidebar-normal"> Referrals </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/history">
                                <i class="material-icons">history_edu</i>
                                <span class="sidebar-normal"> History </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/change-password">
                                <i class="material-icons">compare_arrows</i>
                                <span class="sidebar-normal"> Change Password </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/profile">
                                <i class="material-icons">account_circle</i>
                                <span class="sidebar-normal"> Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <div class="navbar-minimize">
                                <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                                    <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                                    <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                                </button>
                            </div>
                            <a class="navbar-brand" href="">Dashboard</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">person</i>
                                        <p class="d-lg-none d-md-block">
                                            Account
                                        </p>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                        <a class="dropdown-item" href="/profile">Profile</a>
                                        <a class="dropdown-item" href="/change-password">Change Password</a>
                                        <div class="dropdown-divider"></div>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        <a class="dropdown-item"
                                        href="{{ route('logout') }}" 
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();" >
                                        Log out
                                        </a>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
                <div class="content">
                    <div class="content">
                        <div class="container-fluid">
                             <!-- Page Content -->
                            <main>
                                {{ $slot }}
                            </main>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="copyright float-right">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>, made with <i class="material-icons">favorite</i> by E-COINCE
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div class="fixed-plugin">
            <div class="dropdown show-dropdown">
                <a href="#" data-toggle="dropdown">
                    <i class="fa fa-cog fa-2x"> </i>
                </a>
                <ul class="dropdown-menu">
                    <li class="header-title"> Sidebar Filters</li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger active-color">
                            <div class="badge-colors ml-auto mr-auto">
                                <span class="badge filter badge-purple" data-color="purple"></span>
                                <span class="badge filter badge-azure" data-color="azure"></span>
                                <span class="badge filter badge-green" data-color="green"></span>
                                <span class="badge filter badge-warning" data-color="orange"></span>
                                <span class="badge filter badge-danger" data-color="danger"></span>
                                <span class="badge filter badge-rose active" data-color="rose"></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="header-title">Sidebar Background</li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger background-color">
                            <div class="ml-auto mr-auto">
                                <span class="badge filter badge-black active" data-background-color="black"></span>
                                <span class="badge filter badge-white" data-background-color="white"></span>
                                <span class="badge filter badge-red" data-background-color="red"></span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="adjustments-line">
                        <a href="javascript:void(0)" class="switch-trigger">
                            <p>Sidebar Mini</p>
                            <label class="ml-auto">
                                <div class="togglebutton switch-sidebar-mini">
                                    <label>
                                        <input type="checkbox">
                                        <span class="toggle"></span>
                                    </label>
            </div>
            </label>
            <div class="clearfix"></div>
            </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Images</p>
                    <label class="switch-mini ml-auto">
                                <div class="togglebutton switch-sidebar-image">
                                    <label>
                                        <input type="checkbox" checked="">
                                        <span class="toggle"></span>
                                    </label>
        </div>
        </label>
        <div class="clearfix"></div>
        </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
            <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="{{ asset('assets/img/sidebar-1.jpg')}}" alt="">
            </a>
        </li>
        <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="{{ asset('assets/img/sidebar-2.jpg')}}" alt="">
            </a>
        </li>
        <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="{{ asset('assets/img/sidebar-3.jpg')}}" alt="">
            </a>
        </li>
        <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="{{ asset('assets/img/sidebar-4.jpg')}}" alt="">
            </a>
        </li>
        </ul>
        </div>
    </div>
        <!--   Core JS Files   -->
        <script src="{{ asset('assets/js/core/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/fullcalendar.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/jquery-jvectormap.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/nouislider.min.js')}}"></script>

        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

        <script src="{{ asset('assets/js/plugins/arrive.min.js')}}"></script>
        <script src="{{ asset('assets/js/material-dashboard.min.js?v=2.1.0')}}"></script>
        <script>
            $(document).ready(function() {
                $().ready(function() {
                    $sidebar = $('.sidebar');
    
                    $sidebar_img_container = $sidebar.find('.sidebar-background');
    
                    $full_page = $('.full-page');
    
                    $sidebar_responsive = $('body > .navbar-collapse');
    
                    window_width = $(window).width();
    
                    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
    
                    if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                        if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                            $('.fixed-plugin .dropdown').addClass('open');
                        }
    
                    }
    
                    $('.fixed-plugin a').click(function(event) {
                        // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                        if ($(this).hasClass('switch-trigger')) {
                            if (event.stopPropagation) {
                                event.stopPropagation();
                            } else if (window.event) {
                                window.event.cancelBubble = true;
                            }
                        }
                    });
    
                    $('.fixed-plugin .active-color span').click(function() {
                        $full_page_background = $('.full-page-background');
    
                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');
    
                        var new_color = $(this).data('color');
    
                        if ($sidebar.length != 0) {
                            $sidebar.attr('data-color', new_color);
                        }
    
                        if ($full_page.length != 0) {
                            $full_page.attr('filter-color', new_color);
                        }
    
                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.attr('data-color', new_color);
                        }
                    });
    
                    $('.fixed-plugin .background-color .badge').click(function() {
                        $(this).siblings().removeClass('active');
                        $(this).addClass('active');
    
                        var new_color = $(this).data('background-color');
    
                        if ($sidebar.length != 0) {
                            $sidebar.attr('data-background-color', new_color);
                        }
                    });
    
                    $('.fixed-plugin .img-holder').click(function() {
                        $full_page_background = $('.full-page-background');
    
                        $(this).parent('li').siblings().removeClass('active');
                        $(this).parent('li').addClass('active');
    
    
                        var new_image = $(this).find("img").attr('src');
    
                        if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                            $sidebar_img_container.fadeOut('fast', function() {
                                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                                $sidebar_img_container.fadeIn('fast');
                            });
                        }
    
                        if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
    
                            $full_page_background.fadeOut('fast', function() {
                                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                                $full_page_background.fadeIn('fast');
                            });
                        }
    
                        if ($('.switch-sidebar-image input:checked').length == 0) {
                            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
    
                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        }
    
                        if ($sidebar_responsive.length != 0) {
                            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                        }
                    });
    
                    $('.switch-sidebar-image input').change(function() {
                        $full_page_background = $('.full-page-background');
    
                        $input = $(this);
    
                        if ($input.is(':checked')) {
                            if ($sidebar_img_container.length != 0) {
                                $sidebar_img_container.fadeIn('fast');
                                $sidebar.attr('data-image', '#');
                            }
    
                            if ($full_page_background.length != 0) {
                                $full_page_background.fadeIn('fast');
                                $full_page.attr('data-image', '#');
                            }
    
                            background_image = true;
                        } else {
                            if ($sidebar_img_container.length != 0) {
                                $sidebar.removeAttr('data-image');
                                $sidebar_img_container.fadeOut('fast');
                            }
    
                            if ($full_page_background.length != 0) {
                                $full_page.removeAttr('data-image', '#');
                                $full_page_background.fadeOut('fast');
                            }
    
                            background_image = false;
                        }
                    });
    
                    $('.switch-sidebar-mini input').change(function() {
                        $body = $('body');
    
                        $input = $(this);
    
                        if (md.misc.sidebar_mini_active == true) {
                            $('body').removeClass('sidebar-mini');
                            md.misc.sidebar_mini_active = false;
    
                            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
    
                        } else {
    
                            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
    
                            setTimeout(function() {
                                $('body').addClass('sidebar-mini');
    
                                md.misc.sidebar_mini_active = true;
                            }, 300);
                        }
    
                        // we simulate the window Resize so the charts will get updated in realtime.
                        var simulateWindowResize = setInterval(function() {
                            window.dispatchEvent(new Event('resize'));
                        }, 180);
    
                        // we stop the simulation of Window Resize after the animations are completed
                        setTimeout(function() {
                            clearInterval(simulateWindowResize);
                        }, 1000);
    
                    });
                });
            });
        </script>
        <!-- Sharrre libray -->
        <script src="../assets/demo/jquery.sharrre.js"></script>
        <script>
            $(document).ready(function() {
    
    
                $('#facebook').sharrre({
                    share: {
                        facebook: true
                    },
                    enableHover: false,
                    enableTracking: false,
                    enableCounter: false,
                    click: function(api, options) {
                        api.simulateClick();
                        api.openPopup('facebook');
                    },
                    template: '<i class="fab fa-facebook-f"></i> Facebook',
                    url: 'https://e-coince.com'
                });
    
                $('#google').sharrre({
                    share: {
                        googlePlus: true
                    },
                    enableCounter: false,
                    enableHover: false,
                    enableTracking: true,
                    click: function(api, options) {
                        api.simulateClick();
                        api.openPopup('googlePlus');
                    },
                    template: '<i class="fab fa-google-plus"></i> Google',
                    url: 'https://e-coince.com'
                });
    
                $('#twitter').sharrre({
                    share: {
                        twitter: true
                    },
                    enableHover: false,
                    enableTracking: false,
                    enableCounter: false,
                    buttons: {
                        twitter: {
                            via: 'CreativeTim'
                        }
                    },
                    click: function(api, options) {
                        api.simulateClick();
                        api.openPopup('twitter');
                    },
                    template: '<i class="fab fa-twitter"></i> Twitter',
                    url: 'https://e-coince.com'
                });
    
    
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-46172202-1']);
                _gaq.push(['_trackPageview']);
    
                (function() {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();
    
                // Facebook Pixel Code Don't Delete
                ! function(f, b, e, v, n, t, s) {
                    if (f.fbq) return;
                    n = f.fbq = function() {
                        n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq) f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window,
                    document, 'script', '//connect.facebook.net/en_US/fbevents.js');
    
                try {
                    fbq('init', '111649226022273');
                    fbq('track', "PageView");
    
                } catch (err) {
                    console.log('Facebook Track Error:', err);
                }
    
            });
        </script>
        <script>
            $(document).ready(function() {
                // Javascript method's body can be found in assets/js/demos.js
                md.initDashboardPageCharts();
    
                md.initVectorMap();
    
            });
        </script>
    </body>
</html>
