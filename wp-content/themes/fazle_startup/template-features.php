<?php /* Template Name: Features */ ?>
<?php include(dirname(__FILE__) . "/head-part.php"); ?>

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Features</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Features</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0"><?php echo get_theme_mod('wcu_title', __('We Are Here to Grow Your Business Exponentially', 'my_theme')); ?></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4><?php echo get_theme_mod('wcu_title_sub_1_left', __('Best In Industry', 'my_theme')); ?></h4>
                            <p class="mb-0"><?php echo get_theme_mod('wcu_title_sub_1_left_details', __('Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor Fazle', 'my_theme')); ?></p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4><?php echo get_theme_mod('wcu_title_sub_2_left', __('Award Winning', 'my_theme')); ?></h4>
                            <p class="mb-0"><?php echo get_theme_mod('wcu_title_sub_2_left_details', __('Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor Fazle', 'my_theme')); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="<?php echo esc_url(get_theme_mod('wcu_image', get_template_directory_uri() . "/img/feature.jpg")); ?>" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4><?php echo get_theme_mod('wcu_title_sub_2_left', __('Professional Staff', 'my_theme')); ?></h4>
                            <p class="mb-0"><?php echo get_theme_mod('wcu_title_sub_1_right_details', __('Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor Fazle', 'my_theme')); ?></p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4><?php echo get_theme_mod('wcu_title_sub_2_left', __('24/7 Support', 'my_theme')); ?></h4>
                            <p class="mb-0"><?php echo get_theme_mod('wcu_title_sub_2_right_details', __('Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor Fazle', 'my_theme')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->

    <?php include(dirname(__FILE__) . "/foot-part.php"); ?>