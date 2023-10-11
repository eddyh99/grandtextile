<body style="background-color:white" id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    <!-- ====== Start App ====== -->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!-- ====== Start Page ====== -->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

<!-- ======  Start Wrapper Side Bar ====== -->
<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

    <!-- ====== Start Sidebar Desktop ======-->
    <div id="kt_app_sidebar" class="app-sidebar flex-column" style="background-color: #3770C7;" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

        <!-- ====== Start Logo Desktop ===== -->
        <div class="container" style="background-color: #5A93EB" id="kt_app_sidebar_logo">

            <!-- ====== Start Logo Desktop ===== -->
            <img alt="Logo" src="<?= base_url() ?>assets/img/woman.png" class="h-70px app-sidebar-logo-default" />
            <a href="<?=base_url()?>" class="app-sidebar-logo-default text-center text-white fw-bold"> 
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

                    <!--====== Start ALL Side bar ===== -->
            <?php if (($_SESSION["logged_status"]["role"] == "admin")||($_SESSION["logged_status"]["role"] == "GM")||($_SESSION["logged_status"]["role"] == "EAM")) { ?>
                        <!--====== Start Dashboard ===== -->
                        
                        <!--====== Start Master ===== -->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion <?= @$colmas ?> <?= @$h_tc . ' ' . @$h_rsv ?>">

                            <!-- ===== Start Sub Link Master ===== -->
                            <a class="menu-link <?= ($activeMenu === 'master'||'') ? 'active' : ''; ?>" data-bs-toggle="collapse" href="#" role="button" aria-expanded="false" aria-controls="masterCollapse">
                                <span class="menu-title">Master</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--===== End Sub Link Master  ===== -->

                            <!-- ======  Start Sub Master  ====== -->
                            <div class="menu-sub menu-sub-accordion">

                                <!-- Start Menu Reseller -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'reseller') ? 'active' : ''; ?>" href="<?= base_url('reseller'); ?>">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/reseller.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Reseller</span>
                                </a>
                            </div>
                            <!-- End Menu Reseller -->

                            <!-- Start Menu Area -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'area') ? 'active' : '';  ?>" href="<?= base_url() ?>area">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/map.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Area</span>
                                </a>
                            </div>
                            <!-- End Menu Area -->

                            <!-- Start Menu Sales -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'sales') ? 'active' : ''; ?>" href="<?= base_url() ?>sales">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/sales.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Sales</span>
                                </a>
                            </div>
                            <!-- End Menu Sales -->

                            <!-- Start Menu CP Hotel -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'cphotel') ? 'active' : ''; ?>" href="<?= base_url() ?>cphotel">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/cphotel.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">CP Hotel</span>
                                </a>
                            </div>
                            <!-- End Menu CP Hotel -->

                            <!-- Start Menu Client Hotel -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'clienthotel') ? 'active' : ''; ?>" href="<?= base_url() ?>clienthotel">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/clienthotel.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Client Hotel</span>
                                </a>
                            </div>
                            <!-- End Menu Client Hotel -->

                            <!-- Start Menu Kategori -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'kategori') ? 'active' : ''; ?>" href="<?= base_url() ?>kategori">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/kategori.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Kategori</span>
                                </a>
                            </div>
                            <!-- End Menu Kategori -->

                            <!-- Start Menu Barang -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'barang') ? 'active' : ''; ?>" href="<?= base_url() ?>barang">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/barang.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Barang</span>
                                </a>
                            </div>
                            <!-- End Menu Barang -->

                            <!-- Start Menu Pengguna -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'pengguna') ? 'active' : ''; ?>" href="<?= base_url() ?>pengguna">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/pengguna.png'); ?>" alt="Reseller Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Pengguna</span>
                                </a>
                            </div>
                            <!-- End Menu Pengguna -->
                            <!-- Start Menu Bahan Baku -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'bahanbaku') ? 'active' : ''; ?>" href="<?= base_url() ?>bahanbaku">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/bbaku.png'); ?>" alt="Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Bahan Baku</span>
                                </a>
                            </div>
                            <!-- End Menu Bahan Baku -->
                            <!-- Start Menu Stok -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'stok') ? 'active' : ''; ?>" href="<?= base_url() ?>stok">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/stok.png'); ?>" alt="Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Stok</span>
                                </a>
                            </div>
                            <!-- End Menu Stok -->
                            
                            <!-- Start Menu Penjahit -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'penjahit') ? 'active' : ''; ?>" href="<?= base_url() ?>penjahit">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/iconpen.png'); ?>" alt="Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Penjahit</span>
                                </a>
                            </div>
                            <!-- End Menu Penjahit -->
                            <!-- Start Menu Komisi Penjahit -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'kompenjahit') ? 'active' : ''; ?>" href="<?= base_url() ?>kompenjahit">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/kompen.png'); ?>" alt="Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Komisi Penjahit</span>
                                </a>
                            </div>
                            <!-- End Menu Komisi Penjahit -->
                            <!-- Start Menu Addon -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'addon') ? 'active' : ''; ?>" href="<?= base_url() ?>addon">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/kompen.png'); ?>" alt="Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Add On</span>
                                </a>
                            </div>
                            <!-- End Menu Addon -->

                            <!-- Start Menu Retailer -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'retailer') ? 'active' : ''; ?>" href="<?= base_url() ?>retailer">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/kompen.png'); ?>" alt="Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Retailer</span>
                                </a>
                            </div>
                            <!-- End Menu Retailer -->

                            <!-- Start Menu Outsource -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'outsource') ? 'active' : ''; ?>" href="<?= base_url() ?>outsource">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/kompen.png'); ?>" alt="Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Outsource</span>
                                </a>
                            </div>
                            <!-- End Menu Outsource -->
                            
                            <!-- Start Menu Supplier -->
                            <div class="menu-item">
                                <a class="menu-link <?= ($activeMenu === 'suplier') ? 'active' : ''; ?>" href="<?= base_url() ?>suplier">
                                    <span class="menu-bullet">
                                        <img src="<?php echo base_url('assets/img/kompen.png'); ?>" alt="Icon" class="bullet-img">
                                    </span>
                                    <span class="menu-title">Supplier</span>
                                </a>
                            </div>
                            <!-- End Menu Supplier -->


                            </div>
                            <!--======  End Sub Master  ====== -->
                        </div>
                        <!-- End Menu Master -->

                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion <?= @$colmas ?> <?= @$h_tc . ' ' . @$h_rsv ?>">

                            <!-- ===== Start Sub Link Master ===== -->
                            <a class="menu-link <?= ($activeMenu === 'transaksi'||'') ? 'active' : ''; ?>" data-bs-toggle="collapse" href="#" role="button" aria-expanded="false" aria-controls="masterCollapse">
                                <span class="menu-title">Transaksi</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--===== End Sub Link Master  ===== -->

                            <!-- ======  Start Sub Master  ====== -->
                            <div class="menu-sub menu-sub-accordion">

                            <!-- ======  Start Menu Proses ===== -->
                                <div class="menu-item ">
                                    <a class="menu-link <?= ($activeMenu === '') ? 'active' : ''; ?>" href="<?= base_url() ?>proses">
                                        <span class="menu-bullet">
                                            <img src="<?php echo base_url('assets/img/kompen.png'); ?>" alt="Icon" class="bullet-img">
                                        </span>
                                        <span class="menu-title">Proses</span>
                                    </a>
                                </div>
                                <!--======  End Menu Proses ===== -->

                                <!-- ======  Start Menu Delivery ===== -->
                                <div class="menu-item ">
                                    <a class="menu-link <?= ($activeMenu === '') ? 'active' : ''; ?>" href="<?= base_url() ?>delivery">
                                        <span class="menu-bullet">
                                            <img src="<?php echo base_url('assets/img/kompen.png'); ?>" alt="Icon" class="bullet-img">
                                        </span>
                                        <span class="menu-title">Delivery</span>
                                    </a>
                                </div>
                                <!--======  End Menu Delivery ===== -->

                                <!-- ======  Start Menu Pembayaran ===== -->
                                <div class="menu-item ">
                                    <a class="menu-link <?= ($activeMenu === '') ? 'active' : ''; ?>" href="<?= base_url() ?>pembayaran">
                                        <span class="menu-bullet">
                                            <img src="<?php echo base_url('assets/img/kompen.png'); ?>" alt="Icon" class="bullet-img">
                                        </span>
                                        <span class="menu-title">Pembayaran</span>
                                    </a>
                                </div>
                                <!--======  End Menu Pembayaran ===== -->

                                <!-- ======  Start Menu Pesanan Reseller ===== -->
                                <div class="menu-item ">
                                    <a class="menu-link <?= ($activeMenu === '') ? 'active' : ''; ?>" href="<?= base_url() ?>pesananreseller">
                                        <span class="menu-bullet">
                                            <img src="<?php echo base_url('assets/img/kompen.png'); ?>" alt="Icon" class="bullet-img">
                                        </span>
                                        <span class="menu-title">Pesanan Reseller</span>
                                    </a>
                                </div>
                                <!--======  End Menu Pesanan Reseller ===== -->

                                <!-- ======  Start Menu Jadwal Potong ===== -->
                                <div class="menu-item ">
                                    <a class="menu-link <?= ($activeMenu === '') ? 'active' : ''; ?>" href="<?= base_url() ?>jadwalpotong">
                                        <span class="menu-bullet">
                                            <img src="<?php echo base_url('assets/img/kompen.png'); ?>" alt="Icon" class="bullet-img">
                                        </span>
                                        <span class="menu-title">Jadwal Potong</span>
                                    </a>
                                </div>
                                <!--======  End Menu Jadwal Potong ===== -->

                                <!-- ======  Start Menu quotation ===== -->
                                <div class="menu-item ">
                                    <a class="menu-link <?= ($activeMenu === 'quotation') ? 'active' : ''; ?>" href="<?= base_url() ?>quotation">
                                        <span class="menu-bullet">
                                            <img src="<?php echo base_url('assets/img/iconpen.png'); ?>" alt="Icon" class="bullet-img">
                                        </span>
                                        <span class="menu-title">Quotation</span>
                                    </a>
                                </div>
                                <!--======  End Menu quotation ===== -->

                                <!-- ======  Start Menu Invoice ===== -->
                                <div class="menu-item ">
                                    <a class="menu-link <?= ($activeMenu === '') ? 'active' : ''; ?>" href="<?= base_url() ?>invoice">
                                        <span class="menu-bullet">
                                            <img src="<?php echo base_url('assets/img/kompen.png'); ?>" alt="Icon" class="bullet-img">
                                        </span>
                                        <span class="menu-title">Invoice</span>
                                    </a>
                                </div>
                                <!--======  End Menu Invoice ===== -->
                                <!-- ======  Start Menu Work Order ===== -->
                                <div class="menu-item ">
                                    <a class="menu-link <?= ($activeMenu === '') ? 'active' : ''; ?>" href="<?= base_url() ?>workorder">
                                        <span class="menu-bullet">
                                            <img src="<?php echo base_url('assets/img/kompen.png'); ?>" alt="Icon" class="bullet-img">
                                        </span>
                                        <span class="menu-title">Work Order</span>
                                    </a>
                                </div>

                                <div class="menu-item ">
                                    <a class="menu-link <?= ($activeMenu === '') ? 'active' : ''; ?>" href="<?= base_url() ?>settings">
                                        <span class="menu-bullet">
                                            <img src="<?php echo base_url('assets/img/kompen.png'); ?>" alt="Icon" class="bullet-img">
                                        </span>
                                        <span class="menu-title">Settings</span>
                                    </a>
                                </div>
                                <!--======  End Menu Work Order ===== -->

                            </div>
                            <!--======  End Sub Master  ====== -->
                        </div>
                        <!--====== End Master ===== -->

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