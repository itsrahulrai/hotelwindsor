<style>
    .glo-facility {
        padding: 50px 30px;
        text-align: center;
        box-shadow: 0 16px 32px 0 rgba(0, 0, 0, .04);
        border: 1px solid #f34c18;
        transition: .3s;
        background: #ffffff;
    }
</style>
<!-- header ends here -->
<main>
    <section class="page-title-area" data-background="assets/images/header8.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="page-title-wrapper">
                        <h1 class="page-title mb-10">&nbsp;</h1>
                    </div>
                    <div class="breadcrumb-menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                            <ul class="trail-items">
                                <li class="trail-item trail-begin"><span><a href="./">home</a></span></li>
                                <li class="trail-item trail-end"><span>Book Now</span></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="glo-booking-area pt-50 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="intro-title-wrapper mb-10">
                        <div class="intro-subtitle" data-reveal>
                            <span>Stay with us</span>
                        </div>
                        <div class="intro-title mb-30" data-reveal>
                            <h2>Book Your Room</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2nd row start -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="glo-booking-wrapper mb-30" data-reveal="left">
                        <form action="<?= base_url('book-now') ?>" method="post" enctype="multipart/form-data" name="BookNowForm" onsubmit="return validateBooknowForm()">
                            <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">

                            <div class="glo-booking-form">
                                <div class="glo-appointment-input mb-15">
                                    <input type="text" id="fname" name="fname" value="<?= set_value("fname") ?>" placeholder="First Name">
                                    <div id="fnameErr" class="float-lg-start"></div>
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="glo-appointment-input mb-15">
                                    <input type="text" id="lname" name="lname" value="<?= set_value("lname") ?>" placeholder="Last Name">
                                    <div id="lnameErr" class="float-lg-start"></div>
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="glo-appointment-input mb-15">
                                    <input type="email" id="email" name="email" value="<?= set_value("email") ?>" placeholder="Email Address">
                                    <div id="emailErr" class="float-lg-start text-nowrap"></div>
                                    <?php echo form_error('email', '<div class="text-danger"><small>', '</small></div>'); ?>
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="glo-appointment-input mb-15">
                                    <input type="phone" id="phone" name="phone" value="<?= set_value("phone") ?>" placeholder="Phone Number">
                                    <div id="phoneErr" class="float-lg-start text-nowrap"></div>
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="glo-reservation-select p-relative mb-25">
                                    <i class="fas fa-user"></i>
                                    <select name="adults" id="adults" class="adults" name="glo-booking-select" id="glo-booking-select">
                                        <option value="">Adults</option>
                                        <?php foreach ($adults as $adult) : ?>
                                            <option value="<?= $adult['id']; ?>" <?= set_select('adults_no', $adult['id'], ($adult['id'] == $this->input->post('adults') ? TRUE : FALSE)); ?>><?= $adult['adults_no']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div id="adultsErr" class="float-lg-start text-nowrap mb-3"></div>
                                </div>
                                <div class="glo-reservation-select p-relative mb-25">
                                    <i class="fas fa-child"></i>
                                    <select name="childrens" id="childrens" class="childrens" name="glo-booking-select" id="glo-booking-select-2">
                                        <option value="">Children</option>
                                        <?php foreach ($childrens as $children) : ?>
                                            <option value="<?= $children['id']; ?>" <?= set_select('children_no', $children['id'], ($children['id'] == $this->input->post('childrens') ? TRUE : FALSE)); ?>><?= $children['children_no']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div id="childrensErr" class="float-lg-start text-nowrap"></div>
                                </div>
                                <div class="glo-reservation-select p-relative mb-25">
                                    <i class="fas fa-building"></i>
                                    <select name="numbersofroom" id="numbersofroom" class="numbersofroom" name="glo-booking-select" id="glo-booking-select-3">
                                        <option value="" selected>Select No of Room</option>
                                        <?php foreach ($noofrooms as $roomno) : ?>
                                            <option value="<?= $roomno['id']; ?>" <?= set_select('room_no', $roomno['id'], ($roomno['id'] == $this->input->post('numbersofroom') ? TRUE : FALSE)); ?>><?= $roomno['room_no']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div id="roomsnoErr" class="float-lg-start text-nowrap"></div>
                                </div>
                                <div class="glo-reservation-select p-relative mb-25">
                                    <i class="fas fa-building"></i>
                                    <select name="rooms" id="rooms" class="rooms" name="glo-booking-select" id="glo-booking-select-3">
                                        <option value="" selected>Select Room </option>
                                        <?php foreach ($rooms as $room) : ?>
                                            <option value="<?= $room['id']; ?>" <?= set_select('rooms', $room['id'], ($room['id'] == $this->input->post('rooms') ? TRUE : FALSE)); ?>><?= $room['room_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div id="roomsErr" class="float-lg-start text-nowrap"></div>
                                </div>
                                <div class="glo-appointment-input">
                                    <div class="p-relative mb-15">
                                        <input type="text" id="checkin_date" name="checkin_date" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" value="<?= set_value("checkin_date") ?>" placeholder="Check In" onfocus="(this.type='date')" onblur="(this.type='text')">
                                        <div id="checkinErr" class="float-lg-start text-nowrap"></div>
                                        <i class="fas fa-calendar"></i>
                                    </div>
                                </div>
                                <div class="glo-appointment-input">
                                    <div class="p-relative  mb-15">
                                        <input type="text" id="checkout_date" name="checkout_date" value="<?= set_value("checkout_date") ?>" placeholder="Check Out" onfocus="(this.type='date')" onblur="(this.type='text')">
                                        <div id="checkoutErr" class="float-lg-start text-nowrap"></div>
                                        <i class="fas fa-calendar"></i>
                                    </div>
                                </div>
                                <div class="glo-appointment-input message mb-15">
                                    <textarea name="message" id="message" placeholder="Special Requirements"><?= set_value("message") ?></textarea>
                                    <div id="messageErr" class="float-lg-start text-nowrap"></div>
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="glo-booking-btn">
                                    <!-- <a href="#" class="glo-btn-anim"><span>Submit</span></a> -->
                                    <button type="submit" name="submit" class="glo-btn-anim"><span>Submit</span></button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="glo-booking-support mb-45" data-reveal="right">
                        <h3 class="glo-booking-title">Booking Details</h3>
                        <p class="glo-booking-desc mb-30">Book last minute deal with Hotel Windsor Hotel & Suites website and avail special discount of 10% on Best Available Rate that includes Room, WI-FI</p>
                        <div class="glo-booking-btn">
                            <a href="contact.php" class="glo-btn-anim"><span>Online Support</span></a>
                        </div>
                    </div>
                    <div class="glo-booking-support mb-30" data-reveal="right">
                        <h3 class="glo-booking-title">Need Any Help</h3>
                        <p class="glo-booking-desc">
                            If you need any help to book your room. Our support team is ready for you 24/7 days.
                        </p>
                        <div class="glo-booking-call">
                            <span class="glo-booking-call-title">Call Us:</span>
                            <a href="tel:9934623620"> 9934623620</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area ends here -->
</main>
<!-- footer area starts here -->