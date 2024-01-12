/*================================================>> rotation du icon 1 <<========================================================*/

document.addEventListener("DOMContentLoaded", function () {
    const navItems1 = document.querySelectorAll("nav ul li");

    function resetRotation() {
        navItems1.forEach(item => {
            item.classList.remove("active");
            const arrowIcon1 = item.querySelector(".arow1");
            arrowIcon1.style.transform = "rotate(180deg)";
        });
    }

    navItems1.forEach(item => {
        item.addEventListener("click", function () {
            const checkbox1 = document.getElementById("btn-1");
            
            // Check if the checkbox is checked
            if (checkbox1.checked ) {
                resetRotation();
            } else {
                // Toggle the 'active' class on the clicked item
                item.classList.toggle("active");

                // Rotate the arrow icon when the item is active
                const arrowIcon = item.querySelector(".arow1");
                if (item.classList.contains("active")) {
                    arrowIcon.style.transform = "rotate(180deg)";
                } else {
                    arrowIcon.style.transform = "rotate(0deg)";
                }

                // Reset the rotation of arrow icons
                navItems1.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove("active");
                        const otherArrowIcon = otherItem.querySelector(".arow1");
                        otherArrowIcon.style.transform = "rotate(0deg)";
                    }
                });
            }
        });
    });
});

/*================================================>> rotation du icon 2 <<========================================================*/


document.addEventListener("DOMContentLoaded", function () {
    const navItems = document.querySelectorAll("nav ul ul li");

    function resetRotation() {
        navItems.forEach(item => {
            item.classList.remove("active");
            const arrowIcon = item.querySelector(".arow2");
            arrowIcon.style.transform = "rotate(0deg)";
        });
    }

    navItems.forEach(item => {
        item.addEventListener("click", function () {
            const checkbox = document.getElementById("btn-2");
            
            // Check if the checkbox is checked
            if (!checkbox.checked) {
                resetRotation();
            } else {
                // Toggle the 'active' class on the clicked item
                item.classList.toggle("active");

                // Rotate the arrow icon when the item is active
                const arrowIcon = item.querySelector(".arow2");
                if (item.classList.contains("active")) {
                    arrowIcon.style.transform = "rotate(180deg)";
                } else {
                    arrowIcon.style.transform = "rotate(0deg)";
                }

                // Reset the rotation of other arrow icons
                navItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove("active");
                        const otherArrowIcon = otherItem.querySelector(".arow2");
                        otherArrowIcon.style.transform = "rotate(0deg)";
                    }
                });
            }
        });
    });

    // Add event listener to reset rotation when clicking outside navigation items
    document.addEventListener("click", function (event) {
        if (!event.target.closest("nav ul ul li") && !event.target.closest(".icon2")) {
            resetRotation();
        }
    });
});

/*================================================>> rotation du icon 3 <<========================================================*/

document.addEventListener("DOMContentLoaded", function () {
    const navItems = document.querySelectorAll("nav ul ul li");

    function resetRotation() {
        navItems.forEach(item => {
            item.classList.remove("active");
            const arrowIcon = item.querySelector(".arow3");
            arrowIcon.style.transform = "rotate(0deg)";
        });
    }

    navItems.forEach(item => {
        item.addEventListener("click", function () {
            const checkbox = document.getElementById("btn-3");
            
            // Check if the checkbox is checked
            if (!checkbox.checked) {
                resetRotation();
            } else {
                // Toggle the 'active' class on the clicked item
                item.classList.toggle("active");

                // Rotate the arrow icon when the item is active
                const arrowIcon = item.querySelector(".arow3");
                if (item.classList.contains("active")) {
                    arrowIcon.style.transform = "rotate(180deg)";
                } else {
                    arrowIcon.style.transform = "rotate(0deg)";
                }

                // Reset the rotation of other arrow icons
                navItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove("active");
                        const otherArrowIcon = otherItem.querySelector(".arow3");
                        otherArrowIcon.style.transform = "rotate(0deg)";
                    }
                });
            }
        });
    });

    // Add event listener to reset rotation when clicking outside navigation items
    document.addEventListener("click", function (event) {
        if (!event.target.closest("nav ul ul li") && !event.target.closest(".icon3")) {
            resetRotation();
        }
    });
});