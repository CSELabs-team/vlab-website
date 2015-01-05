jQuery(document).ready(function ($) {

    



$(function(){
//var e = document.getElementById('lip');
var e;
$(".lip").hover(function() {
    e = $(this);
  $(this).find("#popup").show().animate({
     'width':'180px'
 },{queue:false, duration:600, easing: 'easeOutBounce'});
}, 
function () {
//setTimeout(function(){

//$(e).find("#popup").stop().animate({'width':'-15px'},
 //   {queue:false, duration:600, easing: 'easeOutBounce'})    
$(e).find("#popup").hide("slow", function(){$(e).find("#popup").animate({'width':'0px'
},{queue:false, duration:600, easing: 'easeOutBounce'});});
//},1000);
});
});

/*
e.onmouseout = function() {
 document.getElementById('popup').style.display = 'none';
}


e.onmouseover = function() {
  document.getElementById('popup').style.display = 'block';
  $("#popup").animate({left:'250px'});
}
e.onmouseout = function() {
 document.getElementById('popup').style.display = 'none';
}
*/




    //initialise Stellar.js
    $(window).stellar();
    //Cache variables for Stellar.js in the document
    var links = $('.navigationp').find('li');
    slide = $('.slide');
    button = $('.button');
    mywindow = $(window);
    htmlbody = $('html,body');
    //htmlbody = $(document);
    //Set up for waypoints navigation
    slide.waypoint(function (event, direction) {
        //cache the variable of the data-slide attribute associated with each slide
        dataslide = $(this).attr('data-slide');
        //If the user scrolls up change the navigation link that has the same data-slide attribute as the slide to active and 
        //remove the active class from the previous navigation link 
        if (direction === 'down') {
            $('.navigationp li[data-slide="' + dataslide + '"]').addClass('active').prev().removeClass('active');
        }
        // else If the user scrolls down change the navigation link that has the same data-slide attribute as the slide to active and 
        //remove the active class from the next navigation link 
        else {
            $('.navigationp li[data-slide="' + dataslide + '"]').addClass('active').next().removeClass('active');
        }

    });
    //waypoints doesnt detect the first slide when user scrolls back up to the top so we add this little bit of code, that removes the class 
    //from navigation link slide 2 and adds it to navigation link slide 1. 
    mywindow.scroll(function () {
        if (mywindow.scrollTop() == 0) {
            $('.navigationp li[data-slide="1"]').addClass('active');
            $('.navigationp li[data-slide="2"]').removeClass('active');
        }
    });
    //Create a function that will be passed a slide number and then will scroll to that slide using jquerys animate. The Jquery
    //easing plugin is also used, so we passed in the easing method of 'easeInOutQuint' which is available throught the plugin.
    function goToByScroll(dataslide) {
    //    alert(htmlbody);
        htmlbody.animate({
            scrollTop: $('.slide[data-slide="' + dataslide + '"]').offset().top
        }, 2000, 'easeInOutQuint');
    }

    //When the user clicks on the navigation links, get the data-slide attribute value of the link and pass that variable to the goToByScroll function
    links.click(function (e) {
        e.preventDefault();
        //alert("in here")
        dataslide = $(this).attr('data-slide');
        //alert(dataslide)
        goToByScroll(dataslide);
    });

    //When the user clicks on the button, get the get the data-slide attribute value of the button and pass that variable to the goToByScroll function
    button.click(function (e) {
        e.preventDefault();
        //alert("in here")
        dataslide = $(this).attr('data-slide');
        goToByScroll(dataslide);
    });
    //Mouse-wheel scroll easing
    if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
    window.onmousewheel = document.onmousewheel = wheel;
    var time = 350;
    var distance = 100;
    function wheel(event) {
        if (event.wheelDelta) delta = event.wheelDelta / 50;
        else if (event.detail) delta = -event.detail / 1;
        handle();
        if (event.preventDefault) event.preventDefault();
        event.returnValue = false;
    }
    function handle() {

        $('html, body').stop().animate({
            scrollTop: $(window).scrollTop() - (distance * delta)
        }, time);
    }
    
	//keyboard  scroll easing
    $(document).keydown(function (e) {
        switch (e.which) {
            //up
        case 38:
            $('html, body').stop().animate({
                scrollTop: $(window).scrollTop() - distance
            }, time);
            break;
            //down
        case 40:
            $('html, body').stop().animate({
                scrollTop: $(window).scrollTop() + distance
            }, time);
            break;
        }
    });
});
