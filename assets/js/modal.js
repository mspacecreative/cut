(function($) {
	
	$(function () {

		var modalContainer = $('.modal_container'),
			closeModal = $('.closeModalButton'),
			modalBackdrop = $('.modal'),
			modal = modalContainer.add(modalBackdrop);
		
		$(document).on('click', '.read-bio', function(e) {
			e.preventDefault();
				
			var //pageTitle = $(this).attr('title'),
				//page_url = $(this).attr('href'),
			data = {
				'action': 'load_page_by_ajax',
				'id': $(this).data('id'),
				'security': torrent.security
			};
			
			//document.title = pageTitle + " | " + base_description;
			$.post(torrent.ajaxurl, data, function(response) {
				response = JSON.parse(response);
				$('.modal-content').html(
					'<h3>' + response.title + '</h3>'
						+ response.content
				);
				
				modal.fadeIn();
			});
		});
		
		$('.modal-content').click(function(e) {
			e.stopPropagation();
		});
		
		$('.closeModalButton, .modal_container').click(function() {
			modal.fadeOut();
		});
		
		// ESCAPE KEY CLICK TO ESCAPE
		$(document).keyup(function(e) {
			if (e.key === "Escape") { // escape key maps to keycode `27`
				modal.fadeOut();
			}
		});
		
	});

})(jQuery);