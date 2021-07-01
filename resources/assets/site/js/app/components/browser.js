document.addEventListener('DOMContentLoaded', () => {

    if (navigator.userAgent.match(/msie/i) || navigator.userAgent.match(/trident/i) ) {
        $('html').addClass('is-ie');
    }

});
