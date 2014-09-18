$(document).ready( function(){

	$('.sidebar').affix({
	    offset: {
	      top: $(window).height()
	    }
	 })



	$(function() {
	    if (Modernizr.history) {

		    function Transition() {
	            // Define a custom transition class, using js pseudo-inheritance 
	            // to inherit methods from Hashban.DefaultTransition

	            // Apply the parent's constructor
	            Hashban.DefaultTransition.apply(this, arguments);
			
	            // Provide custom transition_in behaviour
	            this.transition_in = function(new_content, contentBody) {
	                // reveal the new content
	                this.old_content.remove();
	                new_content.fadeIn();
					$("body").animate({scrollTop:$('#work_container').offset().top});

	            };

		      	// Other functions which could be overridden:
	            // this.should_use = function() {
	            //     // return a bool
	            // };
	            // this.transition_out = function(endfade) {
	            //     // perform out transition then call endfade callback
	            // };
	        };

	        // Inherit non-overridden methods from parent
       		Transition.prototype = new Hashban.DefaultTransition();

       		function content_links() {
            	hashban.hijack($('#work_container'));
        	};

	        // Create a Hashban instance for your site
	        var hashban = Hashban({
	            contentWrapSelector: '#work_container',
	            transitions: [Transition],
	            content_init: content_links
	        });



	        // "hijack" any links which should load in via ajax
	        hashban.hijack($('#sidebar_nav'));

	        // bind to the popstate event, so the back button will still work
	        hashban.bind();
	        content_links();
	    }
	});


});
