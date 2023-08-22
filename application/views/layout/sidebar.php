<style>
    .menu-arrow {
        transition: transform 0.3s ease;
    }

    .collapsed .menu-arrow {
        transform: rotate(90deg);
    }

    /* Your other styles */
</style>


<body style="background-color:white" id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    <!-- ====== Start App ====== -->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!-- ====== Start Page ====== -->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            <!-- ====== Start Header ====== -->
<div id="kt_app_header" class="app-header <?= @$h_tc . ' ' . @$h_rsv ?>">

    <!-- ====== Start Header container ====== -->
    <div class="app-container container-fluid bg-white d-flex align-items-stretch justify-content-between" id="kt_app_header_container">

        <!-- ====== Start sidebar mobile toggle ====== -->
        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <!-- ====== Start Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
        </div>
        <!-- ====== End sidebar mobile toggle ====== -->

        <!-- ====== Start Mobile logo ====== -->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="<?= base_url() ?>" class="d-lg-none">
                <img alt="Logo" src="<?= base_url() ?>assets/img/logo.webp" class="theme-light-show h-30px" />
                <img alt="Logo" src="<?= base_url() ?>assets/img/logo.webp" class="theme-dark-show h-30px" />
            </a>
        </div>
        <!-- ====== Start Mobile logo ====== -->

        <!-- ====== Start Header wrapper ====== -->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">

            <!-- ======= Start Menu wrapper ====== -->
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">

                <!-- ====== Start Menu ====== -->
                <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">

                    <!-- ====== Start Menu item ====== -->
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">

                        <!-- ====== Start Menu link ====== -->
                        <span>
                            <span class="menu-title text-gray-500"><?= @$breadcrumb ?></span>
                        </span>
                        <!--====== End Menu link ====== -->

                    </div>
                    <!--====== End Menu item ====== -->

                </div>
                <!--====== End Menu ====== -->

            </div>
            <!--======= End Menu wrapper ====== -->

        </div>
        <!-- ====== End Header wrapper ====== -->

    </div>
    <!-- ====== End Header container ====== -->
</div>
<!-- ====== End Header ====== -->

