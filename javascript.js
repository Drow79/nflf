/* North Florida Literacy Festival Placeholder Website Javascript
 * Authored by Aidan S (aidans80@outlook.com) */

$(document).ready(function() {
   
   console.log("Document ready");
   
});

$(window).on('load', function() {
   
   console.log("Window loaded");
   updateVerticalSizing();
   updateVerticalAlignment();
   
   var contentBoxHeight,
       contentBoxPadding = parseFloat($('.content-box').css('padding-bottom'));
   /* content-box Hover Enter Event */
   $(".content-box").hover(function(){
      contentBoxHeight = parseFloat($(this).css('height'));
      $(this).css('height', contentBoxHeight + contentBoxPadding / 2);
   },
   /* content-box Hover Exit Event */
   function(){
      $(this).css('height', contentBoxHeight);
   });
   
   /* Window Resize Event */
   $(window).resize(function() {
      updateVerticalSizing();
      updateVerticalAlignment();
      setTimeout(function() {
         updateVerticalSizing();
         updateVerticalAlignment();
      }, 300);
   });
   
});

function updateVerticalAlignment() {
   var elementTopAnchor = ($('.vertical-align-middle').parent().height() / 2) - ($('.vertical-align-middle').height() / 2);
   //console.log(elementTopAnchor, $('.vertical-align-middle').parent().height(), $('.vertical-align-middle').height() );
   $('.vertical-align-middle').css('margin-top', elementTopAnchor);
}

function updateVerticalSizing() {
   $('.column').css('height','auto');
   $('.max-height').css('height','auto');
   $('.column').each(function(index,element) {
      $(element).css('height',$(element).parent().innerHeight());
   });
   $('.max-height').each(function(index,element) {
      $(element).css('height',$(element).parent().innerHeight() - (parseFloat($(element).parent().css('padding-top')) + parseFloat($(element).parent().css('padding-bottom')) + parseFloat($(element).css('margin-top')) + parseFloat($(element).css('margin-top'))));
   });
}

/* Open */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
