// NAVIGATION
initializeStellarNav(1, '.main_menu');
function initializeStellarNav(index, element) {
	$(element).stellarNav({
		breakpoint: 1024,
		position: 'left'
	});
}

// Full Screne Search Bar
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}

// INDEX SECTION1 SLIDER JS
$('.indexSec1-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navText : ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

// TESTIMONIALS SLIDER JS
$('.testimonial-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

// ADD TO CART BUTTON
document.querySelectorAll('.add-to-cart').forEach(button => {
  button.addEventListener('click', e => {
    button.classList.add('added');
  });
});


// PRODUCT FILTERS JS
$(".filter-title").click(function(){
  $(this).next().stop(true).slideToggle("active");
  // $(".filter-title i").toggleClass("rotate");
});

$(".filter-title i").click(function(){
  $(this).toggleClass("rotate");
});

// DROPDOWN TWO JS
$(".filter-item").click(function(){
  $(this).next().stop(true).slideToggle("active");
});

$(".filter-item i").click(function(){
  $(this).toggleClass("rotate");
});

// FILTER SIDE BAR BUTTON JS
$(".filter-btn").click(function(){
  $('aside').toggleClass("show");
});

//PRODUCT QUANTITY SELECT INPUT
$(document).ready(function(){
    $('.count').prop('disabled', false);
    $(document).on('click','.plus',function(){
       $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) + 1 );
   });
    $(document).on('click','.minus',function(){
      $(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) - 1 );
      if ($(this).siblings('.count').val() == 0) {
        $(this).siblings('.count').val(1);
        }
    });
});
