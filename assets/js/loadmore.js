jQuery(function($){
 
	 // News  loade More
	var otterdev_ajax_btn = $('.load-more-btn'),
		otterdev_pagenumber = otterdev_ajax_btn.data('page'),
		otterdev_postexclude = JSON.stringify(otterdev_ajax_btn.data('exclude')),
		otterdev_btnloading = otterdev_ajax_btn.data('btnloading'),
		otterdev_btntext = otterdev_ajax_btn.data('btntext'),
		otterdev_post_perpage = otterdev_ajax_btn.data('perpage'),
		otterdev_maxpage = otterdev_ajax_btn.data('maxpage'), 
	otterdev_post = otterdev_ajax_btn.data('post');
 
 
	$(document).on('click', '.load-more-btn', function() {
		var button = otterdev_ajax_btn;

		var data = {
			action: 'otterdev_loadmore',
			page: otterdev_pagenumber,
			per_page: otterdev_post_perpage,
			posts_exclude: otterdev_postexclude,  
 		};
		 
		$.ajax({
			url: otterdev_loadmore.ajaxurl, // AJAX handler
			data: data,
			type: 'POST',
			beforeSend: function(xhr) {
				button.text(otterdev_btnloading); // change the button text, you can also add a preloader image
 			},
			success: function(data) {
				
				if (data) {
					// console.log(otterdev_category);
					button.text(otterdev_btntext);
					$('#ajaxnews-container').append(data); // insert new posts

					otterdev_pagenumber = otterdev_pagenumber + 1;
					button.attr('data-page', otterdev_pagenumber);
					if (otterdev_pagenumber > otterdev_maxpage) {
						button.remove(); // if last page, remove the button
					}
 
				} else {
					button.remove(); // if no data, remove the button as well
				}
			}
		});
	}); 


});