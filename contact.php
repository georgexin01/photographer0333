<?php include 'init_head.php'; ?>
<!-- Main -->
<div class="annie-page">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="annie-main">
        <!-- Contact -->
        <div class="annie-contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center"> <span class="heading-meta">Location</span>
                        <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">Contact Us</h2>
                    </div>
                </div>
                <!-- Map Section-->
                <div class="annie-map-section">
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                            <div class="no-spacing map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d79581.63188692564!2d-121.95484416802812!3d37.39602452866296!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fcc991213770f%3A0x31f12d638eaeca5d!2s350%20N%20First%20St%2C%20San%20Jose%2C%20CA%2095112%2C%20Amerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1677448038395!5m2!1str!2str"
                                    frameborder="0" class="google-maps" allowfullscreen="" aria-hidden="false"
                                    tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-30">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <h3 class="annie-contact-heading">Follow us on Social Media.</h3>
                    </div>
                    <!-- Contact Social -->
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <div class="social-icon">
                            <a href="https://www.facebook.com/profile.php?id=100090307274097" target="_blank">
                                <img src="images/logo/gen.png"> <span> Gen Studio </span>
                            </a>
                        </div>
                        <div class="social-icon">
                        <a href="https://www.facebook.com/profile.php?id=100095064726523" target="_blank">
                            <img src="images/logo/dlove.png"> <span> DLove Studio Production </span>
                        </a>
                        </div>
                        <div class="social-icon">
                        <a href="https://www.facebook.com/profile.php?id=61558993437547" target="_blank">
                            <img src="images/logo/vista.png"> <span> Vista Marketing </span>
                        </a>
                        </div>
                    </div>
                    <!-- Contact Social -->
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <div class="social-icon">
                            <a href="https://www.instagram.com/genstudio27/?igsh=ZDFpcjYzaWlxNHY2&utm_source=qr" target="_blank">
                                <img src="images/logo/instagram.png"> <span> Gen Studio 27 </span>
                            </a>
                        </div>
                        <div class="social-icon">
                            <a href="https://www.instagram.com/dlove.production/?igsh=MXU1cjZibjN0b3l1dQ%3D%3D&utm_source=qr" target="_blank">
                                <img src="images/logo/instagram.png"> <span> Dlove.Production </span>
                            </a>
                        </div>
                        
                        <div class="social-icon">
                        <a href="https://www.xiaohongshu.com/user/profile/64b012ed000000000b01794f?xhsshare=CopyLink&appuid=64b012ed000000000b01794f&apptime=1716177460" target="_blank">
                            <img src="images/logo/xiaohong.png"> <span>Gen Studio </span>
                        </a>
                        </div>
                        <div class="social-icon">
                        <a href="https://www.xiaohongshu.com/user/profile/636cab60000000001f01dcda?xhsshare=CopyLink&appuid=636cab60000000001f01dcda&apptime=1716177471" target="_blank">
                            <img src="images/logo/xiaohong.png"> <span>DLove Studio </span>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="row mb-60">
                    <!-- Contact Info -->
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <h3 class="annie-contact-heading">I’m available for booking.</h3>
                        <p>Stunning Portraits Capturing Your Unique Style Book a Session Today for Memories That Last a Lifetime.
                        </p>
                        <p><b>Phone:</b> <?= formatPhoneNumber($default_contact); ?></p>
                        <p><b>Email:</b> <?= $default_email; ?></p>
                        <p><b>Address:</b> <?= $default_address; ?></p>
                    </div>
                    <!-- Contact Form -->
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <h3 class="annie-contact-heading">Contact Form</h3>
                        <p>Interested to work with us?</p>
                        <form method="post" class="contact__form" @submit.prevent="submitForm">
                            <!-- Form elements -->
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input v-model="formData.name" name="name" type="text" placeholder="Your Name *"
                                        required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input v-model="formData.email" name="email" type="email" placeholder="Your Email *"
                                        required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input v-model="formData.contact" name="contact" type="text" placeholder="Your Number *"
                                        required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input v-model="formData.subject" name="subject" type="text" placeholder="Subject *"
                                        required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <textarea v-model="formData.message" name="message" id="message" cols="30" rows="4"
                                        placeholder="Message *" required></textarea>
                                </div>
                                <!-- if -->
                                <div v-if="!isLoading" class="col-md-12">
                                    <input name="submit" type="submit" value="Send Message">
                                </div>
                                <!-- else -->
                                <div v-else class="col-md-12">
                                    <input name="submit" type="submit" value="Loading">
                                </div>
                            </div>
                            <!-- Form message -->
                            <div v-if="successfull" class="row">
                                <div class="col-12">
                                    <div class="alert alert-success contact__msg" style="margin-top: 15px" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php include 'footer.php'; ?>
    </div>

</div>
<?php include 'init_body.php'; ?>