<?php
if (!defined('_GNUBOARD_'))
    exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/tail.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH . '/shop.tail.php');
    return;
}
?>


<?php
if (!defined('_INDEX_')) {
    include G5_THEME_PATH . '/doc/sub.tail.php';
}
?>


<footer id="footer">
    <div class="f_top">
        <ul class="f_list">
            <li><a href="#!">개인정보처리방침</a></li>
            <li><a href="#!">공정거래자율준수</a></li>
            <li><a href="#!">영상정보 처리기기 설치 운영방침</a></li>
            <li><a href="#!">찾아오시는 길</a></li>
        </ul>
    </div>
    <div class="inner">
        <address>
            <span>03181 서울특별시 종로구 통일로 134 돈의문 D-타워 (주)대림</span>
            <span>TEL : 02-3708-3491</span>
            <span>FAX : 02-757-7447</span>
        </address>
        <div class="copy">
            &copy;2021 Daelim, All rights reserved.
        </div>
    </div>
</footer>
<div class="totop">

</div>
</div>




<script src="<?php echo G5_THEME_URL ?>/js/slick.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/js/main.js"></script>







<?php
if (G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script>
    $(function () {
        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
    });
</script>





<?php
include_once(G5_THEME_PATH . "/tail.sub.php");