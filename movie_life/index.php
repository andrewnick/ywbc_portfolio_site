<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once ('includes/head.php'); ?>
</head>
<body>
	
	<?php require_once ('includes/header.php'); ?>	

	<?php 
    
      if(isset($_GET['pages'])){
         
         $page = $_GET['pages'];
         $pageURI = "includes/content-".$page.".php";

         if (file_exists($pageURI)) {

            require_once ($pageURI);

         }else {

            require_once ('includes/content-404.php');
         }
         
      } else {  

        require_once ('includes/content-home.php');

      }       
  ?>

  <?php require_once ('includes/footer.php'); ?>
	

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>