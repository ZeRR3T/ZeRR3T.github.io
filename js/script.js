$(".menu-element__link").click(function() {
    const thisElement = $(this);
    if (thisElement.hasClass("active")){
        return;
    }

    const linkHref = thisElement.attr("href");
    const hrefElement = $(linkHref);

    const paddingTop= parseInt(hrefElement.css("padding-top"));
    const menuHeight = $(".header-top").height();
    $([document.documentElement, document.body]).animate({
        scrollTop: hrefElement.offset().top-paddingTop-menuHeight-25
    }, 1000);



    $(".menu-element__link.active").removeClass("active");
    thisElement.addClass('active');



});
