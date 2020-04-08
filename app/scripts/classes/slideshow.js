import Swiper from 'swiper';

const calcSlide = (s) => {
    console.log('s is ' + s);
    return (s === 3 || s === 1 ? 0 : (s - 1) * 6 );
}
export class Slideshow {
    constructor() {
        this.navItems = document.querySelectorAll('.js-slideshow-nav-item');
        this.bindSlideshowNav();
        this.initSlideshows();
    }

    bindSlideshowNav() {
        [].forEach.call(this.navItems, (el, i) => {
            this.bindNavItem(el, i);
        });
    }

    bindNavItem(el, i) {
        el.addEventListener('mouseover', () => this.slide(el, i));
    }

    slide = (el, i) => {
        this.swiperImages.slideTo(i);
    }

    setActive(i) {
        const lastActive = document.querySelectorAll('.is-active');
        [].forEach.call(this.navItems, (el, i) => {
            el.classList.remove('is-active');
        });
        if(this.navItems[i]) {
            this.navItems[i].classList.add('is-active');
        }
    }

    setNavPos(i) {
        const pos = parseInt(i / 13);

        if(pos === this.swiperNav.activeIndex) {
            return false;
        };
        this.swiperNav.slideTo(pos);
    }

    initSlideshows() {

        this.swiperNav = new Swiper('#js-swiper-homemenu-nav', {
            direction: 'vertical',
            centeredSlides: true,
            slidesPerView: 1,
            nextButton: '.swiper-nav-next',
            prevButton: '.swiper-nav-prev',
            onInit: function(swiper) {
                swiper.onResize();
                console.log(swiper.activeIndex);
            },
            onSlideChangeStart: (swiper) => {
                // console.log('changed slide');
                console.log(swiper.activeIndex);
                if(swiper.previousIndex % 13 === 1) {
                    console.log(swiper.previousIndex);
                    this.swiperImages.slideTo(swiper.activeIndex * 13 + 12);
                } else {
                   if(this.swiperImages) { this.swiperImages.slideTo(swiper.activeIndex * 13) };
                }
            },
        });
        this.swiperImages = new Swiper('#js-swiper-homemenu-images', {
            keyboardControl: true,
            mousewheelControl: true,
            speed: 1000,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            pagination: '.swiper-pagination',
            paginationType: 'progress',
            hashnav: true,
            paginationClickable: true,
            onSlideChangeStart: (swiper) => {
                console.log('changed slide');
                this.setActive(swiper.activeIndex);
                this.setNavPos(swiper.activeIndex);
            },
            onInit: (swiper) => {
                swiper.onResize();
                this.setActive(swiper.activeIndex);
            },
        });

        this.swiperText = new Swiper('#js-swiper-homemenu-text', {
            effect: 'fade',
            hashnav: true,
            centeredSlides: true,
            mousewheelControl: true,
            slidesPerView: 'auto',
            autoHeight: true,
            speed: 1000,
            paginationType: 'fraction',
            pagination: '.swiper-pagination-fraction',
            onInit: function(swiper) {
                swiper.onResize();
            },
        });

        this.swiperImages.params.control = this.swiperText;
        this.swiperText.params.control = this.swiperImages;
    }
}


