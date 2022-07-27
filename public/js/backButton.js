if (/Android/i.test(navigator.userAgent) &&
    /Chrome/i.test(navigator.userAgent) &&
    window.matchMedia('(display-mode: standalone)').matches) {

    history.pushState(null, null);
    window.addEventListener('popstate', function() {

        history.go(-(history.length - 2));
    });
}
