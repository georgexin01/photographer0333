<?php include 'init_head.php'; ?>
<!-- Main -->
<div class="annie-page">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="annie-main">

        <!-- Gallery -->
        <div class="annie-gallery pb-5">
            <div class="container-fluid pb-5">
                <div class="row">
                    <div class="col-md-12 text-center"> <span class="heading-meta">Gallery</span>
                        <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">{{filterGalleryName()}}</h2>
                    </div>
                </div>
                <div class="row align-items-stretch annie-photos" id="annie-section-photos">
                    <div class="col-12">
                        <div class="row align-items-stretch load-photo">
                            <template v-for="(library, index) in filterLibraries(9)">
                                <div v-if="library.googleImageLink !== undefined && library.googleImageLink !== ''"
                                         class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <!-- Images -->
                                    <a :href="googleImageConvertToImage(library.googleImageLink)"
                                        data-fancybox="gallery" class="ratio">
                                        <img :src="googleImageConvertToImage(library.googleImageLink)" alt="Image"
                                            class="img-fluid">
                                    </a>
                                </div>
                                 <div v-else-if="library.youtubeLink !== undefined && library.youtubeLink !== ''"
                                     class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <!-- youtube -->
                                    <a :href="library.youtubeLink" data-fancybox="gallery" class="ratio">
                                        <img class="img-fluid" src="https://img.youtube.com/vi/rnbkfI34rtw/default.jpg"
                                            alt="YouTube Thumbnail">
                                        <p><span class="fab fa-youtube"></span></p>
                                    </a>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>

                <div class="row align-items-stretch mt-60" v-if="totalLibraries() > 9">
                    <div class="col-12">
                        <!-- add more -->
                        <div class="annie-more-wrapper txt-center animate-box" data-animate-effect="fadeInUp">
                            <a href="index.html#" class="annie-more-trigger flex"> <span
                                    class="plus flex-center">&nbsp;</span> </a>
                        </div>
                        <!-- show more -->
                        <div class="annie-show-more-container">
                            <div class="row align-items-stretch annie-photos" id="annie-section-photos">
                                <div v-for="(library, index) in filterLibraries(-9)"
                                    class="col-12 col-md-6 col-lg-4 animate-box" data-animate-effect="fadeInUp">
                                    <!-- Images -->
                                    <a v-if="library.googleImageLink !== undefined && library.googleImageLink !== ''"
                                        :href="googleImageConvertToImage(library.googleImageLink)"
                                        data-fancybox="gallery" class="ratio">
                                        <img :src="googleImageConvertToImage(library.googleImageLink)" alt="Image"
                                            class="img-fluid">
                                    </a>
                                    <!-- youtube -->
                                    <a v-else-if="library.youtubeLink !== undefined && library.youtubeLink !== ''"
                                        :href="library.youtubeLink" data-fancybox="gallery" class="ratio">
                                        <img class="img-fluid" src="https://img.youtube.com/vi/rnbkfI34rtw/default.jpg"
                                            alt="YouTube Thumbnail">
                                        <p><span class="fab fa-youtube"></span></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Gallery -->
                <!-- <div class="row">
                    <div class="col-md-12 text-center mt-60"> <span class="heading-meta">Portfolio</span>
                        <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">Video Gallery</h2>
                    </div>
                </div>
                <div class="row align-items-stretch annie-photos mb-60" id="annie-section-photos">
                    <div class="col-12">
                        <div class="row align-items-stretch">
                            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                <a data-fancybox="" href="https://www.youtube.com/watch?v=ybso7mzV2hY">
                                    <img class="img-fluid" src="/images/gallery/13.jpg">
                                    <p><span class="fab fa-youtube"></span></p>
                                </a>
                                <h6>Youtube Video (Popup)</h6>
                            </div>
                            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                <a data-fancybox="" data-ratio="2" href="https://vimeo.com/74295728">
                                    <img class="img-fluid" src="/images/gallery/14.jpg">
                                    <p><span class="fab fa-youtube"></span></p>
                                </a>
                                <h6>Vimeo Video (Popup)</h6>
                            </div>
                            <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                                <a data-fancybox="bigbuckbunny" href="https://duruthemes.com/demo/html/annie/video.mp4">
                                    <img class="img-fluid" src="/images/gallery/15.jpg">
                                    <p><span class="fab fa-youtube"></span></p>
                                </a>
                                <h6>Custom Video (Popup)</h6>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>

        <?php include 'footer.php'; ?>

    </div>



</div>
<?php include 'init_body.php'; ?>