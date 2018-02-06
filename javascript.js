/* North Florida Literacy Festival Placeholder Website Javascript
 * Authored by Aidan S (aidans80@outlook.com) */

$(document).ready(function() {
   
   updateVerticalAlignment();
   
   /* Window Resize Event */
   $(window).resize(function() {
      updateVerticalAlignment();
   });
   
});

function updateVerticalAlignment() {
   elementTop = ($(".vertical-align-middle").parent().height() / 2) - ($(".vertical-align-middle").height() / 2);
   $(".vertical-align-middle").css('margin-top', elementTop);
   setTimeout(function() {
      elementTop = ($(".vertical-align-middle").parent().height() / 2) - ($(".vertical-align-middle").height() / 2);
      $(".vertical-align-middle").css('margin-top', elementTop);
   }, 300);  
}

/* Open */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}