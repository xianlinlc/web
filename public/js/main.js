/**
 * Created by lc on 16-12-3.
 */

$(function(){
    $('.nav>li').hover(function () {
        $(this).addClass('active').siblings().removeClass('active');
    },function () {
        $(this).removeClass('active');
    });
});
