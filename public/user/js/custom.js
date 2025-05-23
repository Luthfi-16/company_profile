jQuery(document).ready(function() {
	
	"use strict";
	// Your custom js code goes here.

});


document.addEventListener("DOMContentLoaded", function () {
	// OWL CAROUSEL
	var carousels = document.querySelectorAll('.owl-carousel-fullwidth');

	carousels.forEach(function (carousel) {
		var itemCount = parseInt(carousel.getAttribute('data-item-count')) || 0;

		$(carousel).owlCarousel({
			items: 1,
			loop: itemCount > 1,
			margin: 20,
			nav: false,
			dots: true,
			smartSpeed: 800,
			autoHeight: true,
			autoplay: itemCount > 1,
			navText: [
				"<i class='icon-keyboard_arrow_left owl-direction'></i>",
				"<i class='icon-keyboard_arrow_right owl-direction'></i>"
			]
		});

		if (itemCount <= 1) {
			carousel.classList.add('owl-loaded');
		}
	});

	// MODAL
	const modal = document.getElementById("customModal");
	const title = document.getElementById("modalTitle");
	const desc = document.getElementById("modalDescription");
	const img = document.getElementById("modalImage");
	const closeBtn = document.querySelector(".custom-close");

	document.querySelectorAll(".open-modal").forEach(function (el) {
		el.addEventListener("click", function (e) {
			e.preventDefault();
			title.textContent = this.dataset.title;
			desc.textContent = this.dataset.description;
			img.src = this.dataset.image;
			modal.style.display = "block";
		});
	});

	closeBtn.addEventListener("click", function () {
		modal.style.display = "none";
	});

	window.addEventListener("click", function (event) {
		if (event.target === modal) {
			modal.style.display = "none";
		}
	});
});
  