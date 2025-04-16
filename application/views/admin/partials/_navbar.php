<nav class="navbar">
    <div class="navbar-content">
        <div class="logo-mini-wrapper">
            <img src="<?= base_url('public/admin/assets/images/logo-mini-light.png'); ?>" class="logo-mini logo-mini-light" alt="Logo Light">
            <img src="<?= base_url('public/admin/assets/images/logo-mini-dark.png'); ?>" class="logo-mini logo-mini-dark" alt="Logo Dark">
        </div>
        <ul class="navbar-nav">
            <li class="theme-switcher-wrapper nav-item">
                <input type="checkbox" id="theme-switcher">
                <label for="theme-switcher">
                    <div class="box dark">
                        <div class="ball"></div>
                        <div class="icons">
                            <i class="feather icon-sun"></i>
                            <i class="feather icon-moon"></i>
                        </div>
                    </div>
                </label>
            </li>
            <li class="nav-item dropdown">
                <?php
                $available_language = $this->config->item("languages");
                $language_session_key = $this->config->item("language_session_key");
                $current_language = $this->session->userdata($language_session_key["admin"]);
                ?>
                <a class="nav-link dropdown-toggle d-flex" href="javascript:void(0);" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?= base_url($available_language[$current_language]["icon"]); ?>" class="w-20px" alt="Flag">
                    <span class="ms-2 d-none d-md-inline-block">
                        <?= $available_language[$current_language]["lang"]; ?>
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="languageDropdown">
                    <?php foreach ($available_language as $lang_code => $lang_data): ?>
                        <a href="<?= base_url('admin/locale/' . $lang_code); ?>" class="dropdown-item py-2 d-flex <?= $current_language == $lang_code ? 'disabled' : '' ?>">
                            <img src="<?= base_url($lang_data["icon"]); ?>" class="w-20px" alt="<?= strtoupper($lang_code); ?>">
                            <span class="ms-2"><?= $lang_data["lang"] ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </li>
            <li class="nav-item dropdown">
                <?php
                $admin_auth_session_key = $this->config->item("admin_auth_session_key");
                $admin_credentials = $this->session->userdata($admin_auth_session_key);
                $admin_id = $admin_credentials["id"];
                $admin_first_name = $admin_credentials["first_name"];
                $admin_last_name = $admin_credentials["last_name"];
                $admin_email = $admin_credentials["email"];
                $admin_role = $admin_credentials["role"];
                $admin_img = $admin_credentials["img"];
                ?>
                <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="w-30px h-30px ms-1 rounded-circle object-fit-cover" src="<?= !empty($admin_img) ?
                        base_url('public/uploads/profiles/' . $admin_img) :
                        base_url('public/admin/assets/images/faces/face0.jpg'); ?>" alt="Profile Image">
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                    <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                        <div class="mb-3">
                            <img class="w-80px h-80px rounded-circle object-fit-cover" src="<?= !empty($admin_img) ?
                                base_url('public/uploads/profiles/' . $admin_img) :
                                base_url('public/admin/assets/images/faces/face0.jpg'); ?>" alt="Profile">
                        </div>
                        <div class="text-center">
                            <p class="fs-16px fw-bolder">
                                <?= $admin_first_name ?>
                                <?= $admin_last_name; ?>
                            </p>
                            <p class="fs-12px text-secondary">
                                <?= $admin_email; ?>
                            </p>
                            <p class="fs-12px <?= ($admin_role === 'root' || $admin_role === 'admin') ? 'text-danger' : 'text-primary'; ?>">
                                <?= ucfirst($this->lang->line($admin_role)); ?>
                            </p>
                        </div>
                    </div>
                    <ul class="list-unstyled p-1">
                        <li class="dropdown-item py-2">
                            <a href="<?= base_url('admin/profiles/' . $admin_id); ?>" class="text-body ms-0">
                                <i class="me-2 icon-md text-info" data-feather="user"></i>
                                <span class="text-info">
                                    <?= $this->lang->line("profile"); ?>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-item py-2">
                            <a href="<?= base_url('admin/profiles/' . $admin_id . '/edit'); ?>" class="text-body ms-0">
                                <i class="me-2 icon-md text-warning" data-feather="edit"></i>
                                <span class="text-warning">
                                    <?= $this->lang->line("edit_profile"); ?>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown-item py-2">
                            <a href="<?= base_url('admin/logout'); ?>" class="text-body ms-0">
                                <i class="me-2 icon-md text-danger" data-feather="log-out"></i>
                                <span class="fw-bold text-danger">
                                    <?= $this->lang->line("log_out"); ?>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <a href="javascript:void(0);" class="sidebar-toggler">
            <i data-feather="menu"></i>
        </a>
    </div>
</nav>