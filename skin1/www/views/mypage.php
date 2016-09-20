<?php $pagePath = __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header-mypage.php"; ?>
    <div class="module-content mypage-foot">
        <div class="mypage">
            <div class="image mypage-sp">
                <strong class="sr-only">프로필 사진</strong>
                <img src="" alt="프로필 이미지" width="120" height="160">
            </div>
            <div class="profile mypage-sp">
                <strong class="sr-only">my page</strong>
                <p><span class="sr-only">대출카드 ID :</span><span>S000000001</span></p>
                <p><span class="sr-only">성명 :</span><span>홍길동</span></p>
                <p><span class="sr-only">등급 :</span><span>1등급</span></p>
                <p><span class="sr-only">대출가능권수 :</span><span>3권</span></p>
                <p><span class="sr-only">대출제한일 :</span><span>111</span></p>
                <a href="#none" class="change_pw sp"><span class="sr-only">비밀번호 변경</span></a>
            </div>
            <div class="use mypage-sp">
                <strong class="sr-only">이용현황</strong>
                <p><span class="sr-only">대출권수 :</span><a href="#none"><span>0</span>건</a></p>
                <p><span class="sr-only">연체권수 :</span><a href="#none"><span>0</span>건</a></p>
                <p><span class="sr-only">예약권수 :</span><a href="#none"><span>1</span>건</a></p>
            </div>
            <div class="active mypage-sp">
                <strong class="sr-only">도서관활동 현황</strong>
                <p><span class="sr-only">독후감 :</span><a href="#none"><span>1</span>건</a></p>
                <p><span class="sr-only">도서리뷰 :</span><a href="#none"><span>0</span>건</a></p>
            </div>
        </div>
        <!-- /.mypage -->
    </div>
    <!-- /.module-content -->
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>