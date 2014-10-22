jQuery(function($) {
	'use strict';

	var gz = {

		/*-----------------------------------------------------
		    Variables
		-----------------------------------------------------*/

		subcribeModal : $('.modal'),
		productReview : $('.product-review'),
		feedWrap : $('.smm-item'),
		feedMeta : $('.entry-meta'),
    	newsCloseBtn : $('a.close-newsletter'),
    	revCloseBtn : $('<a href="#" class="close-review"></a>'),
    	writeRev : $('.write-review'),
    	closeRev : $('.close-review'),


		/*-----------------------------------------------------
			Init
		-----------------------------------------------------*/

		init : function() {
			gz.socialFeed();
			gz.newsLetter();
			gz.prodctRev();
		},


		/*-----------------------------------------------------
		    Functions
		-----------------------------------------------------*/

		// Social Feed
		socialFeed : function() {
			gz.feedWrap.each(function() {
				var thisImg = $(this),
					imgUrl = thisImg.find('img:first');

				thisImg.append(imgUrl);
			});

			// gz.feedMeta.text(function() {
			//    return $(this).text().replace("Grazia Products's Facebook Wall |", "Grazia Products"); 
		    // });
		},

		// Newsletter
        newsLetter : function() {
   //      	var date = new Date(),
   //      		minutes = 1,
			// 	visited = $.cookie("visited");


			// date.setTime(date.getTime() + (minutes * 60 * 1000));
			// // $.cookie('the_cookie', 'the_value', { expires: date });

	  //       if (visited == null) {
	  //           gz.subcribeModal.fadeIn(300);
	  //           $.cookie('visited', 'yes');
	  //           console.log('cookie start'); 
	  //       }

	  //       $.cookie('visited', 'yes', { expires: date, path: '/' });

	        
			setTimeout(function() {
			  console.log("Your session will expire in 30 seconds!");
			  gz.subcribeModal.fadeIn(300);
			}, 10000);

			gz.newsCloseBtn.on('click', function() {
				gz.subcribeModal.fadeOut(300);
			});
		},

		// Product Review
		prodctRev : function() {
			gz.revCloseBtn.appendTo('.rr_review_form');
			gz.writeRev.on('click',function(e) {
				e.preventDefault();
				gz.productReview.fadeIn(300);
			});

			$('.close-review').on('click', function(e) {
			e.preventDefault();
			gz.productReview.fadeOut(300);
			});

		}
	};

	gz.init();
});
