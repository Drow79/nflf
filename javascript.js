/* North Florida Literacy Festival Placeholder Website Javascript
 * Authored by Aidan S (aidans80@outlook.com) */

$(document).ready(function() {
   
   elementTop = ($(".vertical-align-middle").parent().height() / 2) - ($(".vertical-align-middle").height() / 2);
   $(".vertical-align-middle").css('margin-top', elementTop);

   /* Window Resize Event */
   $(window).resize(function() {
      //$(".vertical-align-middle").css('transition', '0.3s margin');
      setTimeout(function() {
         elementTop = ($(".vertical-align-middle").parent().height() / 2) - ($(".vertical-align-middle").height() / 2);
         $(".vertical-align-middle").css('margin-top', elementTop);
         console.log("Vertically aligning element by", ($(".vertical-align-middle").parent().height() / 2) - ($(".vertical-align-middle").height() / 2));
      }, 300);
   });
   
});