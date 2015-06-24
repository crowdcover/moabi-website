$(document).ready(function(){
  var mainbottom = $('.menu').offset().top;


  $("#hideshow").click(function(){
    $("#advanced").slideToggle(500);
  });

});


$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});

$('#form').one('submit', function() {
    $(this).find('input[type="submit"]').attr('disabled','disabled');
});

$(document).ready(function() {
                $('#form').submit(function() {
                    $('#success').show();
                });
            });
$(document).ready(function(){
$('#form').on('submit',function(e) {

$.ajax({
url:'contactengine.php',
data:$(this).serialize(),
type:'POST',
success:function(data){
console.log(data);
$("#success").show().fadeOut(5000); //=== Show Success Message==
},
error:function(data){
$("#error").show().fadeOut(5000); //===Show Error Message====
}
});
e.preventDefault(); //=== To Avoid Page Refresh and Fire the Event "Click"===
});
});



/***************** Nav Transformicon ******************/

document.querySelector("#nav-toggle").addEventListener("click", function() {
  this.classList.toggle("active");
});

/***************** Waypoints ******************/

$(document).ready(function() {

  $('.wp1').waypoint(function() {
    $('.wp1').addClass('animated fadeIn');
  }, {
    offset: '95%'
  });
  $('.wp2').waypoint(function() {
    $('.wp2').addClass('animated fadeIn');
  }, {
    offset: '85%'
  });
  $('.wp3').waypoint(function() {
    $('.wp3').addClass('animated fadeInUp');
  }, {
    offset: '95%'
  });
  $('.wp4').waypoint(function() {
    $('.wp4').addClass('animated fadeInDown');
  }, {
    offset: '75%'
  });
  $('.wp5').waypoint(function() {
    $('.wp5').addClass('animated fadeInUp');
  }, {
    offset: '75%'
  });
  $('.wp6').waypoint(function() {
    $('.wp6').addClass('animated fadeInDown');
  }, {
    offset: '75%'
  });

});

var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
    showRight = document.getElementById( 'showRight' ),
    body = document.body;


showRight.onclick = function() {
  classie.toggle( this, 'active' );
  classie.toggle( menuRight, 'cbp-spmenu-open' );
  disableOther( 'showRight' );
};


function disableOther( button ) {

  if( button !== 'showRight' ) {
    classie.toggle( showRight, 'disabled' );
  }

}

// get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
var mainbottom = $('#intro').offset().top;

// on scroll, 
$(window).on('scroll',function(){

    // we round here to reduce a little workload
    stop = Math.round($(window).scrollTop());
    if (stop > mainbottom) {
        $('.navbar').addClass('past-main');
    } else {
        $('.navbar').removeClass('past-main');
    }

});