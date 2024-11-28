jQuery(document).ready(function ($) {
	jQuery.noConflict()
	// 	=========================================== BLOG FAQ ===========================================
	jQuery('.accordion-list > .elementor-toggle-item > .answer').hide();
	jQuery('.accordion-list > .elementor-toggle-item .elementor-tab-title').click(function () {
		if (jQuery(this).parent().hasClass("active")) {
			jQuery(this).parent().removeClass("active").find(".answer").slideUp();
		} else {
			jQuery(".accordion-list > .elementor-toggle-item.active .answer").slideUp();
			jQuery(".accordion-list > .elementor-toggle-item.active").removeClass("active");
			jQuery(this).parent().addClass("active").find(".answer").slideDown();
		} return false;
	});

	// 	=========================================== owl-carousel ===========================================
	if (jQuery('.owl-carousel').length > 0) {
		// swiper_widget  ->  swiper-grid.php
		owl_carousel();
	} 
});
function owl_carousel(e) {
	jQuery('.owl-carousel').each(function () {
		var app_slider = jQuery(this);
		var prev = '<span><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.99983 1L3.05284 4.87375C3.03612 4.89016 3.02283 4.90979 3.01375 4.93147C3.00468 4.95316 3 4.97646 3 5C3 5.02354 3.00468 5.04684 3.01375 5.06853C3.02283 5.09021 3.03612 5.10984 3.05284 5.12625L7 9" stroke="currentcolor" stroke-linecap="round"/> </svg></span>';
		var next = '<span><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M3.00017 9L6.94716 5.12625C6.96388 5.10984 6.97717 5.09021 6.98625 5.06853C6.99532 5.04684 7 5.02354 7 5C7 4.97646 6.99532 4.95316 6.98625 4.93147C6.97717 4.90979 6.96388 4.89016 6.94716 4.87375L3 1" stroke="currentcolor" stroke-linecap="round"/> </svg></span>';
		var prev_text = 'Prev';
		var next_text = 'Next';
		if (app_slider.data('prev_text') && app_slider.data('prev_text') != '') {
			prev_text = app_slider.data('prev_text');
		}
		if (app_slider.data('next_text') && app_slider.data('next_text') != '') {
			next_text = app_slider.data('next_text');
		}
		app_slider.owlCarousel({ 
			items: app_slider.data("desk_num"),
			loop: app_slider.data("loop"),
			margin: app_slider.data("margin"),
			dots: app_slider.data("dots"),
			loop: app_slider.data("loop"),
			autoplay: app_slider.data("autoplay"),
			nav: app_slider.data("nav"),
			navText: [prev , next],
			responsiveClass: true,
			responsive: {
				// breakpoint from 0 up
				0: {
					items: app_slider.data("mob_sm"),
				},
				// breakpoint from 480 up
				480: {
					items: app_slider.data("mob_num"),
				},
				// breakpoint from 786 up
				786: {
					items: app_slider.data("tab_num")
				},
				// breakpoint from 1023 up
				1023: {
					items: app_slider.data("lap_num")
				},
				1199: {
					items: app_slider.data("desk_num")
				}
			}
		});
	});
}

// ============================= Healthray Tab  ->   healthray-tabs/controls.php =====================================
function healthrayTabs(e) {
	jQuery('.tabs').css('min-height', jQuery('.tabs .content.active').outerHeight());
	jQuery('.content.active').outerHeight();
	e.find(".tab-toggle").on('click', function() {
		var content = jQuery(this).parent().next(".content"),
			activeItems = e.find(".active"); 
		if (!jQuery(this).hasClass('active')) { jQuery(this).add(content).add(activeItems).toggleClass('active'); e.css('min-height', content.outerHeight()); }
	});
	jQuery(window).on('load', function() { e.find(".tab-toggle").first().trigger('click'); });
} 
jQuery(".tabs").each(function () { healthrayTabs(jQuery(this)); })

// ============================= TOGGLE LINK custom_toggle  ->  custom-toggle.php =====================================
function customToggle(){
	jQuery('.toggleLink').click(function (event) {
		event.preventDefault();
		var jQuerytoggleList = jQuery(this).next('.toggle-list');
		jQuerytoggleList.slideToggle(function () {
			var isVisible = jQuerytoggleList.is(":visible");
			if (isVisible) {
				jQuery(this).prev('.toggleLink').text('Read less -');
			} else {
				jQuery(this).prev('.toggleLink').text('Read more +');
			}
		});
	});
}

function alternative(e) {
	var selectedFile = e.find('#jsonFiles').val()
	tableContent(selectedFile);
	var yesImage = '<img width="26" height="26" decoding="async" style="width: 26px; height: 26px;" src="https://healthray.com/wp-content/themes/stratusx-child/assets/right.webp" alt="true" class="entered lazyloaded">';
	var noImage = '<img width="26" height="26" decoding="async" style="width: 26px; height: 26px;" src="https://healthray.com/wp-content/themes/stratusx-child/assets/cross.webp" alt="cross" class="entered lazyloaded">';

	// ml-alternative
	function tableContent(fileName) {
		jQuery.ajax({
			url: fileName,
			type: 'GET',
			dataType: 'json',
			success: function (jsonData) {
				if (jsonData.img) {
					jQuery('#jsonData tbody').html('')
					jQuery.each(jsonData.content, function (key, value) {
						if (value.our.trim().toLowerCase() == "yes") {
							value.our = yesImage
						} else if (value.our.trim().toLowerCase() == "no") {
							value.our = noImage
						}

						if (value.other.trim().toLowerCase() == "yes") {
							value.other = yesImage;
						} else if (value.other.trim().toLowerCase() == "no") {
							value.other = noImage
						}
						jQuery('#jsonData tbody').append('<tr> <td class="feature">' + value.key + '</td> <td class="our"> ' + value.our + '</td> <td class="other"> ' + value.other + '</td> </tr>');
					});
				}
			}
		});
	}
}

function new_slider(){
	const items = document.querySelectorAll('.left-column .item');
	const sliderContents = document.querySelectorAll('.right-column .slider-content');
	items.forEach(item => {
		item.addEventListener('click', () => {
			items.forEach(i => i.classList.remove('active'));
			sliderContents.forEach(content => content.classList.remove('active'));
			item.classList.add('active');
			const targetId = item.getAttribute('data-target');
			document.getElementById(targetId).classList.add('active');
		});
	});
}

jQuery(window).on('elementor/frontend/init', function () {

	elementorFrontend.hooks.addAction('frontend/element_ready/swiper_widget.default', owl_carousel);
	elementorFrontend.hooks.addAction('frontend/element_ready/ml-doctor-reviews.default', owl_carousel);
	elementorFrontend.hooks.addAction('frontend/element_ready/ml-ehr-product-slider.default', owl_carousel);
	elementorFrontend.hooks.addAction('frontend/element_ready/ml-product-slider-2.default', owl_carousel);

	elementorFrontend.hooks.addAction('frontend/element_ready/ml-alternative.default', alternative);
	elementorFrontend.hooks.addAction('frontend/element_ready/custom_toggle.default', customToggle); 
	elementorFrontend.hooks.addAction('frontend/element_ready/healthray-tabs.default', healthrayTabs);

	elementorFrontend.hooks.addAction('frontend/element_ready/ml_slider.default', new_slider);
});