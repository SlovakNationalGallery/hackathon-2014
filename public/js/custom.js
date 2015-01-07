/*

	01. Zebra Accordion
	02. Mobile Navigation
			
*/

/* -- 01. Zebra Accordion -- */
	$(document).ready(function() {
		
    $('#onepagenav').onePageNav({
        changeHash: false,
        filter: ':not(.external)',
        scrollOffset: 59,
    });

    $('.toggle-project-details').on( "click", function(event) {
      $(this).html('&larr; zobraziť menej');
      $('.project-details').toggle();
      event.preventDefault()
    });

      $('.gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            fixedContentPos: false,              
            image: {
              verticalFit: true                
            },
            gallery: {
              enabled: true,
              tCounter:"%curr% / %total%"
            },
            zoom: {
              enabled: true,
              duration: 300, // don't foget to change the duration also in CSS
              opener: function(element) {
                return element.find('img');
              }
            }
      });      
      	
	});

/* -- 02. MOBILE NAVIGATION -- */

	 $(function() {


      // Create the dropdown base
      $("<select />").appendTo("nav .container .sixteen");
      
      // Create default option "Go to..."
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "Menu"
      }).appendTo("nav select");
      
      // Populate dropdown with menu items
      $("nav #onepagenav a").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text()
       }).appendTo("nav select");
      });
      
	   // To make dropdown actually work
      $("nav select").change(function() {
        window.location = $(this).find("option:selected").val();
      });
	 
	 });
	 
	 
/* -- 03. TOGGLE READ MORE -- */

