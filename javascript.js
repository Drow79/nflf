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


// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
} 