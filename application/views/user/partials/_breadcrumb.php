<section class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <?php foreach ($breadcrumbs as $item): ?>
                        <li class="breadcrumb-item <?= $item['active'] ? 'active' : '' ?>">
                            <?php if (!$item['active']): ?>
                                <a href="<?= $item['url'] ?>">
                                    <?php if ($item['text'] == $this->lang->line("home")): ?>
                                        <i class="fas fa-home me-1"></i>
                                    <?php endif; ?>
                                    <?= $item['text'] ?>
                                </a>
                            <?php else: ?>
                                <i class="fa-solid fa-chevron-right me-2"></i>
                                <span><?= $item['text'] ?></span>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>
</section>
