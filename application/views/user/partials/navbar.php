<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item">
    <!-- Для главной страницы: Проверяем только путь "/" -->
    <a class="nav-link <?= set_active_class('', false, 'active'); ?>" href="<?= base_url('home'); ?>">
        Home
    </a>
</li>
<li class="nav-item">
    <!-- Для страницы Contact -->
    <a class="nav-link <?= set_active_class('contact', false, 'active'); ?>" href="<?= base_url('contact'); ?>">
        Contact
    </a>
</li>
<li class="nav-item">
    <!-- Для страницы About -->
    <a class="nav-link <?= set_active_class('about', false, 'active'); ?>" href="<?= base_url('about'); ?>">
        About
    </a>
</li>

            </ul>
        </div>
    </div>
</nav>