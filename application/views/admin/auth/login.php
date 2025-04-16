<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>NewsCore - <?= $page_title ?? $this->lang->line("undefined"); ?></title>
    <link rel="shortcut icon" href="<?= base_url('public/admin/assets/images/favicon.png'); ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/vendors/core@5.3.3/core.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/fonts/feather-font/css/iconfont.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/admin/assets/css/style.css'); ?>">
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
                                            News<span>Core</span>
                                        </a>
                                        <h5 class="text-secondary fw-normal mb-4">
                                            <?= $this->lang->line("login_welcome"); ?>
                                        </h5>
                                        <?php $notifier = $this->session->flashdata("notifier"); ?>
                                        <?php if ($notifier): ?>
                                            <div class="alert <?= $notifier['class']; ?> alert-dismissible fade show" role="alert">
                                                <i data-feather="<?= $notifier['icon']; ?>"></i>
                                                <strong><?= $notifier['messages']['title'] ?></strong>
                                                <?= $notifier['messages']['description'] ?>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                                            </div>
                                        <?php endif; ?>
                                        <form action="<?= base_url('admin/login/verify'); ?>" method="POST" enctype="application/x-www-form-urlencoded" class="forms-sample">
                                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                            <div class="mb-3">
                                                <label for="admin_username" class="form-label">
                                                    <?= $this->lang->line("email_or_username"); ?>
                                                </label>
                                                <input name="admin_username" type="text" class="form-control" id="admin_username" placeholder="<?= $this->lang->line("enter_your_email_or_username"); ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="admin_password" class="form-label">
                                                    <?= $this->lang->line("password"); ?>
                                                </label>
                                                <input name="admin_password" type="password" class="form-control" id="admin_password" placeholder="<?= $this->lang->line("enter_your_password"); ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <?= $this->recaptcha->render(); ?>
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-primary text-white" type="submit">
                                                    <?= $this->lang->line("login"); ?>
                                                </button>
                                            </div>
                                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
    <script src="<?= base_url('public/admin/assets/vendors/core@5.3.3/core.js'); ?>"></script>
    <script src="<?= base_url('public/admin/assets/vendors/feathericons@4.29.2/feather.min.js'); ?>"></script>
    <script src="<?= base_url('public/admin/assets/js/app.js'); ?>"></script>
</body>

</html>