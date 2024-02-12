<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="theme-color" content="#1976d2">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="keywords" content="AngularJS, javascript frameworks, Google Material Design, flat design, javascript inheritance, prototypal inheritance, prototype chaining javascript, javascript prototype property, prototypes javascript, function prototype javascript, prototypes in javascript, javascript create prototype, what is javascript prototype, prototype function javascript, javascript set prototype, create prototype javascript, javascript using prototype, what is prototype javascript, use of prototypes in javascript, how to use prototypes in javascript">
  <meta name="description" content="Welcome to my Front End Development Portfolio Site Blog. Here I like to discuss Material Design and Flat Design, Javascript, AngularJS, jQuery, and other web technologies.">
  <meta name="author" content="Danish Mehraj">
  <title>Danish Mehraj | Blog</title>

  <!-- CSS  -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:400italic,700italic,700,400' rel='stylesheet' type='text/css'>
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500' rel='stylesheet' type='text/css'> 
    <link rel="stylesheet" href="css/fab_style.css">
    <!-- <link rel="icon" type="image/png" href="images/favicon.png"> -->
	<link rel="icon" sizes="16x16 32x32 48x48 64x64" href="images/favicon.ico">
    <link href="css/featherlight-min.css" type="text/css" rel="stylesheet" title="Featherlight Styles" />
	<!-- <link href="https://cdn.rawgit.com/noelboss/featherlight/1.2.2/release/featherlight.min.css" type="text/css" rel="stylesheet" title="Featherlight Styles" /> -->
   <!-- <script type="text/javascript" src="js/latest-tweet.js"></script> -->
   
  <?php
  require('blog/wp-blog-header.php');
  ?>
</head>
<body>
  <nav class="default-primary-color z-depth-5" role="navigation">
        <div class="container">
			<div class="nav-wrapper"><a id="logo-container" href="#" class="brand-logo"><img src="images/logo.png" class="logo" alt="Logo" /></a>
				<ul class="right">
					<li><a href="../index.html" title="Start from here!"><i class="home"></i></a></li>
                    <li><a href="../portfolio.html" title="Any doubt about my education or work? Clear here!"><i class="portfolio"></i></a></li>
                    <li><a href="../apps.html" title="Have a look on my app development"><i class="apps"></i></a></li>
                    <li><a href="../photogallery/index.html" title="Scroll through my photo gallery"><i class="gallery"></i></a></li>
                    <li><a href="../iwrite.php" title="What I write?"><i class="blog"></i></a></li>
					<li><a href="../about.html#resume" title="Want to see my resume/cv?"><i class="resume"></i></a></li>
                    <li><a href="../about.html" title="Know me more"><i class="about"></i></a></li>
                    <li><a href="../contact.html" title="Let's hang-out"><i class="contact"></i></a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li class="title"><span class="sidenav-header helper"><img src="../images/photo.png" class="sidebar-logo" alt="Sidebar Logo" />Danish Mehraj</span></li>
                    <li class="waves-effect waves-dark"><a href="/"><img src="../images/home.png" class="sidebar-logo" alt="Home logo" />Home</a></li>
                    <li class="waves-effect waves-dark"><a href="../portfolio.html"><img src="../images/portfolio.png" class="sidebar-logo" alt="Portfolio logo" />Portfolio</a></li>
                    <li class="waves-effect waves-dark"><a href="../apps.html"><img src="../images/apps.png" class="sidebar-logo" alt="Apps logo" />Apps</a></li>
                    <li class="waves-effect waves-dark"><a href="../photogallery/index.html"><img src="../images/gallery.png" class="sidebar-logo" alt="Apps logo" />Gallery</a></li>
                    <li class="waves-effect waves-dark"><a href="../iwrite.php"><img src="../images/blog.png" class="sidebar-logo" alt="Blog logo" />Blog</a></li>
					<li class="waves-effect waves-dark"><a href="../about.html#resume"><img src="../images/resume.png" class="sidebar-logo" alt="Resume logo" />Resume</a></li>
                    <li class="waves-effect waves-dark"><a href="../about.html"><img src="../images/about.png" class="sidebar-logo" alt="About logo" />About</a></li>
                    <li class="waves-effect waves-dark"><a href="../contact.html"><img src="../images/contact.png" class="sidebar-logo" alt="Contact logo" />Contact</a></li>
				</ul>

				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
			</div>    
      </div>
    </nav>
  <div id="sub-header" class="dark-primary-color z-depth-1">
    <img src="images/logo.png" class="logo-large" alt="logo large" />
      <h1 class="header center white-text">Recent Blogs</h1>
      <div class="row center">
        <a href="/blog/" id="download-button" class="btn-large waves-effect waves-light accent-color"><img src="images/blog.png" class="sidebar-logo" alt="Wordpress Blog logo" />WordPress Blog </a><br><br>
      </div>
    </div>


  <div class="container">
    <div class="section" style="padding-top: 0;">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
          <div class="center">
          <div class="icon-block">
            <div class="blog-post">
              <?php
              $posts = get_posts('numberposts=10&order=DESC');
              foreach ($posts as $post) : setup_postdata( $post ); ?>
