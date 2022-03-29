/*let close_button = document.getElementById('close-button');
close_button.addEventListener("click", function(e) {
    e.preventDefault();

    document.getElementById("window-notice").style.display = "none";
});*/

function myFunction() { 
    e.preventDefault(); 
    try {
     someBug();
    } catch (e) {
     throw new Error(e.message);
    }
    return false;
  }

