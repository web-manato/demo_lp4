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
    targets.forEach((target, index) => {
        wrapCharsInSpan(target);
    });

    var sections = document.querySelectorAll('.ly_secTtl');

    sections.forEach((section, index) => {
        var tl = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                start: 'top 70%',
                toggleActions: "play none restart none",
            }
        });

        var jpTtl = section.querySelectorAll('.el_secTtl_jp_separate');
        var enTtl = section.querySelectorAll('.el_secTtl_en');

        gsap.set(enTtl, {
            autoAlpha: 0,
            x: -20,
        });

        tl.from(jpTtl, {
                autoAlpha: 0,
                y: -10,
                ease: 'Power2.easeOut',
                duration: 0.3,
                stagger: 0.1,
            })
            .to(enTtl, {
                autoAlpha: 1,
                x: 0,
                ease: 'Power3.easeOut',
                duration: 1,
                delay: -0.5,
            });
    });
});