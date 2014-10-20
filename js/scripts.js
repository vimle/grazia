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
		SubcribeModal.fadeIn(300);
		$('a.close-newsletter').on('click', function() {
			SubcribeModal.fadeOut(300);
		});

		$('.smm-item').find('img:first').attr('src');



		// Social Feed
		$('.smm-item').each(function() {
			var thisImg = $(this),
				imgUrl = thisImg.find('img:first');

			thisImg.append(imgUrl);
		});



		

		/*

		// Social Feed
		$('.smm-item').each(function() {
			var thisImg = $(this),
				imgUrl = thisImg.find('img:first').attr('src');

			console.log('tea');
			

			$('<img src=" ' + imgUrl + '">').appendTo(thisImg);
		});


		function openFancybox() {
		    setTimeout(function () {
		        $('#yt').trigger('click');
		    }, 500);
		};
		$(document).ready(function () {
		    var visited = $.cookie('visited');
		    if (visited == 'yes') {
		        return false; // second page load, cookie active
		    } else {
		        openFancybox(); // first page load, launch fancybox
		    }
		    $.cookie('visited', 'yes', {
		        expires: 7 // the number of days cookie  will be effective
		    });
		    $("#yt").click(function () {
		        $.fancybox({
		            href: this.href,
		            type: "image"
		        });
		        return false;
		    });
		});
*/
		
	});
	
})(jQuery, this);
