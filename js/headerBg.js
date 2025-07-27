document.addEventListener('DOMContentLoaded', function() {
    var headerBg = document.getElementById('js-header');
    var headerHeight = headerBg.offsetHeight;

    window.addEventListener('scroll', function() {
        if (window.scrollY > headerHeight + 150) {
            headerBg.classList.add('bg-active');
        } else if (window.scrollY < headerHeight) {
            headerBg.classList.remove('bg-active')
        }
    });
});