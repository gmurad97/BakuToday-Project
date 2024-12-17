<?php $this->load->view("admin/partials/head"); ?>
<?php $this->load->view("admin/partials/sidebar"); ?>
<?php $this->load->view("admin/partials/navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12">
            <?php $alert = $this->session->flashdata("crud_alert"); ?>
            <?php if ($alert): ?>
                <div class="alert <?= $alert['alert_class']; ?> alert-dismissible fade show" role="alert">
                    <i data-feather="<?= $alert['alert_icon']; ?>"></i>
                    <strong><?= $alert['alert_message']['title'] ?></strong>
                    <?= $alert['alert_message']['description'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <h4 class="mb-3"><?= $this->lang->line("statistics"); ?></h4>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="row flex-grow-1">
                <?php
                $statistics_cards = [
                    ["title" => "Administrators Count", "count" => $statistics["admins_count"]],
                    ["title" => "Categories Count", "count" => $statistics["categories_count"]],
                    ["title" => "Advertising Count", "count" => $statistics["advertising_count"]],
                    ["title" => "News Count", "count" => $statistics["news_count"]],
                ];
                ?>
                <?php foreach ($statistics_cards as $statistics_card): ?>
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title"><?= $statistics_card["title"] ?></h6>
                                <h2 class="card-text"><?= $statistics_card["count"]; ?></h2>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php if (!empty($news_last_collection)): ?>
        <h4 class="mb-3"><?= $this->lang->line("latest_created_news"); ?></h4>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="row flex-grow-1">
                    <?php $current_language = $this->session->userdata("admin_lang"); ?>
                    <?php foreach ($news_last_collection as $news): ?>
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card">
                                <img src="<?= base_url('public/uploads/news/') . $news["img"]; ?>" class="card-img-top"
                                    alt="<?= $news["title_en"] ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $news["title_$current_language"]; ?></h5>
                                    <p class="card-text"><?= $news["short_description_$current_language"]; ?></p>
                                    <a href="<?= base_url('admin/news/') . $news['id']; ?>">
                                        <?= $this->lang->line("read_more"); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php $this->load->view("admin/partials/footer"); ?>
<?php $this->load->view("admin/partials/scripts"); ?>