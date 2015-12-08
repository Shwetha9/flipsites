<!DOCTYPE html>
<html lang="en">

<head>

    <title>FLIP Certification Programs</title>
   <?php include 'includes/header.php';?>

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet">
    <link href="css/program-home.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
        <!-- To change anything in navigation, please go to nav.php under includes-->
        <?php include 'includes/nav-2.php';?>
            <!-- Half Page Image Background Carousel Header -->
            <header id="myCarousel" class="carousel slide">
                <!-- Indicators -->

                <!-- Wrapper for Slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <!-- Set the first background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('img/slider/slider4.jpeg');"></div>
                                <div class="carousel-caption max-width-640">
                                    <h3 class="text-light"><span class="">30,000+</span> young professionals have taken FLIP programs.</h3>
                                    <p class="lead text-light hidden-xs">
                                        <span class="flip-light-green">100% say:</span> 
                                        "It helped us in our jobs"; <span class="flip-light-green">70% say:</span> 
                                        "It helped us in our job interviews"
                                    </p>
                                    <p class="lead text-light"> Get <span class="flip-light-green">India's MOST POWERFUL BFS</span> advantage on your CV.</p>
                                    <ul class="list-inline slider-cta-buttons">
                                        <li>
                                            <a href="#programs" class="btn btn-secondary">
                                                VIEW PROGRAMS <i class="fa fa-chevron-down"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#testimonials" class="btn btn-outline-white">
                                                READ TESTIMONIALS
                                            </a>
                                        </li>
                                    </ul>
                            </div>
                    </div>
                    <div class="item">
                        <!-- Set the second background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('img/slider/slider6.jpg');"></div>
                                <div class="carousel-caption max-width-640">
                                    <h3 class="text-light">“We prefer/give weightage to <br/>FLIP certified candidates”</h3>
                                    <p class="flip-light-green industry-associations"> AXIS BANK | KOTAK MAHINDRA BANK |  HDFC BANK | THINKSOFT | IIFL | DHANALAXMI BANK | AXIS ASSET MANAGEMENT </p>
                                     <ul class="list-inline slider-cta-buttons">
                                        <li><a href="#programs" class="btn btn-secondary">VIEW PROGRAMS <i class="fa fa-chevron-down"></i></a>
                                        </li>
                                        <li>
                                            <a href="#testimonials" class="btn btn-outline-white">READ TESTIMONIALS</a>
                                        </li>
                                    </ul>
                                </div> 
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </header>

            <!-- Page Content To change anything in programs, please go to program.php under includes-->
                <?php include 'includes/sort-programs.php';?> 
                <?php include 'includes/programs.php';?> 
            <!-- /.PAGE CONTENT -->
                <?php include 'includes/testimonials.php';?>
                <?php include 'includes/footer.php';?> 
                <?php include 'includes/scripts.php';?> 
    <script>
    $('.carousel').carousel({
        interval: 8000 //changes the speed
    })
    </script>


</body>

</html>
