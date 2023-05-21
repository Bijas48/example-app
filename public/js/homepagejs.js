// Testimonial
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:2,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        autoPlay:true
    });
});
// End Testi

// untuk rating di posts
let star = document.querySelectorAll('input');
let showValue = document.querySelector('#rating-value');


for (let i = 0; i < star.length; i++) {
	star[i].addEventListener('click', function() {
		i = this.value;

		showValue.innerHTML = i + " out of 5";
        
	});
}

// saved feature
const saveIcon = document.getElementById('save-icon');
const saveText = document.getElementById('save-text');

let saved = false; // assume item is not saved initially

// function to toggle saved state
function toggleSaved() {
  saved = !saved; // toggle saved state

  if (saved) {
    saveIcon.classList.remove('bi-star');
    saveIcon.classList.add('bi-star-fill');
    saveIcon.style.color = 'orange';
    saveText.textContent = 'Saved';
  } else {
    saveIcon.classList.remove('bi-star-fill');
    saveIcon.classList.add('bi-star');
    saveIcon.style.color = 'black';
    saveText.textContent = 'Save for later';
  }
}

// add event listener to toggle saved state on click
saveIcon.addEventListener('click', toggleSaved);
