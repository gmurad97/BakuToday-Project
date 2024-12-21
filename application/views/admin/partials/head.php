<?php
if (!$this->session->userdata("admin_credentials")) {
    redirect(base_url("admin/login"));
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>NobleUI - <?= empty($page_title) ? $this->lang->line("undefined") : $page_title; ?></title>
    <link rel="shortcut icon" href="<?= base_url('public/admin/assets/images/favicon.png'); ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/vendors/core/core.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/vendors/lity/lity.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/fonts/feather-font/css/iconfont.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/demo1/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/demo1/custom.css'); ?>">
    <script async src="<?= base_url('public/admin/assets/vendors/jquery/jquery.min.js'); ?>"></script>
</head>

<body>
    <div class="main-wrapper">