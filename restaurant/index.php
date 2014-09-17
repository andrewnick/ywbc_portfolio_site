<!DOCTYPE html>
<html lang="en">
  
  <?php require_once("includes/head.php") ?>
  
  <body class="container">

      <?php require_once('includes/header.php') ?>

	<main>

      <?php require_once('includes/content-information.php') ?>

      <?php require_once ('includes/content-menu.php'); ?>

      <?php require_once ('includes/content-location.php'); ?>
  
      <?php require_once ('includes/content-about.php'); ?>
      
	</main>

  <!-- Javascript -->
  <script src="assets/js/jquery.js"></script>
  <script src="bootstrap/assets/javascripts/bootstrap.js"></script>
  <script src="assets/js/main.js"></script>

  <!-- add Modernizr -->
  <script src="assets/js/vendor/modernizr-2.8.0.min.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');

  </script>
  </body>
</html>