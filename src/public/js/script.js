window.addEventListener('DOMContentLoaded', () => {

	const menuNav = () => {

		const header = document.querySelector('.header'),
			topSilder = document.querySelector('.header-x');
		const sticky = topSilder.offsetTop;


		const logo = document.querySelector('.header__logo'),
			headerBottom = document.querySelector('.header-bottom'),
			headerNavList = document.querySelector('.header-nav__list'),
			topSliderWrapper = document.querySelector('.top-slider__wrapper'),
			allNewsBlog = document.querySelector('.all-news'),
			menuBtn = document.querySelector('.menu-button');

		const menuDisable = () => {
			logo.classList.add('header__logo--scroll');
			headerBottom.classList.add('header-bottom--scroll');
			headerBottom.classList.add('header-bottom--opacity');
			menuBtn.classList.remove('menu-active');
			headerNavList.classList.remove('header-nav__list--mobile');
			if (typeof(topSliderWrapper) !== 'undefined' && topSliderWrapper !== null) 			{
				topSliderWrapper.classList.add('top-slider__wrapper--padding');
			}
			if (typeof(allNewsBlog) !== 'undefined' && allNewsBlog !== null) 			{
				allNewsBlog.classList.add('all--padding');
			}
			// document.querySelector('.background-mobile').classList.remove('background-mobile--opacity');

		};
		const menuEnable = () => {
			logo.classList.remove('header__logo--scroll');
			headerBottom.classList.remove('header-bottom--scroll');
			headerBottom.classList.remove('header-bottom--opacity');
			menuBtn.classList.add('menu-active');
			headerNavList.classList.add('header-nav__list--mobile');
			if (typeof(topSliderWrapper) !== 'undefined' && topSliderWrapper !== null) 			{
				topSliderWrapper.classList.remove('top-slider__wrapper--padding');
			}
			if (typeof(allNewsBlog) !== 'undefined' && allNewsBlog !== null) 			{
				allNewsBlog.classList.remove('all--padding');
			}
			// document.querySelector('.background-mobile').classList.add('background-mobile--opacity');
		};

		window.onscroll = function() { scrollNavbar(); };
		function scrollNavbar() {
			if (window.pageYOffset >= sticky) {
				menuDisable();
				menuBtn.classList.remove('menu-start');
			}
		}
		menuBtn.addEventListener('click', event => {
			event.preventDefault();
			if (menuBtn.classList.contains('menu-active')) {
				menuBtn.classList.remove('menu-active');
				menuDisable();
			} else if (!menuBtn.classList.contains('menu-active')) {
				menuBtn.classList.add('menu-active');
				menuEnable();
			}
			if (menuBtn.classList.contains('menu-start')) {
				menuBtn.classList.remove('menu-start');
				menuDisable();
			}
		});
	};
	menuNav();

	const topSlider = () => {
		const swiper = new Swiper(".top-slider__bottom", {
			spaceBetween: 30,
			slidesPerView: 3,
			freeMode: true,
			watchSlidesProgress: true,

		});
		const swiper2 = new Swiper(".top-slider__top", {
			spaceBetween: 10,
			thumbs: {
				swiper,
			},
			navigation: {
				nextEl: ".top-slider__next",
				prevEl: ".top-slider__prev",
			},
			autoplay: {
				delay: 5000,
			},
		});
	};
	topSlider();

	const newsSlider = () => {
		const swiper3 = new Swiper(".news-swiper", {
			navigation: {
				nextEl: ".news-swiper__next",
				prevEl: ".news-swiper__prev",
			},
			effect: 'fade',
		});
	};
	newsSlider();

	const width = () => {
		const widthScreen = document.querySelector('body').clientWidth,
			div = document.querySelectorAll('div');

		if (widthScreen <= 767) {
			div.forEach(el => {
				el.removeAttribute('data-aos');
			});
		}
	};
	width();

	AOS.init();


});
