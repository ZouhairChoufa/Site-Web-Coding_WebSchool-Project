function scrollToElement(elementSelector, instance = 0) {
    // Select all elements that match the given selector
    const elements = document.querySelectorAll(elementSelector);
    // Check if there are elements matching the selector and if the requested instance exists
    if (elements.length > instance) {
        // Scroll to the specified instance of the element
        elements[instance].scrollIntoView({ behavior: 'smooth' });
    }
}

const link1 = document.getElementById("link1");
const link2 = document.getElementById("link2");
const link3 = document.getElementById("link3");
const link4 = document.getElementById("link4");

link1.addEventListener('click', () => {
    scrollToElement('.header');
});

link2.addEventListener('click', () => {
    // Scroll to the second element with "header" class
    scrollToElement('.header', 1);
});

link3.addEventListener('click', () => {
    scrollToElement('.column');
});
link3.addEventListener('click', () => {
    scrollToElement('.column');
});
document.addEventListener('DOMContentLoaded', function() {
    var backToTopLink = document.getElementById('link4');
    if (backToTopLink) {
        backToTopLink.addEventListener('click', function(event) {
            event.preventDefault();
            
            // Scroll to the top of the page smoothly
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});

// document.addEventListener('DOMContentLoaded', function() {
//     var backToTopLink = document.getElementById('link4');

//     backToTopLink.addEventListener('click', function() {
//         // Scroll to the top of the page smoothly
//         window.scrollTo({
//             top: 0,
//             behavior: 'smooth'
//         });
//     });
// });