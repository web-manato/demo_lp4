document.addEventListener('DOMContentLoaded', function() {
    function wrapCharsInSpan(element) {
        const text = element.textContent;
        element.innerHTML = '';

        for (let i = 0; i < text.length; i++) {
            const span = document.createElement('span');
            span.className = 'el_secTtl_jp_separate';
            span.textContent = text[i];
            element.appendChild(span);
        }
    }

    const targets = document.querySelectorAll('.el_secTtl_jp');
    targets.forEach(target => {
        wrapCharsInSpan(target);
    });
});