<?php
    include("function.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/specimen/Kumbh+Sans -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">  <!-- https://fontawesome.com/-->  
    <link rel="stylesheet" href="css/magnific-popup.css">       <!-- https://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/tooplate-vertex.css">
    <link rel="shortcut icon" href="https://i.pinimg.com/236x/c3/9a/c5/c39ac5ebf279969584e8e12b7622c556.jpg" type="image/x-icon">
<!--

Tooplate 2124 Vertex

https://www.tooplate.com/view/2124-vertex

-->

</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <!-- Site logo -->
    <!-- <h1 class="tm-brand" >
        <span class="tm-brand-text">NHLIKA ✌️</span>        
    </h1> -->

    <!-- Nav -->
    <nav class="tm-nav">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <ul id="tm-main-nav">
            <li class="nav-item">                                
                <a href="#intro" class="nav-link current">
                    Introduction
                </a>
            </li>
            <li class="nav-item">
                <a href="#services" class="nav-link">
                    Services
                </a>
            </li>
            <li class="nav-item">
                <a href="#gallery" class="nav-link">
                    Gallery
                </a>
            </li>
            <li class="nav-item">
                <a href="#about" class="nav-link">
                    About
                </a>
            </li>
            <li class="nav-item">
                <a href="#contact" class="nav-link">
                    Contact
                </a>
            </li>
        </ul>
    </nav>

    <!-- Content -->
    <main>
        <div id="intro" class="tm-section">
            <!-- Intro left -->
            <div class="tm-section-col tm-content">
                <?php 
                    GetIntro();
                ?>
                <!-- <div class="tm-media">
                    <img src="img/gallery/tn/img-11.jpg" alt="Intro image">
                    <div class="tm-media-body">
                        <h2><a href="#" class="tm-text-primary">Vertex is a Free CSS Template</a></h2>
                        <p class="tm-mb-20 tm-text-small">
                            This is a Responsive HTML5 Template brought to you by Tooplate for
                            100% free of charge. You can feel free to download, modify, and
                            use this layout for your websites.
                        </p>
                        <span class="tm-text-secondary tm-media-span tm-text-small">
                            Friday . 25 June 2021
                        </span>
                        <hr class="tm-hr tm-mr">
                    </div>
                </div>-->
                <div class="tm-text-right">
                    <a href="#services" class="tm-btn tm-btn-next">Next page</a>
                </div>   
                
            </div>
            
            <!-- Intro right -->
            <div class="tm-section-col tm-parallax" data-parallax="scroll" data-image-src="img/SLON.jpg"></div>
        </div> <!-- #intro -->

        <div id="services" class="tm-section">
            <!-- Services left -->
            <div class="tm-section-col tm-content">
                <h2 class="tm-text-primary">Our Services</h2>
                <p> All team members always have different  <strong>talents.</strong> We like to make funny videos, funny like never before in class, like to do weird things, like to cut videos to post on facebook.
                </p>
                <p>
                    Of course, we are IT students, so everything we do is always different from other students because we have to learn to code. We need fun and relaxation . Especially when we write code  error  every time the world seems black.
                </p>
                <div class="tm-text-right">
                    <a href="#gallery" class="tm-btn tm-btn-next">Next page</a>
                </div>                
                <hr class="tm-hr tm-ml tm-sm-mt-30">
                <div class="tm-row">
                    <div class="tm-col">
                        <div class="tm-text-center tm-my-50">
                            <i class="fas fa-street-view fa-3x"></i>
                        </div>                        
                        <p>
                            <!-- Fusce mi sapien, faucibus ut tortor a, tempus laoreet magna. Nulla felis ipsum, lobortis eu efficitur eget, malesuada id lacus. -->
                        </p>
                    </div>
                    <div class="tm-col">
                        <div class="tm-text-center tm-my-50">
                            <i class="fas fa-bullseye fa-3x"></i>
                        </div>                        
                        <p>
                            <!-- Nullam pellentesque accumsan hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. -->
                        </p>
                    </div>
                </div>                
            </div>
            
            <!-- Services right -->
            <div class="tm-section-col tm-parallax" data-parallax="scroll" data-image-src="img/3G.jpg"></div>
        </div> <!-- #services -->

        <div id="gallery" class="tm-content tm-content-small-top">
            <div class="tm-gallery-container">
                <h2 class="tm-text-primary tm-text-right  tm-gallery-header">Our Gallery</h2> 
                <div class="tm-gallery tm-mb-80">
                    <?php
                        GetGallery();
                    ?>
                    <!-- <figure class="effect-goliath tm-gallery-item">
                        <img src="img/gallery/tn/img-01.jpg"   alt="Image"/>
                        <figcaption>
                            <h2>Number One</h2>
                            <p>Best Template Site</p>
                            <a href="img/gallery/img-01.jpg">View more</a>
                        </figcaption>			
                    </figure> -->
                </div>
                <div class="tm-paging tm-mb-130"></div>
            </div>
        </div>

        <div id="about" class="tm-section">
            <!-- About left -->
            <div class="tm-section-col tm-content tm-content-small">
                <h2 class="tm-text-primary">About Us</h2>
                <p>
                    We know each other in 2023, we study the first year together at the university.
                </p>
                <p>
                    They like to take funny pictures and then steal from each other and none of them are beautiful.
                </p>
                <hr class="tm-hr tm-mb-50">                
                <p class="tm-mb-50">
                    It is a good time to meet new people who like to play a lot and take away from each other.​​ On the other hand, all meetings are always broken, it is normal, but we should keep all this time valuable when we know people who understand us.
                </p>
                <div class="tm-text-right tm-mb-130">
                    <a href="#contact" class="tm-btn tm-btn-next">Contact Us</a>
                </div>                
            </div>
            
            <!-- About right -->
            <div class="tm-section-col tm-parallax" data-parallax="scroll" data-image-src="img/NNN.jpg"></div>
        </div> <!-- #about -->

        <div id="contact" class="tm-section">
            <!-- Contact left -->
            <div class="tm-section-col tm-content tm-content-small">
                <h2 class="tm-text-primary">Contact Us</h2>
                <p>
                    Express your interest here, just enter your name and email. 
                </p> 
                <form id="contact-form" action="" method="POST" class="tm-contact-form tm-mb-200">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control rounded-0" placeholder="Name" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <textarea rows="6" name="message" class="form-control rounded-0" placeholder="Message" required=></textarea>
                    </div>

                    <div class="form-group tm-text-right">
                        <button type="submit" name="btn-feedback" class="tm-btn">Send</button>
                    </div>
                </form>
                <footer class="tm-copyright tm-text-small">
                    LIKA IS ADMIN 🫶
                </footer>              
            </div>
            
            <!-- Contact right -->
            <div class="tm-section-col tm-parallax tm-relative" data-parallax="scroll" data-image-src="img/HYY.jpg">
                <!-- Map -->
                <div class="mapouter">
                    <div class="gmap-canvas">
                        <iframe width="100%" height="420" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Phnom+Penh,+Cambodia&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                    </div>                    
                </div>
            </div>
        </div> <!-- #contact -->
    </main>

    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });

        $(function(){
            
            /*************** Navigation *****************/

            const tmMainNav = $("#tm-main-nav");

            tmMainNav.singlePageNav({
                filter: ':not(.external)'
            });

            $('.navbar-toggler').click(function(e) {
                e.stopPropagation();
                tmMainNav.toggleClass('show');
            });

            $("html").click(function(e) {
                $("#tm-main-nav").removeClass("show");
            });

            /****************** Smooth Scrolling *****************/

            $(".tm-btn-next").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                        // window.location.hash = hash;
                    });
                }
            });

            $('.tm-brand-icon').on('click', function(event) {
                $('html, body').animate({
                        scrollTop: $('#intro').offset().top
                    }, 800);
            });

            /****************** Gallery ******************/

            const galleryItems = document.querySelector(".tm-gallery").children;
            const itemsPerPage = 10;
            const totalPages = Math.ceil(galleryItems.length / itemsPerPage);
            const pageAttribute = 'data-page';

            function setPagination(currentPage) {
                for(let i = 1; i <= totalPages; i++) {
                    var $pager = '';
                    
                    if(currentPage == i) {
                        $pager = $('<a href="javascript:void(0);" class="active tm-paging-link" '+pageAttribute+'="'+i+'"></a>');
                    } else {
                        $pager = $('<a href="javascript:void(0);" class="tm-paging-link" '+pageAttribute+'="'+i+'"></a>');
                    }

                    $pager.html(i);

                    $pager.click(function(){ 
                        $('.tm-paging-link').removeClass("active");
                        $(this).addClass('active');
                        var page = $(this).eq(0).attr(pageAttribute);
                        showItems(page);
                    });

                    $pager.appendTo($('.tm-paging'));
                }
            }

            function showItems(currentPage) {
                for(let i = 0; i < galleryItems.length; i++) {
                    galleryItems[i].classList.remove("show");
                    galleryItems[i].classList.add("hide");

                    if(i >= (currentPage * itemsPerPage) - itemsPerPage && i < currentPage * itemsPerPage) {
                        galleryItems[i].classList.remove("hide");
                        galleryItems[i].classList.add("show");
                    }
                }
            }

            setPagination(1);
            showItems(1);

            /****************** Magnific Popup ***********/

            $('.tm-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
</body>
</html>