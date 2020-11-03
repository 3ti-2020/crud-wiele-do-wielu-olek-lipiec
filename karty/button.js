const panels = document.querySelectorAll('.header');

panels.forEach(panel => {
    let button = panel.childNodes[5];
    let navbar = panel.childNodes[1];
    button.addEventListener('click', function() {
        navbar.style.height = navbar.style.height === '0px' || navbar.style.height === '' ? '30px' : '0px';
    });
});