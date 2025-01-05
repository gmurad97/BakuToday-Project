<nav class="sidebar">
    <div class="sidebar-header">
        <a href="<?= base_url('admin/dashboard'); ?>" class="sidebar-brand">News<span>Core</span></a>
        <div class="sidebar-toggler">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav" id="sidebar_nav">
            <li class="nav-item nav-category">
                <?= $this->lang->line("main"); ?>
            </li>
            <li class="nav-item <?= set_active_class(['admin/dashboard'], false, 'active'); ?>">
                <a href="<?= base_url('admin/dashboard'); ?>" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">
                        <?= $this->lang->line("dashboard"); ?>
                    </span>
                </a>
            </li>
            <li class="nav-item nav-category">
                <?= $this->lang->line("content_manager"); ?>
            </li>
            <li class="nav-item <?= set_active_class(['admin/news'], true, 'active'); ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#menuNews" role="button" aria-expanded="false" aria-controls="menuNews">
                    <i class="link-icon" data-feather="file-text"></i>
                    <span class="link-title">
                        <?= $this->lang->line("news"); ?>
                    </span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= set_active_class(['admin/news'], true, 'show'); ?>" data-bs-parent="#sidebar_nav" id="menuNews">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/news'); ?>" class="nav-link <?= set_active_class(['admin/news'], false, 'active'); ?>">
                                <?= $this->lang->line("all_news"); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/news/create'); ?>" class="nav-link <?= set_active_class(['admin/news/create'], false, 'active'); ?>">
                                <?= $this->lang->line("create_news"); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item <?= set_active_class(['admin/categories'], true, 'active'); ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#menuCategories" role="button" aria-expanded="false" aria-controls="menuCategories">
                    <i class="link-icon" data-feather="tag"></i>
                    <span class="link-title">
                        <?= $this->lang->line("categories"); ?>
                    </span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= set_active_class(['admin/categories'], true, 'show'); ?>" data-bs-parent="#sidebar_nav" id="menuCategories">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/categories'); ?>" class="nav-link <?= set_active_class(['admin/categories'], false, 'active'); ?>">
                                <?= $this->lang->line("all_categories"); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/categories/create'); ?>" class="nav-link <?= set_active_class(['admin/categories/create'], false, 'active'); ?>">
                                <?= $this->lang->line("create_category"); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item <?= set_active_class(['admin/advertising'], true, 'active'); ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#menuAdvertising" role="button" aria-expanded="false" aria-controls="menuAdvertising">
                    <i class="link-icon" data-feather="trello"></i>
                    <span class="link-title">
                        <?= $this->lang->line("advertising"); ?>
                    </span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= set_active_class(['admin/advertising'], true, 'show'); ?>" data-bs-parent="#sidebar_nav" id="menuAdvertising">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/advertising'); ?>" class="nav-link <?= set_active_class(['admin/advertising'], false, 'active'); ?>">
                                <?= $this->lang->line("all_advertising"); ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/advertising/create'); ?>" class="nav-link <?= set_active_class(['admin/advertising/create'], false, 'active'); ?>">
                                <?= $this->lang->line("create_advertising"); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <?php if ($admin_access): ?>
                <li class="nav-item nav-category text-danger">
                    <?= $this->lang->line("administration"); ?>
                </li>
                <li class="nav-item <?= set_active_class(['admin/profiles'], true, 'active'); ?>">
                    <a class="nav-link" data-bs-toggle="collapse" href="#menuAdministrators" role="button" aria-expanded="false" aria-controls="menuAdministrators">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title">
                            <?= $this->lang->line("administrators"); ?>
                        </span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse <?= set_active_class(['admin/profiles'], true, 'show'); ?>" data-bs-parent="#sidebar_nav" id="menuAdministrators">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="<?= base_url('admin/profiles'); ?>" class="nav-link <?= set_active_class(['admin/profiles'], false, 'active'); ?>">
                                    <?= $this->lang->line("all_administrators"); ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('admin/profiles/create'); ?>" class="nav-link <?= set_active_class(['admin/profiles/create'], true, 'active'); ?>">
                                    <?= $this->lang->line("add_administrator"); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?= set_active_class(['admin/settings'], false, 'active'); ?>">
                    <a href="<?= base_url('admin/settings'); ?>" class="nav-link">
                        <i class="link-icon" data-feather="settings"></i>
                        <span class="link-title">
                            <?= $this->lang->line("settings"); ?>
                        </span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<div class="page-wrapper">