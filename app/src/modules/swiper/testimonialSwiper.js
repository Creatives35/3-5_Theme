/* eslint-disable no-unused-vars */
import Swiper, { Navigation, Pagination } from 'swiper';
Swiper.use( [ Navigation, Pagination ] );

( function() {
	return new Swiper( '.testimonial-swiper', {
		modules: [ Navigation, Pagination ],
		loop: true,
		spaceBetween: 100,
		navigation: {
			nextEl: '.testimonial-swiper-button-next',
			prevEl: '.testimonial-swiper-button-prev',
		},
		pagination: {
			el: '.testimonial-pagination',
		},
	} );
}() );
