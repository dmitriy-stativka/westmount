import barba from '@barba/core';
import barbaPrefetch from '@barba/prefetch';
import { gsap } from "gsap";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

export function barbaInit() {
  gsap.registerPlugin(ScrollToPlugin)
  console.log('init barba');
  // barba.hooks.beforeEnter(({ current, next }) => {
  //   // Set <body> classes for the 'next' page
  //   if (current.container) {
  //     // // only run during a page transition - not initial load
  //     let nextHtml = next.html;
  //     let response = nextHtml.replace(
  //       /(<\/?)body( .+?)?>/gi,
  //       "$1notbody$2>",
  //       nextHtml
  //     );
  //     let bodyClasses = $(response).filter("notbody").attr("class");
  //     $("body").attr("class", bodyClasses);

  //     // ELEMENTOR
  //     // Where the magic happens - this loads the new Elementor styles and removes the old styles
  //     // if (bodyClasses.includes("elementor-page")) {
  //     //   let currentPageId = current.container
  //     //     .querySelector(".elementor")
  //     //     .getAttribute("data-elementor-id");
  //     //   let nextPageId = next.container
  //     //     .querySelector(".elementor")
  //     //     .getAttribute("data-elementor-id");
  //     //   let oldScriptURL =
  //     //     "/wp-content/uploads/elementor/css/post-" + currentPageId + ".css";
  //     //   let newScriptURL =
  //     //     "/wp-content/uploads/elementor/css/post-" + nextPageId + ".css"; // Add this for cache fix: ?cachebuster=' + new Date().getTime()
  //     //   const oldElementorScript = document.querySelector(
  //     //     'link[src="' + oldScriptURL + '"]'
  //     //   );
  //     //   if (oldElementorScript) {
  //     //     oldElementorScript.remove();
  //     //   }
  //     //   loadjscssfile(newScriptURL, "css");
  //     // }
  //   }

  // //   // GRAVITY FORMS
  // //   const baseURL = window.location.hostname;
  // //   const protocol = window.location.protocol;

  // //   // Here we are manually reloading the gravity form scripts and styles. If you find that you get errors in future with missing assets, simply add them below.
  // //   const gravityFormJS =
  // //     "/wp-content/plugins/gravityforms/js/gravityforms.min.js";
  // //   const gravityFormsJquery =
  // //     "/wp-content/plugins/gravityforms/js/jquery.json.min.js";
  // //   const gformReset = "/wp-content/plugins/gravityforms/css/formreset.min.css";
  // //   const gformMainCSS = "/wp-content/plugins/gravityforms/css/formsmain.min.css";
  // //   const gformReadyclass =
  // //     "/wp-content/plugins/gravityforms/css/readyclass.min.css";
  // //   const gformBrowser = "/wp-content/plugins/gravityforms/css/browsers.min.css";
  // //   const gformVariables =
  // //     'var gf_global = {"gf_currency_config":{"name":"Australian Dollar","symbol_left":"$","symbol_right":"","symbol_padding":" ","thousand_separator":",","decimal_separator":".","decimals":2},"base_url":"' +
  // //     protocol +
  // //     "//" +
  // //     baseURL +
  // //     '/wp-content/plugins/gravityforms","number_formats":[],"spinnerUrl":"' +
  // //     protocol +
  // //     "//" +
  // //     baseURL +
  // //     '/wp-content/plugins/gravityforms/images/spinner.gif"};';
  // //   const gformWrapper = next.container.querySelectorAll(".gform_wrapper");
  // //   //  const gformSomethingElse = '/wp-content/plugins/gravityforms/css/somethingElse.min.css';

  // //   if (gformWrapper) {
  // //     // run if the page contains a form
  // //     const gformVariablesScript = document.createElement("script");
  // //     gformVariablesScript.innerHTML = gformVariables;
  // //     document.body.appendChild(gformVariablesScript);

  // //     loadjscssfile(gravityFormJS, "js");
  // //     loadjscssfile(gravityFormsJquery, "js");
  // //     loadjscssfile(gformReset, "css");
  // //     loadjscssfile(gformMainCSS, "css");
  // //     loadjscssfile(gformReadyclass, "css");
  // //     loadjscssfile(gformBrowser, "css");
  // //     // loadjscssfile(gformSomethingElse, 'css')

  // //     if (window["gformInitDatepicker"]) {
  // //       gformInitDatepicker();
  // //     }

  // //     gformWrapper.forEach((element) => {
  // //       const parent = element.parentElement;
  // //       const scripts = parent.querySelectorAll("script");
  // //       scripts.forEach((script) => {
  // //         const scriptCode = script.innerHTML;
  // //         const newScript = document.createElement("script");
  // //         script.remove();
  // //         newScript.innerHTML = scriptCode;
  // //         parent.appendChild(newScript);
  // //       });
  // //     });

  // //     // ALLOW ELEMENTOR VIDEOS TO AUTOPLAY AFTER TRANSITION
  // //     let elementorVideos = document.querySelectorAll(".elementor-video");
  // //     if (typeof elementorVideos != "undefined" && elementorVideos != null) {
  // //       elementorVideos.forEach((video) => {
  // //         video.play();
  // //       });
  // //     }

  //     // if (current.container) {
  //     //   // only run during a page transition - not initial load
  //     //   // add any custom JS here that you would like to load on each page
  //     //   elementorFrontend.init();
  //     // }
  //   // }
  // });

  const tl = gsap.timeline({ defaults: { ease: "power3.inOut" } });
  // get the wrapper
  const wrapper = document.querySelector('.pages');

  // tell Barba to use the prefetch plugin
  barba.use(barbaPrefetch, {
    root: wrapper,
    timeout: 2500,
    limit: 0
  });

  barba.init({
    timeout: 5000,
    // debug: true,
    transitions: [
      {
        sync: false,
        leave: (data) => {
          console.log('leaveAnimation');
          return new Promise((resolve) => {
            tl
              .to(data.current.container, {
                duration: 2.5,
                y: -100,
                opacity: 0,
                onComplete: () => {
                  console.log('leaveAnimation in');
                  resolve();
                }
              })
          })
        },
        once: (data) => {
          console.log('enterAnimation');
          tl
            .to(window, { duration: 0.1, scrollTo: 0 })
            .from(data.next.container, {
              duration: 2.5,
              y: -100,
              opacity: 0,
              onComplete: () => {
                console.log('enterAnimation in');
              }
            })
        },
        beforeEnter: () => {
          console.log('beforeEnter');
          return new Promise((resolve) => {
            tl
              .to(window, { duration: 1, scrollTo: 0, onComplete: () => { resolve() } })
            // window.addEventListener('load',()=>{
            // })
          })
        },
        enter: (data) => {
          console.log('enterAnimation');
          tl
            .from(data.next.container, {
              duration: 2.5,
              y: -100,
              opacity: 0,
              onComplete: () => {
                console.log('enterAnimation in');
              }
            })
        }
      }
    ]
  });
}