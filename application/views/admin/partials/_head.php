<?php
if (!$this->session->userdata($this->config->item("admin_auth_session_key"))) {
    redirect(base_url("admin/login"));
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>NewsCore - <?= $page_title ?? $this->lang->line("undefined"); ?></title>
    <link rel="shortcut icon" href="<?= base_url('public/admin/assets/images/favicon.png'); ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/fonts/feather-font/css/iconfont.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/vendors/datatables@2.1.8/datatables.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/vendors/fancybox@5.0.36/fancybox.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/vendors/sweetalert2@11.15.3/sweetalert2.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/vendors/core@5.3.3/core.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/custom.css'); ?>">
    <script src="<?= base_url('public/admin/assets/vendors/jquery@3.7.1/jquery.min.js'); ?>"></script>
    
    <meta name="csrf-token" content="<?= $this->security->get_csrf_hash(); ?>">

</head>

<body>
    <div class="main-wrapper">