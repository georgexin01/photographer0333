<a href="#" class="js-annie-nav-toggle annie-nav-toggle"><i></i></a>
<!-- Sidebar -->
<aside class="annie-aside">
    <!-- Logo -->
    <div class="annie-logo">
        <a href="/"><img src="/images/logo_gen.png" alt=""></a>
        <h1><a href="/"><?= $web_title; ?><span><?= $web_subtitle; ?></span></a></h1>
    </div>
    <!-- Menu -->
    <nav class="annie-main-menu">
        <ul>
            <li><a href='/'>Home</a></li>
            <li><a href='/about'>About</a></li>
            <li><a href='/services'>Services</a></li>
            <li class="annie-sub"><a href="#0">Gallery</a>
                <ul>
                    <li v-for="gallery in galleries"><a :href="'/gallery/'+gallery.url">{{gallery.name}}</a></li>
                </ul>
            </li>
            <li><a href='/contact'>Contact</a></li>
        </ul>
    </nav>
    <!-- Sidebar Footer -->
    <div class="annie-footer">
        <ul>
            <li><a href="https://www.facebook.com/profile.php?id=100090307274097" tab="test" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100095064726523" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.facebook.com/profile.php?id=61558993437547" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/genstudio27/?igsh=ZDFpcjYzaWlxNHY2&utm_source=qr" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
        <p><small>&copy; 2024 by Zeta Technology</small></p>
    </div>
</aside>