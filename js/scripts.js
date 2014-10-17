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


		// Newsletter
		$( document ).ready(function() {
			SubcribeModal.fadeIn(300);
			console.log('tea');
		});

		$('a.close-newsletter').on('click', function() {
			SubcribeModal.fadeOut(300);
		});
		
	});
	
})(jQuery, this);
