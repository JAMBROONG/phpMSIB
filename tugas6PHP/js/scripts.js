
window.addEventListener('load', function () {


    const modal = new bootstrap.Modal('#taskModal');

    const taskCard = document.querySelectorAll('.taskCard');
    const tampil = document.querySelector('.tampil');
    const judul = document.querySelector('.head');
    for (const card of taskCard) {
        card.addEventListener('click', () => {
            const nama = card.getAttribute('data-name');
            tampil.innerHTML = '';
            judul.innerHTML = `<h2 style="margin-top: -50px; margin-bottom: 20px;">${nama}</h2>`;
            let data;
            if (nama == "HTML") {
                data = [
                    { urlImg: "assets/img/portfolio/html/tugas1html.png", urlTask: "tugas/html/tugas1html/tugas1.html", title: "Tugas 1 HTML" },
                    { urlImg: "assets/img/portfolio/html/tugas2html.png", urlTask: "tugas/html/tugas2html/tugas2.html", title: "Tugas 2 HTML" },
                    { urlImg: "assets/img/portfolio/html/tugas3ahtml.png", urlTask: "tugas/html/tugas3html/tugas3a.html", title: "Tugas 3A HTML" },
                    { urlImg: "assets/img/portfolio/html/tugas3bhtml.png", urlTask: "tugas/html/tugas3html/tugas3b.html", title: "Tugas 3B HTML" },
                    { urlImg: "assets/img/portfolio/html/tugas4html.png", urlTask: "tugas/html/tugas4html/index.html", title: "Tugas 4 HTML" },
                ];
            } else if (nama == "CSS") {
                data = [
                    { urlImg: "assets/img/portfolio/css/tugas1css.png", urlTask: "tugas/css/tugas1css/index.html", title: "Tugas 1 CSS" },
                    { urlImg: "assets/img/portfolio/css/tugas2css.png", urlTask: "tugas/css/tugas2css/index.html", title: "Tugas 2 CSS" },
                    { urlImg: "assets/img/portfolio/css/tugas1bootstrap.png", urlTask: "tugas/css/tugas1bootstrap/index.html", title: "Tugas 1 Bootstrap" },
                ];
            } else if (nama == "Javascript") {
                data = [
                    { urlImg: "assets/img/portfolio/js/tugas1js.png", urlTask: "tugas/js/tugas1/index.html", title: "Tugas 1 JS" },
                    { urlImg: "assets/img/portfolio/js/tugas2js.png", urlTask: "tugas/js/tugas2/index.html", title: "Tugas 2 JS" },
                    { urlImg: "assets/img/portfolio/js/tugas3js.png", urlTask: "tugas/js/tugas3/index.html", title: "Tugas 3 JS" },
                    { urlImg: "assets/img/portfolio/js/tugas4js.png", urlTask: "tugas/js/tugas4/index.html", title: "Tugas 4 JS" },
                    { urlImg: "assets/img/portfolio/js/tugas5js.png", urlTask: "tugas/js/tugas5/index.html", title: "Tugas 5 JS" },
                    { urlImg: "assets/img/portfolio/js/tugas6js.png", urlTask: "tugas/js/tugas6/index.html", title: "Tugas 6 JS" },
                    { urlImg: "assets/img/portfolio/js/tugas7js.png", urlTask: "tugas/js/tugas7/index.html", title: "Tugas 7 JS" },
                ];
            } else if (nama == "UI/UX Design") {
                data = [
                    { urlImg: "assets/img/portfolio/uiux/tugas1uiux.png", urlTask: "https://www.figma.com/file/5cyquNEuZmAUcm1NEbsvpy/Tugas1_UI%2FUX_AkhmadLylana_STTNurulFikri_Nasrul?node-id=0%3A1", title: "Tugas 1 UI/UX" },
                    { urlImg: "assets/img/portfolio/uiux/tugas2uiux.png", urlTask: "https://www.figma.com/file/3MKi0iVyjOnN2iF8fdWXqT/tugas2_UI%2FUX_AkhmadLylana_STTNurulFikri_Nasrul?node-id=0%3A1", title: "Tugas 2 UI/UX" },
                ];
            } else if (nama == "PHP") {
                data = [
                    { urlImg: "assets/img/portfolio/php/tugas2php.png", urlTask: "tugas/php/tugas2PHP/index.php", title: "Tugas 2 PHP" },
                    { urlImg: "assets/img/portfolio/php/tugas3php.png", urlTask: "tugas/php/tugas3PHP/index.php", title: "Tugas 3 PHP" },
                    { urlImg: "assets/img/portfolio/php/tugas4php.png", urlTask: "tugas/php/tugas4PHP/index.php", title: "Tugas 4 PHP" },
                    { urlImg: "assets/img/portfolio/php/tugas5php.png", urlTask: "tugas/php/tugas5PHP/kumpulan_bidang.php", title: "Tugas 5 PHP" },
                    { urlImg: "assets/img/portfolio/php/tugas6php.png", urlTask: "index.php", title: "Tugas 6 PHP" },
                ];
            } else if (nama == "VCS GitHub") {
                data = [
                    { urlImg: "assets/img/portfolio/github/tugas1github.png", urlTask: "https://github.com/JAMBROONG/MSIB3", title: "Tugas 1 VCS GitHub" },
                ];
            }

            for (const item of data) {
                tampil.innerHTML += `
                <div class="col-md-4">
                    <li class="card-task">
                        <a class="card-task-image is-loaded" href="${item.urlTask}" target="_blank" style="background-image: url(${item.urlImg});" data-image-full="${item.urlImg}">
                            <img class="card-task-img" src="${item.urlImg}" alt="Psychopomp" />
                        </a>
                        <a class="card-task-description" href="${item.urlTask}" target="_blank">
                            <h4>${item.title}</h4>
                        </a>
                    </li>
                </div>
                `;
            }
            modal.show()
        });
    }

});


window.addEventListener('DOMContentLoaded', event => {
    AOS.init({
        once: true
    });

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        const navlink = document.body.querySelectorAll('.nav-link');
        const active = document.body.querySelector('.active');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink');
            for (const item of navlink) {
                item.classList.add('dark');
            }
        } else {
            navbarCollapsible.classList.add('navbar-shrink');
            for (const item of navlink) {
                item.classList.remove('dark');
            }
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    const typed = document.querySelector('.typed')
    if (typed) {
        let typed_strings = typed.getAttribute('data-typed-items')
        typed_strings = typed_strings.split(',')
        new Typed('.typed', {
            strings: typed_strings,
            loop: true,
            typeSpeed: 100,
            backSpeed: 50,
            backDelay: 2000
        });
    }

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});
