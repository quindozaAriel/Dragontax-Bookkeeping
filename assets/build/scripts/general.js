$(document).ready(function(){
    AOS.init()
})

const MAIN = (()=>{

    let _this = {};

    _this.show_nav = () =>{
        $(".popup_nav").fadeIn();
        $("html").addClass("overflow-hidden");
    
    }

    _this.hide_nav = () =>{
        $(".popup_nav").fadeOut();
        $("html").removeClass("overflow-hidden");
    }

    return _this;
})()||{};