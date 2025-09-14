<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("user/partials/_head"); ?>
</head>

<body>
    <?php $this->load->view("user/partials/_preloader"); ?>
    <?php $this->load->view("user/partials/_header"); ?>
    <?php $this->load->view("user/partials/_sidebar"); ?>
    <?php $this->load->view("user/partials/_searchbar"); ?>
    <?php $this->load->view("user/partials/_breadcrumb"); ?>
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="row">
                        <?php foreach ($news_list as $news): ?>
                            <div class="col-md-6 mb-3">
                                <div class="blog-post post-style-03">
                                    <div class="blog-image">
                                        <img class="img-fluid" src="<?= base_url('public/uploads/news/' . $news['img']); ?>" alt="">
                                    </div>
                                    <span class="badge badge-large bg-primary"><?= $category['name_' . $lang] ?></span>
                                    <div class="blog-post-details">
                                        <h6 class="blog-title"><a href="<?= base_url('news/' . $news['id']) ?>"><?= $news['title_' . $lang] ?></a></h6>
                                        <div class="blog-post-meta">
                                            <div class="blog-post-author">
                                                <span><a href="#"><img src="<?= base_url('public/user/assets/images/avatar/01.jpg'); ?>" alt="">Barry</a></span>
                                            </div>
                                            <div class="blog-post-time">
                                                <a href="#"><i class="fa-solid fa-calendar-days"></i><?= $news['created_at'] ?></a>
                                            </div>
                                        </div>
                                        <p><?= $news['short_description_' . $lang] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <!-- <nav class="nezzy-pagination">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left"></i></a></li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><span class="page-link">...</span></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </nav> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <?php $this->load->view("user/partials/_sidebar_content"); ?>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view("user/partials/_footer"); ?>
    <?php $this->load->view("user/partials/_scroll"); ?>
    <?php $this->load->view("user/partials/_scripts"); ?>
</body>

</html>
