var links = document.querySelectorAll('a[href^="#"]');

links.forEach((link) => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        var href = link.getAttribute('href');
        var targetSection = document.querySelector(href);
        var sectionTop = targetSection.getBoundingClientRect().top;
        var currentPos = window.scrollY;
        var headerHeight = document.getElementById('js-header').clientHeight + 30;
        var target = sectionTop + currentPos - headerHeight;

        window.scrollTo({
            top: target, //目的の位置のY座標を指定
            behavior: 'smooth', //スクロールの動きを指定
        });
    });
});