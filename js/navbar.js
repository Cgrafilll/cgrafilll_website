var content = document.getElementsByTagName('body')[0];
var mode = document.getElementById('mode');
var logo = document.getElementById('logo');
var dark = localStorage.getItem('dark') === 'true';

if (dark) {
    mode.classList.add('active');
    content.classList.add('night');
    logo.src = 'img/logo1.png';
}

mode.addEventListener('click', function () {
    mode.classList.toggle('active');
    content.classList.toggle('night');

    if (mode.classList.contains('active')) {
        logo.src = 'img/logo1.png';
    } else {
        logo.src = 'img/logo.png';
    }

    localStorage.setItem('dark', mode.classList.contains('active'));
});

var navbar = document.querySelector('.navbar');
var timeout;

function hideNavbar() {
    navbar.classList.add('transparent');
}

function resetTimeout() {
    clearTimeout(timeout);
    timeout = setTimeout(hideNavbar, 5000); // Set timeout for 5 seconds of inactivity
}

document.addEventListener('DOMContentLoaded', function () {
    timeout = setTimeout(hideNavbar, 5000);
});

document.addEventListener('keydown', function () {    // Keyboard input
    navbar.classList.remove('transparent');
    resetTimeout();
});

navbar.addEventListener('mouseenter', function () {   // Mouse hover
    navbar.classList.remove('transparent');
    resetTimeout();
});