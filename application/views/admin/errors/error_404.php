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
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/demo1/custom.css'); ?>">
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">
                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto d-flex flex-column align-items-center">
                        <img src="<?= base_url('public/admin/assets/images/others/404.svg'); ?>" class="img-fluid mb-2"
                            alt="404">
                        <h1 class="fw-bolder mb-22 mt-2 fs-80px text-secondary">404</h1>
                        <h4 class="mb-2">
                            <?= $this->lang->line("page_not_found"); ?>
                        </h4>
                        <h6 class="text-secondary mb-3 text-center">
                            <?= $this->lang->line("admin_404_error_oopps"); ?>
                        </h6>
                        <a href="<?= base_url('admin/dashboard'); ?>">
                            <?= $this->lang->line("back_to_home"); ?>
                        </a>
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