(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		$('<a href="#" class="close-review"></a>').appendTo('.rr_review_form');
		
		$('.write-review').on('click',function(e) {
			e.preventDefault();
			$('.product-review').fadeIn(300);
		});

		$('.close-review').on('click', function(e) {
			e.preventDefault()
			$('.product-review').fadeOut(300);
		})
		
	});
	
})(jQuery, this);
