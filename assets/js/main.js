(function($){"use strict";var windowOn=$(window);windowOn.on("load",function(){$("#loading").fadeOut(700);});jQuery('#mobile-menu').meanmenu({meanMenuContainer:'.glo-mobile-menu-pos',meanScreenWidth:"992",meanExpand:['<i class="fal fa-plus"></i>'],});function tp_settings_append($x){var settings=$("body");let dark;$x==true?(dark="d-block"):(dark="d-none");var settings_html=`<div class="tp-theme-settings-area transition-3">
		<div class="tp-theme-wrapper">
		   <div class="tp-theme-header text-center">
			  <h4 class="tp-theme-header-title">Theme Settings</h4>
		   </div>

		   <!-- THEME TOGGLER -->
		   <div class="tp-theme-toggle mb-20 ${dark}" style="display:none">
			  <label class="tp-theme-toggle-main" for="tp-theme-toggler">
				 <span class="tp-theme-toggle-dark"><i class="fa-light fa-moon"></i> Dark</span>
					<input type="checkbox" id="tp-theme-toggler">
					<i class="tp-theme-toggle-slide"></i>
				 <span class="tp-theme-toggle-light active"><i class="fa-light fa-sun-bright"></i> Light</span>
			  </label>
		   </div>

		   <!--  RTL SETTINGS -->
		   <div class="tp-theme-dir mb-20">
			  <label class="tp-theme-dir-main" for="tp-dir-toggler">
				 <span class="tp-theme-dir-rtl"> RTL</span>
					<input type="checkbox" id="tp-dir-toggler">
					<i class="tp-theme-dir-slide"></i>
				 <span class="tp-theme-dir-ltr active"> LTR</span>
			  </label>
		   </div>

		   <!-- COLOR SETTINGS -->
		   <div class="tp-theme-settings">
			  <div class="tp-theme-settings-wrapper">
				 <div class="tp-theme-settings-open">
					<button class="tp-theme-settings-open-btn">
					   <span class="tp-theme-settings-gear">
						  <i class="fal fa-cog"></i>
					   </span>
					   <span class="tp-theme-settings-close">
						  <i class="fal fa-times"></i>
					   </span>
					</button>
				 </div>
				 <div class="row row-cols-4 gy-2 gx-2">
					<div class="col">
					   <div class="tp-theme-color-item tp-color-active">
             <button class="tp-theme-color-btn tp-color-settings-btn d-none" data-color-default="#aa8453" type="button" data-color="#aa8453"></button>
						  <button class="tp-theme-color-btn tp-color-settings-btn" type="button" data-color="#aa8453"></button>
					   </div>
					</div>
					<div class="col">
					   <div class="tp-theme-color-item tp-color-active">
						  <button class="tp-theme-color-btn tp-color-settings-btn" type="button" data-color="#be8b47"></button>
					   </div>
					</div>
					<div class="col">
					   <div class="tp-theme-color-item tp-color-active">
						  <button class="tp-theme-color-btn tp-color-settings-btn" type="button" data-color="#ffc77e"></button>
					   </div>
					</div>
					<div class="col">
					   <div class="tp-theme-color-item tp-color-active">
						  <button class="tp-theme-color-btn tp-color-settings-btn" type="button" data-color="#7e531a"></button>
					   </div>
					</div>
				 </div>
			  </div>
			  <div class="tp-theme-color-input">
				 <h6>Choose Custom Color</h6>
				 <input type="color" id="tp-color-setings-input" value="#0b3d2c">
				 <label id="tp-theme-color-label" for="tp-color-setings-input"></label>
			  </div>
		   </div>
		</div>
	 </div>`;settings.append(settings_html);}
tp_settings_append(false);$(".tp-theme-settings-open-btn").on("click",function(){$(".tp-theme-settings-area").toggleClass("settings-opened");});$(".slider-drag").on("mouseenter",function(){$(".mouseCursor").addClass("cursor-big");});$(".slider-drag").on("mouseleave",function(){$(".mouseCursor").removeClass("cursor-big");});$("a,.sub-menu").on("mouseenter",function(){$(".mouseCursor").addClass("d-none");});$("a,.sub-menu").on("mouseleave",function(){$(".mouseCursor").removeClass("d-none");});function itCursor(){var myCursor=jQuery(".mouseCursor");if(myCursor.length){if($("body")){const e=document.querySelector(".cursor-inner"),t=document.querySelector(".cursor-outer");let n,i=0,o=!1;(window.onmousemove=function(s){o||(t.style.transform="translate("+
s.clientX+
"px, "+
s.clientY+
"px)"),(e.style.transform="translate("+
s.clientX+
"px, "+
s.clientY+
"px)"),(n=s.clientY),(i=s.clientX);}),$("body").on("mouseenter","button, a, .cursor-pointer",function(){e.classList.add("cursor-hover"),t.classList.add("cursor-hover");}),$("body").on("mouseleave","button, a, .cursor-pointer",function(){($(this).is("a","button")&&$(this).closest(".cursor-pointer").length)||(e.classList.remove("cursor-hover"),t.classList.remove("cursor-hover"));}),(e.style.visibility="visible"),(t.style.visibility="visible");}}}
itCursor();function tp_rtl_settings(){$("#tp-dir-toggler").on("change",function(){toggle_rtl();window.location.reload();});function tp_set_scheme(tp_dir){localStorage.setItem("tp_dir",tp_dir);document.documentElement.setAttribute("dir",tp_dir);if(tp_dir==="rtl"){var list=$("[href='assets/css/bootstrap.min.css']");$(list).attr("href","assets/css/bootstrap.rtl.css");}else{var list=$("[href='assets/css/bootstrap.min.css']");$(list).attr("href","assets/css/bootstrap.min.css");}}
function toggle_rtl(){if(localStorage.getItem("tp_dir")==="rtl"){tp_set_scheme("ltr");var list=$("[href='assets/css/bootstrap.rtl.css']");$(list).attr("href","assets/css/bootstrap.min.css");}else{tp_set_scheme("rtl");var list=$("[href='assets/css/bootstrap.min.css']");$(list).attr("href","assets/css/bootstrap.rtl.css");}}
function tp_init_dir(){if(localStorage.getItem("tp_dir")==="rtl"){tp_set_scheme("rtl");var list=$("[href='assets/css/bootstrap.min.css']");$(list).attr("href","assets/css/bootstrap.rtl.css");document.getElementById("tp-dir-toggler").checked=true;}else{tp_set_scheme("ltr");document.getElementById("tp-dir-toggler").checked=false;var list=$("[href='assets/css/bootstrap.min.css']");$(list).attr("href","assets/css/bootstrap.min.css");}}
tp_init_dir();}
if($("#tp-dir-toggler").length>0){tp_rtl_settings();}
var tp_rtl=localStorage.getItem("tp_dir");let rtl_setting=tp_rtl=="rtl"?true:false;function tp_theme_toggler(){$("#tp-theme-toggler").on("change",function(){toggleTheme();});function tp_set_scheme(tp_theme){localStorage.setItem("tp_theme_scheme",tp_theme);document.documentElement.setAttribute("tp-theme",tp_theme);}
function toggleTheme(){if(localStorage.getItem("tp_theme_scheme")==="tp-theme-dark"){tp_set_scheme("tp-theme-light");}else{tp_set_scheme("tp-theme-dark");}}
function tp_init_theme(){if(localStorage.getItem("tp_theme_scheme")==="tp-theme-dark"){tp_set_scheme("tp-theme-dark");document.getElementById("tp-theme-toggler").checked=true;}else{tp_set_scheme("tp-theme-light");document.getElementById("tp-theme-toggler").checked=false;}}
tp_init_theme();}
if($("#tp-theme-toggler").length>0){tp_theme_toggler();}
function tp_color_settings(){function tp_set_color(tp_color_scheme){localStorage.setItem("tp_color_scheme",tp_color_scheme);document.querySelector(":root").style.setProperty("--clr-theme-1",tp_color_scheme);document.getElementById("tp-color-setings-input").value=tp_color_scheme;document.getElementById("tp-theme-color-label").style.backgroundColor=tp_color_scheme;}
function tp_set_input(){var color=localStorage.getItem("tp_color_scheme");document.getElementById("tp-color-setings-input").value=color;document.getElementById("tp-theme-color-label").style.backgroundColor=color;}
tp_set_input();function tp_init_color(){var defaultColor=$(".tp-color-settings-btn").attr("data-color-default");var setColor=localStorage.getItem("tp_color_scheme");if(setColor!=null){}else{setColor=defaultColor;}
if(defaultColor!==setColor){document.querySelector(":root").style.setProperty("--clr-theme-1",setColor);document.getElementById("tp-color-setings-input").value=setColor;document.getElementById("tp-theme-color-label").style.backgroundColor=setColor;tp_set_color(setColor);}else{document.querySelector(":root").style.setProperty("--clr-theme-1",defaultColor);document.getElementById("tp-color-setings-input").value=defaultColor;document.getElementById("tp-theme-color-label").style.backgroundColor=defaultColor;tp_set_color(defaultColor);}}
tp_init_color();let themeButtons=document.querySelectorAll(".tp-color-settings-btn");themeButtons.forEach((color)=>{color.addEventListener("click",()=>{let datacolor=color.getAttribute("data-color");document.querySelector(":root").style.setProperty("--clr-theme-1",datacolor);document.getElementById("tp-theme-color-label").style.backgroundColor=datacolor;tp_set_color(datacolor);});});const colorInput=document.querySelector("#tp-color-setings-input");const colorVariable="--clr-theme-1";colorInput.addEventListener("change",function(e){var clr=e.target.value;document.documentElement.style.setProperty(colorVariable,clr);tp_set_color(clr);tp_set_check(clr);});function tp_set_check(clr){const arr=Array.from(document.querySelectorAll("[data-color]"));var a=localStorage.getItem("tp_color_scheme");let test=arr.map((color)=>{let datacolor=color.getAttribute("data-color");return datacolor;}).filter((color)=>color==a);var arrLength=test.length;if(arrLength==0){$(".tp-color-active").removeClass("active");}else{$(".tp-color-active").addClass("active");}}
function tp_check_color(){var a=localStorage.getItem("tp_color_scheme");var list=$(`[data-color="${a}"]`);list.parent().addClass("active").parent().siblings().find(".tp-color-active").removeClass("active");}
tp_check_color();$(".tp-color-active").on("click",function(){$(this).addClass("active").parent().siblings().find(".tp-color-active").removeClass("active");});}
if($(".tp-color-settings-btn").length>0&&$("#tp-color-setings-input").length>0&&$("#tp-theme-color-label").length>0){tp_color_settings();}
$('.glo-sidebar-action').on('click',function(){$('.glo-side-info').addClass('glo-side-info-open')
$('.offcanvas-overlay').addClass('offcanvas-overlay-open')});$('.glo-side-info-close').on('click',function(){$('.glo-side-info').removeClass('glo-side-info-open')
$('.offcanvas-overlay').removeClass('offcanvas-overlay-open')});$('.offcanvas-overlay').on('click',function(){$('.glo-side-info').removeClass('glo-side-info-open')
$('.offcanvas-overlay').removeClass('offcanvas-overlay-open')});$(".cart-toggle-btn").on("click",function(){$(".cartmini__wrapper").addClass("opened");$(".body-overlay").addClass("opened");});$(".cartmini__close-btn").on("click",function(){$(".cartmini__wrapper").removeClass("opened");$(".body-overlay").removeClass("opened");});$(".body-overlay").on("click",function(){$(".cartmini__wrapper").removeClass("opened");$(".sidebar__area").removeClass("sidebar-opened");$(".header__search-3").removeClass("search-opened");$(".body-overlay").removeClass("opened");});$(".glo-search-open-btn").on("click",function(){$(".bd-search-popup-area").addClass("bd-search-opened");$(".bd-search-overlay").addClass("bd-search-opened");});$(".bd-search-close-btn").on("click",function(){$(".bd-search-popup-area").removeClass("bd-search-opened");$(".bd-search-overlay").removeClass("bd-search-opened");});$(".bd-search-overlay").on("click",function(){$(".bd-search-popup-area").removeClass("bd-search-opened");$(".bd-search-overlay").removeClass("bd-search-opened");});windowOn.on("scroll",function(){var scroll=$(window).scrollTop();if(scroll<100){$("#header-sticky").removeClass("sticky");}else{$("#header-sticky").addClass("sticky");}});$("[data-background").each(function(){$(this).css("background-image","url( "+$(this).attr("data-background")+"  )");});if(jQuery(".glo-banner-active").length>0){let sliderActive1=".glo-banner-active";let sliderInit1=new Swiper(sliderActive1,{slidesPerView:1,slidesPerColumn:1,paginationClickable:true,rtl:rtl_setting,loop:true,infinite:true,effect:"fade",autoplay:{delay:5000,},pagination:{el:".swiper-paginations",clickable:true,},navigation:{nextEl:".glo-banner-button-next",prevEl:".glo-banner-button-prev",},a11y:false,});function animated_swiper(selector,init){let animated=function animated(){$(selector+" [data-animation]").each(function(){let anim=$(this).data("animation");let delay=$(this).data("delay");let duration=$(this).data("duration");$(this).removeClass("anim"+anim).addClass(anim+" animated").css({webkitAnimationDelay:delay,animationDelay:delay,webkitAnimationDuration:duration,animationDuration:duration,}).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass(anim+" animated");});});};animated();init.on("slideChange",function(){$(sliderActive1+" [data-animation]").removeClass("animated");});init.on("slideChange",animated);}
animated_swiper(sliderActive1,sliderInit1);}
$("select").niceSelect();$('.grid').imagesLoaded(function(){var $grid=$('.grid').isotope({itemSelector:'.grid-item',percentPosition:true,masonry:{columnWidth:'.grid-item',}});$('.gallery__filter-button').on('click','button',function(){var filterValue=$(this).attr('data-filter');$grid.isotope({filter:filterValue});});$('.gallery__filter-button button').on('click',function(event){$(this).siblings('.active').removeClass('active');$(this).addClass('active');event.preventDefault();});});$(".image-popups").magnificPopup({type:"image",gallery:{enabled:true,},});$(".popup-video, .glo-video-popup").magnificPopup({type:"iframe",});$(".glo-counter-number").counterUp({delay:10,time:1000,});new WOW().init();let calendar=new VanillaCalendar({selector:"#myCalendar",settings:{visibility:{weekend:false,today:false,},},});$('.glo-service-image-slide').slick({slidesToShow:1,slidesToScroll:1,rtl:rtl_setting,arrows:false,fade:true,autoplay:true,asNavFor:'.glo-service-content-slide',});$('.glo-service-content-slide').slick({slidesToShow:4,slidesToScroll:1,rtl:rtl_setting,infinite:true,asNavFor:'.glo-service-image-slide',arrows:false,dots:false,autoplay:true,variableWidth:true,focusOnSelect:true,touchMove:false,});var swiperFacilities=new Swiper(".glo-location-active",{slidesPerView:1,rtl:rtl_setting,loop:true,autoplay:false,centeredSlides:true,spaceBetween:30,breakpoints:{'1601':{slidesPerView:5,},'1400':{slidesPerView:4,},'1200':{slidesPerView:3,},'992':{slidesPerView:3,},'768':{slidesPerView:2,},'576':{slidesPerView:2,},'0':{slidesPerView:1,},},});var testimonail=new Swiper(".glo-testimonial-active",{slidesPerView:3,spaceBetween:60,rtl:rtl_setting,loop:true,autoplay:{delay:3000,},pagination:{el:".glo-testimonial-pagination",clickable:true,},breakpoints:{'1400':{slidesPerView:3,},'1200':{slidesPerView:3,},'992':{slidesPerView:2,},'768':{slidesPerView:1,},'576':{slidesPerView:1,},'0':{slidesPerView:1,},},});var testimonial2=new Swiper(".glo-testimonial-active-2",{slidesPerView:1,spaceBetween:0,rtl:rtl_setting,loop:true,autoplay:{delay:3000,},pagination:{el:".glo-testimonial-pagination",clickable:true,},});$('.glo-gallery-active').slick({arrows:false,dots:false,infinite:true,rtl:rtl_setting,speed:300,slidesToShow:5,autoplay:true,loop:true,responsive:[{breakpoint:1600,settings:{slidesToShow:4,}},{breakpoint:1400,settings:{slidesToShow:3,}},{breakpoint:1200,settings:{slidesToShow:3,}},{breakpoint:992,settings:{slidesToShow:3,}},{breakpoint:667,settings:{slidesToShow:2,}},{breakpoint:576,settings:{slidesToShow:1,}}]});var swiperBrand=new Swiper(".glo-brand-active",{slidesPerView:1,spaceBetween:0,rtl:rtl_setting,loop:true,autoplay:true,pagination:{el:".swiper-pagination",clickable:true,},breakpoints:{'1600':{slidesPerView:5,},'1400':{slidesPerView:4,},'1200':{slidesPerView:4,},'992':{slidesPerView:4,},'768':{slidesPerView:3,},'576':{slidesPerView:2,},'0':{slidesPerView:1,},},});var swiperBanner2=new Swiper(".glo-banner-2-active",{slidesPerView:1,spaceBetween:0,rtl:rtl_setting,loop:true,autoplay:false,});var swiperFacilities=new Swiper(".facilities-slider",{slidesPerView:1,rtl:rtl_setting,loop:true,autoplay:true,centeredSlides:true,spaceBetween:50,breakpoints:{'1601':{slidesPerView:5.6,},'1400':{slidesPerView:4.6,},'1200':{slidesPerView:3.6,},'992':{slidesPerView:3,},'768':{slidesPerView:2,},'576':{slidesPerView:1,},'0':{slidesPerView:1,},},});var swiperInnerGallery1=new Swiper(".glo-gallery-2-active-1",{slidesPerView:1,spaceBetween:0,rtl:rtl_setting,loop:true,effect:"fade",observeParents:true,observer:true,navigation:{nextEl:".swiper-gallery-next-1",prevEl:".swiper-gallery-prev-1",},});var swiperInnerGallery2=new Swiper(".glo-gallery-2-active-2",{slidesPerView:1,spaceBetween:0,rtl:rtl_setting,loop:true,effect:"fade",observeParents:true,observer:true,navigation:{nextEl:".swiper-gallery-next-2",prevEl:".swiper-gallery-prev-2",},});var swiperInnerGallery3=new Swiper(".glo-gallery-2-active-3",{slidesPerView:1,spaceBetween:0,rtl:rtl_setting,loop:true,effect:"fade",observeParents:true,observer:true,navigation:{nextEl:".swiper-gallery-next-3",prevEl:".swiper-gallery-prev-3",},});var swiperInnerGallery4=new Swiper(".glo-gallery-2-active-4",{slidesPerView:1,spaceBetween:0,rtl:rtl_setting,loop:true,effect:"fade",observeParents:true,observer:true,navigation:{nextEl:".swiper-gallery-next-4",prevEl:".swiper-gallery-prev-4",},});var swiperInnerGallery5=new Swiper(".glo-gallery-2-active-5",{slidesPerView:1,spaceBetween:0,rtl:rtl_setting,loop:true,effect:"fade",observeParents:true,observer:true,navigation:{nextEl:".swiper-gallery-next-5",prevEl:".swiper-gallery-prev-5",},});var swiperInnerGallery6=new Swiper(".glo-gallery-2-active-6",{slidesPerView:1,spaceBetween:0,rtl:rtl_setting,loop:true,effect:"fade",observeParents:true,observer:true,navigation:{nextEl:".swiper-gallery-next-6",prevEl:".swiper-gallery-prev-6",},});var swiperGallery2Parrent=new Swiper(".swiper-parent-gallery-active",{slidesPerView:1,rtl:rtl_setting,loop:false,autoplay:false,observer:true,observeParents:true,spaceBetween:60,observeParents:true,observer:true,navigation:{nextEl:".swiper-parent-gallery-next",prevEl:".swiper-parent-gallery-prev",},breakpoints:{768:{slidesPerView:2,spaceBetween:20,},993:{slidesPerView:2,},1400:{slidesPerView:3,},1600:{slidesPerView:3,}}});var swiperStaffSlider=new Swiper(".glo-staff-active",{slidesPerView:1,spaceBetween:30,rtl:rtl_setting,loop:true,speed:1500,autoplay:true,autoplay:{delay:3000,},navigation:{nextEl:".swiper-glo-staff-next",prevEl:".swiper-glo-staff-prev",},});var swiperBlogSlider=new Swiper(".glo-blog-slider-active",{slidesPerView:1,rtl:rtl_setting,spaceBetween:0,loop:true,autoplay:true,pagination:{el:".swiper-pagination",clickable:true,},});var swiperBlogSlider=new Swiper(".glo-blog-slider-2-active",{slidesPerView:1,spaceBetween:30,rtl:rtl_setting,loop:true,autoplay:true,navigation:{nextEl:".blog-navigation-next",prevEl:".blog-navigation-prev",},breakpoints:{1400:{slidesPerView:3,},1200:{slidesPerView:2,},992:{slidesPerView:2,},768:{slidesPerView:1,},576:{slidesPerView:1,},0:{slidesPerView:1,},},});var swiperBlogSlider=new Swiper(".food-menu-active",{slidesPerView:1,spaceBetween:0,rtl:rtl_setting,loop:true,infinite:true,autoplay:{delay:3000,},pagination:{el:".glo-food-menu-pagination",clickable:true,},breakpoints:{1024:{slidesPerView:2,spaceBetween:50,},},});if(jQuery(".glo-banner-3-active").length>0){let sliderActive1=".glo-banner-3-active";let sliderInit1=new Swiper(sliderActive1,{slidesPerView:1,slidesPerColumn:1,paginationClickable:true,rtl:rtl_setting,loop:true,infinite:true,effect:"fade",autoplay:{delay:4000,},a11y:false,});function animated_swiper(selector,init){let animated=function animated(){$(selector+" [data-animation]").each(function(){let anim=$(this).data("animation");let delay=$(this).data("delay");let duration=$(this).data("duration");$(this).removeClass("anim"+anim).addClass(anim+" animated").css({webkitAnimationDelay:delay,animationDelay:delay,webkitAnimationDuration:duration,animationDuration:duration,}).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){$(this).removeClass(anim+" animated");});});};animated();init.on("slideChange",function(){$(sliderActive1+" [data-animation]").removeClass("animated");});init.on("slideChange",animated);}
animated_swiper(sliderActive1,sliderInit1);}})(jQuery);const addEventOnElements=function(elements,eventType,callback){for(let i=0,len=elements.length;i<len;i++){elements[i].addEventListener(eventType,callback);}}
const tiltElements=document.querySelectorAll("[data-tilt]");const initTilt=function(event){const centerX=this.offsetWidth/2;const centerY=this.offsetHeight/2;const tiltPosY=((event.offsetX-centerX)/centerX)*10;const tiltPosX=((event.offsetY-centerY)/centerY)*10;this.style.transform=`perspective(1000px) rotateX(${tiltPosX}deg) rotateY(${tiltPosY-(tiltPosY*2)}deg)`;}
addEventOnElements(tiltElements,"mousemove",initTilt);addEventOnElements(tiltElements,"mouseout",function(){this.style.transform=`perspective(1000px) rotateX(0deg) rotateY(0deg)`;});const revealElements=document.querySelectorAll("[data-reveal]");const scrollReveal=function(){for(let i=0,x=revealElements.length;i<x;i++){if(revealElements[i].getBoundingClientRect().top<window.innerHeight/1.15){revealElements[i].classList.add("revealed");}else{revealElements[i].classList.remove("revealed");}}}
window.addEventListener("scroll",scrollReveal);window.addEventListener("load",scrollReveal);