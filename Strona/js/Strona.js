(function () {
    new Slider("#slider .slide").options({
        prev: "#slider nav button.arrow-prev",
        next: "#slider nav button.arrow-next",
        nav: "#slider nav.dots span",
        animation: "fade",
        time: 10000,
        load: false
    }).init();
})();