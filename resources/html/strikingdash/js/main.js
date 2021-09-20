const navbar = document.getElementById('navbar');
const navbarToggle = navbar.querySelector('.navbar-toggle');

function openMobileNavbar() {
        navbar.classList.add('opened');
        navbarToggle.setAttribute('aria-label', 'Close navigation menu.');
}

function closeMobileNavbar() {
        navbar.classList.remove('opened');
        navbarToggle.setAttribute('aria-label', 'Open navigation menu.');
}

navbarToggle.addEventListener('click', () => {
        if (navbar.classList.contains('opened')) {
                closeMobileNavbar();
        } else {
                openMobileNavbar();
        }
});

const navbarMenu = navbar.querySelector('.navbar-menu');
const navbarLinksContainer = navbar.querySelector('.navbar-links');

navbarLinksContainer.addEventListener('click', clickEvent => {
        clickEvent.stopPropagation();
});

navbarMenu.addEventListener('click', closeMobileNavbar);

$(window).scroll(function() {
        if ($(window).scrollTop() >= 73) {
                $('#navbar').addClass('header-sticky');
        } else {
                $('#navbar').removeClass('header-sticky');
        }
});

$(function() {
        $('.smoothScroll').click(function() {
                if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                        location.hostname == this.hostname
                ) {
                        let target = $(this.hash);
                        target = target.length ? target : $(`[name=${this.hash.slice(1)}]`);
                        if (target.length) {
                                $('html,body').animate(
                                        {
                                                scrollTop: target.offset().top,
                                        },
                                        1000
                                );
                                return false;
                        }
                }
        });
});
