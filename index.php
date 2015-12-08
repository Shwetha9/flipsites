<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'includes/header.php';?>
<link rel="stylesheet" href="css/home.css" type="text/css">
<link rel="stylesheet" href="css/program-home.css" type="text/css">

<body id="page-top">
<?php include 'includes/nav.php';?>

    <header id="main-header">
        <div class="overlay-default">
            <div class="header-content">
                <div class="header-content-inner">
                    <!--<h4 class="text-light">Empower your future</h4>
                    <hr class="sm"> -->
                    <h1 class=""> POWER YOUR CAREER WITH FLIP CERTIFICATIONS</h1>
                
                        <p class="lead"> 
                             The <span class="text-uppercase">only</span> non regulatory certifications that recruiters recommend
                        </p>
                        <hr class="sm">
                        <br />
                        <h4> 
                            <a href="#programs" class="h4">EXPLORE FLIP PROGRAMS <i class="fa fa-angle-double-down"></i></a>  
                        </h4>
                    <br />
                    <div id="search-container" class="hidden-xs">
                        <form method="post" action="example.php">
                            <div class="input-group">
                                <input class="search-flip form-control" placeholder="Search from FLIP's 200+ programs" id="blog-search" name="keywords" value="" maxlength="150" type="text" autocomplete="off">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary search-btn-primary" title="Search" name="search"> <i class="fa fa-search">
                                    </i></button>
                                </span>
                            </div>
                        </form>
                    </div>

                    <div class="popular-programs-quick-links hidden-xs">
                        <ul class="list-inline">
                            <li>POPULAR PROGRAMS: </li>
                            <li><a href="#">FLIP NCFM programs&nbsp;</a></li>
                            <li><a href="#">Capital Markets&nbsp;</a></li>
                            <li><a href="#">Retail Banking&nbsp;</a></li>
                            <li><a href="#">Risk Management&nbsp;</a></li>
                            <li><a href="#">Wealth Management</a></li>
                        </ul>
                   </div>
                </div>
            </div>


            <div class="marketing-bottom-absolute hidden-sm hidden-xs">
                <div class="container-fluid">
                    <div class="row">
                        <a href="whyflip/#powerPlacement">
                            <div class="col-sm-4 marketing-bottom-bg text-light">
                                <i class="fa fa-bolt"></i>
                                <br />
                                POWER YOUR PLACEMENT
                            </div>
                        </a>
                        <a href="whyflip/#industryAssociations">
                            <div class="col-sm-4 marketing-bottom-bg text-light">
                                <i class="fa fa-thumbs-up"></i>
                                <br />
                                INDUSTRY ASSOCIATIONS
                            </div>
                        </a>
                        <a href="whyflip/#enhanceCareer">
                            <div class="col-sm-4 marketing-bottom-bg text-light">
                                <i class="fa fa-list-alt"></i>
                                <br />
                                ENHANCE YOUR CAREER
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </header> 


    <?php include 'includes/why-flip.php';?>
    <section id="popular-programs">
        <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h4 class="text-center text-light">POPULAR PROGRAMS</h4>
                        <hr class="sm">
                    </div>
                      <?php include 'includes/programs2.php';?>
                </div>
            </div>
    </section>

    <?php include 'includes/testimonials.php';?>
    <?php include 'includes/footer.php';?>
    <?php include 'includes/scripts.php';?>


</body>

</html>
