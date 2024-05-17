<?php include 'header.php'; ?>
<!-- Main -->
<div class="annie-page">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="annie-main">

        <!-- Gallery -->
        <div class="annie-gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center"> <span class="heading-meta">Gallery</span>
                        <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp"></h2>
                    </div>
                </div>
                <div class="row align-items-stretch annie-photos" id="annie-section-photos">
                    <div class="col-12">
                        <div class="row align-items-stretch">
                            <div v-for="(library, index) in filterByGalleryName(getGalleryUrl())" class="col-12 col-md-6 col-lg-4 animate-box"
                                data-animate-effect="fadeInUp">
                                <a :href="googleImageConvertToImage(library.googleImageLink)"
                                    class="d-block annie-photo-item" data-caption="Potrait Photo"
                                    data-fancybox="gallery"> <img
                                        :src="googleImageConvertToImage(library.googleImageLink)" alt="Image"
                                        class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-stretch mt-60">
                    <div class="col-12">
                        <!-- show more -->
                        <div class="annie-show-more-container">
                            <div class="row align-items-stretch annie-photos" id="annie-section-photos">
                                <div class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <a href="/images/gallery/13.jpg" class="d-block annie-photo-item"
                                        data-caption="Movie Photo" data-fancybox="gallery"> <img
                                            src="/images/gallery/13.jpg" alt="Image" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- add more -->
                        <div class="annie-more-wrapper txt-center animate-box" data-animate-effect="fadeInUp">
                            <a href="index.html#" class="annie-more-trigger flex"> <span
                                    class="plus flex-center">&nbsp;</span> </a>
                        </div>
                    </div>
                </div>
                <!-- Video Gallery -->
                <div class="row">
                    <div class="col-md-12 text-center mt-60"> <span class="heading-meta">Portfolio</span>
                        <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">Video Gallery</h2>
                    </div>
                </div>
                <div class="row align-items-stretch annie-photos mb-60" id="annie-section-photos">
                    <div class="col-12">
                        <div class="row align-items-stretch">
                            <!-- YouTube Popup -->
                            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                <a data-fancybox="" href="https://www.youtube.com/watch?v=ybso7mzV2hY">
                                    <img class="img-fluid" src="/images/gallery/13.jpg">
                                    <p><span class="fab fa-youtube"></span></p>
                                </a>
                                <h6>Youtube Video (Popup)</h6>
                            </div>
                            <!-- Vimeo Popup -->
                            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                <a data-fancybox="" data-ratio="2" href="https://vimeo.com/74295728">
                                    <img class="img-fluid" src="/images/gallery/14.jpg">
                                    <p><span class="fab fa-youtube"></span></p>
                                </a>
                                <h6>Vimeo Video (Popup)</h6>
                            </div>
                            <!-- Custom Video Popup -->
                            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                <a data-fancybox="bigbuckbunny" href="https://duruthemes.com/demo/html/annie/video.mp4">
                                    <img class="img-fluid" src="/images/gallery/15.jpg">
                                    <p><span class="fab fa-youtube"></span></p>
                                </a>
                                <h6>Custom Video (Popup)</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div id="annie-footer">
            <div class="annie-narrow-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Annie McCury <span>Photographer</span></h1>
                        <p class="annie-lead">&copy; 2024 Annie by DuruThemes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<?php include 'footer.php'; ?>