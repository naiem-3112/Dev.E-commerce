// JS
$(function(){

$('.seller-slick').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: '<i class="fas fa-angle-left sliderprv"></i>',
nextArrow: '<i class="fas fa-angle-right slidernxt"></i>',
});

$('.category-slick').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: '<i class="fas fa-angle-left sliderprv"></i>',
nextArrow: '<i class="fas fa-angle-right slidernxt"></i>',
});
$('.hot-slick').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: '<i class="fas fa-angle-left sliderprv"></i>',
nextArrow: '<i class="fas fa-angle-right slidernxt"></i>',
});
    var $topbtn = $('.topbtn');
    
    $topbtn . on('click' , function(){
        
        $('html,body').animate({
            
            scrollTop : 0
            
        } , 1000);        
    });
        	$('.carousel-caption').fadeIn()

    
    $(window).on('scroll' , function(){
        
        var $scrolling = $(this).scrollTop();
        /*if($scrolling >= 2825){
            
            $('.footer_btn').addClass('search_btn_footer');
            
        }*/
        
        
        
        if($scrolling >= 200){
        	$topbtn.fadeIn()
            
            $('.full-nav').addClass('position-fixed');
            
        }
        else{
        	$topbtn.fadeOut()

             $('.full-nav').removeClass('position-fixed');
        }
        
        
    })
    
    var mixer = mixitup('.work-bottom');

    
});
$(document).ready(function() {
    $('select').niceSelect();

});
