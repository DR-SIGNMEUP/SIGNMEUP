$(document).ready(function(){
    checkHeight();

    $(".flip").click(function(){
        $(this).next(".panel").slideToggle("slow",function(){
            checkHeight();
        });
    });

    function checkHeight(){
        var childDivHeight = $('.middle').height();
        childDivHeight = childDivHeight + 30;
        childDivHeight = childDivHeight +"px";
        $('.middleContainer').css("height", childDivHeight);
    }


});