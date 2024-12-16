<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= set_active_class(['', 'home'], false, 'active'); ?>"
                        href="<?= base_url('home'); ?>">
                        <?= $this->lang->line("home"); ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= set_active_class(['contact'], false, 'active'); ?>"
                        href="<?= base_url('contact'); ?>">
                        <?= $this->lang->line("contact"); ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= set_active_class(['about'], false, 'active'); ?>"
                        href="<?= base_url('about'); ?>">
                        <?= $this->lang->line("about"); ?>
                    </a>
                </li>
            </ul>
        </div>
        <div class="row">
            <select class="form-select" onchange="window.location.href='<?= base_url('lang/switch') ?>/' + this.value;">
                <option value="az" <?= $this->session->userdata("user_lang") == "az" ? "selected" : "" ?>>
                    Azərbaycan
                </option>
                <option value="en" <?= $this->session->userdata("user_lang") == "en" ? "selected" : "" ?>>
                    English
                </option>
                <option value="ru" <?= $this->session->userdata("user_lang") == "ru" ? "selected" : "" ?>>
                    Русский
                </option>
            </select>
        </div>
    </div>
</nav>