<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Админ</a>
            </div>

           
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                   
                    <li><a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Акыркы жанылыктар</a> </li>
                    <li><a href="news.php"><i class="fa fa-desktop "></i>Акыркы изилдөөлөрү</span></a> </li>
                    <li><a href="books.php"><i class="fa fa-yelp "></i>Китептер</span></a></li>
                    <li><a href="avto.php"><i class="fa fa-flash "></i>Автобиография</a></li>
                    <li><a href="gallery.php"><i class="fa fa-anchor "></i>Сүрөттөр</a></li> 
                    <li> <a href="contact.php"><i class="fa fa-bug "></i>Байланыш</a> </li>
                    <li> <a href="login.php"><i class="fa fa-sign-in "></i>Login Page</a></li> 
                   
                     
                   
                </ul>

            </div>

        </nav>
             
                  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Gallery Example</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div id="port-folio">
                      <div class="row " >
                          <ul id="filters" >
						<li><span class="filter active" data-filter="landscape nature awesome">All </span></li>
						<li><span class="filter active">/</span></li>
						<li><span class="filter" data-filter="landscape">Landscape</span></li>
						<li><span class="filter">/</span></li>
						<li><span class="filter" data-filter="nature">Nature</span></li>
						<li><span class="filter">/</span></li>
						<li><span class="filter" data-filter="awesome">Awesome</span></li>
					</ul>
                <div class="col-md-4 ">

                    <div class="portfolio-item awesome mix_all" data-cat="awesome" >


                        <img src="assets/img/portfolio/g.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info " title="Image Title Here" href="assets/img/portfolio/g.jpg"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div class="portfolio-item landscape mix_all" data-cat="landscape" >


                        <img src="assets/img/portfolio/b.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/b.jpg"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div class="portfolio-item nature mix_all" data-cat="nature" >


                        <img src="assets/img/portfolio/c.png" class="img-responsive " alt="" />
                        <div class="overlay">
                          <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/c.png"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row " style="padding-top: 50px;">
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature mix_all" data-cat="nature" >


                        <img src="assets/img/portfolio/d.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                           <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info " title="Image Title Here" href="assets/img/portfolio/d.jpg"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature mix_all" data-cat="nature" >


                        <img src="assets/img/portfolio/e.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/e.jpg"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature mix_all" data-cat="nature" >


                        <img src="assets/img/portfolio/h.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                          <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/h.jpg"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>

            </div>
                    <div class="row "  style="padding-top: 50px;" >
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature mix_all" data-cat="nature" >


                        <img src="assets/img/portfolio/g.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview  btn btn-info" title="Image Title Here" href="assets/img/portfolio/g.jpg"> <i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div  class="portfolio-item awesome mix_all" data-cat="awesome" >


                        <img src="assets/img/portfolio/b.jpg" class="img-responsive " alt="" />
                        <div class="overlay">
                            <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/b.jpg"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">

                    <div  class="portfolio-item nature landscape mix_all" data-cat="nature landscape" >


                        <img src="assets/img/portfolio/c.png" class="img-responsive " alt="" />
                        <div class="overlay">
                          <p>
                                <span>
                                Image Orinagal Size: 750x500
                                </span>
                               
                                PROJECT TITLE HERE
                            </p>
                            <a class="preview btn btn-info" title="Image Title Here" href="assets/img/portfolio/c.png"><i class="fa fa-plus fa-2x"></i></a>

                        </div>
                    </div>
                </div>

            </div>
                </div>
               

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
     <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
     <!-- CUSTOM Gallery Call SCRIPTS -->
    <script src="assets/js/galleryCustom.js"></script>
</body>
</html>
