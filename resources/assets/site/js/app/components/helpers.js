// Svg icon generate
window.icon = function(name, mod = '') {
    let classes = name + ' ' + mod;

    return (`
        <svg class="icon ${classes.trim()}">
            <use xlink:href="#${name}"></use>
        </svg>
    `);
}

// Get scrollbar width
// window.getScrollbarWidth = function() {
//     let outer = document.createElement('div');
//     outer.style.visibility = 'hidden';
//     outer.style.overflow = 'scroll';
//     outer.style.msOverflowStyle = 'scrollbar';
//     document.body.appendChild(outer);
//
//     let inner = document.createElement('div');
//     outer.appendChild(inner);
//
//     let scrollbarWidth = (outer.offsetWidth - inner.offsetWidth);
//
//     outer.parentNode.removeChild(outer);
//
//     return scrollbarWidth;
// }
