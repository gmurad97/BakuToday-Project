<?php $this->load->view("admin/partials/_head"); ?>
<?php $this->load->view("admin/partials/_sidebar"); ?>
<?php $this->load->view("admin/partials/_navbar"); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12">
            <?php $notifier = $this->session->flashdata("notifier"); ?>
            <?php if ($notifier): ?>
                <div class="alert <?= $notifier['class']; ?> alert-dismissible fade show" role="alert">
                    <i data-feather="<?= $notifier['icon']; ?>"></i>
                    <strong><?= $notifier['messages']['title'] ?></strong>
                    <?= $notifier['messages']['description'] ?>
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
                    ["title" => "{$this->lang->line('administrators_count')}", "count" => $statistics["admins_count"]],
                    ["title" => "{$this->lang->line('categories_count')}", "count" => $statistics["categories_count"]],
                    ["title" => "{$this->lang->line('advertising_count')}", "count" => $statistics["advertising_count"]],
                    ["title" => "{$this->lang->line('news_count')}", "count" => $statistics["news_count"]],
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
</div>
<?php $this->load->view("admin/partials/_footer"); ?>
<?php $this->load->view("admin/partials/_scripts"); ?>