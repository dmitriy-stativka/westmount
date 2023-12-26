import { barbaInit } from './barba'
import { gsap } from "gsap";
import Swiper from '../vendor/swiper';

import vars from '../_vars'

const {section_hero_slider,section_home_solutions, singleTeamBox} = vars;

document.addEventListener("DOMContentLoaded", function () {
  // console.log('start');
  // barbaInit()
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
      watchOverflow: true,
      spaceBetween: 24,
      // loop: true,
      breakpoints: {
        320: {
          slidesPerView: 1.1,
          spaceBetween: 10
        },
        //
        576: {
          slidesPerView: 2,
          spaceBetween: 24
        },
        //
        767: {
          slidesPerView: 2.5,
          // spaceBetween: 30
        },
        1024: {
          slidesPerView: 4,

        }
      },

      navigation: {
        nextEl: el.querySelector(".button_slider.btn_next"),
        prevEl: el.querySelector(".button_slider.btn_prev"),
      },
    });
    // if (slides > 3) {
    //   .addEventListener('pointerdown', () => {
    //     swiper.slideNext()
    //   })
    //
    //   .addEventListener('pointerdown', () => {
    //     swiper.slidePrev()
    //   })
    // }
  })


}






document.addEventListener("DOMContentLoaded", function() {
  team_slider();
});

function getInitialSlideIndex() {
  const hash = window.location.hash.substring(1);
  const slides = document.querySelectorAll('.team-single__nav .swiper-slide');
  for (let i = 0; i < slides.length; i++) {
    if (slides[i].getAttribute('data-hash') === hash) {
      return i;
    }
  }
  return 0; // Если нет совпадений, вернем 0
}

function team_slider() {
  const initialSlideIndex = getInitialSlideIndex();
  const singleTeamBox = document.querySelectorAll('.team-single');

  singleTeamBox.forEach(box => {
    const navSlider = box.querySelector('.team-single__nav');
    const teamSlider = box.querySelector('.team-single__slider');

    const sliderThumb = new Swiper(navSlider, {
      spaceBetween: 0,
      slidesPerView: 'auto',
      loop: false,
      allowTouchMove: false,
      history: false,
      initialSlide: initialSlideIndex,
      hashNavigation: {
        replaceState: true,
        watchState: true,
      },

      on: {
        click: function (swiper, event) {
          const clickedSlide = event.target.closest('.swiper-slide');
          if (clickedSlide) {

            console.log(clickedSlide.dataset.hash)

            const clickedSlideIndex = this.slides.indexOf(clickedSlide);
            if (clickedSlideIndex !== -1) {
              this.slideTo(clickedSlideIndex);
              const hash = clickedSlide.dataset.hash
              if (hash && this.hashNavigation.replaceState) {
                history.replaceState(null, null, '#' + hash);
              }
            }
          }
        }
      },

      breakpoints: {
        320: {
          slidesPerView: 2.2,
        },
        414: {
          slidesPerView: 3,
        },
        576: {
          slidesPerView: 3.5,
        },
        767: {
          slidesPerView: 4.5,
        },
        1201: {
          slidesPerView: 'auto',
          direction: 'vertical',
        }
      }
    });

    const mainSwiper = new Swiper(teamSlider, {
      spaceBetween: 0,
      loop: false,
      thumbs: {
        swiper: sliderThumb
      },
      initialSlide: initialSlideIndex,
      breakpoints: {
        320: {
          spaceBetween: 20,
        },
        767: {
          spaceBetween: 0,
        }
      }
    });
  });
}