<?php
redirect(base_url("admin/dashboard"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>NobleUI - <?= empty($page_title) ? "Undefined" : $page_title; ?></title>
    <link rel="shortcut icon" href="<?= base_url('public/admin/assets/images/favicon.png'); ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/vendors/core/core.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/fonts/feather-font/css/iconfont.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/demo1/style.css'); ?>">
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">
                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                        <div class="card overflow-hidden">
                            <div class="row">
                                <div class="col-md-4 pe-md-0">
                                    <div class="auth-side-wrapper"></div>
                                </div>
                                <div class="col-md-8 ps-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="<?= base_url('admin/login'); ?>" class="nobleui-logo d-block mb-2">
                                            Noble<span>UI</span>
                                        </a>
                                        <h5 class="text-secondary fw-normal mb-4">
                                            Welcome back! Log in to your account.
                                        </h5>
                                        <form action="<?= base_url('admin/login/verify'); ?>" method="POST"
                                            enctype="application/x-www-form-urlencoded" class="forms-sample">
                                            <div class="mb-3">
                                                <label for="admin_username" class="form-label">
                                                    Email or Username
                                                </label>
                                                <input name="admin_username" type="email" class="form-control"
                                                    id="admin_username" placeholder="example@domain.com">
                                            </div>
                                            <div class="mb-3">
                                                <label for="admin_password" class="form-label">Password</label>
                                                <input name="admin_password" type="password" class="form-control"
                                                    id="admin_password" placeholder="Enter your password">
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-primary text-white" type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('public/admin/assets/js/color-modes.js'); ?>"></script>
    <script src="<?= base_url('public/admin/assets/vendors/core/core.js'); ?>"></script>
    <script src="<?= base_url('public/admin/assets/vendors/feather-icons/feather.min.js'); ?>"></script>
    <script src="<?= base_url('public/admin/assets/js/app.js'); ?>"></script>
</body>

</html>