<div class="icon-block">              
<div class="blog-text">
              <h4><?php the_title(); ?></h4>
              <div class="dateIcon">
              <p><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
              </div>  
              <?php the_content(); ?> 
              </div>
              <br />
                 </div>

              <?php
              endforeach;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Floating action button embedded by Danish Mehraj-->			  
			<div class="containers">             
				<a href="../about.html" tooltip="Danish Mehraj" class="buttons"></a>
				<a href="../contact.html" tooltip="Contact" class="buttons"></a>
				<a href="../iwrite.php" tooltip="Blog" class="buttons"></a>
                <a href="../photogallery/index.html" tooltip="Gallery" class="buttons"></a>
				<a href="../apps.html" tooltip="Apps" class="buttons"></a>
				<a href="../portfolio.html" tooltip="Portfolio" class="buttons"></a>
				<a href="../Index.html" tooltip="Home" class="buttons"></a>
				<a class="buttons"> <span> <span class="rotate"></span></span></a>
        	</div>	

    <footer class="page-footer accent-color">
   <!--   <div class="row center">
          <a href="/index.html" id="download-button" class="btn-large waves-effect accent-color">Home</a>
          <a href="/portfolio.html" id="download-button" class="btn-large waves-effect accent-color">Portfolio</a>
          <a href="/apps.html" id="download-button" class="btn-large waves-effect accent-color">Apps</a>
          <a href="/iwrite.php" id="download-button" class="btn-large waves-effect accent-color">Blog</a>
          <a href="/about.html" id="download-button" class="btn-large waves-effect accent-color">About</a>
          <a href="/contact.html" id="download-button" class="btn-large waves-effect accent-color">Contact</a>
       </div> -->
          <div class="container">
              <div class="row">
                  <div class="col l4 s12">
                      <div class="social-icons">
                          <h5 class="white-text center">Let's Connect!</h5>
                          <p class="grey-text text-lighten-4 center">I love connecting with others. Follow me on Twitter, find me on Facebook, or connect with me on LinkedIn. I would love to hear from you!</p>
                          <div class="center">
                              <a href="https://twitter.com/Danishmehraj26" target="_blank"><i class="fa fa-twitter"></i></a>
                              <a href="https://www.linkedin.com/in/danishmehraj26" target="_blank"><i class="fa fa-linkedin"></i></a>
                              <a href="https://github.com/Mohddanishb" target="_blank"><i class="fa fa-github"></i></a>
                              <a href="https://www.facebook.com/muziq.guy1" target="_blank"><i class="fa fa-facebook"></i></a>
                              <a href="mailto:danish.mehraj@studentpartner.com" target="_top"><i class="fa fa-envelope"></i></a>
                          </div>
                      </div>
                  </div>
                  <div class="col l4 s12">
                      <div class="quick-bio">
                          <h5 class="white-text center">Short Bio</h5>
                          <p class="grey-text text-lighten-4 center">A perfectly tailored guy for everything, hailing from a small hamlet Khrew present in Srinagar Kashmir which is also known by the name Paradise. My off-work hobbies are content writing, social activism, citizen journalism, singing and dancing.</p>
                          <div class="center">
                              <img src="images/bio-photo-small.png" class="bio-photo-small" alt="Bio Photo" />
                          </div>
                      </div>
                  </div>
                   <!--  <div class="col l4 s12">
                    <div class="quick-bio">
                        <h5 class="white-text center">My Latest Tweet</h5>
                        <div id="example1"></div>
                        <div class="center">
                            <i class="fa fa-twitter"></i>
                        </div>
                    </div>
                </div> -->
				 <div class="col l4 s12">
                      <div class="quick-bio">
                          <h5 class="white-text center">Loving Quote</h5>
                          
                          <div class="center">
                             <p class="grey-text text-lighten-4 center"> "Thousands of desires...each worth dying for...many of them I have realized...I yearn for more"</>
                          </div>
                      </div>
                 </div>
              </div>
          </div>
          <div class="footer-copyright">
              <div class="container center">
                  ©2020 Danish Mehraj. All Rights Reserved | Made with love
              </div>
          </div>
</footer>


  <!--  Scripts-->
 <!-- <script type="text/javascript" src="js/twitterFetcher_min.js"></script>
  <script type="text/javascript" src="js/exampleUsage.js"></script> -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  </body>
</html>
