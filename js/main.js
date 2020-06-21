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

    $(".navbar .navbar-nav li").on('click', function() {
        $(this).addClass("active").siblings().removeClass("active");
    });

    //Toggle Active Class IN Restarent Menu Section && Toggle Between Restarnet Menu pages

    $(".nav ul li").on('click', function() {
        event.preventDefault();
        $(this).addClass("active").siblings().removeClass("active");
        $(".menu div.mains,.menu div.desserts,.menu div.drinks").hide();
        $($(this).data("class")).fadeIn();
    });

});