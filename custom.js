var $ = jQuery.noConflict();
$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        
        // scroll-up button show/hide script
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    $('.navbar .menu li a').click(function(){
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });

    // toggle menu/navbar script
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

//     typing text animation script
    var typed = new Typed(".typing", {
        strings: ["Web Developer", "Freelancer", "Web designer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    var typed = new Typed(".typing-2", {
        strings: ["Responsive", "Web", "Developer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    // owl carousel script
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeOut: 1000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });
});


var menuItems = document.querySelectorAll('#nav a[href^="#"]');

menuItems.forEach(item =>{
	item.addEventListener('click', scrollToIdOnClick);
})

function scrollToIdOnClick(event){
	event.preventDefault();
	const element = event.target;
	const id = element.getAttribute('href');
	const to = document.querySelector(id).offsetTop;
	
	
	window.scroll({
		top: to - 72,
		behavior: "smooth",
	});
}


document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        var preloader = document.getElementById('preloader');
        preloader.style.transition = 'opacity 0.5s';
        preloader.style.opacity = 0;
        preloader.addEventListener('transitionend', function() {
            preloader.style.display = 'none';
        });
    }, 300);
});






				  