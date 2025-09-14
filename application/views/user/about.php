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
                        <div class="col-sm-8 mb-4 mb-sm-0">
                            <img class="img-fluid border-radius" src="<?= base_url('public/user/assets/images/about/01.jpg'); ?>" alt="">
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid border-radius" src="<?= base_url('public/user/assets/images/about/02.jpg'); ?>" alt="">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12">
                            <h3>A Brief History</h3>
                            <p class="mb-0">Was this just another little prank, courtesy of a mischievous Universe? Or is it possible to get good things coming your way with only mild desire — maybe even a calm indifference? Many inspirational writers, including Napoleon Hill, have assured us that a burning desire is one of the prerequisites of acquiring a fortune.</p>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6 ">
                            <p class="my-4 my-md-5 my-lg-4 mb-lg-0 my-xl-5 "> <span class="dropcap">W</span>e all carry a lot of baggage, thanks to our upbringing. The majority of people carry with them, an entire series of self-limiting beliefs that will absolutely stop, and hold them back from, success. Things like “I’m not good enough”, “I’m not smart enough”, “I’m not lucky enough”, and the worst, “I’m not worthy” are but a few of the self-limiting beliefs I have encountered. We carry them with us like rocks in a knapsack, and then use them to sabotage our success. So, how twisted is that?</p>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <p class="my-4 my-md-5 my-lg-4 my-xl-5 ">Along with your plans, you should consider developing an action orientation that will keep you motivated to move forward at all times. This requires a little self-discipline, but is a crucial component to achievement of any kind. Before starting any new activity, ask yourself if that activity will move you closer to your goals. If the answer is no, you may want to reconsider doing it at that time.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <blockquote class="blockquote d-flex">
                                <i class="fas fa-quote-left me-4 text-primary"></i>
                                <p>The best way is to develop and follow a plan. Start with your goals in mind and then work backwards to develop the plan. What steps are required to get you to the goals? Make the plan as detailed as possible. Try to visualize and then plan for, every possible setback. Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer to your Vision and Goals. If the plan doesn’t support the vision then change it!</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-5 mt-4 text-center">“Motivation will almost always beat mere talent.”</h2>
                            <img class="img-fluid border-radius mb-3" src="<?= base_url('public/user/assets/images/about/03.jpg'); ?>" alt="">
                            <div class="pb-0 p-4 p-md-5">
                                <p>Along with your plans, you should consider developing an action orientation that will keep you motivated to move forward at all times. This requires a little self-discipline, but is a crucial component to achievement of any kind. Before starting any new activity, ask yourself if that activity will move you closer to your goals. If the answer is no, you may want to reconsider doing it at that time.</p>
                                <p class="mb-0">We all carry a lot of baggage, thanks to our upbringing. The majority of people carry with them, an entire series of self-limiting beliefs that will absolutely stop, and hold them back from, success. Things like “I’m not good enough”, “I’m not smart enough”, “I’m not lucky enough”, and the worst, “I’m not worthy” are but a few of the self-limiting beliefs I have encountered. We carry them with us like rocks in a knapsack, and then use them to sabotage our success. So, how twisted is that?!?!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <?php $this->load->view("user/partials/_sidebar_content.php"); ?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <hr class="m-0">
                </div>
            </div>
        </div>
    </section>
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="mb-0"><i class="fa-solid fa-bolt-lightning"></i>Meet Our Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-lg-0 mb-4">
                    <div class="team">
                        <div class="team-bg"></div>
                        <div class="team-img">
                            <img class="img-fluid" src="<?= base_url('public/user/assets/images/team/01.jpg'); ?>" alt="">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-info">
                            <a href="#" class="team-name">Melvin Harvey</a>
                            <p class="mb-0">Team Leader</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-lg-0 mb-4">
                    <div class="team">
                        <div class="team-bg"></div>
                        <div class="team-img">
                            <img class="img-fluid" src="<?= base_url('public/user/assets/images/team/02.jpg'); ?>" alt="">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-info">
                            <a href="#" class="team-name">Kirk Singleton</a>
                            <p class="mb-0">Marketing manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-md-0 mb-4">
                    <div class="team">
                        <div class="team-bg"></div>
                        <div class="team-img">
                            <img class="img-fluid" src="<?= base_url('public/user/assets/images/team/03.jpg'); ?>" alt="">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-info">
                            <a href="#" class="team-name">Candice Mcdonald</a>
                            <p class="mb-0">Marketing Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-0">
                    <div class="team">
                        <div class="team-bg"></div>
                        <div class="team-img">
                            <img class="img-fluid" src="<?= base_url('public/user/assets/images/team/04.jpg'); ?>" alt="">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-info">
                            <a href="#" class="team-name">Sophia Glover</a>
                            <p class="mb-0">Sales and Marketing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view("user/partials/_footer"); ?>
    <?php $this->load->view("user/partials/_scroll"); ?>
    <?php $this->load->view("user/partials/_scripts"); ?>
</body>

</html>
