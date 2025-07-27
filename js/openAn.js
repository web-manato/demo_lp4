//タイムラインを使用してアニメーションを適用
var tl = gsap.timeline();
tl.from('.bl_openAn', {
        autoAlpha: 0,
        duration: 0.3,
    })
    .from('.bl_openAn_logo', {
        autoAlpha: 0,
        y: 10,
        delay: 0.8,
        duration: 0.8,
    })

var tl2 = gsap.timeline({});
gsap.from('.bl_kv_ttl', {
    "--width": "0%",
    "--height": "0%",
})
tl2.set('.js-point', {
        delay: 0.8,
        autoAlpha: 0,
    })
    .to('.js-point', {
        delay: 0.8,
        autoAlpha: 1,
        duration: 0.2,
        stagger: 1,
    })
    .to(".bl_openAn", {
        ease: "power2.out",
        autoAlpha: 0,
        duration: 0.6,
        onComplete: function() {
            document.querySelector(".bl_openAn").parentNode.removeChild(
                document.querySelector(".bl_openAn")
            );
        }
    })
    .from('.js-kv-img', {
        delay: 2,
        autoAlpha: 0,
        y: 10,
        duration: 0.8,
        delay: 0.5,
    })
    .from('.bl_kv_ttl', {
        autoAlpha: 0,
        y: 10,
        duration: 0.3,
    })
    .to('.bl_kv_ttl', {
        "--width": "30vw",
        "--height": "30vw",
        duration: 4,
        delay: 0.4,
    })