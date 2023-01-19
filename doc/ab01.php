<?php
include_once('../../../common.php');
$num = 1;
$title = 'Overview';
include_once(G5_THEME_PATH.'/head.php');
?>

 <div class="sub_heade">
            <ul class="sub_nav">
                <li class="home_gnb"><a href=""><i class="xi-home-o"></i></a></li>
                <li class="about_gnb"><a href="#!">회사소개<i class="xi-caret-down-circle-o"></i></a>
                    <ul class="sub_drop">
                        <li><a href="">회사소개</a></li>
                        <li><a href="">사업분야</a></li>
                        <li><a href="">재무정보</a></li>
                        <li><a href="">대림소식</a></li>
                        <li><a href="">인재채용</a></li>
                        <li><a href="">고객센터</a></li>
                    </ul>
                </li>
                <li class="con_gnb"><a href="#!">OverView<i class="xi-caret-down-circle-o"></i></a>
                    <ul class="sub_drop">
                        <li><a href="">OverView</a></li>
                        <li><a href="">경영원칙</a></li>
                        <li><a href="">오시는길</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <section class="about01">
            <div class="inner">
                <div class="about_title">
                    <h2><span>Value Creator</span> For Better Life!</h2>
                </div>
                <div class="inner ab01_content">
                    <div class="flex_inner about01img">
                        <figure>
                            <img src="./img/img_overview1.png" alt="">
                        </figure>
                        <figure>
                            <img src="./img/img_overview2.png" alt="">
                        </figure>
                        <figure>
                            <img src="./img/img_overview3.png" alt="">
                        </figure>
                    </div>
                    <div class="ab01_text">
                        <p>
                            ㈜대림은 글로벌 디벨로퍼로의 미래 모습을 구현하기 위해 임직원 모두가 변화와 혁신에 매진하고 있으며<br>
                            기업 윤리 및 사회적 책임을 다해서 주주 및 고객, 지역사회를 포함한 모든 이해관계자들의 성원에 보답하는데 최선을 다하겠습니다.
                        </p>
                    </div>
                    <div class="ab01_list">
                        <div class="left">
                            <span>회사명</span>
                            <span>대표이사</span>
                            <span>대표전화</span>
                            <span>해외지사</span>
                            <span>주요사업</span>
                            <span>재무사항</span>
                        </div>
                        <div class="right">
                            <span>㈜대림</span>
                            <span>배원복</span>
                            <span>02-3708-3491</span>
                            <span>1개 법인, 5개 지사</span>
                            <span>석유화학 도매업, 화물운송주선업, 건설 및 IT서비스업</span>
                            <span>자산 2,594,240백만원 / 매출액 3,000,390백만원 / 당기순이익 173,153백만원</span>
                        </div>

                    </div>
                </div>
            </div>
        </section>


<?php
include_once(G5_THEME_PATH.'/tail.php');