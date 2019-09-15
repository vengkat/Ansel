function ToggleMenu() {
    if($(".main-menu").css("display")=="none")
    {
        $(".main-menu").css("display","block");
        $(".nav-right a i").removeClass("fa-bars");
        $(".nav-right a i").addClass("fa-close");

    }else{
        $(".main-menu").css("display","none");
        $(".nav-right a i").removeClass("fa-close");
        $(".nav-right a i").addClass("fa-bars");
    }
}