// Scroll to Top
// When the user scrolls down 20px from the top, the button shows
var scrolltoTop = document.getElementById('scrolltoTop');

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrolltoTop.style.display = "block";
    } else {
        scrolltoTop.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top 
scrolltoTop.addEventListener('click', function () {
    window.scroll({ top: 0, behavior: 'smooth' });
});


// Modal Contact for wordpress menu-item
var contactModal = document.querySelector('#menu-item-130 > a');

contactModal.setAttribute('data-toggle', 'modal');
contactModal.setAttribute('data-target', '#modal-contact');