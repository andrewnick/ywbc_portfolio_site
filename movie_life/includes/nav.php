<?php

	function createNavFromArray($pages){
	    $nav = '<nav><ul class="nav nav-pills nav-stacked nav__list header__nav">';

	    foreach($pages as $slug => $page){

	    	if ($slug != 'home') { // Do not include home in navigation
		    	$class = "inactive";

	    		if(isset($_GET['pages']) == $slug ){
	    			$class = "active";
	    		}

		        $nav.="<li class='".$class."'><a href='index.php?pages=".$slug."'>".$page['title']."</a>";
		    	}
	    }

	    $nav .='</ul> </nav>';

	    return $nav;
	 }  

	$nav = createNavFromArray($pages);
	echo $nav;
?>