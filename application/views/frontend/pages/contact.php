<!-- header ends here -->
<main>
    <section class="page-title-area" data-background="assets/images/header51.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-wrapper">
                        <h1 class="page-title mb-10">Contact</h1>
                    </div>
                    <div class="breadcrumb-menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                            <ul class="trail-items">
                                <li class="trail-item trail-begin"><span><a href="./">home</a></span></li>
                                <li class="trail-item trail-end"><span>Contact</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="pt-120 pb-70 glo-contact-area">
        <div class="container">
            <div class="row ">
                <div class="col-xl-5 col-lg-5">
                    <div class="glo-contact-infobox mb-50">
                        <div class="intro-title-wrapper mb-50" data-reveal>
                            <div class="intro-subtitle">
                                <span>Contact With Us</span>
                            </div>
                            <div class="intro-title">
                                <h2>To Know More <br> About Our Hotel</h2>
                            </div>
                        </div>
                        <div class="glo-contact-infobox" data-reveal>
                            <div class="glo-contact-list">
                                <div class="glo-contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="glo-contact-text">
                                    <span class="glo-contact-label">Hotel Location</span>
                                    <h4 class="glo-contact-title"><a href="#">Exhibition Road, Patna</a></h4>
                                </div>
                            </div>

                            <div class="glo-contact-list">
                                <div class="glo-contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="glo-contact-text">
                                    <span class="glo-contact-label">Phone Number</span>
                                    <h4 class="glo-contact-title"><a href="tel:612 220 3250">612 220 3250 - 58</a></h4>
                                </div>
                            </div>
                            <div class="glo-contact-list">
                                <div class="glo-contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="glo-contact-text">
                                    <span class="glo-contact-label">General Manager</span>
                                    <h4 class="glo-contact-title"><a href="tel:+919934309308">+91 9934309308</a></h4>
                                </div>
                            </div>
                            <div class="glo-contact-list">
                                <div class="glo-contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="glo-contact-text">
                                    <span class="glo-contact-label">Reception </span>
                                    <h4 class="glo-contact-title"><a href="tel:+919934623620">+91 9934623620</a></h4>
                                </div>
                            </div>

                            <div class="glo-contact-list">
                                <div class="glo-contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="glo-contact-text">
                                    <span class="glo-contact-label">Email Address</span>
                                    <h4 class="glo-contact-title"><a href="mailto:info@hotelwindsorpatna.com"><span class="__cf_email__" data-cfemail="f990979f96b99b9d9c8f8ad491968d9c95d79a9694">info@hotelwindsorpatna.com</span></a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="glo-contact-form mb-50" data-reveal>
                        <form action="<?= base_url('contact') ?>" method="post" enctype="multipart/form-data" name="contactForm" onsubmit="return validateContactForm()">
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
                                <div class="col-lg-12">
                                    <div class="contact__select mb-20">
                                        <select name="rooms" id="rooms" class="rooms" name="glo-booking-select" id="glo-booking-select-3">
                                            <option value="" selected>Select Room</option>
                                            <?php foreach ($rooms as $room) : ?>
                                                <option value="<?= $room['id']; ?>" <?= set_select('rooms', $room['id'], ($room['id'] == $this->input->post('rooms') ? TRUE : FALSE)); ?>><?= $room['room_name']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div id="roomsErr" class="float-lg-start text-nowrap"></div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div id="messageErr" class="float-lg-start text-nowrap"></div>
                                    <textarea name="message" id="message" placeholder="Send Message"><?= set_value("message") ?></textarea>
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