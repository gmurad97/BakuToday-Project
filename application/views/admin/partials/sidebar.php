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
            <li class="nav-item <?= set_active_class(['admin', 'dashboard']); ?>">
                <a href="<?= base_url('admin/dashboard'); ?>" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Content Manager</li>



            <li class="nav-item <?= set_active_class('admin/news'); ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#menuNews" role="button" aria-expanded="false"
                    aria-controls="menuNews">
                    <i class="link-icon" data-feather="file-text"></i>
                    <span class="link-title">News</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= set_active_class('admin/news','show'); ?>" data-bs-parent="#sidebarNav"
                    id="menuNews">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/news'); ?>"
                                class="nav-link <?= set_active_class('admin/news'); ?>">All News</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/news/create'); ?>"
                                class="nav-link <?= set_active_class('admin/news/create'); ?>">Add News</a>
                        </li>
                    </ul>
                </div>
            </li>








            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#menuCategories" role="button" aria-expanded="false"
                    aria-controls="menuCategories">
                    <i class="link-icon" data-feather="tag"></i>
                    <span class="link-title">Categories</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" data-bs-parent="#sidebarNav" id="menuCategories">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/categories'); ?>" class="nav-link">All Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/categories/create'); ?>" class="nav-link">Add Categories</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#menuAdvertising" role="button"
                    aria-expanded="false" aria-controls="menuAdvertising">
                    <i class="link-icon" data-feather="trello"></i>
                    <span class="link-title">Advertising</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" data-bs-parent="#sidebarNav" id="menuAdvertising">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url('admin/categories'); ?>" class="nav-link">All Advertising</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('admin/categories/create'); ?>" class="nav-link">Add Advertising</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">System</li>
            <li class="nav-item">
                <a href="<?= base_url('admin/filemanager'); ?>" class="nav-link">
                    <i class="link-icon" data-feather="folder"></i>
                    <span class="link-title">File Manager</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('admin/settings'); ?>" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</nav>