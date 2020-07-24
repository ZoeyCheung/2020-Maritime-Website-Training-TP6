/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-19 18:47:26
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-23 20:03:19
 */
$(function () {

    /**
     * @Description: 商品详情页，选中小图，修改大图
     * 默认情况下第一个元素选中
     */

    $(".product-gallery-thumbs").children(":first").addClass("active");

    $(".product-gallery-thumbs__item").click(function () {
        console.log($(this).attr("data-large-src"));
        $(".product-gallery-thumbs__item").removeClass("active");
        $(this).addClass("active");
        $("#js-product-big img").attr("src", $(this).attr("data-large-src"));
    });

    // 导航菜单选中
    var $current_url = location.pathname;
    console.log($current_url);
    $('.navbar-nav a').each(
        function () {
            var $a_url = $(this).attr('href');
            console.log($a_url+':'+$current_url.lastIndexOf($a_url));
            if ($current_url.length == $a_url.length && $current_url.lastIndexOf($a_url) > -1) {
                $(this).parents('li').addClass('active');
            }
        }

    );
}); 