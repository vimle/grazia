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
		visited : $.cookie("visited"),
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

			gz.feedMeta.text(function () {
		        return $(this).text('Grazia Products');
		    });
		},

		// Newsletter
        newsLetter : function() {

	        if (gz.visited == null) {
	            gz.subcribeModal.fadeIn(300);
	            $.cookie('visited', 'yes');     
	        }

	        $.cookie('visited', 'yes', { expires: 1, path: '/' });

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

			gz.closeRev.on('click', function(e) {
				e.preventDefault()
				gz.productReview.fadeOut(300);
			});

		}
	};

	gz.init();
});
