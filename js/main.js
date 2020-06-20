$(function() {

    //Navbar BackGround
    $(document).scroll(function() {

        if (window.pageYOffset >= 200) {
            $(".navbar").css("background-color", "#222");
        } else {
            $(".navbar").css("background-color", "rgba(255, 255, 255, 0.1)");
        }
    });

    //Toggle Active Class

    $(".navbar .navbar-nav li").hover(function() {
        $(this).addClass("active").siblings().removeClass("active");
    });

});