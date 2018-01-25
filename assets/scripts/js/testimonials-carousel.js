$(".owl-carousel").owlCarousel({
				autoPlay: true,
  				navigation : false,   // Show next and prev buttons
  				slideSpeed : 10000,
  				paginationSpeed : 500,
  				loop:true,
			    responsiveClass:true,
			    responsive:{
				    0:{
					    items:1,
					    nav:false
				    },
				    640:{
					    items:1,
					    nav:false
				    },
				    800:{
					    items:1,
					    nav:false
				    }
			    }
			});
