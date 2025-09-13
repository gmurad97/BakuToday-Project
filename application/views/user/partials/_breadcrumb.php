<section class="inner-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <?php foreach ($breadcrumbs as $key => $crumb): ?>
                        <li class="breadcrumb-item <?= $key === array_key_last($breadcrumbs) ? 'active' : '' ?>">
                            <?php if ($crumb['url'] && $key !== array_key_last($breadcrumbs)): ?>
                                <a href="<?= $crumb['url'] ?>"><i class="fas fa-home me-1"></i><?= $crumb['title'] ?></a>
                            <?php else: ?>
                                <i class="fa-solid fa-chevron-right me-2"></i><span><?= $crumb['title'] ?></span>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </div>
</section>
