<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("admin/partials/head"); ?>

<body>
    <div class="main-wrapper">
        <?php $this->load->view("admin/partials/sidebar"); ?>
        <div class="page-wrapper">
            <?php $this->load->view("admin/partials/navbar"); ?>
            <div class="page-content">
                <!-- Start coding here -->
            </div>
            <?php $this->load->view("admin/partials/footer"); ?>
        </div>
    </div>
    <?php $this->load->view("admin/partials/scripts"); ?>
</body>

</html>