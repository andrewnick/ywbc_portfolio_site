<?php 
    
    $pages = array(

      'home' => array(
                  'title' => 'LIFE',
                  'description' => 'Find out about Rod Blackhurst’s up and coming film LIFE.
                                    Watch the trailer, learn about the cast and crew, sign up
                                    to get up to get news about the film and buy tickets from
                                    a location near you.'
                  ),

      'tickets' => array(
                  'title' =>'Tickets', 
                  'description' => 'Buy tickets for Rob Blackhurst’s up and coming film LIFE.'
                  ), 

      'filmmakers' => array(
                  'title' =>'Filmmakers', 
                  'description' => 'Learn about the cast and crew involved in the making of LIFE.'
                  ), 

      'newsletter' => array(
                  'title' =>'Newsletter', 
                  'description' => 'Sign up to our newsletter for the latest updates about the production and release of LIFE.'
                  ) 
    );

    function generatePageContent($reqContent, $pages){

        $content = "";

        if(!isset($_GET['pages'])){

          $content = $pages['home'][$reqContent];

        } elseif(array_key_exists($_GET['pages'], $pages)) {

          $content = $pages[$_GET['pages']][$reqContent];

        }

        return $content;
    }

 ?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content= <?php $description = generatePageContent('description', $pages); echo  '"'.$description.'"';?> >
<meta name="author" content="">
<link rel="icon" href="assets/media/favicon.ico">

<title>
    <?php $title = generatePageContent('title', $pages);
          echo $title; ?>
</title>

<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:200,300,400,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,900' rel='stylesheet' type='text/css'>
<!-- Bootstrap core CSS -->
<link href="assets/css/main.css" rel="stylesheet">




<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

<!-- Load google maps scripts -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
<script type="text/javascript" src="assets/js/map.js"></script>

<script type="text/javascript" src="assets/js/vendor/modernizr-2.8.0.min.js"></script>

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