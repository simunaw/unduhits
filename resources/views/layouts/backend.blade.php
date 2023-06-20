<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Admin - Unduh.its.ac.id</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="/assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="/assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed main-content-narrow">
            <!-- Side Overlay-->

            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <div class="float-left mr-5 mb-5">
                                    <img style="height: 48px; width: 45px;" class="img-avatar" src="/assets/media/photos/logo-its-biru-transparan.png" alt="">
                                </div>
                                <div class="content-header-item">
                                    <a class=" font-w700" href="index">
                                        <span style= "font-size: 200%; line-height: 125%;" class=" text-dual-primary mr-10">UNDUH</span>
                                    </a>
                                    <a class="font-w300" href="index">
                                        <p style="line-height: 0%;" class="font-size-sm mt-5 text-dual-primary-dark">Software Lisensi ITS</p>
                                    </a>
                                </div>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->

                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a class="{{ request()->is('admin') ? ' active' : '' }}" href="/admin"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                            </li>
                            <li class="{{ request()->is('admin/microsoft/*') ? ' open' : '' }}">
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Microsoft</span></a>
                                <ul>
                                    <li>
                                        <a class="{{ request()->is('admin/microsoft/ringkasanMicrosoft') ? ' active' : '' }}" href="/admin/microsoft/ringkasanMicrosoft" >Ringkasan</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/microsoft/filedownloadMicrosoft') ? ' active' : '' }}" href="/admin/microsoft/filedownloadMicrosoft">File Download</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/microsoft/spesifikasiMicrosoft') ? ' active' : '' }}" href="/admin/microsoft/spesifikasiMicrosoft">Spesifikasi</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/microsoft/previewMicrosoft') ? ' active' : '' }}" href="/admin/microsoft/previewMicrosoft">Preview</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ request()->is('admin/adobe/*') ? ' open' : '' }}">
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Adobe</span></a>
                                <ul>
                                    <li>
                                        <a class="{{ request()->is('admin/adobe/ringkasan') ? ' active' : '' }}" href="/admin/adobe/ringkasan" >Ringkasan</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/adobe/spesifikasi') ? ' active' : '' }}" href="/admin/adobe/spesifikasi">Spesifikasi</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/adobe/preview') ? ' active' : '' }}" href="/admin/adobe/preview">Preview</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ request()->is('admin/matlab/*') ? ' open' : '' }}">
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-moustache"></i><span class="sidebar-mini-hide">MATLAB</span></a>
                                <ul>
                                    <li>
                                        <a class="{{ request()->is('admin/matlab/ringkasanMatlab') ? ' active' : '' }}" href="/admin/matlab/ringkasanMatlab">Ringkasan</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/matlab/filedownloadMatlab') ? ' active' : '' }}" href="/admin/matlab/filedownloadMatlab">File Download</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/matlab/spesifikasiMatlab') ? ' active' : '' }}" href="/admin/matlab/spesifikasiMatlab">Spesifikasi</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/matlab/previewMatlab') ? ' active' : '' }}" href="/admin/matlab/previewMatlab">Preview</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ request()->is('admin/mathematica/*') ? ' open' : '' }}">
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-energy"></i><span class="sidebar-mini-hide">Mathematica</span></a>
                                <ul>
                                <li>
                                        <a class="{{ request()->is('admin/mathematica/ringkasanMathematica') ? ' active' : '' }}" href="/admin/mathematica/ringkasanMathematica">Ringkasan</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/mathematica/filedownloadMathematica') ? ' active' : '' }}" href="/admin/mathematica/filedownloadMathematica">File Download</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/mathematica/spesifikasiMathematica') ? ' active' : '' }}" href="/admin/mathematica/spesifikasiMathematica">Spesifikasi</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/mathematica/previewMathematica') ? ' active' : '' }}" href="/admin/mathematica/previewMathematica">Preview</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="{{ request()->is('admin/labview/*') ? ' open' : '' }}">
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">LabVIEW</span></a>
                                <ul>
                                <li>
                                        <a class="{{ request()->is('admin/labview/ringkasanLabview') ? ' active' : '' }}" href="/admin/labview/ringkasanLabview">Ringkasan</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/labview/filedownloadLabview') ? ' active' : '' }}" href="/admin/labview/filedownloadLabview">File Download</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/labview/spesifikasiLabview') ? ' active' : '' }}" href="/admin/labview/spesifikasiLabview">Spesifikasi</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/labview/previewLabview') ? ' active' : '' }}" href="/admin/labview/previewLabview">Preview</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ request()->is('admin/minitab/*') ? ' open' : '' }}">
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Minitab</span></a>
                                <ul>
                                    <li>
                                        <a class="{{ request()->is('admin/minitab/ringkasanMinitab') ? ' active' : '' }}" href="/admin/minitab/ringkasanMinitab">Ringkasan</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/minitab/filedownloadMinitab') ? ' active' : '' }}" href="/admin/minitab/filedownloadMinitab">File Download</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/minitab/spesifikasiMinitab') ? ' active' : '' }}" href="/admin/minitab/spesifikasiMinitab">Spesifikasi</a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->is('admin/minitab/previewMinitab') ? ' active' : '' }}" href="/admin/minitab/previewMinitab">Preview</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->

                        <!-- END Open Search Section -->

                        <!-- Layout Options (used just for demonstration) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->

                        <!-- END Layout Options -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">{{ auth()->user()->name }}</span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="/logout">
                                    <i class="si si-logout mr-5"></i> Logout
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->


                        <!-- END Notifications -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->

                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->

                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->

                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
            <div class="content py-20 font-size-sm clearfix">
                    <div class="float-right">
                    Dibuat dengan <i class="fa fa-heart text-pulse"></i>  oleh Tim KP untuk <a class="font-w600" href="https://www.its.ac.id/" target="_blank">ITS</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="index" target="_blank">Unduh.its.ac.id</a> &copy; <span class="js-year-copy">2022</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="/assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="/assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="/assets/js/plugins/chartjs/Chart.bundle.min.js"></script>
        <script src="/assets/js/plugins/ckeditor/ckeditor.js"></script>


        <!-- Page JS Code -->
        <script src="/assets/js/pages/be_pages_dashboard.min.js"></script>
        <script>jQuery(function(){ Codebase.helpers([ 'ckeditor']); });</script>
    </body>
</html>
