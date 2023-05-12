<!-- header ends here -->
<main>
    <section class="page-title-area" data-background="<?= base_url()  ?>assets/images/header51.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-wrapper">
                        <h1 class="page-title mb-10">Feedback</h1>
                    </div>
                    <div class="breadcrumb-menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                            <ul class="trail-items">
                                <li class="trail-item trail-begin"><span><a href="./">home</a></span></li>
                                <li class="trail-item trail-end"><span>Feedback</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pt-50 pb-70 glo-contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="glo-contact-form mb-50" data-reveal>
                        <form action="<?= base_url('feedback') ?>" method="post" enctype="multipart/form-data" name="FeedbackForm" onsubmit="return validateFeedbackForm()">
                            <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <input type="text" id="fname" name="fname" value="<?= set_value("fname") ?>" placeholder="First Name">
                                    <div id="fnameErr" class="float-lg-start"></div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <input type="text" id="lname" name="lname" value="<?= set_value("lname") ?>" placeholder="Last Name">
                                    <div id="lnameErr" class="float-lg-start"></div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <input type="phone" id="phone" name="phone" value="<?= set_value("phone") ?>" placeholder="Phone Number">
                                    <div id="phoneErr" class="float-lg-start text-nowrap"></div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <input type="email" id="email" name="email" value="<?= set_value("email") ?>" placeholder="Your Email">
                                    <?php echo form_error('email', '<div class="text-danger"><small>', '</small></div>'); ?>
                                    <div id="emailErr" class="float-lg-start text-nowrap"></div>
                                </div>

                                <div class="col-xl-12">
                                    <textarea name="message" id="message" placeholder="Write a Message"><?= set_value("message") ?></textarea>
                                    <div id="messageErr" class="float-lg-start text-nowrap"></div>
                                </div>
                                <div class="col-xl-12 text-center">
                                    <button type="submit" name="submit" class="glo-btn-anim"><span>Submit</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area ends here -->
</main>