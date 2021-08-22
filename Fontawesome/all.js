$("a.scroll").click(function() {
    return $("html, body").delay(500).animate({
        scrollTop: $($.attr(this, "href")).offset().top
    }, 800), !1
});

