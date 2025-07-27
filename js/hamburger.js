document.addEventListener('DOMContentLoaded', function() {
    var hamburgerButton = document.getElementById('js-hamburger');

    hamburgerButton.addEventListener("click", function() {
        this.classList.toggle('is-active');
    });

    // アンカーリンククリック時にクラスを削除
    var anchorLinks = document.querySelectorAll('a[href^="#"]'); // #で始まるリンクを全て取得

    anchorLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            hamburgerButton.classList.remove('is-active');
        });
    });
});