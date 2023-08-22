<!DOCTYPE html>
<html lang="en">

<head>
	<title>Kain</title>
	<meta charset="utf-8" />
	<meta name="description" content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals." />
	<meta name="keywords" content=" bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo.png" />

	<!--begin::Fonts and Icon (mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<link href="<?= base_url() ?>assets/bootstrap/plugins/fontawesome-free/css/all.min.css" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/css/google-roboto-300-700.css" rel="stylesheet" />
	<!--end::Fonts-->


	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<link href="<?= base_url() ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/css/custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">

	<?php
	if (isset($extracss)) {
		$this->load->view($extracss);
	}
	?>

    <!-- Datatables -->

</head>


<!--begin::Body-->

