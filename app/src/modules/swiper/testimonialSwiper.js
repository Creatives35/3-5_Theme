/* eslint-disable no-unused-vars */
import Swiper, { Navigation, Pagination, HashNavigation } from 'swiper';
Swiper.use( [ Navigation, Pagination, HashNavigation ] );

( function() {
	const testimonialSwiper = new Swiper( '.testimonial-swiper', {
		modules: [ Navigation, Pagination, HashNavigation ],
		loop: true,
		spaceBetween: 100,
		hashNavigation: {
			watchState: true,
		},
		navigation: {
			nextEl: '.testimonial-swiper-button-next',
			prevEl: '.testimonial-swiper-button-prev',
		},
		pagination: {
			el: '.testimonial-pagination',
		},
	} );
}() );
