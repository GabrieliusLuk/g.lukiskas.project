console.log("Labas");

$(document).ready(function () {
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 50) {
            $(".header").addClass("color");
        } else {
            $(".header").removeClass("color");
        }
    });
});

let mainNav = document.getElementById('navbar-menu');
let colorNav = document.getElementById('navbar');
let navBarToggle = document.getElementById('navbar-toggle');

navBarToggle.addEventListener('click', function () {
    
    mainNav.classList.toggle('active');
    colorNav.classList.toggle('mb-color');

});


