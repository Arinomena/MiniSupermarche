
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Elate &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
  <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
  <meta name="author" content="FREEHTML5.CO" />

  <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FREEHTML5.CO
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
   -->

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="<?php echo css_loader('animate'); ?>">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php echo css_loader('icomoon'); ?>">
  <!-- Simple Line Icons -->
  <link rel="stylesheet" href="<?php echo css_loader('simple-line-icons'); ?>">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="<?php echo css_loader('magnific-popup'); ?>">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?php echo css_loader('bootstrap'); ?>">

  
  <link rel="stylesheet" href="<?php echo css_loader('style'); ?>">

  <!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
 
  <!-- End demo purposes only -->


  <style>
  /* For demo purpose only */
  
  /* For Demo Purposes Only ( You can delete this anytime :-) */
  #colour-variations {
    padding: 10px;
    -webkit-transition: 0.5s;
      -o-transition: 0.5s;
      transition: 0.5s;
    width: 140px;
    position: fixed;
    left: 0;
    top: 100px;
    z-index: 999999;
    background: #fff;
    /*border-radius: 4px;*/
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    -webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
    -moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
    -ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
    box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
  }
  #colour-variations.sleep {
    margin-left: -140px;
  }
  #colour-variations h3 {
    text-align: center;;
    font-size: 11px;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #777;
    margin: 0 0 10px 0;
    padding: 0;;
  }
  #colour-variations ul,
  #colour-variations ul li {
    padding: 0;
    margin: 0;
  }
  #colour-variations li {
    list-style: none;
    display: block;
    margin-bottom: 5px!important;
    float: left;
    width: 100%;
  }
  #colour-variations li a {
    width: 100%;
    position: relative;
    display: block;
    overflow: hidden;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
    -webkit-transition: 0.4s;
    -o-transition: 0.4s;
    transition: 0.4s;
  }
  #colour-variations li a:hover {
      opacity: .9;
  }
  #colour-variations li a > span {
    width: 33.33%;
    height: 20px;
    float: left;
    display: -moz-inline-stack;
    display: inline-block;
    zoom: 1;
    *display: inline;
  }
  

  .option-toggle {
    position: absolute;
    right: 0;
    top: 0;
    margin-top: 5px;
    margin-right: -30px;
    width: 30px;
    height: 30px;
    background: #f64662;
    text-align: center;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    color: #fff;
    cursor: pointer;
    -webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
    -moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
    -ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
    box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
  }
  .option-toggle i {
    top: 2px;
    position: relative;
  }
  .option-toggle:hover, .option-toggle:focus, .option-toggle:active {
    color:  #fff;
    text-decoration: none;
    outline: none;
  }
  </style>
  <!-- End demo purposes only -->


  <!-- Modernizr JS -->
 
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
  <header role="banner" id="fh5co-header">
      <div class="container">
        <!-- <div class="row"> -->
          <nav class="navbar navbar-default">
            <div class="navbar-header">
              <!-- Mobile Toggle Menu Button -->
          <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
             <a class="navbar-brand" href="index.html">Mini Market</a> 
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li ><a href="<?php echo site_url('Home/index') ;?>"><span>Acceuil</span></a></li>
                <li ><a href="<?php echo site_url('ControlProduit/index') ;?>"><span>Produit</span></a></li>
                <li ><a href="<?php echo site_url('ControlCategorie/index') ;?>"><span>Categories</span></a></li>
                <li ><a href="<?php echo site_url('ControlUtilisateur/index') ;?>"><span>Admin</span></a></li>
                <li ><a href="#"><span>Quitter</span></a></li>
              </ul>
            </div>
          </nav>
        <!-- </div> -->
      </div>
  </header>

 
 
  

   <section id="fh5co-work" data-section="produits">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-heading text-center">
          <h2 class="to-animate">Produits</h2>
          <div class="row">
            <div class="col-md-8 col-md-offset-2 subtext to-animate">
              <h3>Des produits de qualit?? ?? prix comp??titif pour satisfaire notre bien aim?? clientelle et leur donner joie et bonheur tout au long de la journ??e</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-bottom-padded-sm">
        
      <?php for ($i=0; $i < count($liste_produit) ; $i++) { ?>
        <div class="col-md-4 col-sm-6 col-xxs-12">
          <div class="fh5co-project-item  to-animate">
            <img src="../assets/images/<?php echo $liste_produit[$i]['pathImage']; ?>" alt="Image" class="img-responsive" style="height:150px ;width:250px;">
            <div class="fh5co-text">
            <h2><?php echo $liste_produit[$i]['nomProduit']; ?></h2>
            <span><?php echo $liste_produit[$i]['prixUnitaire']; ?> Ariary</span>

            <div style="float: right;">
            
                <input type="number" name="quantite" min="0" max="1000" style="width: 50px; color: black; ">
                <a href="../ControlProduit/insertAchat?nomP=<?php echo $liste_produit[$i]['nomProduit'];?> "><button class="btn btn-primary" >Acheter</button></a>
         
            </div>

            </div>
          </div>
        </div>
        <?php } ?>
        
      </div>
    </div>
  </section>
    

  
  
  

  
  
  <section id="fh5co-contact" data-section="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12 section-heading text-center">
          <h2 class="to-animate">Get In Touch</h2>
          <div class="row">
            <div class="col-md-8 col-md-offset-2 subtext to-animate">
              <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-bottom-padded-md">
        <div class="col-md-6 to-animate">
          <h3>Contact Info</h3>
          <ul class="fh5co-contact-info">
            <li class="fh5co-contact-address ">
              <i class="icon-home"></i>
              5555 Love Paradise 56 New Clity 5655, <br>Excel Tower United Kingdom
            </li>
            <li><i class="icon-phone"></i> (123) 465-6789</li>
            <li><i class="icon-envelope"></i>info@freehtml5.co</li>
            <li><i class="icon-globe"></i> <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></li>
          </ul>
        </div>

        <div class="col-md-6 to-animate">
          <h3>Contact Form</h3>
          <div class="form-group ">
            <label for="name" class="sr-only">Name</label>
            <input id="name" class="form-control" placeholder="Name" type="text">
          </div>
          <div class="form-group ">
            <label for="email" class="sr-only">Email</label>
            <input id="email" class="form-control" placeholder="Email" type="email">
          </div>
          <div class="form-group ">
            <label for="phone" class="sr-only">Phone</label>
            <input id="phone" class="form-control" placeholder="Phone" type="text">
          </div>
          <div class="form-group ">
            <label for="message" class="sr-only">Message</label>
            <textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group ">
            <input class="btn btn-primary btn-lg" value="Send Message" type="submit">
          </div>
          </div>
        </div>

      </div>
    </div>
    <div id="map" class="to-animate"></div>
  </section>
  
  
  
  
  <footer id="footer" role="contentinfo">
    <a href="#" class="gotop js-gotop"><i class="icon-arrow-up2"></i></a>
    <div class="container">
      <div class="">
        <div class="col-md-12 text-center">
          <p>&copy; Elate Free HTML5. All Rights Reserved. <br>Created by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Images: <a href="http://pexels.com/" target="_blank">Pexels</a>, <a href="http://plmd.me/" target="_blank">plmd.me</a></p>
          
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <ul class="social social-circle">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  
  
  <!-- jQuery -->
  <script src="<?php  echo js_loader('jquery.min') ;?>"></script>
  <!-- jQuery Easing -->
  <script src="<?php  echo js_loader('jquery.easing.1.3') ;?>"></script>
  <!-- Bootstrap -->
  <script src="<?php  echo js_loader('bootstrap.min') ;?>"></script>
  <!-- Waypoints -->
  <script src="<?php  echo js_loader('jquery.waypoints.min') ;?>"></script>
  <!-- Stellar Parallax -->
  <script src="<?php  echo js_loader('jquery.stellar.min') ;?>"></script>
  <!-- Counter -->
  <script src="<?php  echo js_loader('jquery.countTo') ;?>"></script>
  <!-- Magnific Popup -->
  <script src="<?php  echo js_loader('jquery.magnific-popup.min') ;?>"></script>
  <script src="<?php  echo js_loader('magnific-popup-options') ;?>"></script>
  <!-- Google Map -->
 

  <!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
  <script src="<?php  echo js_loader('jquery.style.switcher') ;?>"></script>
  <script>
    $(function(){
      $('#colour-variations ul').styleSwitcher({
        defaultThemeId: 'theme-switch',
        hasPreview: false,
        cookie: {
                expires: 30,
                isManagingLoad: true
            }
      }); 
      $('.option-toggle').click(function() {
        $('#colour-variations').toggleClass('sleep');
      });
    });
  </script>
  <!-- End demo purposes only -->

  <!-- Main JS (Do not remove) -->
  

  </body>
</html>