<!-- ======  Start Wrapper Side Bar ====== -->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

    <!-- ====== Start Sidebar Desktop ======-->
    <div id="kt_app_sidebar" class="app-sidebar flex-column" style="background-color: #3770C7;" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

        <!-- ====== Start Logo Desktop ===== -->
        <div class="app-sidebar-logo px-6 my-6" id="kt_app_sidebar_logo">

            <!-- ====== Start Logo Desktop ===== -->
            <img alt="Logo" src="<?= base_url() ?>assets/img/woman.png" class="h-70px app-sidebar-logo-default" />
            <a href="<?=base_url()?>" class="app-sidebar-logo-default  text-white fw-bold"> 
            Admin
            </a>
            <!--====== End Logo Desktop ===== -->

            <!--====== Start Sidebar Toggle ===== -->
            <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-sm h-30px w-30px rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
                <span class="svg-icon svg-icon-2 rotate-180">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
                        <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
                    </svg>
                </span>
            </div>
            <!--====== End Sidebar Toggle =====-->

        </div>
        <!--====== End Logo Desktop ===== -->




        <!-- ====== Start sidebar menu ====== -->
        <div class="app-sidebar-menu overflow-hidden flex-column-fluid">

            <!-- ====== Start Menu wrapper ====== -->
            <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">

                <!-- ====== Start Menu ====== -->
                <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

                    <!-- ====== Start Name Login ===== -->
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-border-nama pb-3 mb-5 <?= @$h_tc ?>">

                        <!-- ===== Start Menu Name login ===== -->
                        <span class="menu-link">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-2">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M35.7303 27.4116C32.769 25.8827 28.7198 25 24 25C13.9927 25 7 28.9684 7 34.6504V44H25V38.142L35.7303 27.4116Z" fill="#B6C2CD" />
                                        <path d="M31 11.1252C31 7.19005 27.8661 4 24.0003 4C23.7435 4 23.4868 4.01439 23.2315 4.0431C19.3891 4.4753 16.6184 7.99641 17.043 11.9077L17.4947 16.0692C17.8612 19.4451 20.6637 22 24.0003 22C27.3369 22 30.1395 19.4451 30.5059 16.0692L30.9577 11.9077C30.9859 11.6479 31 11.3866 31 11.1252Z" fill="currentColor" />
                                        <path d="M43.3845 24L47.9999 28.6153L44.923 31.6921L40.3076 27.0768L43.3845 24Z" fill="currentColor" />
                                        <path d="M38.7692 28.6158L43.3846 33.2311L32.6154 44H28V39.3847L38.7692 28.6158Z" fill="currentColor" />
                                    </svg>

                                </span>
                            </span>
                            <span class="menu-title">
                                <?= $_SESSION["logged_status"]["nama"] ?>
                            </span>
                            <span class="menu-arrow"></span>
                        </span>
                        <!--===== End Menu Name login  ===== -->

                        <!-- ======  Start Sub Name Login  ====== -->
                        <div class="menu-sub menu-sub-accordion">

                            <!-- ======  Start Menu Nama Login ===== -->
                            <div class="menu-item">
                                <a class="menu-link" href="<?= base_url() ?>pengguna/ubah/<?= base64_encode($_SESSION["logged_status"]["username"]) ?>">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">
                                        Ganti Password
                                    </span>
                                </a>
                            </div>
                            <!--======  End Menu Nama Login ===== -->

                        </div>
                        <!--======  End Sub Name Login  ====== -->
                    </div>
                    <!--====== End Name Login ===== -->



                    <!--====== Start ALL Side bar ===== -->
            <?php if (($_SESSION["logged_status"]["role"] == "admin")||($_SESSION["logged_status"]["role"] == "GM")||($_SESSION["logged_status"]["role"] == "EAM")) { ?>
                        <!--====== Start Dashboard ===== -->
                        
                        <!--====== End Dashboard ===== -->

                        <!--====== Start Master ===== -->
                        <div class="menu-item">
                            <a class="menu-link <?= ($activeMenu === 'master') ? 'active' : ''; ?>" data-bs-toggle="collapse" href="#masterCollapse" role="button" aria-expanded="false" aria-controls="masterCollapse">
                                <span style="color: white" class="menu-title">Master</span>
                                <span class="menu-arrow"></span>
                            </a>
                        </div>
                        <!-- Start Sub Menu Master -->
                        <div class="collapse menu-sub menu-sub-accordion 
                        <?= ($activeMenu === 'reseller' ||
                             $activeMenu === 'area' || 
                             $activeMenu === 'sales' || 
                             $activeMenu === 'cphotel' || 
                             $activeMenu === 'clienthotel' || 
                             $activeMenu === 'kategori' || 
                             $activeMenu === 'barang' || 
                             $activeMenu === 'pengguna') ? 'show' : ''; ?>" 
                        id="masterCollapse" data-bs-parent="#masterCollapse">

                            <!-- Start Menu Reseller -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'reseller') ? 'active' : ''; ?>" href="<?= base_url('reseller'); ?>">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/reseller.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span style="color: white" class="menu-title">Reseller</span>
                                </a>
                            </div>
                            <!-- End Menu Reseller -->

                            <!-- Start Menu Area -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'area') ? 'active' : 'area';  ?>" href="<?= base_url() ?>area">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/map.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span style="color: white" class="menu-title">Area</span>
                                </a>
                            </div>
                            <!-- End Menu Area -->

                            <!-- Start Menu Sales -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'sales') ? 'active' : ''; ?>" href="<?= base_url() ?>sales">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/sales.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span style="color: white" class="menu-title">Sales</span>
                                </a>
                            </div>
                            <!-- End Menu Sales -->

                            <!-- Start Menu CP Hotel -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'cphotel') ? 'active' : ''; ?>" href="<?= base_url() ?>cphotel">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/cphotel.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span style="color: white" class="menu-title">CP Hotel</span>
                                </a>
                            </div>
                            <!-- End Menu CP Hotel -->

                            <!-- Start Menu Client Hotel -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'clienthotel') ? 'active' : ''; ?>" href="<?= base_url() ?>clienthotel">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/clienthotel.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span style="color: white" class="menu-title">Client Hotel</span>
                                </a>
                            </div>
                            <!-- End Menu Client Hotel -->

                            <!-- Start Menu Kategori -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'kategori') ? 'active' : ''; ?>" href="<?= base_url() ?>kategori">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/kategori.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span style="color: white" class="menu-title">Kategori</span>
                                </a>
                            </div>
                            <!-- End Menu Kategori -->

                            <!-- Start Menu Barang -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'barang') ? 'active' : ''; ?>" href="<?= base_url() ?>barang">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/barang.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span style="color: white" class="menu-title">Barang</span>
                                </a>
                            </div>
                            <!-- End Menu Barang -->

                            <!-- Start Menu Pengguna -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'pengguna') ? 'active' : ''; ?>" href="<?= base_url() ?>pengguna">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/pengguna.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span style="color: white" class="menu-title">Pengguna</span>
                                </a>
                            </div>
                            <!-- End Menu Pengguna -->
                        </div>
                         <!-- End Sub Menu Master -->
                            
                        <!-- End Menu Master -->
            <?php }?>
                    <!--====== End ALL Side bar ===== -->
                    <!-- ====== Start Menu item Logout ====== -->
                    <div class="menu-item menu-accordion">
                        <!-- ====== Start Menu link ====== -->
                        <a class="menu-link " href="<?= base_url() ?>Auth/logout">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 6C6.89543 6 6 6.89543 6 8V40C6 41.1046 6.89543 42 8 42H40C41.1046 42 42 41.1046 42 40V24V8C42 6.89543 41.1046 6 40 6H8ZM42 24L32 32V26H16V22H32V16L42 24Z" fill="currentColor" />
                                        <path d="M32 16L42 24L32 32V26H16V22H32V16Z" fill="#324558" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span style="color : white" class="menu-title">Logout</span>
                        </a>
                        <!--====== End Menu link ====== -->

                    </div>
                    <!--====== End Menu item Logout ====== -->

                </div>
                <!--====== End Menu ====== -->
            </div>
            <!--====== End Menu wrapper ====== -->
        </div>
        <!--====== End sidebar menu ====== -->

    </div>
    <!--====== End Sidebar Desktop ======-->


    <!-- ====== Start Main Content ====== -->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">