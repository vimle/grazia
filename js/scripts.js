(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		var SubcribeModal = $('.modal'),
			ProductReview = $('.product-review');

		$('<a href="#" class="close-review"></a>').appendTo('.rr_review_form');
		
		$('.write-review').on('click',function(e) {
			e.preventDefault();
			ProductReview.fadeIn(300);
		});

		$('.close-review').on('click', function(e) {
			e.preventDefault()
			ProductReview.fadeOut(300);
		});



		// Social Feed
		$('.smm-item').find('img:first').attr('src');
		$('.smm-item').each(function() {
			var thisImg = $(this),
				imgUrl = thisImg.find('img:first');

			thisImg.append(imgUrl);
		});



		// Newsletter
        var visited = $.cookie("visited"),
        	newsCloseBtn = $('a.close-newsletter');

        if (visited == null) {
            SubcribeModal.fadeIn(300);
            $.cookie('visited', 'yes');     
        }

        $.cookie('visited', 'yes', { expires: 1, path: '/' });

        newsCloseBtn.on('click', function() {
			SubcribeModal.fadeOut(300);
		});

		
	});
	
})(jQuery, this);
