(function($) {
"use strict";
  AOS.init({
    once: true
  });
// dropdown in navbar
var dropdownIcons = $(" .user-settings"),
dropdown = $(".menu-dropdown") 
$(".user-settings").click(function(){
  $(this).find(dropdown).slideToggle(); 
});

$(document).click(function(event){
  var $trigger = $(dropdownIcons);
  if($trigger !== event.target && !$trigger.has(event.target).length){
      $(dropdown).slideUp();
  }    
 });  

  var playBtn = $('.play-pause'); 
  playBtn.on('click', function(){
    var audProgress = $(this).closest('.output-player').find(".progress")

    var audClosest = $(this).closest('.output-player').find(".audo")
    var closeAud = $(audClosest)[0]

    if (closeAud.paused) {
      closeAud.play();
      $(this).children().removeClass('fa-play-circle');
      $(this).children().addClass('fa-pause-circle');
      $(audProgress).css("background-color", "rgba(0, 57, 111, 0.1)");
    }
    else {
      closeAud.pause(); 
      $(this).children().addClass('fa-play-circle');
      $(this).children().removeClass('fa-pause-circle');
    }
    closeAud.addEventListener('ended', function(){
    $(this).closest(".output-player").find(playBtn).children().removeClass('fa-pause-circle');
    $(this).closest(".output-player").find(playBtn).children().addClass('fa-play-circle');
      $(audProgress).css("background-color", "transparent");
     });
    closeAud.ontimeupdate = function(){
      $(audProgress).css('width', closeAud.currentTime / closeAud.duration * 100 + '%')
    } 

  })


  var ProbPlayBtn = $('.prob-play-pause'); 
  ProbPlayBtn.on('click', function(){
    var ProbAudProgress = $(this).closest('.controls').find(".progress-bar .circle")
    var AudDuration = $(this).closest('.controls').find(".duration")

    var ProbaudClosest = $(this).closest('.problem-audio').find(".audo")
    var ProbCloseAud = $(ProbaudClosest)[0]
    if (ProbCloseAud.paused) {
      ProbCloseAud.play();
      $(this).children().removeClass('fa-play-circle');
      $(this).children().addClass('fa-pause-circle'); 
    }
    else {
      ProbCloseAud.pause(); 
      $(this).children().addClass('fa-play-circle');
      $(this).children().removeClass('fa-pause-circle');
    }
    ProbCloseAud.addEventListener('ended', function(){
      $(this).closest(".controls").find(ProbPlayBtn).children().removeClass('fa-pause-circle');
      $(this).closest(".controls").find(ProbPlayBtn).children().addClass('fa-play-circle');
      $(ProbAudProgress).css("left", "0");
    });
      
    ProbCloseAud.ontimeupdate = function(){
      $(ProbAudProgress).css('left', ProbCloseAud.currentTime / ProbCloseAud.duration * 100 + '%')
      $(AudDuration).text(ProbCloseAud.currentTime.toFixed(2) )
    } 

  })




})(jQuery);
