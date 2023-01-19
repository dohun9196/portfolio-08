<?php
if (!defined('_INDEX_'))
    define('_INDEX_', true);
if (!defined('_GNUBOARD_'))
    exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH . '/index.php');
    return;
}

if (G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH . '/index.php');
    return;
}

include_once(G5_THEME_PATH . '/head.php');
?>


<main>
    <section class="mainVisual">
        <div class="main_slide">
            <figure>01</figure>
            <figure>02</figure>
            <figure>03</figure>
            <figure>04</figure>
        </div>
        <div class="visual_slogan">
            <img src="<?php echo G5_THEME_URL ?>/img/slogan02.png" alt="">
        </div>
        <div class="visual_view">
            <a href="#!">VIEW</a>
        </div>
    </section>

    <section class="mainBusiness sec">
        <div class="inner">
            <div class="_slogan">
                <h2>Business Area</h2>
                <p>㈜대림은 지속적인 성장과 차별화된 고객가치를 실현하고 있습니다.</p>
            </div>
        </div>
        <div class="business_marsk">
            <div class="marsk_slide">
                <figure class="m01"><img src="<?php echo G5_THEME_URL ?>/img/mask_visual01.png" alt=""></figure>
                <figure class="m02"><img src="<?php echo G5_THEME_URL ?>/img/mask_visual02.png" alt=""></figure>
                <figure class="m03"><img src="<?php echo G5_THEME_URL ?>/img/mask_visual03.png" alt=""></figure>
                <figure class="m04"><img src="<?php echo G5_THEME_URL ?>/img/mask_visual04.png" alt=""></figure>
                <figure class="m05"><img src="<?php echo G5_THEME_URL ?>/img/mask_visual05.png" alt=""></figure>
            </div>

            <div class="marsk_bg">
                <img src="<?php echo G5_THEME_URL ?>/img/business_daelim2.png" alt="">
            </div>
        </div>

        <div class="inner business_nav">
            <ul>
                <li><a href="#!" class="on">석유화학</a></li>
                <li><a href="#!">물류</a>
                </li>
                <li><a href="#!">건설정보화</a>
                </li>
                <li><a href="#!">IT서비스</a>
                </li>
                <li><a href="#!">개발사업</a>
                </li>
            </ul>

        </div>
        <div class="b_navCont">
            <img src="<?php echo G5_THEME_URL ?>/img/b_list_img1.png" alt="">
            <div class="navont_text">
                <p>화학 및 폴리머의 국내외 판매 및 고기능 플라스틱 소재인 폴리이미드 제품을 생산·판매하는
                    석유화학 트레이딩 전문 기업으로 고객 가치 및 성과를 창출하고 있습니다.
                </p>
                <a href="#!">VIEW</a>
            </div>
        </div>
        <div class="b_navCont">
            <img src="<?php echo G5_THEME_URL ?>/img/b_list_img2.png" alt="">
            <div class="navont_text">
                <p>전세계를 연결하는 글로벌 네트워크 바탕으로 차별화 된 대림만의 물류 서비스가
                    경쟁력 있는 운임과 다양한 운송 방법으로 고객에게 서비스를 실현하고 있습니다.
                </p>
                <a href="#!">VIEW</a>
            </div>
        </div>
        <div class="b_navCont">
            <img src="<?php echo G5_THEME_URL ?>/img/b_list_img3.png" alt="">
            <div class="navont_text">
                <p>건설 자체의 부가가치 상승과 주택, 터널, 항만, 철도, 교량 등
                    건축물에 대한 기획부터 설계, 시공, A/S로 이어지는 Total Service를 제공합니다.
                </p>
                <a href="#!">VIEW</a>
            </div>
        </div>
        <div class="b_navCont">
            <img src="<?php echo G5_THEME_URL ?>/img/b_list_img4.png" alt="">
            <div class="navont_text">
                <p>정보통신시스템 통합, 유지보수 및 대외 SI 사업으로 지속적인 성장을 하였으며, 특히 공공부문 정보화 사업에 대한 풍부한 경험과
                    다양한 아키텍처 하에서의 정보시스템 통합기술력, 표준화된 방법론 및 품질보증 체계절차를 활용하여 고객에게 최적의 IT서비스를 제공하고 있습니다.
                </p>
                <a href="#!">VIEW</a>
            </div>
        </div>
        <div class="b_navCont">
            <img src="<?php echo G5_THEME_URL ?>/img/b_list_img0.png" alt="">
            <div class="navont_text">
                <p>㈜대림은 석유화학 트레이딩, 물류 서비스의 기존사업
                    경쟁력을 기반으로 미래 성장동력이 될 신규 사업을 적극 개발 및 추진하고 있습니다.
                </p>
                <a href="#!">VIEW</a>
            </div>
        </div>
    </section>

    <section class="mainAbout">
        <div class="inner">
            <div class="_slogan">
                <h2>About Company</h2>
                <p>㈜대림은 글로벌 디벨로퍼로의 미래 모습을 구현하기 위해 노력하고 있습니다.</p>
            </div>
        </div>
        <div class="left">
            <ul>
                <li>
                    <a href="<?php echo G5_THEME_URL ?>/doc/ab01.php">
                        <strong>1994~</strong>
                        <span>회사소개</span>
                        <p>㈜대림은 글로벌 디벨로퍼로의<br>
                            미래 모습을 구현하기 위해 노력하고 있습니다.
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <span>재무정보</span>
                        <p>재무정보를 정확하고<br>
                            신속하게 제공해 드립니다.</p>
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <span>인재채용</span>
                        <p>전세계를 향해 도전할 수 있는<br>
                            글로벌 인재를 모십니다.
                        </p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="right">
            <div class="news">
                <p class="newsTit"><strong>회사소식</strong>㈜대림의 다양한 회사 소식을 알려 드립니다.</p>
                <!-- 그누보드 페이지 -->
                <div class="gnu_flex">
                    <ul class="flex_ul">
                        <li>
                            <a href="/bbs/board.php?bo_table=notice">
                                <span>2023년 설날 명절 설문 안받기 캠페인 실시</span>
                                <p>귀사의 일익 번창하심을 기원합니다.<br>
                                    당사는 공정하고 투명한 상거래 질서와 윤리경영 문화를 구축하기 위하여 지속적으로 노력하고 있습니다.<br>
                                    다가오는 설날 명절을 맞이하여 당사 임직원들은
                                </p>
                            </a>
                        </li>
                        <div class="date">
                            <a href="">2023-01-01<i class="xi-plus"></i></a>
                        </div>
                    </ul>
                    <ul class="flex_ul">
                        <li>
                            <a href="/bbs/board.php?bo_table=notice">
                                <span>[CEO Letter] 공정거래 자율준수 실천 선언</span>
                                <p>안녕하세요? 대표이사 배원복입니다.<br>
                                    계묘년 새해 인사부터 드립니다. 우리 대림 가족 모두에게 즐겁고 행복한 일이 가득한 한 해가 되기를 기원합니다. 새해 복 많이 받으시길
                                    바랍니다.<br>
                                    새해가 시작되면 더 나은 삶
                                </p>
                            </a>
                        </li>
                        <div class="date">
                            <a href="">2023-01-01<i class="xi-plus"></i></a>
                        </div>
                    </ul>
                </div>
                <div class="flex_menu">
                    <div class="f_menu01 f_m">
                        <a href="#!">
                            <figure>
                                <img src="<?php echo G5_THEME_URL ?>/img/menu_icon1.png" alt="">
                            </figure>
                            <div class="f_menuDesc">
                                <strong>해외지사&nbsp;,&nbsp;국내지사</strong>
                                <p>넓은 세계를 향한 24시간<br> 깨어있는 ㈜대림</p>
                            </div>
                        </a>
                    </div>
                    <div class="f_menu02 f_m">
                        <a href="/bbs/board.php?bo_table=qa">
                            <figure>
                                <img src="<?php echo G5_THEME_URL ?>/img/menu_icon2.png" alt="">
                            </figure>
                            <div class="f_menuDesc">
                                <strong>고객문의</strong>
                                <p>빠르고 신속하게<br> 답변해 드립니다.</p>
                            </div>
                        </a>
                    </div>
                    <div class="f_menu03 f_m">
                        <a href="<?php echo G5_THEME_URL ?>/doc/ab03.php">
                            <figure>
                                <img src="<?php echo G5_THEME_URL ?>/img/menu_icon3.png" alt="">
                            </figure>
                            <div class="f_menuDesc">
                                <strong>찾아오시는길</strong>
                                <p>본사 위치 및 연락처를<br> 안내해 드립니다.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>




<?php
include_once(G5_THEME_PATH . '/tail.php');