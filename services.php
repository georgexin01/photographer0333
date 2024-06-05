<?php include 'init_head.php'; ?>
    <!-- Main -->
    <div class="annie-page"> 
       
        <!-- Sidebar -->
		<?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <div class="annie-main">
            <!-- Services -->
            <div class="annie-service mb-60">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center"> <span class="heading-meta">What We Do</span>
                            <h2 class="annie-heading animate-box" data-animate-effect="fadeInUp">Services</h2> </div>
                    </div>
                    <div class="row">
                       <div v-for="(items, index) in services" class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                            <div class="annie-services">
                                <a> <img src="images/services/02.jpg" class="img-fluid" alt="">
                                    <div class="desc">
                                        <div class="con">
                                            <div class="annie-icon"> <i class="fa fa-camera"></i> </div>
                                            <h3>{{items.name}}</h3> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>

            <?php include 'footer.php'; ?>
            
        </div>
        
 </div>
<?php include 'init_body.php'; ?>