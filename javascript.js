/* North Florida Literacy Festival Placeholder Website Javascript
 * Authored by Aidan S (aidans80@outlook.com) */

$(document).ready(function() {
   
   updateVerticalAlignment();
   updateVerticalSizing();
   setTimeout(function() {
      updateVerticalAlignment();
      updateVerticalSizing();
   }, 300);
   
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
      updateVerticalAlignment();
      updateVerticalSizing();
      setTimeout(function() {
         updateVerticalAlignment();
         updateVerticalSizing();
      }, 300);
   });
   
});

function updateVerticalAlignment() {
   var elementTopAnchor = ($('.vertical-align-middle').parent().height() / 2) - ($('.vertical-align-middle').height() / 2);
   $('.vertical-align-middle').css('margin-top', elementTopAnchor);
}

function updateVerticalSizing() {   
   $('.column').css('height','auto');
   $('.content-box').css('height','auto');
   $('.column').each(function(index,element){
      $(element).css('height',$(element).parent().innerHeight());
   });
   $('.content-box').each(function(index,element){
      $(element).css('height',$(element).parent().innerHeight() - parseFloat($(element).parent().css('padding-top')) - parseFloat($(element).parent().css('padding-bottom')));
      //console.log($(element).parent().innerHeight() - parseFloat($(element).css('padding-top')) - parseFloat($(element).parent().css('padding-bottom')));
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
