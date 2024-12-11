<nav class="sidebar">
    <div class="sidebar-header">
        <a href="<?= base_url('admin/dashboard'); ?>" class="sidebar-brand">
            Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav" id="sidebarNav">
            <li class="nav-item nav-category">Main</li>






            <li class="nav-item <?= set_active_class(['admin/dashboard'], false, 'active'); ?>">
                <a href="<?= base_url('admin/dashboard'); ?>" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

























            <li class="nav-item nav-category">Content Manager</li>
            <li class="nav-item <?= set_active_class(['admin/news'], true, 'active'); ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#menuNews" role="button" aria-expanded="false"
                    aria-controls="menuNews">
                    <i class="link-icon" data-feather="file-text"></i>
                    <span class="link-title">News</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= set_active_class(['admin/news'], true, 'show'); ?>"
                    data-bs-parent="#sidebarNav" id="menuNews">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/news'); ?>"
                                class="nav-link <?= set_active_class(['admin/news'], false, 'active'); ?>">
                                All News
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/news/create'); ?>"
                                class="nav-link <?= set_active_class(['admin/dashboard'], false, 'active'); ?>">
                                Create News
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item <?= set_active_class(['admin/categories'], false, 'active'); ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#menuCategories" role="button" aria-expanded="false"
                    aria-controls="menuCategories">
                    <i class="link-icon" data-feather="tag"></i>
                    <span class="link-title">Categories</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= set_active_class(['admin/categories'], true, 'show'); ?>"
                    data-bs-parent="#sidebarNav" id="menuCategories">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/categories'); ?>"
                                class="nav-link <?= set_active_class(['admin/categories'], false, 'active'); ?>">
                                All Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/categories/create'); ?>"
                                class="nav-link <?= set_active_class(['admin/categories/create'], false, 'active'); ?>">
                                Create Categories
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item <?= set_active_class(['admin/advertising'], true, 'active'); ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#menuAdvertising" role="button"
                    aria-expanded="false" aria-controls="menuAdvertising">
                    <i class="link-icon" data-feather="trello"></i>
                    <span class="link-title">Advertising</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= set_active_class(['admin/advertising'], true, 'show'); ?>"
                    data-bs-parent="#sidebarNav" id="menuAdvertising">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/advertising'); ?>"
                                class="nav-link <?= set_active_class(['admin/advertising'], false, 'active'); ?>">
                                All Advertising
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/advertising/create'); ?>"
                                class="nav-link <?= set_active_class(['admin/advertising/create'], false, 'active'); ?>">
                                Create Advertising
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">System</li>
            <li class="nav-item <?= set_active_class(['admin/settings'], true, 'active'); ?>">
                <a href="<?= base_url('admin/settings'); ?>" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Settings</span>
                </a>
            </li>




            <li class="nav-item nav-category">Admining</li>
            <li class="nav-item <?= set_active_class(['admin/advertising'], true, 'active'); ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#menureg" role="button" aria-expanded="false"
                    aria-controls="menureg">
                    <i class="link-icon" data-feather="trello"></i>
                    <span class="link-title text-danger fw-bold">Admins</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= set_active_class(['admin/advertising'], true, 'show'); ?>"
                    data-bs-parent="#sidebarNav" id="menureg">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/advertising'); ?>"
                                class="nav-link <?= set_active_class(['admin/advertising'], false, 'active'); ?>">
                                All Admins
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/advertising/create'); ?>"
                                class="nav-link <?= set_active_class(['admin/advertising/create'], false, 'active'); ?>">
                                register
                            </a>
                        </li>
                    </ul>
                </div>
            </li>



        </ul>
    </div>
</nav>
<div class="page-wrapper">