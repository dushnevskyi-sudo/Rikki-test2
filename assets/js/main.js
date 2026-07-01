/* =====================================================================
   Norvexa Logistics — front-end interactions
   Vanilla JS, no dependencies.
   ===================================================================== */
(function () {
    'use strict';

    /* ---- Mobile nav toggle ---- */
    var toggle = document.getElementById('navToggle');
    var nav = document.getElementById('nav');
    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            var open = nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
        // Close the menu when a link is tapped.
        nav.addEventListener('click', function (e) {
            if (e.target.closest('.nav__link')) {
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    /* ---- Header shadow on scroll ---- */
    var header = document.getElementById('header');
    if (header) {
        var onScroll = function () {
            header.classList.toggle('is-scrolled', window.scrollY > 8);
        };
        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });
    }

    /* ---- Reveal-on-scroll ---- */
    var reveals = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && reveals.length) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
        reveals.forEach(function (el) { io.observe(el); });
    } else {
        reveals.forEach(function (el) { el.classList.add('is-visible'); });
    }

    /* ---- Animated counters ---- */
    var counters = document.querySelectorAll('[data-count]');
    var animateCount = function (el) {
        var target = parseFloat(el.getAttribute('data-count'));
        var isFloat = target % 1 !== 0;
        var duration = 1600;
        var start = null;
        var step = function (ts) {
            if (!start) start = ts;
            var progress = Math.min((ts - start) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3);
            var value = target * eased;
            el.firstChild.nodeValue = isFloat ? value.toFixed(1) : Math.round(value).toLocaleString();
            if (progress < 1) requestAnimationFrame(step);
            else el.firstChild.nodeValue = isFloat ? target.toFixed(1) : Math.round(target).toLocaleString();
        };
        requestAnimationFrame(step);
    };
    if ('IntersectionObserver' in window && counters.length) {
        var cio = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animateCount(entry.target);
                    cio.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(function (el) { cio.observe(el); });
    }

    /* ---- FAQ accordion ---- */
    document.querySelectorAll('.accordion__head').forEach(function (head) {
        head.addEventListener('click', function () {
            var item = head.parentElement;
            var body = item.querySelector('.accordion__body');
            var isOpen = item.classList.toggle('is-open');
            head.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            body.style.maxHeight = isOpen ? body.scrollHeight + 'px' : null;
        });
    });
})();
