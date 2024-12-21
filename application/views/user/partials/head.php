<?php
$admin_credentials = $this->session->userdata("admin_credentials");
$current_route = $this->uri->segment(1);
if ($settings->maintenance_mode && empty($admin_credentials) && $current_route !== "maintenance") {
    redirect(base_url("maintenance"));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - <?= empty($page_title) ? $this->lang->line("undefined") : $page_title; ?></title>
    <link rel="shortcut icon" href="<?= base_url('public/user/assets/img/favicon.ico'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/vendors/bootstrap@5.3.3/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/user/assets/css/main.css'); ?>">
</head>

<body>