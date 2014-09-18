<!DOCTYPE html>
<html lang="en" id="document_container">
<?php 

    require('includes/head.php');
    require('includes/header.php');
?>

<body>

  <main class="content_container container-fluid">
    <div class="row"> 

      <?php require('includes/sidebar.php') ?>

      <section class="col-xs-12 col-sm-offset-4 col-sm-8 col-md-offset-2 col-md-10">
        <div id="work_container">

          <?php require_once ('includes/work-restaurant.php'); ?>

        </div>
      </section>
    </div>
  </main>

  <script type="text/javascript" src="assets/js/jquery.js"></script> 
  <script type="text/javascript" src="assets/js/Hashban.js"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>

    <!-- add Modernizr -->
  <script src="assets/js/vendor/modernizr-2.8.0.min.js"></script>


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
     ga('create', 'UA-XXXXX-X', 'auto');
     ga('send', 'pageview');
  </script>
  <!-- Bootstrap core JavaScript 
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="bootstrap/assets/javascripts/bootstrap.js"></script>

</body>
</html>