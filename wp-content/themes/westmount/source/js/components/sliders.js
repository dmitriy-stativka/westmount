import { barbaInit } from './barba'
import { gsap } from "gsap";
import Swiper from '../vendor/swiper';

import vars from '../_vars'


// import Swiper, { Controller } from 'swiper';

// Инициализируйте Swiper с модулем Controller
// Swiper.use([Controller]);

// Теперь можно создавать экземпляры Swiper и связывать их


const {section_hero_slider,section_home_solutions, singleTeamBox} = vars;

document.addEventListener("DOMContentLoaded", function () {
  // console.log('start');
  // barbaInit()
  team_slider();
  hero_slider();
  slider_with_many_blocks_in_a_row();
});


function hero_slider() {
  section_hero_slider.forEach((el, index) => {
    let animated = false
    const swiper = new Swiper(el.querySelector('.swiper'), {
      loop: true,
      effect: "fade",
    });

    el.querySelector(".button_slider.btn_next").addEventListener('pointerdown', () => {
      if (animated) return
      animated = true
      swiper.slideNext()
    })
    el.querySelector(".button_slider.btn_prev").addEventListener('pointerdown', () => {
      if (animated) return
      animated = true
      swiper.slidePrev()
    })

    const imgs = el.querySelectorAll('img')
    const h2hero = el.querySelectorAll('.h2hero')

    swiper.on('slideChangeTransitionStart', function () {
      gsap.timeline({})
          .fromTo(h2hero, { yPercent: 150, opacity: 0 },
              { opacity: 1, yPercent: 0, duration: 1.5, ease: 'power4' })
          .fromTo(imgs, { opacity: 0, yPercent: 50 }, { opacity: 1, yPercent: 0, duration: 1.5, stagger: 0.3, ease: 'power4', onComplete: () => animated = false }, "<")
    });
  })
}

function slider_with_many_blocks_in_a_row() {
  section_home_solutions.forEach((el, index) => {
    const slides = el.querySelectorAll('.swiper-slide').length

    const swiper = new Swiper(el.querySelector('.swiper'), {
      slidesPerView: 2,
      spaceBetween: 10,
      loop: true,
      // Responsive breakpoints
      breakpoints: {
        //
        // 320: {
        //   slidesPerView: 2,
        //   spaceBetween: 20
        // },
        //
        // 480: {
        //   slidesPerView: 3,
        //   spaceBetween: 30
        // },
        1024: {
          slidesPerView: 4,
          spaceBetween: 24
        }
      }
    });
    if (slides > 3) {
      el.querySelector(".button_slider.btn_next").addEventListener('pointerdown', () => {
        swiper.slideNext()
      })

      el.querySelector(".button_slider.btn_prev").addEventListener('pointerdown', () => {
        swiper.slidePrev()
      })
    }
  })


}


function team_slider() {
  singleTeamBox.forEach(box => {
    const navSlider = box.querySelector('.team-single__nav');
    const teamSlider = box.querySelector('.team-single__slider');






    const sliderTeam = new Swiper(teamSlider, {
      slidesPerView: 1,
      effect: 'fade',
      spaceBetween: 0,
      observer: true,
      observeParents: true,
      loopedSlides: 5,
      loop: true,
      // watchOverflow: true,
    });

    const sliderThumb = new Swiper(navSlider, {
      slidesPerView: 'auto',
      spaceBetween: 0,

      freeMode: true,
      freeModeSticky: false,
      roundLengths: true,

      observer: true,
      observeParents: true,
      slideToClickedSlide: true,
      loopedSlides: sliderTeam.slides.length,
      loop: true,
      // watchOverflow: true,
      direction: 'vertical',


      // autoplay: {
      //   delay: 5000,
      // },

      // breakpoints: {
      //   320:{
      //     slidesPerView: 3,
      //     spaceBetween: 8,
      //     direction: 'horizontal',
      //   },
      //   576:{
      //     slidesPerView: 4,
      //     spaceBetween: 8,
      //     direction: 'horizontal',
      //   },
      //   767:{
      //     slidesPerView: 3,
      //     spaceBetween: 8,
      //     direction: 'horizontal',
      //   },
      //   1025:{
      //     slidesPerView: 'auto',
      //     spaceBetween: 8,
      //
      //   }
      // }

    });



    sliderThumb.on('slideChange', function () {
      sliderTeam.slideTo(this.realIndex);
    });
    // //
    // sliderTeam.on('slideChange', function () {
    //   sliderThumb.slideTo(this.index);
    // });

    //
    // sliderTeam.controller.control = sliderThumb;
    // sliderThumb.controller.control = sliderTeam;



  })
}